<?php require_once "Header.php";
$colors = ['#000000', '#808080', '#C0C0C0', '#FFFFFF',
           '#800000', '#FF0000', '#808000', '#FFFF00',
           '#008000', '#00FF00', '#008080', '#00FFff',
           '#000080', '#0000FF', '#800080', '#FF00FF'];
$lastRand = null;
$score = 0;
$color = null;

    if (isset($_POST['ansform']) || empty($rand)) {
        $answer = array_rand($colors, 4);
        $answers = [];
        for ($i = 0; $i < 4 ; $i += 1) {
            $answers[$i] = $colors[$answer[$i]];
        }
        $lastRand = $_SESSION['rand'];
        $rand = array_rand($answer, 1);
        $_SESSION['rand'] = $rand;
        $color = $answers[$rand];
    }
?>
<div class="content clearFix">
    <div class="color" style="background: <?php echo $color ?> "></div>
    <form action="" method="post" name="ansform" class="colorGame">
        <p>изберете съответният HEX номер, който смятате, че отговаря на показания цвят </отговаря></p>
        <button class="colorButton" name="ans" value="0"><?php echo $answers[0]?></button>
        <button class="colorButton" name="ans" value="1"><?php echo $answers[1]?></button><br>
        <button class="colorButton" name="ans" value="2"><?php echo $answers[2]?></button>
        <button class="colorButton" name="ans" value="3"><?php echo $answers[3]?></button>
    </form>
<?php
$ans = $_POST['ans'];
if ($ans !== null) {
    $score = $_SESSION['score'];
    if ($ans == $lastRand) {
        $score += 10;?>
        <p class="answer" id="right">Верен отговор</p>
    <?php } else {
        $score -= 10?>
        <p class="answer" id="wrong">Грешен отговор</p>
    <?php }
    $_SESSION['score'] = $score;
} ?>
    <p class="score">Score: <?php echo $score?></p>
</div>
<?php require_once "Footer.php";?>