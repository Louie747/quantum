$(document).ready(function(){
    $(".color-js").on("click", function(){
        const skin = $(this).val();
        
        $.ajax({
            url: "../backend/skin.php",
            method: "post",
            data:{
                skin
            },
            success: function(response){
                if(response !== "invalid"){
                    alert("Skin changed successfully!");
                }else{
                    alert("This skin is not yet unlock!");
                }
            },
            error: function (){
                alert("Connection Error!");
            }
        })
    })
})