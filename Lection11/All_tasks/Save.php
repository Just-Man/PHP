<?php
if (!(isset($_POST['login']))) {
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $userName = $_POST['userName'];
    $gender = $_POST['gender'];
    $pass = $_POST['pass'];
    $pass = md5($pass);
    $mail = $_POST['mail'];
    $registered = true;
    $person = null;
    $person[$userName] .=
        'fName => ' . $firstName . ' ,\n lName => ' . $lastName . ' ,\n userName => ' . $userName
        . ' ,\n mail  => ' . $mail . ' ,\n pass  => ' . $pass . ' ,\n gender => ' . $gender . PHP_EOL;

    $users = fopen("user.txt", "a+") or die("Unable to open file!");
    fwrite($users,$person[$userName]);
    fclose($users);
} else {
    $loginName = $_POST['loginName'];
    $loginPass = $_POST['loginPass'];
    $loginPass = md5($loginPass);
    $search = $loginName;
    $lines = file('user.txt');
// Store true when the text is found
    $found = false;
    $logged = false;
    foreach($lines as $line)
    {
        if(strpos($line, $search) !== false)
        {
            $found = true;
            $result = $line;
        }
    }
// If the text was not found, show a message
    if(!$found)
    {
        echo 'No match found';
    } else if ($result[$pass] = $loginPass){
        $logged = true;
    } else {
        print 'Wrong password';
    }
}
?>
<?php require_once "Header.php"?>

<?php if ($registered) {?>
    <p>
    Регистрацията беше успешна сега може да се логнеш
    </p>
<fieldset>
            <legend>Login</legend>
            <form action="" method="post" name="login">
                <div class="labels">
                    <label for="loginName">User Name</label><br>
                    <label for="loginPass">Password</label><br>
                </div>
                <div class="input">
                    <input id="loginName" name="loginName" type="text"><br>
                    <input id="loginPass" name="loginPass" type="password"><br>
                    <button type="submit" name="login">Login</button>
                </div>
            </form>
        </fieldset>
<?php } else if ($logged) {
    $_SESSION['logged'] = $logged;?>

    <p>Влизането в системата беше успешно и сега имате достъп до всички до всички страници на сайта</p>
<?php }?>

