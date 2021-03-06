<?php
/**
 * Created by PhpStorm.
 * User: just
 * Date: 15.01.16
 * Time: 12:33
 */
/*
Задача 10:
Реализирайте играта бесеница чрез
PHP –
потребителя въвежда букви
в поле
и при изпращане на формата или се модифицира даден текст
като _ се заменят с познатата буква или се добавят картинки – как
човече се беси. Да се има възможност за започване от начало и за
генериране на нови думи при рестарт
*/

session_start();
require_once 'My_library.php';

$inputChar = getValue($_POST, 'input');
$reset = getValue($_POST, 'reset');
$words = [
    'София', 'Пловдив', 'Варна', 'Бургас', 'Русе', 'Плевен', 'Добрич', 'Сливен', 'Шумен', 'Перник', 'Пазарджик', 'Ямбол', 'Хасково', 'Благоевград', 'Враца', 'Габрово', 'Асеновград',
    'Видин', 'Казанлък', 'Кърджали', 'Кюстендил', 'Монтана', 'Търговище', 'Димитровград', 'Силистра', 'Ловеч', 'Дупница', 'Разград', 'Свищов', 'Петрич', 'Смолян', 'Сандански',
    'Самоков', 'Велинград', 'Севлиево', 'Лом', 'Карлово', 'Айтос', 'Троян', 'Ботевград', 'Харманли', 'Пещера', 'Свиленград', 'Карнобат', 'Панагюрище', 'Чирпан', 'Попово', 'Раковски',
    'Радомир', 'Първомай', 'Поморие', 'Несебър', 'Червен бряг', 'Козлодуй', 'Ихтиман', 'Берковица', 'Раднево', 'Провадия', 'Разлог', 'Балчик', 'Каварна', 'Костинброд', 'Банкя', 'Стамболийски',
    'Етрополе', 'Кнежа', 'Левски', 'Павликени', 'Мездра', 'Елхово', 'Тетевен', 'Луковит', 'Тутракан', 'Трявна', 'Девня', 'Средец', 'Омуртаг', 'Сопот', 'Исперих', 'Бяла', 'Ракитово', 'Гълъбово',
    'Кричим', 'Лясковец', 'Септември', 'Момчилград', 'Банско', 'Белене', 'Аксаково', 'Белослав', 'Своге', 'Дряново', 'Любимец', 'Кубрат', 'Пирдоп', 'Симитли', 'Сливница', 'Златоград', 'Хисаря',
    'Дулово', 'Симеоновград', 'Тервел', 'Костенец', 'Девин', 'Мадан', 'Стралджа', 'Царево', 'Вършец', 'Твърдица', 'Куклен', 'Котел', 'Съединение', 'Елена', 'Оряхово', 'Якоруда', 'Божурище',
    'Тополовград', 'Белоградчик', 'Стражица', 'Камено', 'Чепеларе', 'Созопол', 'Перущица', 'Суворово', 'Златица', 'Крумовград', 'Дългопол', 'Ветово', 'Тръстеник', 'Койнаре',
    'Славяново', 'Годеч', 'Правец', 'Игнатиево', 'Костандово', 'Брацигово', 'Стрелча', 'Неделино', 'Брезник', 'Смядово', 'Ардино', 'Дебелец', 'Никопол', 'Шивачево', 'Белово', 'Цар Калоян',
    'Мартен', 'Ивайловград', 'Кресна', 'Върбица', 'Рудозем', 'Вълчедръм', 'Приморско', 'Глоджево', 'Летница', 'Мъглиж', 'Искър', 'Шабла', 'Гулянци', 'Крън', 'Баня', 'Драгоман', 'Сунгурларе',
    'Батак', 'Джебел', 'Завет', 'Криводол', 'Мизия', 'Белица', 'Каспичан', 'Кула', 'Николаево', 'Ветрен', 'Гурково', 'Роман', 'Калофер',  'Каблешково', 'Априлци', 'Бухово',
    'Ябланица', 'Рила', 'Опака', 'Угърчин', 'Златарица', 'Хаджидимово', 'Добринище', 'Обзор', 'Дунавци', 'Брегово', 'Трън', 'Садово', 'Килифарево', 'Лъки', 'Доспат', 'Копривщица', 'Кочериново',
    'Лозница', 'Бяла', 'Борово', 'Черноморец', 'Батановци', 'Пордим', 'Ахелой', 'Сухиндол', 'Българово', 'Брезово', 'Главиница', 'Каолиново', 'Чипровци', 'Меричлери', 'Земен', 'Плачковци',
    'Кермен', 'Алфатар', 'Грамада', 'Сеново', 'Бойчиновци', 'Антоново', 'Ахтопол', 'Бобошево', 'Шипка', 'Болярово', 'Димово', 'Брусарци', 'Китен', 'Клисура', 'Плиска', 'Маджарово', 'Мелник'
];
$end = '';
$usedStr = '';
$class = null;
$find = null;

