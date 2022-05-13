<?php 

class Photo extends Db_Object {

	protected static $db_table = "photo";
	protected static $db_table_fields = array('id','title','caption','alternate_text','description','filename','type','size','user_id');
	public $id;
	public $user_id;
	public $title;
	public $caption;	
	public $description;
	public $filename;	
	public $alternate_text;
	public $type;		
	public $size;	

	public $tmp_path;
	public $upload_directory = "images";	


	//This is passing $_FILES['uploaded_file'] as an argument
	public function set_file($file) {

		if(empty($file) || !$file || !is_array($file)) {

			$this->errors[] = 'There is no file uploaded here';
			
			return false;

		}elseif($file['error'] !=0) {

			$this->errors[] = $this->upload_errors_array[$file['error']];

		}else {


		$this->filename = basename($file['name']);
		$this->tmp_path = $file['tmp_name'];
		$this->type = $file['type'];
		$this->size = $file['size'];
	}
  }

  public function picture_path() {

  	return $this->upload_directory.DS.$this->filename;
  }


  public function save_photo() {

  	if($this->id) {

  		$this->update();

  	}else {

  		if(!empty($this->errors)) {

  			return false;
  		}

  		if(empty($this->filename) || empty($this->tmp_path)) {

  			$this->errors[] = 'The file is not available';

  			return false;
  		}

  		$target_path = SITE_ROOT . DS . 'admin' . DS . $this->upload_directory . DS . $this->filename;

  		if(file_exists($target_path)) {

  			$this->errors[] = "The file {$this->filename} already exists";

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

  		$this->create();
  	}
  }

  public function delete_photo() {

  	if($this->delete()) {

  		$target_path = SITE_ROOT.DS.'admin'.DS.$this->picture_path();

  		return unlink($target_path) ? true : false;

  	}else{

  		return false;
  	}
  }

  public static function display_sidebar_data($photo_id) {

  	$photo = Photo::find_by_id($photo_id);

  	$output = "<a class = 'thumbnail' href='#'><img width='100' src='{$photo->picture_path()}'</a> ";
  	$output .= "<p>{$photo->filename}</p>";
  	$output .= "<p>{$photo->type}</p>";
  	$output .= "<p>{$photo->size}</p>";

  	echo $output;
  }


}//End of Class photo


?>