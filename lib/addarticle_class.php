<?php            
	require_once "global_class.php";
	class AddArticle extends GlobalClass{
		public function __construct($db){
			parent::__construct("articles",$db);
		}
		public function AddArticle($title,$in,$full){
			return $this->add(array("title" => $title,"intro_text" => $in,"full_text" => $full,"date" => time()));		
		}
		public function check($t,$i,$f){
		    $a = array(0,32,9);
		    $ok1=0;$ok2=0;$ok3=0;
		    for($j=0;$j<count($a);$j++){
		        for($k=0;$k<strlen($t);$k++)if(ord($t[$k])!=$a[$j])$ok1=1;
		        for($k=0;$k<strlen($i);$k++)if(ord($i[$k])!=$a[$j])$ok2=1;
		        for($k=0;$k<strlen($f);$k++)if(ord($f[$k])!=$a[$j])$ok3=1;
		    }
		    if($ok1==1 && $ok2==1 && $ok3==1)return true;
		    else return false;
		}
	}
?>