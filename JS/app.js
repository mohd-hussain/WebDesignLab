$(function() {
	$('#rollno').on('blur',function(){
		if(!/(\d{2}((CO)|(DCO)|(EE)|(DEE)|(EX)|(DEX)|(ME)|(DME)|(CE)|(DCE)|(CES)|(DCES))\d{2,3})/i.test(this.value)){
			alert("Invalid Roll no");
			this.value="";
		
			$(this).focus();
		
		}
	});

	$('#sname').on('keypress',function(e){
		if(/([A-Z-])\w+/.test(e.key)){
			alert("Invalid name only alphabets are allowed");
			this.value="";
			$(this).focus();
			return false;
		}
	});

	$('#semail').on('blur',function(e){

		if(/[^((\w*\d*_?.?){1})@(\w*\d*\w*){1}.(\w*\d*\w*){1})]/){

		}	
	});


});