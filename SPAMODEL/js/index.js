$(document).ready(function(){
    var sidenav = $(".sidenav");
    var main = $(".main_wrapper");
    var hamburguer = $("#hamburguer");
    var navitem = $(".sidenav .navitem");
    $("#hamburguer").click(function(){
        console.log("button clicked");
        
            if(sidenav.attr("class") == "sidenav active"){
                sidenav.removeClass("active");
                main.removeClass("active");
                hamburguer.removeClass("active");
                navitem.removeClass("active");
            }else{
                sidenav.addClass("active");
                main.addClass("active");
                hamburguer.addClass("active");
                navitem.addClass("active");
            }
           
           });
    $(".sidenav").hover(function(){
        if(sidenav.attr("class") == "sidenav active"){
        }else{
            sidenav.css({"width":"250px"});
            $(".sidenav .navitem span").animate({opacity:1});
        }

    },function(){
        if(sidenav.attr("class") == "sidenav active"){
        }else{
            sidenav.css({"width":"100px"});
            $(".sidenav .navitem span").animate({opacity:0});
        }
        
    });

    $(".sidenav .navitem").click(function(e){
        e.preventDefault();
        var location = $(this).attr("href");
        if(location != "Sair"){
            $.ajax({
                url:"functions/Routes.func.php",
                method:"POST",
                dataType:"JSON",
                data:{url:location},
                success: function(response){
                    if( (response == 'login.view.php') || (response == "" )){                    
                    }else{
                        $(".main_wrapper .container").load('view/'+response);
                    }
                    
                }
            });
        }else{
            $.ajax({
                url:"functions/Sair.func.php",
                method:"POST",
                dataType:"JSON",
                data: {sair: "Sair"},
                success: function(response){
                    if(response.Status == "Logged Out"){
                        window.location.reload(true);
                    }
                }
            })
        }
    });
});

