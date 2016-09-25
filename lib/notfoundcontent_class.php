<?php
	require_once "modules_class.php";
	class NotFoundContent extends Modules{
		public function __construct($db){
			parent::__construct($db);	
			header("HTTP/1.0 404 Not Found");
		}
		protected function getTitle(){
			 return "�������� �� �������  - 404";
		}
		protected function getDescription(){
			 return "����������� �������� �� ����������.";
		}                                        
		protected function getKeyWords(){
			 return "�������� �� �������, �������� �� ����������, 404";
		}                                           
		protected function getMiddle(){
			$sr["sitename"]=$this->config->sitename;
			return $this->getReplaceTemplate($sr,"notfound");
		}                
	}
?>