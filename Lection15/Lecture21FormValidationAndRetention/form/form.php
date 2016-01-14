<?php 
echo '123';
var_dump(realpath('../../../My_library.php'));
require_once '../../../My_library.php';
	echo '123';
	define('COLOR_RED', 'red');
	define('COLOR_BLUE', 'blue');
	define('COLOR_GREEN', 'green');
	
	define('FORM_OF_ADDRESS_MR', 1);
	define('FORM_OF_ADDRESS_MRS', 2);
	define('FORM_OF_ADDRESS_MS', 3);
	
	$validationErrors = [];
	$firstName = getValue($_POST, 'firstname');
	$lastName = getValue($_POST, 'lastname');
	$username = getValue($_POST, 'username');
	$password = getValue($_POST, 'password');
	$gender = getValue($_POST, 'gender');
	$colors = getValue($_POST, 'color' , []);
	$formOfAddress = getValue($_POST, 'form_of_address');
	$text = getValue($_POST, 'text');
	
	function validateForm(&$errors) {
		global $firstName, $lastName, $username, $password, $gender, $formOfAddress;
		
		$errors = [];
		
		if (!validateRequired($firstName)) {
			$errors['firstname'][] = 'First Name is required';
		} else if(!validateLongerOrEqualString($firstName, 2)) {
			$errors['firstname'][] = 'First Name must be at least 2 characters long';
		}
		
		if (!validateRequired($lastName)) {
			$errors['lastname'][] = 'Last Name is required';
		} else if(!validateLongerOrEqualString($lastName, 2)) {
			$errors['lastname'][] = 'Last Name must be at least 2 characters long';
		}
		
		if (!validateRequired($username)) {
			$errors['username'][] = 'User Name is required';
		} else if(!validateLongerOrEqualString($username, 4)) {
			$errors['username'][] = 'User Name must be at least 4 characters long';
		}
		
		if (!validateRequired($password)) {
			$errors['password'][] = 'Password is required';
		} else {
			if(!validateLongerOrEqualString($password, 5)) {
				$errors['password'][] = 'Password must be at least 5 characters long';
			}
			
			if (!validateNonAlphaNumeric($password)) {
				$errors['password'][] = 'Password must contain at least 1 non alphanumeric character';
			}
		}
		
		if (!validateRequired($gender)) {
			$errors['gender'][] = 'Gender is required';
		}
		if (!validateRequired($formOfAddress)) {
			$errors['form_of_address'][] = 'Form Of Address is required';
		}
		
		return empty($errors);
	}
	
	
	function getFieldClass($errors, $field) {
		return !empty($errors[$field]) ? 'error' : '';
	}
	
	if (!empty($_POST)) {
		validateForm($validationErrors);

	}



?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
<link rel="stylesheet" type="text/css" href="reset.css">
<style type="text/css">
	form label:first-child {
		width: 150px;
		display: inline-block;
	}
	
	form > div {
		padding: 0.3em 0 0 0;
	}
	
	.error {
		color: red;
	}
	.error p {	
		padding-left: 154px; 
	}
	
	.error input, .error select, .error textarea {
		border-color: red;
	}
</style>
</head>
<body>
	<div>
	
		<form action="" method="post">
			<div class="<?= getFieldClass($validationErrors, 'firstname')?>">
				<label for="firstname">First Name</label>
				<input type="text" name="firstname" id="firstname" value="<?= htmlentities($firstName)?>"/>
				<?= displayErrors($validationErrors, 'firstname')?>
			</div>
			<div class="<?= getFieldClass($validationErrors, 'lastname')?>">
				<label for="lastname">Last Name</label>
				<input type="text" name="lastname" id="lastname"  value="<?= htmlentities($lastName)?>"/>
				<?= displayErrors($validationErrors, 'lastname')?>
			</div>
			<div class="<?= getFieldClass($validationErrors, 'username')?>">
				<label for="username">User Name</label>
				<input type="text" name="username" id="username" value="<?= htmlentities($username)?>"/>
				<?= displayErrors($validationErrors, 'username')?>
			</div>
			<div class="<?= getFieldClass($validationErrors, 'password')?>">
				<label for="password">Password</label>
				<input type="password" name="password" id="password" />
				<?= displayErrors($validationErrors, 'password')?>
			</div>
			<div class="<?= getFieldClass($validationErrors, 'gender')?>">
				<label for="">Gender</label>
				<?= checkboxesOrRadios([
					'male' => 'Male',
					'female' => 'Female'
				], $gender, 'gender', 'radio')?>
				<?= displayErrors($validationErrors, 'gender')?>
			</div>
			<div class="<?= getFieldClass($validationErrors, 'color')?>">
				<label for="">Favorite Color</label>
				<?= checkboxesOrRadios([
					COLOR_RED => 'Red',
					COLOR_GREEN => 'Green',
					COLOR_BLUE => 'Blue'
 				], $colors, 'color[]')?>
			</div>
			<div class="<?= getFieldClass($validationErrors, 'form_of_address')?>">
				<label for="form_of_address">Password</label>
				<select name="form_of_address" id="">
					<option value="">--Choose Form Of Address--</option>
					<?= options([
						FORM_OF_ADDRESS_MR => 'Mr.',
						FORM_OF_ADDRESS_MRS => 'Mrs.',
						FORM_OF_ADDRESS_MS => 'Ms.'
					], $formOfAddress)?>
				</select>
				<?= displayErrors($validationErrors, 'form_of_address')?>
			</div>
			<div>
				<label for="text">Text</label>
				<textarea rows="" cols="" name="text" id="text">
					<?= htmlentities($text) ?>
				</textarea>
			</div>
			<div>
				<input type="submit" />
			</div>
		</form>
	
	</div>
</body>
</html>