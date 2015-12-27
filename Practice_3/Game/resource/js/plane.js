/**
 * 
 */

var initialBottom,
	initialLeft,
	planeLeft = 0,
	planeBottom = 0,
	speed = 5,
    startBulletLeft,
    startBulletBottom,
	movement = {
	left: false,
	right: false,
	top: false,
	bottom: false
};

window.addEventListener('load', function() {
	var plane = document.getElementById('plane'),
		bullet = document.getElementById('bullet'),
		width = window.innerWidth,
		height = window.innerHeight,
		planeHeight = 54,
		planeWidth = 67,
		availHeight = height - planeHeight,
		availWidth = width - planeWidth,
        shots = 0,
        bulletLeft,
        bulletTop;
	document.addEventListener('keydown', function(event) {
		handleKeyEvent(event.keyCode, true)
	}, false);
	document.addEventListener('mousemove', function(event) {
        startBulletLeft = event.clientX;
        startBulletBottom = height - (event.clientY + planeHeight/2);
		plane.style.left = event.clientX - planeWidth / 2 + 'px';
		plane.style.bottom = height - (event.clientY + planeHeight / 2) + 'px';
	},false);
	
	document.addEventListener('keyup', function(event) {
		handleKeyEvent(event.keyCode, false)
	}, false);
	
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
            bullet.style.bottom = bulletTop + 'px';
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
		
		if (event.keyCode == 38) {
			movement.top = pressed;
		}
		
		if (event.keyCode == 40) {
			movement.bottom = pressed;
		}
		
		if (event.keyCode == 37) {
			movement.left = pressed;
		}
		
		if (event.keyCode == 39) {
			movement.right = pressed;
		}

		if (event.keyCode == 32) {
			fire();
		}

	}

    function fire () {
        shots += 0.5;
            console.log(shots);
            if (planeBottom || planeLeft) {
                bulletLeft = (planeLeft + planeWidth/2);
                bulletTop = (planeBottom);
            } else {
                bulletLeft = startBulletLeft;
                bulletTop = startBulletBottom;
            }
            bullet.style.left = bulletLeft + 'px';
        }
	updateState();
}, false);