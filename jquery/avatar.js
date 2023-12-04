$(document).ready(function(){
    $(".avatar-js").on("click", function(){
        const avatar = $(this).find("img").attr("src");
        $.ajax({
            url: "../backend/avatar.php",
            method: "post",
            data:{
                avatar
            },
            success: function(){
                window.location.href = "./ACC_PROFILE.php";
            },
            error: function(){
                alert("Connection Error!");
            }
        })
    })
})