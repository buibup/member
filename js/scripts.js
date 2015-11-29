$(document).ready(function(){
	
});

function login() {
	loginContent();
	loginBtn();
}
function signup(){
	signupContent();
	signupBtn()
}
function signupBtn() {
	document.getElementById('sigbtn').setAttribute('class', 'tab active');
	document.getElementById('logbtn').setAttribute('class', 'tab');
}
function loginBtn() {
	document.getElementById('sigbtn').setAttribute('class', 'tab');
	document.getElementById('logbtn').setAttribute('class', 'tab active');
}
function loginContent() {
	document.getElementById('tab-login').setAttribute("class",'');
	document.getElementById('tab-signup').setAttribute("class",'tab-content');
}
function signupContent() {
	document.getElementById('tab-login').setAttribute("class",'tab-content');
	document.getElementById('tab-signup').setAttribute("class",'');
}