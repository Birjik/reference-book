<?php
	require_once "modules_class.php";
	class RegContent extends Modules{
		public function __construct($db){
			parent::__construct($db);	
		}
		protected function getTitle(){
			 return "Регистратция на сайте";
		}
		protected function getDescription(){
			 return "Регистрация пользователя на сайте.";
		}
		protected function getKeyWords(){
			 return "регистратция сайт,регистратция пользователь сайт";
		}                                           
		protected function getMiddle(){
		    $sr["message"]=$this->getMessage();
		    $sr["login"]=$_SESSION["login"];
			return $this->getReplaceTemplate($sr,"form_reg");				
		}                
	}
?>