$(window).bind("load", function(){
   //alert(window.location);
  $('#loader').fadeOut(600);
    

    
       var today = new Date();
       var h = today.getHours();
    
    if (h < 10)
    {//between 6am and 12pm = morning
        //alert('morning');
        $('#sky').css('background-image','url(/images/morning.png)');
    }else if(h < 17)
    {//between 12pm and 6pm = afternoon
        //alert('afternoon');
        $('#sky').css('background-image','url(/images/afternoon.png)');
    }else if(h < 23)
    {//between 6pm and 12am = evening
        //alert('evening');
        $('#sky').css('background-image','url(/images/evening.png)');
    }else
    {//between 12am and 6am = midnight
        //alert('midnight');
        $('#sky').css('background-image','url(/images/midnight.png)');
    }
 

    function animateResume(){
        //$('.res').hide();
        $('#my-logo').css({'width':100, 'height':100}).attr('src','images/korean-logo.svg').animate({left:500},500);
    }//end animateResume
    
    
    animateResume();
    
    
$('document').ready(function(){
      $(function(){
          $(".heading").typed({
            strings: ["Congrats. You've made it.", "MF: DESIGN | DEVELOP | DEPLOY"],
            typeSpeed: 5,
            backDelay: 1500
          });
      });
    
      $(function(){
          $("h1.success").typed({
            strings: ["Thanks! Message sent", "We'll talk soon :)"],
            typeSpeed: 5,
            backDelay: 2500
          });
      });
    
      $(function(){
          $(".heading.error").typed({
            strings: ["Sorry but there was an error sending your message", "We have NOT RECEIVED it"],
            typeSpeed: 5,
            backDelay: 2500
          });
      });
    
      $(function(){
          $("h1.about").typed({
            strings: ["Kicking butt and taking names", "Mandy Foster -> Developer"],
            typeSpeed: 5,
            backDelay: 1000
          });
      });
    
      $(function(){
          $(".blurb1").typed({
            strings: ["<p>Don't worry, I'm just sprucing things up a bit.</p>"],
            typeSpeed: 5,
              startDelay: 800
          });
      });
    
      $(function(){
          $(".blurb2").typed({
            strings: ["<p>I'm still available for hire and booking, so feel free to drop a line:</p>"],
            typeSpeed: 0,
              startDelay: 1500
          });
      });
    
    $(function(){
       $('.contactMe').hide().delay(1000).fadeIn(1500); 
    });
    
    $(function(){
       $('.validationErrors').hide().delay(1100).fadeIn(1500); 
    });
    
    
    
    /*$('#card').hover(function(){
        $(this).stop().animate({
            height:"400px",
            width:"400px"
        });
    },function(){
        $(this).stop().animate({
            height:"200px",
            width:"200px"
        });
    });*/
    
    $(function(){
        var card = $('#card');
        var cardWidth = card.width();
        var cardHeight = card.height();
        
        var divBody = $('#body');
        var divBodyWidth = divBody.width();
        var divBodyHeight = divBody.height();
        
        var myLogo = $('#my-logo');
        
        //alert(myLogoWidth + ' ' + myLogoHeight + ' ' + divBodyWidth + ' ' + divBodyHeight);
        
        
        //myLogo.animate({height:"20"},4500);        
    });
    
    
    
    var isMobile = { 
    Android: function() { return navigator.userAgent.match(/Android/i); }, 
    BlackBerry: function() { return navigator.userAgent.match(/BlackBerry/i); }, 
    iOS: function() { return navigator.userAgent.match(/iPhone|iPad|iPod/i); }, 
    Opera: function() { return navigator.userAgent.match(/Opera Mini/i); }, 
    Windows: function() { return navigator.userAgent.match(/IEMobile/i); }, 
    any: function() { return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows()); } };
    
    /*
    jQuery(function($) {
        if (!isMobile.any())
        //$('#is-mobile').toggleClass('show hide');
            alert('not mobile');
        if (isMobile.any())
        //$('#is-desktop').toggleClass('show hide');
            alert('mobile');
    });*/
    
    



    
    //alert(currentTime());
        
        
    
    
    //alert('hello');
   // $('ul#navigation li').addClass('active');
    
    var currentPage = window.location.pathname.substring(1);
    
    var navList = $('ul#navigation li');
    
    text = '';
        
    
    /*if(currentPage == ''){
       alert('home'); 
    }else if(currentPage == 'about'){
       alert('about'); 
    }else{
        alert('other');
    }*/
    
    
   /* navList.each(function(li){
        text += $(this).html();
       //alert(text); 
        if($(this).html() == ''){
            alert('homepage');
        }else{
            alert('failure');
        }
    });*/

    

});
    
    
    
});/* end window.bind */