if (!isset($_SESSION['word']) || $reset){
    $rand = rand(0, count($words) - 1);
    $currentWord = $words[$rand];
    $currentWordLen = mb_strlen($currentWord) - 1;
    $printWord = mb_substr($currentWord, 0, 1);
    for ($i = 1; $i < $currentWordLen; $i += 1) {
        $printWord .= '_';
    }
    $printWord .= mb_substr($currentWord, $currentWordLen, 1);
    $_SESSION['word'] = $currentWord;
    $_SESSION['wordLen'] = $currentWordLen;
    $_SESSION['current'] = $printWord;
    $counter = -1;
    $_SESSION['count'] = $counter;
    $_SESSION['used'] = '';
}

if (!empty($_POST)) {
    $find = false;
    $inputChar = mb_substr($inputChar, 0, 1, 'UTF-8');
    $changed [] = mb_substr($_SESSION['word'], 0, 1);
    for ($i = 1; $i < $_SESSION['wordLen']; $i += 1) {
        $currentChar = mb_substr($_SESSION['current'], $i, 1, 'UTF-8');

        if ($inputChar == mb_substr($_SESSION['word'], $i, 1, 'UTF-8')) {
            $currentChar = $inputChar;
            $find = true;
        }
        $changed [] = $currentChar;
    }
    $changed [] = mb_substr($_SESSION['word'], $_SESSION['wordLen'], 1);
    $_SESSION['current'] = implode($changed);

    $_SESSION['used'] = $_SESSION['used'] . ', ' . $inputChar;
    $usedStr = $_SESSION['used'];
}
if (!$find) {
    $counter = $_SESSION['count'] + 1;
    $_SESSION['count'] = $counter;
}

$showWord = preg_split('/(?<!^)(?!$)/u',$_SESSION['current']);
$showWord = implode(' ', $showWord);

if ($_SESSION['current'] == $_SESSION['word']) {
    $showWord = $_SESSION['current'];
    $end = 'You win! Word is  ';
    $_SESSION['word'] = null;
    $class = 'class="hidden"';
}


if ($counter >= $_SESSION['wordLen']) {
    $showWord = $_SESSION['word'];
    $end = 'You lose. Word is  ';
    $_SESSION['word'] = null;
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="reset.css">
        <link rel="stylesheet" type="text/css" href="stylesheet.css">
        <title>Task 10</title>
    </head>
    <body>
        <div id="word">
            <p <?= $class ?> >Въведените букви трябва задължително да са на кирилица</p>
            <p> <?= $end . $showWord ?></p>
            <p <?= $class ?> >Използвани букви: <?= $usedStr ?></p>
        </div>
        <form action="" method="post" <?= $class ?> id="hangMan">
            <br>
            <label for="char">Въведете буква</label>
            <input type="text" id="char" name="input">
            <button type="submit" id="char">Enter</button>
        </form>
        <div id="img">
            <img <?= $class ?> src="img/<?=$_SESSION['count'] ?>.gif ">
        </div>
        <form name="reset" action="" method="post" id="reset">
            <input type="hidden" name="reset" value="1">
            <button>Нова дума</button>
        </form>
    </body>
</html>