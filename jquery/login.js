$(document).ready(function(){
    $(".submit_btn").on("click", function(e){
        e.preventDefault();
        const username = document.getElementById("username").value;
        const password = document.getElementById("password").value;

        if(username && password)
        {
            $.ajax({
                url: "../backend/login.php",
                method: "post",
                data:{
                    username,
                    password
                },
                success: function(response){
                    if(response === "success"){
                        alert("Log in successfully!");
                        window.location.href = "./HOMEPAGE.PHP";
                    }else if(response === "invalid"){
                        alert("Invalid password!");
                    }else{
                        alert("Account not found!");
                    }
                },
                error: function(){
                    alert("Connection Error!");
                }
            })
        }
    })
})