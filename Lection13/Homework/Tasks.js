/**
 * Created by just on 18.12.15.
 */

/*
Задача 1:
Напишете JavaScript програма, която по даден array да показва най-
често срещания символ.
var arr1=[3, 'a', 'a', 'a', 2, 3, 'a', 3, 'a', 2, 4, 9, 3];
Резултат: a ( 5 times )
 */

function repeatNumbers() {
    var mem,
        j,
        i,
        end = prompt('Въведете броя желани елементи'),
        numbers = [],
        filtered = [],
        final = [];
    for (i = 0; i < end; i += 1) {
        numbers[i] = prompt('Въведете елемент номер: ' + (+i + 1), '0');

        for (j = 0; j < i; j += 1) {
            if (numbers[i] < numbers[j]) {
                mem = numbers[j];
                numbers[j] = numbers[i];
                numbers[i] = mem;
            }
        }
    }
    for (i = 0; i < end; i += 1) {

        if (numbers[i - 1] === numbers[i]) {
            filtered.push(numbers[i]);
        } else {
            filtered = [];
        }
        if (final.length < filtered.length) {
            final = filtered;
        }
    }
        final.push(final[0]);
        document.getElementById('result').innerHTML = 'От въведената поредица числа' + numbers + 'Повтарящият се елемент е: ' + final[0] +
            ' с брой повторения: ' + final.length;
}

/*
Задача 2:
Напишете JavaScript, който да връща броя на anchors (<а>) в HTML
документ.
 */

function aNumbers() {
    var a = document.querySelectorAll('a'),
        number = a.length;
    document.getElementById('result').innerHTML =
        'Numbers of &lt;a&gt; elements in this page is: ' + number;
    return a;
}

/*
Задача 3:
Напишете JavaScript, който да изкарава popup с innerHTML на елемент
по дадено id.
 */

function innersHTML () {
    var id = prompt('Enter ID');
    /*document.getElementById('result').innerHTML = */alert(document.getElementById(id).innerHTML);
}

/*
Задача 4:
Напишете JavaScript, който да връща innerHTML на първия anchor в
HTML документ
 */

function innerA () {
    var a = document.querySelectorAll('a'),
        firstA = a[0];
    document.getElementById('result').innerHTML = firstA.innerHTML;

}

/*
Задача 5:
Напишете JavaScript функция, която смята обема на сфера по подаден
радиус.
*/

function volumeOfSphere () {
    document.getElementById('result').innerHTML =
        '<label for="rad">Radius</label><br>' +
        '<input type="number" id="rad" placeholder="Enter Radius">' +
        '<select class="select">' +
            '<option value="mm">mm</option>' +
            '<option value="cm">cm</option>' +
            '<option value="m">m</option>' +
        '</select><br>' +
        '<button type="button" onclick="calcOfSphere()">Calculate</button><br><p id="calcSphere"></p> ';
}
function calcOfSphere() {
    var rad= document.getElementById('rad').value,
        volume = 4/3*Math.PI*Math.pow(rad,3);
    document.getElementById('calcSphere').innerHTML =
        volume + ' ' + document.querySelector('.select').value + '<sup>3</sup>';
}

/*
Задача 6:
Напишете JavaScript функция, която показва случайна снимка при
всяко едно отваряне на страницата.
*/


function backGround() {
    var colors = ['#000000', '#808080', '#C0C0C0', '#FFFFFF',
                  '#800000', '#FF0000', '#808000', '#FFFF00',
                  '#008000', '#00FF00', '#008080', '#00FFff',
                  '#000080', '#0000FF', '#800080', '#FF00FF'
        ],
    color = Math.ceil(Math.random()*100);
    if (color > colors.length) {
        color = Math.floor(color / colors.length);
    }
    document.querySelector('#result').innerHTML = '';
    document.querySelector('#result').style.width = '100px';
    document.querySelector('#result').style.height = '100px';
    document.querySelector('#result').style.backgroundColor = colors[color];
}


