<?php require_once "Header.php";
$registered = false;
$userName = null;
$loginName = null;
if (isset($_POST['register'])) {
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
        . ' ,\n mail  => ' . $mail . ' ,\n pass  => ' . $pass . ' ,\n gender => ' . $gender . ' ' . $_POST['pass'] . PHP_EOL;

    $users = fopen("user.txt", "a+") or die("Unable to open file!");
    fwrite($users,$person[$userName]);
    fclose($users);
} else if (isset($_POST['login'])) {
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
        echo 'Грешно потребителско име';
    } else if ($result[$pass] = $loginPass){
        $logged = true;
    } else {
        print 'Грешна парола';
    }
} else if ($logged != 1) { ?>
    <div class="content clearFix">
        <p>Здравей, посетителю</p>
        <p>Тук ще може да разгледаш първото домашнo в което трябва да се използва HTML</p>
        <p>За да продължиш нататък искам да те помоля първо да се регистрираш и след това ще може свободно да разглеждаш.
            Регистрацията ще ти отнеме само няколко секунди </p>
        <fieldset>
            <legend>Регистрация</legend>
            <form action="" method="post" name="register">
                <div class="labels">
                    <label for="firstName">First Name</label><br>
                    <label for="lastName">Last Name</label><br>
                    <label for="userName">User Name</label><br>
                    <label for="mail">E-mail:</label><br>
                    <label for="gender">Gender</label><br>
                    <label for="pass">Password</label><br>
                </div>
                <div class="input">
                    <input id="firstName" name="firstName" type="text"><br>
                    <input id="lastName" name="lastName" type="text"><br>
                    <input id="userName" name="userName" type="text"><br>
                    <input id="mail" name="mail" type="email"><br>
                    <input id="male" name="gender" type="radio" value="1"><label for="male">Male</label>
                    <input id="female" name="gender" type="radio" value="2"><label for="female">Female</label><br>
                    <input id="pass" name="pass" type="password"><br>
                </div>
                <div class="buttons">
                    <button type="reset">Reset</button>
                    <button type="submit" name="register">Register</button>
                </div>
            </form>
        </fieldset>
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
    </div>
<?php }
 if ($registered) {?>

    <div class="content clearFix">
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
    </div>
<?php } else if ($logged) {
    $_SESSION['logged'] = $logged;?>
    <div class="content clearFix">
    <p> Здравей <?php echo $loginName ?></p>
    <p>Влизането ти в системата беше успешно и сега имате достъп до всички до всички страници на сайта</p>
     </div>
<?php }
require_once "Footer.php" ?>