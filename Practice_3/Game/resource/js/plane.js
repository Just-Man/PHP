/**
 * 
 */

var initialBottom,
	initialLeft,
	planeLeft = 0,
	planeBottom = 0,
	speed = 5,
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

window.addEventListener('load', function() {
	var body = document.getElementsByTagName('body'),
        plane = document.getElementById('plane'),
		bullet = document.getElementsByClassName('bullet'),
		width = window.innerWidth,
		height = window.innerHeight,
		planeHeight = 54,
		planeWidth = 67,
		availHeight = height - planeHeight,
		availWidth = width - planeWidth,
        newBullet,
        i,
        capsLock,
        bulletsNumber = 100,
        existBullets,
        bulletLeft = [],
        bulletTop = [];

    function checkSize () {
		width = window.innerWidth;
		height = window.innerHeight;
    }

    setInterval(function () {
        checkSize();
    }, 10000);

    window.onkeydown = function(e) {
        return !(e.keyCode == 32 || e.keyCode == 40);
    };

	document.addEventListener('keydown', function(event) {
		handleKeyEvent(event.keyCode, true);
	}, false);

	document.addEventListener('keydown', function(window) {
		handleKeyEvent(window.charCode, true);
	}, false);

    document.addEventListener('keyup', function(event) {
        handleKeyEvent(event.keyCode, false)
    }, false);

    function checkCaps () {
        document.addEventListener('keydown', function(event) {
            capsLock = event.getModifierState('CapsLock');
        }, false);
    }

    setInterval(function () {
        checkCaps();
    }, 1000);

    //Move with mouse

    /*
	document.addEventListener('mousemove', function(event) {
        startBulletLeft = event.clientX;
        startBulletBottom = height - (event.clientY + planeHeight/2);
		plane.style.left = event.clientX - planeWidth / 2 + 'px';
		plane.style.bottom = height - (event.clientY + planeHeight / 2) + 'px';
	},false);
	*/


    function fire () {
        shots += 0.5;
        if (shots == Math.floor(shots)  && shots <= bulletsNumber){
            existBullets = bulletsNumber - shots;
            console.log(existBullets);
            newBullet = document.createElement('div');
            newBullet.className = 'bullet';
            body[0].appendChild(newBullet);
            bullet[Math.floor(shots)].style.display = 'block';
            //if (!capsLock) {
            bulletLeft.push(planeLeft + planeWidth/2);
            bulletTop.push(planeBottom + planeHeight);
            /*} else {
             bulletLeft = startBulletLeft;
             bulletTop = startBulletBottom;
             }*/
            bullet[shots].style.left = bulletLeft[shots] + 'px';
        }

    }
	
	function updatePlanePosition() {
		initialBottom = planeBottom;
		initialLeft = planeLeft;
		
		if (movement.top && planeBottom < availHeight) {
			planeBottom += speed;
		}
		
		if (movement.bottom && planeBottom > 0) {
			planeBottom -= speed;
		}
		
		if (movement.left && planeLeft > 0) {
			planeLeft -= speed;
		}
		
		if (movement.right && planeLeft < availWidth) {
			planeLeft += speed;
		}
		
		if (initialLeft != planeLeft) {
			plane.style.left = planeLeft + 'px';			
		}
		
		if (initialBottom != planeBottom) {
			plane.style.bottom = planeBottom + 'px';			
		}
        len = bulletTop.length;
        for (i = 0 ; i < len; i += 1) {
            if (bulletTop[i] < height) {
                bulletTop[i] = speed + bulletTop[i];
                bullet[i].style.bottom = bulletTop[i] + 'px';
            }
        }
	}
	/*
	setInterval(function() {
		updatePlanePosition()
	}, 1000/30);*/
	
	function updateState() {
		updatePlanePosition();
		requestAnimationFrame(updateState)
	}
	
	function handleKeyEvent(keyCode, pressed, charCode) {
		//window.event.preventDefault();
		if (charCode || keyCode == 38) {
			movement.top = pressed;
		}

		if (charCode || keyCode == 40) {
			movement.bottom = pressed;
		}

		if (charCode || keyCode == 37) {
			movement.left = pressed;
		}

		if (charCode || keyCode == 39) {
			movement.right = pressed;
		}

		if (charCode || keyCode == 32) {
			fire();
		}

	}

	updateState();
}, false);