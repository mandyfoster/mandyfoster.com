$('document').ready(function(){
      $(function(){
          $(".heading").typed({
            strings: ["Congrats. You've made it.", "MF: DESIGN | DEVELOP | DEPLOY"],
            typeSpeed: 5,
            backDelay: 1500
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
    
    $(function(){
       $('ul.nav li').hide().delay(1200).fadeIn(500); 
    });
    
    $(function(){
       $('ul.footer li').hide().delay(1200).fadeIn(500); 
    });
    
    //alert('hi');
});