$(document).ready( function () {


    // $("#cartwindow").hide();
    // $("#carticon2").hide();
    // $('.innerwindow').hide()
    $("#nav2").hide();


    $(".uparrow").hide();

    $(".closemenu").hide(); 

    $(".menuline").click(function(){
        $(".closemenu").show();
        $(".menuline").hide();
        $("#nav2").toggle(0);

    })

    $(".closemenu").click(function(){
        $(".menuline").show();
        $(".closemenu").hide();
        $("#nav2").toggle(0);
    });
    
    
$(".cross").click(function(){
   
});

// $("#carticon2").on('click', function(){

//     $('#cartwindow').toggle();
     
// })

    



$(".submit1").click(function(){
    $(".hide1").toggleClass("box1");
    $(".uparrow1").toggle();
    $(".rightarrow1").toggle();
    $(".submit2").toggleClass("submitmargin")
})

$(".submit2").click(function(){
    $(".hide2").toggleClass("box1");
    $(".uparrow2").toggle();
    $(".rightarrow2").toggle();
    $(".submit3").toggleClass("submitmargin")
})

$(".submit3").click(function(){
    $(".hide3").toggleClass("box3");
    $("#uparrow3").toggle();
    $("#rightarrow3").toggle();
    $(".submit4").toggleClass("submitmargin3")
})

$(".submit4").click(function(){
    $(".hide4").toggleClass("box1");
    $("#uparrow4").toggle();
    $("#rightarrow4").toggle();
    $(".submit5").toggleClass("submitmargin")
})

$(".submit5").click(function(){
    $(".hide5").toggleClass("box1");
    $("#uparrow5").toggle();
    $("#rightarrow5").toggle();
    $(".submit6").toggleClass("submitmargin")
})

$(".submit6").click(function(){
    $(".hide6").toggleClass("box1");
    $("#uparrow6").toggle();
    $("#rightarrow6").toggle();
    $(".submit7").toggleClass("submitmargin")
})

$(".submit7").click(function(){
    $(".hide7").toggleClass("box1");
    $("#uparrow7").toggle();
    $("#rightarrow7").toggle();
    $(".submit8").toggleClass("submitmargin3")

    
})

$(".submit8").click(function(){
    $(".hide8").toggleClass("box1");
    $("#uparrow8").toggle();
        $("#rightarrow8").toggle()
    $(".submit9").toggleClass("submitmargin")
    
})

$(".submit9").click(function(){
    $(".hide9").toggleClass("box1");
    $("#uparrow9").toggle();
        $("#rightarrow9").toggle();
    $(".submit10").toggleClass("submitmargin")
    
})

$(".submit10").click(function(){
    $(".hide10").toggleClass("box1");
    $("#uparrow10").toggle();
        $("#rightarrow10").toggle();
    
})



});