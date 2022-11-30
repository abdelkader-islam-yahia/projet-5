$(document).ready(function(){
    $('.parallax').parallax();
    $('.carousel.carousel-slider').carousel({
      
      indicators: true,
      });
    $('.dropdown-trigger').dropdown();
    $('.sidenav').sidenav();
    $('.modal').modal();
    });
    $('#antoine1').on("mouseover",function(){
      $("body").html("<video width='29%' style='margin:0 auto' src='img/antoine1.mp4'></video>");
      $("video").get(0).play();
   
 })
    
 $('#abdel2').on("click",function(){
   $("#cart1").attr("src","img/abdel2.jpg");
 })

 $('#loren').on("click",function(){
  $("#cart2").attr("src","img/loren.jpg");
})
 
  