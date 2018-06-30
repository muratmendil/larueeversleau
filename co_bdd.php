<?php
	try {
		$bdd = new PDO('mysql:host=sql313.epizy.com;dbname=epiz_20870414_lrvl;charset=utf8', 'epiz_20870414', 'xZ0jrOC0vl');
		}

	catch (Exception $e) {
		die ('Erreur: '.$e->getMessage());
	}
?>
