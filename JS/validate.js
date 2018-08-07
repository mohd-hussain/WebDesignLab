function checkEmail(e){
	var element=e.target;
	if(/[^a-zA-Z0-9@._]/.test(element.value)){
		alert("Email Is InValid! only characters a-z A-Z 0-9 @ . _ are allowed.");
		element.value="";
		return false;
	}

	if(/[^a-zA-Z]/.test(element.value)){
		alert("Email Is InValid! a-z or A-Z are allowed.");
		element.value="";
		return false;

}


var email = document.getElementById('user-email');
email.addEventListener('blur',checkEmail,false);

