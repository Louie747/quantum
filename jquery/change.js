$(document).ready(function(){
    $("#submit").on("click", function(e){
        e.preventDefault();
        const current = $("#current").val();
        const newPass = $("#newpass").val();
        const rePass = $("#repass").val();
        
        if(current && newPass &&  rePass)
        {
            if(newPass === rePass)
            {
                $.ajax({
                    url: "../backend/changepass.php",
                    method: "post",
                    data:{
                        newPass,
                        current
                    },
                    success: function(response){
                        if(response == "success"){
                            alert("Password updated!");
                            window.location.href = "./ACC_PROFILE.php";
                        }else{
                            alert("Invalid Current Password!");
                        }
                    }
                })
            }else{
                alert("Password does not match!");
            }
        }else{
            alert("Please fill up all the fields");
        }
    }) 
})