/*
Задача 7:
Напише JavaScript функционалност, която конвертира от kg в lb и
обратно.
1kg = 2.20462262 lb
*/
function weight () {
    document.querySelector('#result').style.width = 'auto';
    document.querySelector('#result').style.height = 'auto';
    document.querySelector('#result').style.backgroundColor = '#fff';
    document.getElementById('result').innerHTML =
        '<label for="weight">Weight</label><br>' +
        '<input type="number" id="weight" placeholder="Enter weight">' +
        '<select id="from">' +
            '<option value="1">kg</option>' +
            '<option value="2">lb</option>' +
        '</select>' +
        '<select id="to">' +
            '<option value="1">kg</option>' +
            '<option value="2">lb</option>' +
        '</select><br>' +
        '<button type="button" onclick="calcWeight()">Calculate</button><br><p id="calcWeight"></p> ';
}
function calcWeight () {
    var from = document.querySelector('#from').value,
        to = document.querySelector('#to').value,
        value = document.querySelector('#weight').value,
        proportion = 2.20462262,
        result;
    if (from == to) {
        document.getElementById('calcWeight').innerHTML =
            '<p> Select option to covert </p>'
    } else if (from > to) {
        result = value/proportion;
        document.getElementById('calcWeight').innerHTML =
            value + ' ' + document.querySelector('#to').textContent[2]
            + document.querySelector('#to').textContent[3] + ' = ' + result + ' '
            + document.querySelector('#to').textContent[0]
            + document.querySelector('#to').textContent[1]
    } else {
        result = value * proportion;
        document.getElementById('calcWeight').innerHTML =
            value + ' ' + document.querySelector('#to').textContent[0]
            + document.querySelector('#to').textContent[1] + ' = '  + result + ' '
            + document.querySelector('#to').textContent[2]
            + document.querySelector('#to').textContent[3]
    }
}

/*
Задача 8:
Напишете JavaScript функция, която да добавя редове към
таблица.Тествайте върху HTML документ.
*/

function table () {
    document.getElementById('result').innerHTML =
        '<button onclick="add()">Add row</button><table>' +
        '   <tr>' +/*
               '<td></td>' +
               '<td></td>' +*/
            '</tr>' +
        '</table> '
}
function add () {
    var tr = document.createElement('tr');
    document.getElementsByTagName('tr')[0].appendChild(tr)
}

/*
Задача 9:
Направете страница, в която има албум с малки снимки и при слагане
на мишка върху някоя снимка да се показва по-голяма снимка на
малката. При махане на мишката от снимката да се скрива голямата
снимка.
 */

function gallery () {
    document.getElementById('result').innerHTML =
        '<section class="clearFix">' +
        '   <div class="left">' +
        '        <ul class="preview">' +
        '        <li class="li1"><p class="photo"></p></li>' +
        '        <li class="li2"><p class="photo"></p></li>' +
        '        <li class="li3"><p class="photo"></p></li>' +
        '        <li class="li4"><p class="photo"></p></li>' +
        '        <li class="li5"><p class="photo"></p></li>' +
        '        <li class="li6"><p class="photo"></p></li>' +
        '        <li class="li7"><p class="photo"></p></li>' +
        '        <li class="li8"><p class="photo"></p></li>' +
        '        <li class="li9"><p class="photo"></p></li>' +
        '        <li class="li10"><p class="photo"></p></li>' +
        '        </ul>' +
        '   </div>' +
        '</section>'
}


/*
Задача 10:
Направете валидация на формата за регистрация. Ако потребителя не
е въвел някое поле направете го червено и до него напишете
съобщение. Когато потребителя въведе полето да се махна червеното.
Когато потребителя избере държава other да му се показва още едно
поле да изпише държавата, от която е.
*/

function registration () {
    document.getElementById('result').innerHTML =
        '<fieldset>' +
        '   <legend>Регистрация</legend>' +
        '            <form action="" method="post" name="register" onsubmit="return validate()">' +
        '                <div class="labels">' +
        '                    <label for="firstName">First Name</label><br>' +
        '                    <label for="lastName">Last Name</label><br>' +
        '                    <label for="userName">User Name</label><br>' +
        '                    <label for="mail">E-mail:</label><br>' +
        '                    <label for="gender">Gender</label><br>' +
        '                    <label for="pass">Password</label><br>' +
        '                </div>' +
        '                <div class="input">' +
        '                    <input id="firstName" name="firstName" type="text"><br>' +
        '                    <input id="lastName" name="lastName" type="text"><br>' +
        '                    <input id="userName" name="userName" type="text"><br>' +
        '                    <input id="mail" name="mail" type="email"><br>' +
        '                    <input id="male" name="gender" type="radio" value="1"><label for="male">Male</label>' +
        '                    <input id="female" name="gender" type="radio" value="2"><label for="female">Female</label><br>' +
        '                    <input id="pass" name="pass" type="password"><br>' +
        '                </div>' +
        '                <div class="buttons">' +
        '                    <button type="reset">Reset</button>' +
        '                    <button type="submit" name="register">Register</button>' +
        '                </div>' +
        '            </form>' +
        '</fieldset>';
}

function validate () {
    var i,
        correct = true,
        inputs = document.getElementsByTagName('input'),
        len = inputs.length;
    for (i = 0; i < len; i += 1){
        if (!(inputs[i].value) || inputs[i].value == 'field is required') {
            inputs[i].value = 'field is required';
            inputs[i].style.backgroundColor = '#f00';
            correct = false;
        }
    }
    if (!correct) {
        return false
    } else {
        return true;
    }
}