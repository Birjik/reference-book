<?php   	
    session_start();
	require_once "lib/database_class.php";
	require_once "lib/frontpagecontent_class.php";
	require_once "lib/sectioncontent_class.php";
	require_once "lib/articlecontent_class.php";
	require_once "lib/regcontent_class.php";
	require_once "lib/messagecontent_class.php";
	require_once "lib/searchcontent_class.php";
	require_once "lib/notfoundcontent_class.php";
	require_once "lib/pollcontent_class.php";
	require_once "lib/addarticlecontent_class.php";
	$db  = new DataBase();
	$view = $_GET["view"];
	if($view=="")
		$content = new FrontPageContent($db);
	else if($view=="section")
		$content = new SectionContent($db);
	else if($view=="article")
		$content = new ArticleContent($db);
	else if($view=="reg")
		$content = new RegContent($db);
	else if($view=="message")
		$content = new MessageContent($db);
	else if($view=="search")
		$content = new SearchContent($db);
	else if($view=="poll")
		$content = new PollContent($db);
	else if($view=="config")
		$content = new AddArticleContent($db);
	else 
		$content = new NotFoundContent($db);

	echo $content -> getContent();
?>



      
