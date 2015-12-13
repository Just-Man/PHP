<?php require_once "Header.php";
    $colors = ['#000000', '#808080', '#C0C0C0', '#FFFFFF',
               '#800000', '#FF0000', '#808000', '#FFFF00',
               '#008000', '#00FF00', '#008080', '#00FFff',
               '#000080', '#0000FF', '#800080', '#FF00FF'];
    $lastRand = null;

    if (isset($_POST['ansform']) || empty($rand)) {
    $answer = array_rand($colors, 4);
    $answers = [];
    for ($i = 0; $i < 4 ; $i += 1) {
        $answers[$i] = $colors[$answer[$i]];
    }
    $lastRand = $_SESSION['rand'];
    $rand = array_rand($answer, 1);
    $_SESSION['rand'] = $rand;
    $color = $answers[$rand];}
?>
    <div style="width: 200px;height: 200px; background: <?php echo $color ?> "></div>
    <form action="" method="post" name="ansform">
        <button name="ans" value="0"><?php echo $answers[0]?></button>
        <button name="ans" value="1"><?php echo $answers[1]?></button>
        <button name="ans" value="2"><?php echo $answers[2]?></button>
        <button name="ans" value="3"><?php echo $answers[3]?></button>
    </form>
<?php
$ans = $_POST['ans'];
if ($ans == $lastRand) {?>
    <p>Верен отговор</p>
<?php } else {?>
    <p>Грешен отговор</p>
<?php }
require_once "Footer.php";?>