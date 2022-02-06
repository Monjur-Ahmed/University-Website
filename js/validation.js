function validation(){

            var fname = document.getElementById('fname').value;
            var lname = document.getElementById('lname').value;
			var sid = document.getElementById('sid').value;
			var email = document.getElementById('email').value;
			var password = document.getElementById('password').value;
			var regName = /^[a-z ,.'-]+$/i
			var regularExpression = /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{5,15}$/;
			var emailValidate = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

		
        //First Name
		if(fname == ""){
			document.getElementById('pfname').innerHTML ="Please fill the First Name  field";
			return false;
		}
	
		if(!regName.test(fname)){
			document.getElementById('pfname').innerHTML ="Only characters are allowed";
			return false;
		}
		else {
			document.getElementById('pfname').style="display:none";
		}

        //Last Name
        if(lname == ""){
			document.getElementById('plname').innerHTML ="Please fill the Last Name  field";
			return false;
		}
		
		if(!regName.test(lname)){
			document.getElementById('plname').innerHTML ="Only characters are allowed";
			return false;
		}
		else{
			document.getElementById('plname').style="display:none";
		}



	    //Student ID Validation
		if(sid=="") {
		    document.getElementById('psid').innerHTML ="Please fill up Student ID field";
		    return false;
		}
		if(isNaN(sid)) {
		    document.getElementById('psid').innerHTML ="Only numbers are allowed";
		    return false;
		}
		if(sid.length!=10) {
			document.getElementById('psid').innerHTML ="Student ID Must be 10 digit";
			return false;	
		   }
		else{
			document.getElementById('psid').style="display:none";
		}


	
       //Email Validation
		if(email== ""){
			document.getElementById('pemail').innerHTML ="Please fill the email field";
			return false;
		}
		if (!emailValidate.test(email))
       {
			document.getElementById('pemail').innerHTML ="You have entered an invalid email address!";
            return (false);
		}
		else{
			document.getElementById('pemail').style="display:none";
		}
    


		
       //Password Validation
		if(password==""){
			document.getElementById('ppassword').innerHTML ="Please fill the password field";
			return false;
		}
		if((password.length <5) || (password.length > 15)) {
			document.getElementById('ppassword').innerHTML ="Passwords lenght must be between  5 to 15";
			return false;	
		}
		if(!regularExpression.test(password)) {
			document.getElementById('ppassword').innerHTML ="Password should contain atleast one number and one special character";
		return false;
		}
		else{
			document.getElementById('ppassword').style="display:none";
		}
		

}