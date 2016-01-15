<?php require_once "../../../php_errors.php";
require_once "../My_library.php";
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../reset.css">
    <link rel="stylesheet" type="text/css" href="../stylesheet.css">
    <title>GET</title>
</head>
<body>

<form action="index.php" method="get">
    <span>
        <label for="first-name">First Name:</label>
        <input type="text" id="first_name" placeholder="John" name="first_name">
    </span>
    <span>
        <label for="first-name">Last Name:</label>
        <input type="text" id="last_name" placeholder="John" name="last_name">
    </span>
    <span class="select">
            <label>Birth date:</label>
        <span>
            <select name="birthMount">
                <option value=""> Select </option>
                <?= options([
                    JANUARY => 'JANUARY',
                    FEBRUARY => 'FEBRUARY',
                    MARCH => 'MARCH',
                    APRIL => 'APRIL'
                ], $birth_mount) ?>
            </select>
        </span>
        <span>
            <select name="birthDay" id="birthDays">
                <option value=""> Select </option>
                <?= options([
                    d1 => '1',
                    d2 => '2',
                    d3 => '3',
                    d4 => '4',
                    d5 => '5',
                    d6 => '6',
                    d7 => '7',
                ], $birth_day) ?>
            </select>
        </span>
        <span>
            <select name="birthYear" id="">
                <option  value=""> Select </option>
                <?= options([
                    y1 => '1909',
                    y2 => '1908',
                    y3 => '1907',
                    y4 => '1906',
                    y5 => '1905',
                    y6 => '1904',
                    y7 => '1903',
                    y8 => '1902',
                    y9 => '1901',
                    y10 => '1900'
                ], $birth_year) ?>
            </select>
        </span>
    </span>
    <br>
    <span>
        <button type="submit">Add Employee</button>
    </span>
</form>
</body>
</html>