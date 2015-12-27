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
        bulletLeft,
        bulletTop;
	document.addEventListener('keydown', function(event) {
		handleKeyEvent(event.keyCode, true);
	}, false);

    //Move with mouse

    /*
	document.addEventListener('mousemove', function(event) {
        startBulletLeft = event.clientX;
        startBulletBottom = height - (event.clientY + planeHeight/2);
		plane.style.left = event.clientX - planeWidth / 2 + 'px';
		plane.style.bottom = height - (event.clientY + planeHeight / 2) + 'px';
	},false);
	*/
	document.addEventListener('keyup', function(event) {
		handleKeyEvent(event.keyCode, false)
	}, false);

    function fire () {
        shots += 0.5;
        if (shots == Math.floor(shots)){
            newBullet = document.createElement('div');
            newBullet.className = 'bullet';
            body[0].appendChild(newBullet);
            bullet[Math.floor(shots)].style.display = 'block';
            //if (planeBottom || planeLeft) {
            bulletLeft = (planeLeft + planeWidth/2);
            bulletTop = (planeBottom);
            /*} else {
             bulletLeft = startBulletLeft;
             bulletTop = startBulletBottom;
             }*/
            bullet[shots].style.left = bulletLeft + 'px';
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
        if (bulletTop < height) {
            bulletTop = speed  + bulletTop;
            bullet[Math.floor(shots)].style.bottom = bulletTop + 'px';
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
	
	function handleKeyEvent(keyCode, pressed) {
		event.preventDefault();
		if (keyCode == 38) {
			movement.top = pressed;
		}

		if (keyCode == 40) {
			movement.bottom = pressed;
		}
		
		if (keyCode == 37) {
			movement.left = pressed;
		}
		
		if (keyCode == 39) {
			movement.right = pressed;
		}

		if (keyCode == 32) {
			fire();
		}

	}

	updateState();
}, false);