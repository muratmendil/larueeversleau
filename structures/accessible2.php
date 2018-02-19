<?php

	if(isset($_POST['ok'])){
		if(isset($_POST['accessibilite']) && $_POST['accessibilite'] == "Normal"){
			$_SESSION['style'] = 'accessible1';
		}
		else if(isset($_POST['accessibilite']) && $_POST['accessibilite'] == "Mal-voyants"){
			$_SESSION['style'] = 'accessible2';
		}
		else if(isset($_POST['accessibilite']) && $_POST['accessibilite'] == "Mal-voyants-fond-noir" ){
		$_SESSION['style'] = 'accessible3';
		}
		
	}
	$page;
	if(!isset($_SESSION['style']) or isset($_SESSION['style']) && $_SESSION['style'] == 'accessible1'){
	
		if($page == 'index'){

			$style_content = "../styles/style.css";
			$style_header = "../styles/style.css";
		}
		
				
	}
	else if(isset($_SESSION['style']) && $_SESSION['style'] == 'accessible2'){


		if($page == 'index'){

			$style_header = "styles/style.css";
		}
		else {

			$style_header = "../styles/style.css";
		}
	}

	else if(isset($_SESSION['style']) && $_SESSION['style'] == 'accessible3'){

		if($page == 'index'){

			$style_content = "styles/style.css";
			$style_header = "styles/style.css";
		}
		else {

			$style_content = "../styles/style.css";
			$style_header = "../styles/style.css";
		}
	}
	/*
	else{
		
		if($page == 'index'){

			$style_content = "styles/style3.css";
			$style_header = "styles/style3.css";
		}
		else {

			$style_content = "../styles/style3.css";
			$style_header = "../styles/style3.css";
		}
	}
			*/
	
?>