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
	
			$style_content = "../styles/style3.css";
			$style_header = "../styles/style3.css";
				
	}
	else if(isset($_SESSION['style']) && $_SESSION['style'] == 'accessible2'){

			$style_content = "styles/style4.css";
			$style_header = "styles/style4.css";
	}

	else if(isset($_SESSION['style']) && $_SESSION['style'] == 'accessible3'){


			$style_content = "styles/style5.css";
			$style_header = "styles/style5.css";
	}
	
	
?>