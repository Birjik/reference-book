<?php
	require_once "modules_class.php";
	class RegContent extends Modules{
		public function __construct($db){
			parent::__construct($db);	
		}
		protected function getTitle(){
			 return "������������ �� �����";
		}
		protected function getDescription(){
			 return "����������� ������������ �� �����.";
		}
		protected function getKeyWords(){
			 return "������������ ����,������������ ������������ ����";
		}                                           
		protected function getMiddle(){
		    $sr["message"]=$this->getMessage();
		    $sr["login"]=$_SESSION["login"];
			return $this->getReplaceTemplate($sr,"form_reg");				
		}                
	}
?>