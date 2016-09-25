<?php
	require_once "modules_class.php"; 
	class FrontPageContent extends Modules{
		private $articles,$page;
		public function __construct($db){          
			parent::__construct($db);	           
			$this->articles=$this->article->getAllSortDate();
			$this->page=(isset($this->data["page"]))?$this->data["page"]:1;
			$count_of_pages = ceil(count($this->articles)/$this->config->count_blog) ;
			if($this->page>$count_of_pages || $this->page<1)$this->notFound();   
		}
		protected function getTitle(){
			 if($this->page>1)return "���������� �� PHP - �������� ".$this->page;
			 else return "���������� �� PHP";
		}
		protected function getDescription(){
			return "���������� ������� �� PHP.";
		}
		protected function getKeyWords(){
			return "���������� php,���������� php �������";
		}                                           
		protected function getTop(){
			return $this->getTemplate("main_article");		
		}			
		protected function getMiddle(){     
			return $this->getBlogArticles($this->articles,$this->page);				
		}               
		protected function getBottom(){
			return $this->getPagination(count($this->articles),$this->config->count_blog,$this->config->address);				
		}               
	}
?>