$(document).ready(function(){
		document.getElementById('signup').hidden = true
	});
		function signup(){
			document.getElementById('login').hidden = true
			document.getElementById('signup').hidden = false
			document.getElementById('sigbtn').setAttribute('class','tab active');
			document.getElementById('logbtn').setAttribute('class','tab');
		}
		function login(){
			document.getElementById('login').hidden = false
			document.getElementById('signup').hidden = true
			document.getElementById('sigbtn').setAttribute('class','tab');
			document.getElementById('logbtn').setAttribute('class','tab active');
		}