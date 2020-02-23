function checkPass(){
    var pass  = document.getElementById("password").value;
    var rpass  = document.getElementById("rpassword").value;
   if(pass != rpass){
       document.getElementById("submit").disabled = true;
       $('.missmatch').html("Entered Password is not matching!! Try Again");
   }else{
       $('.missmatch').html("");
       document.getElementById("submit").disabled = false;
   }
}