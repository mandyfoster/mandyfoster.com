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
    
    $(function(){
       $('ul.nav li').hide().delay(1200).fadeIn(500); 
    });
    
    $(function(){
       $('.aboutPage').hide().delay(1200).fadeIn(500); 
    });
    
    $(function(){
       $('ul.footer li').hide().delay(1200).fadeIn(500); 
    });
    
    
    var currentPage = window.location.pathname.substring(1);
    var lis = document.getElementById("navigation").getElementsByTagName("a");
    //var n = lis.array().innerHTML;
    //alert(lis[2].innerHTML);
    
    var text = "";
    
    //var navList = new Array(lis);
    var prop;
    for(prop in lis){
        text += lis[prop] + " ";
    }
    
    /*for(i=0;i<navList.length;i++){
        text += navList[i].innerHTML + currentPage;
        
        //if link html == currentPage
        // take x change class
        //else take x change class to default  
    }*/
    
    
    
    alert(text);

    

    
    //alert('hi');
});