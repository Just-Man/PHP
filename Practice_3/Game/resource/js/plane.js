/**
 * 
 */

var initialBottom,
    initialLeft,
    planeLeft = 0,
    planeBottom = 0,
    enemyLeft = 0,
    enemyTop = 54,
    speed = 5,
    enemySpeed = 3,
    //startBulletLeft,
    //startBulletBottom,
    shots = -1,
    len,
    movement = {
        left: false,
        right: false,
        top: false,
        bottom: false
    };

window.addEventListener('load', function () {
    var body = document.getElementsByTagName('body'),
        game = document.getElementById('game'),
        gameOver = document.getElementById('gameOver'),
        plane = document.getElementById('plane'),
        enemy = document.getElementById('enemy'),
        bullet = document.getElementsByClassName('bullet'),
        actualScore = document.getElementById('actualScore'),
        actualBullets = document.getElementById('actualBullets'),
        width = window.innerWidth,
        height = window.innerHeight,
        planeHeight = 54,
        planeWidth = 67,
        rightMove,
        enemyHeight = 54,
        enemyWidth = 67,
        availEnemyWidth = width - enemyWidth,
        availEnemyHeight = height - enemyHeight,
        availPlaneHeight = height - planeHeight,
        availPlaneWidth = width - planeWidth,
        newBullet,
        i,
        //capsLock,
        bulletsNumber = 99,
        existBullets,
        hit = 0,
        score = 0,
        lastScore = 0,
        bulletLeft = [],
        bulletTop = [],
        over = false;

    function checkSize() {
        width = window.innerWidth;
        height = window.innerHeight;
        availEnemyWidth = width - enemyWidth;
        availEnemyHeight = height - enemyHeight;
        availPlaneHeight = height - planeHeight;
        availPlaneWidth = width - planeWidth;
    }

    setInterval(function () {
        checkSize();
    }, 1000);

    window.onkeydown = function (e) {
        return !(e.keyCode === 32 || e.keyCode === 40);
    };

    //Move with mouse

    /*
    function checkCaps () {
        document.addEventListener('keydown', function(event) {
            capsLock = event.getModifierState('CapsLock');
        }, false);
    }

    setInterval(function () {
        checkCaps();
    }, 1000);

    document.addEventListener('mousemove', function(event) {
        startBulletLeft = event.clientX;
        startBulletBottom = height - (event.clientY + planeHeight/2);
        plane.style.left = event.clientX - planeWidth / 2 + 'px';
        plane.style.bottom = height - (event.clientY + planeHeight / 2) + 'px';
    },false);
    */

    function fire() {
        shots += 0.5;
        if (shots === Math.floor(shots)  && shots <= bulletsNumber) {
            existBullets = bulletsNumber - shots;
            newBullet = document.createElement('div');
            newBullet.className = 'bullet';
            body[0].appendChild(newBullet);
            bullet[Math.floor(shots)].style.display = 'block';
            //if (!capsLock) {
            bulletLeft.push(planeLeft + planeWidth / 2);
            bulletTop.push(planeBottom + planeHeight);
            /*} else {
             bulletLeft = startBulletLeft;
             bulletTop = startBulletBottom;
             }*/
            bullet[shots].style.left = bulletLeft[shots] + 'px';
        }

    }

    function keyControls(keyCode, pressed, charCode) {
        //window.event.preventDefault();
        if (charCode || keyCode === 38) {
            movement.top = pressed;
        }

        if (charCode || keyCode === 40) {
            movement.bottom = pressed;
        }

        if (charCode || keyCode === 37) {
            movement.left = pressed;
        }

        if (charCode || keyCode === 39) {
            movement.right = pressed;
        }

        if (charCode || keyCode === 32) {
            fire();
        }

    }

    function planeMove() {
        initialBottom = planeBottom;
        initialLeft = planeLeft;

        if (movement.top && planeBottom < availPlaneHeight) {
            planeBottom += speed;
        }

        if (movement.bottom && planeBottom > 0) {
            planeBottom -= speed;
        }

        if (movement.left && planeLeft > 0) {
            planeLeft -= speed;
        }

        if (movement.right && planeLeft < availPlaneWidth) {
            planeLeft += speed;
        }

        if (initialLeft !== planeLeft) {
            plane.style.left = planeLeft + 'px';
        }

        if (initialBottom !== planeBottom) {
            plane.style.bottom = planeBottom + 'px';
        }
    }

    function enemyMove() {

        if (enemyTop <= availEnemyHeight) {
            if (enemyLeft <= 0 && lastScore === score) {
                rightMove = true;
                speed += 1;
            }
            if (enemyLeft < availEnemyWidth && rightMove) {
                enemyLeft += enemySpeed;
                enemy.style.left = enemyLeft + 'px';
            } else {
                rightMove = false;
                enemyLeft -= enemySpeed;
                enemy.style.left = enemyLeft + 'px';
            }
            if ((enemyLeft >= availEnemyWidth || !enemyLeft) && !hit) {
                enemyTop += enemyHeight;
            }
            enemy.style.top = enemyTop + 'px';
        } else {
            over = true;
            game.style.display = 'none';
            gameOver.style.display = 'block';
            gameOver.style.display = 'block';
            gameOver.innerHTML = "<h1>You lose</h1>";
            gameOver.style.color = '#f00';
        }
    }

    function bulletMove() {
        lastScore = score;
        len = bulletTop.length;
        for (i = 0; i < len; i += 1) {
            if (bulletTop[i] <= (availEnemyHeight - enemyTop + enemyHeight) &&
                    bulletTop[i] >= (availEnemyHeight - enemyTop) &&
                    bulletLeft[i] >= enemyLeft &&
                    bulletLeft[i] <= (enemyLeft + enemyWidth)) {
                hit = 1;
                bullet[i].style.display = 'none';
                bulletLeft[i] = -1;
                bulletTop[i] = 0;
                enemyLeft = 1;
                enemyTop = 54;
            }
            if (bulletTop[i] < height && !hit && bulletTop[i] !== 0) {
                bulletTop[i] = speed + bulletTop[i];
                bullet[i].style.bottom = bulletTop[i] + 'px';
            }
            score += hit;
            if (hit) {
                actualScore.innerHTML = score;
            }
            actualBullets.innerHTML = existBullets;
            hit = 0;
        }
    }

    function gameResult() {
        if (existBullets < 1 && score >= 70 &&
                (bulletTop[len - 1] >= height - 1 || bulletTop[len - 1] === 0)) {
            over = true;
            game.style.display = 'none';
            gameOver.style.display = 'block';
            gameOver.innerHTML = "<h1>You WIN</h1>";
        } else if (existBullets < 1 && score < 70 && bulletTop[len - 1] >= height - 1) {
            over = true;
            game.style.display = 'none';
            gameOver.style.display = 'block';
            gameOver.innerHTML = "<h1>You lose</h1>";
            gameOver.style.color = '#f00';
        }
    }

    function updateState() {
        planeMove();
        enemyMove();
        bulletMove();
        gameResult();
        if (over) {
            return false;
        }
        requestAnimationFrame(updateState);
    }

    document.addEventListener('keydown', function (event) {
        keyControls(event.keyCode, true);
    }, false);

    document.addEventListener('keydown', function (window) {
        keyControls(window.charCode, true);
    }, false);

    document.addEventListener('keyup', function (event) {
        keyControls(event.keyCode, false);
    }, false);

    updateState();
}, false);