$(document).ready(function(){
    $(".color-js").on("click", function(e){
        e.preventDefault();
        const skin = $(this).val();
        
        $.ajax({
            url: "../backend/marketplace.php",
            method: "post",
            data:{
                skin
            },
            success: function(response){
                if(response === "exist"){
                    alert("You already have this skin!");
                }else if(response === "invalid"){
                    alert("Insufficient gold!");
                }else{
                    alert("Purchased success!");
                    window.location.href = "./MARKETPLACE.php";
                }
            },
            error: function(){
                alert("Connection Error!");
            }
        })
    })
})