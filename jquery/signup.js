$(document).ready(function(){
    $(".submit_btn").on("click", function(e){
        e.preventDefault();
        const username = document.getElementById("username");
        const password = document.getElementById("password");
        const confirmPass = document.getElementById("confirmPass");

        if(username.value && password.value && confirmPass.value)
        {
            if(password.value === confirmPass.value)
            {
                $.ajax({
                    url: "../backend/signup.php",
                    method: "post",
                    data:{
                        username: username.value,
                        password: password.value
                    },
                    success: function(response)
                    {
                        if(response !== "exist"){
                            alert("Account created!");
                            const videoAdModal = document.getElementById("videoAdModal");
                            const videoAd = document.getElementById("videoAd");
                
                            // Show the video ad modal
                            videoAdModal.style.display = "block";
                
                            // Play the video
                            videoAd.play();
                
                            // Close the video ad modal after 10 seconds
                            setTimeout(function () {
                                closeVideoAd();
                            }, 10000);
                
                        function closeVideoAd() {
                            const videoAdModal = document.getElementById("videoAdModal");
                            const videoAd = document.getElementById("videoAd");
                
                            // Pause the video
                            videoAd.pause();
                
                            // Hide the video ad modal
                            videoAdModal.style.display = "none";
                        }
                        }else{
                            alert("Account already exist!");
                        }
                    },
                    error: function(){
                        alert("Connection error!");
                    }
                })
            }else{
                alert("Password does not match!");
            }
        }
    })
})