<?php
	if(isset($_POST['submit'])){
		if (isset($_POST['gender'])) {
			$fname = $_POST['fname'];
			$emailorphone = $_POST['email'];
			$address = $_POST['address'];
			$gender = $_POST['gender'];
			$birthday = $_POST['birthday'];
			$asty_xwendn = $_POST['academy'];
			$rol = $_POST['rol'];
			if ($_POST['andamla'] == "language") {
				$andamla = $_POST['andamla']." / ".$_POST['bashandam'];
			}elseif ($_POST['andamla'] == "health") {
				$andamla = $_POST['andamla']." / ".$_POST['bashandam1'];
			}elseif ($_POST['andamla'] == "engineering") {
				$andamla = $_POST['andamla']." / ".$_POST['bashandam2'];
			}elseif ($_POST['andamla'] == "computer") {
				$andamla = $_POST['andamla']." / ".$_POST['bashandam3'];
			}else{
				$andamla = $_POST['andamla'];
			}
			$success = "";
			$csv = array();
			$form_data = array($fname, $emailorphone, $address, $gender, $birthday, $asty_xwendn, $andamla, $rol);
			$file = fopen('database.csv', 'r');

			while (($result = fgetcsv($file)) !== false)
			{
			    $csv[] = $result;
			}

			fclose($file);

			foreach ($csv as $data) {
				if ($emailorphone == $data[1]) {
					$success = "false";
				}else{
					
					$success = "true";
					
				}
			}
			if ($success == "true") {
				$file = fopen('database.csv', 'a');
				fputcsv($file, $form_data);
				fclose($file);
				header('Location: index.php?success=بە سەرکاوتویی تۆمار کرا');
			}else{
				header('Location: index.php?error=ئیمێڵ یان تەلەفۆن پێشتر تۆمار کراوە');
			}

		}else{
			header('Location: index.php?error=ڕەگەزەکەو هەڵبژێرە');
		}
	}else{
		header('Location: index.php');
	}
?>