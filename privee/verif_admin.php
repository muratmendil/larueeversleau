<?php
function verification() {

	if(isset($_SESSION['admin'])) {

	}
	else {
		header('Location: ../index.php');
	}
}


?>