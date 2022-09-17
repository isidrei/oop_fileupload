<?php

include "registrations.php";

$dsn = "mysql:host=localhost;dbname=pdc10_db";
$user = "root";
$passwd = "";

$pdo = new PDO($dsn, $user, $passwd);
$result = registration::handleUpload($_FILES['picture']);

if ($result == "error"){
	header('Location: index.php?error=' . "error file type");
}

else{
	if ($result !== FALSE) {
		try{
			$encrypted_pass = md5($_POST['password']);
			$register = new registration($_POST['completename'], $_POST['emailaddress'], $encrypted_pass, $result['save_path']);
			$result = $register->save();
			if ($result) {
				header('Location: index.php?success=1');
				exit;
			}
		}
		catch(Exception $e) {
			error_log(e->getMessage());
		}

	} else {

	header('Location: index.php?error=' . $e->getMessage());
}
}
?>