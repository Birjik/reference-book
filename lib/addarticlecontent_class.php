<?php
	require_once "modules_class.php";
	class AddArticleContent extends Modules{
		public function __construct($db){
			parent::__construct($db);	
		}
		protected function getTitle(){
			 return "���������� ������";
		}
		protected function getDescription(){
			 return "��������,������";
		}                               
		protected function getKeyWords(){
			 return "��������,������";
		}                                           
		public function getMiddle(){
			return $this->getAddArticle();
		}                                                                  
		private function getAddArticle(){
		    if($_SESSION["login"]==$this->config->admin){
		    	$sr["message"]=$this->getMessage();
		    	return $this->getReplaceTemplate($sr,"add_article");
		    }
			else return $this->getTemplate("config");
		}
	}
?>