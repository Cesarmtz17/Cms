$(document).ready(function(){
    var root = "http://localhost/cms/";
    
    $(".btnAdminLogIn").on("click", function(){
        var usuario = $(".txtUsuarioLogin").val().trim(),
            pass = $(".txtPassLogin").val().trim();

        
        $.ajax({
            type: "POST",
            url: root + "resources/php/admin_action/login.php",
            data: {
                usuario: usuario,
                pass: pass
            },
             success: function(data){
                if(data === "true"){
                        window.location.href = "http://localhost/cms/";
                   }else if(data === "false"){
                       alert("Sus credenciales no coinciden, por favor intente de nuevo.");
                   }
            }
        });
    });
});