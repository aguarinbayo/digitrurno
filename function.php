<?php



class home	
{
	public $http;


	public function __construct(){
		$this->http=__DIR__;
	}

	public function isert($var){
			if($var=="head"):
				require_once($this->http."/theme/head.php");
				
			else:
				require_once($this->http."/theme/footer.php");
			endif;
	}

			public function sesion($url){
			   session_start();
   				  if($_SESSION['user']):
    				require_once "$url";

				else:
				header('Location: http://localhost/digi/index.php');

				endif;
			}


}

?>