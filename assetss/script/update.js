console.log("update");	
function updateform(){
var id=document.getElementById("status").value;
// var password=document.getElementById("password").value;

if(id =="") {
    // alert("Update Successfully");
    $message = "Username and/or Password incorrect.\\nTry again.";
    echo $message;
    redirect(base_url().'index.php/Welcome/edit_recep','refresh');
   
    return true;
}


}