/**
 * 
 */

var planeLeft = 0,
	planeBottom = 0,
	speed = 5,
	movement = {
	left: false,
	right: false,
	top: false,
	bottom: false
};

window.addEventListener('load', function() {
	var plane = document.getElementById('plane'),
		width = window.innerWidth,
		height = window.innerHeight,
		planeHeight = 54,
		planeWidth = 67,
		availHeight = height - planeHeight,
		availWidth = width - planeWidth;
	
	document.addEventListener('keydown', function(event) {
		console.log(event.keyCode);
		handleKeyEvent(event.keyCode, true)
	}, false);
	
	document.addEventListener('keyup', function(event) {
		handleKeyEvent(event.keyCode, false)
	}, false);
	
	function updatePlanePosition() {
		var initialBottom = planeBottom;
		var initialLeft = planeLeft;
		
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
	}
	
	/*setInterval(function() {
		updatePlanePosition()
	}, 1000/30)*/
	
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
	}
	updateState();

	function fire (keyCode) {

	}
}, false);