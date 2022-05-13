<?php 

class User extends Db_Object {

	protected static $db_table = "users";
	protected static $db_table_fields = array('username', 'first_name','last_name','password','user_image');
	public $id;
	public $user_image;
	public $username;
	public $first_name;
	public $last_name;
	public $password;	
	public $upload_directory = 'images';
	public $image_placeholder = 'https://via.placeholder.com/300.png';
	

	public function image_path_and_placeholder() {

		return empty($this->user_image) ? $this->image_placeholder : $this->upload_directory.DS.$this->user_image;
	}

	public static function verify_user($username, $password) {

		global $database;

		$username = $database->escape_string($username);
		$password = $database->escape_string($password);

		$sql = "SELECT * FROM " .self::$db_table. " WHERE username = '{$username}' AND password = '{$password}' LIMIT 1";

        $the_result_array = self::find_by_query($sql);

		return !empty($the_result_array) ? array_shift($the_result_array) : false;		
	}	

	//This is passing $_FILES['uploaded_file'] as an argument
	public function set_file($file) {

		if(empty($file) || !$file || !is_array($file)) {

			$this->errors[] = 'There is no file uploaded here';
			
			return false;

		}elseif($file['error'] !=0) {

			$this->errors[] = $this->upload_errors_array[$file['error']];

		}else {


		$this->user_image = basename($file['name']);
		$this->tmp_path = $file['tmp_name'];
		$this->type = $file['type'];
		$this->size = $file['size'];
	}
  }

  public function save_user_and_image() {

  		if(!empty($this->errors)) {

  			return false;
  		}

  		if(empty($this->user_image) || empty($this->tmp_path)) {

  			$this->errors[] = 'The file is not available';

  			return false;
  		}

  		$target_path = SITE_ROOT . DS . 'admin' . DS . $this->upload_directory . DS . $this->user_image;

  		if(file_exists($target_path)) {

  			$this->errors[] = "The file {$this->user_image} already exists";

  			return false;
  		}

  		if(move_uploaded_file($this->tmp_path, $target_path)) {

  			if($this->create()) {

  				unset($this->tmp_path);

  				return true;
  			}

  		} else {

  			$this->errors[] = "the file directory does not have permission";

  			return false; 
  		}
  	}

  	public function user_save_user_image($user_image,$user_id) {

  		global $database;

  		$this->user_image = $database->escape_string($user_image);
  		$this->id = $database->escape_string($user_id);
  		$this->save();

  		$this->user_image = $user_image;
  		$this->id = $user_id;

  		$sql = "UPDATE ".self::$db_table." SET user_image ='{$this->user_image}' WHERE id = '{$this->id}' ";

  		$update_image = $database->query($sql);

  		echo $this->image_path_and_placeholder();
  	}

  public function delete_photo() {

  	if($this->delete()) {

  		$target_path = SITE_ROOT.DS.'admin'.DS.$this->upload_directory .DS. $this->user_image;

  		return unlink($target_path) ? true : false;

  	}else{

  		return false;
  	}
  }  

  public function photos() {

  	// $id = $this->id;

  	return Photo::find_by_query("SELECT * FROM photo WHERE user_id=".$this->id);
  }	

}//End of class User



?>