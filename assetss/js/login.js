	console.log("login");	
	function loginform(){
	var name=document.getElementById("user_name").value;
	var password=document.getElementById("password").value;

	if(name =="") {
		alert("Enter the username");
		return false;
	}
	if(password =="") {
		alert("Enter the password");
		return false;
	}

}