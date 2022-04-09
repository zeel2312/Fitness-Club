function validatePassword()
{
    var password = document.getElementById("lpassword").value;
    var confirm_password = document.getElementById("confirm_password").value;

        if(password==confirm_password){
            alert("Successfully Registered");
        }
        else{
            alert("Password Doesn't Match");
        }
    
}