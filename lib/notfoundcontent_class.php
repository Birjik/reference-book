<?php
	require_once "modules_class.php";
	class NotFoundContent extends Modules{
		public function __construct($db){
			parent::__construct($db);	
			header("HTTP/1.0 404 Not Found");
		}
		protected function getTitle(){
			 return "—траница не найдена  - 404";
		}
		protected function getDescription(){
			 return "«апрошенна€ страница не существует.";
		}                                        
		protected function getKeyWords(){
			 return "страница не найдена, страница не существует, 404";
		}                                           
		protected function getMiddle(){
			$sr["sitename"]=$this->config->sitename;
			return $this->getReplaceTemplate($sr,"notfound");
		}                
	}
?>