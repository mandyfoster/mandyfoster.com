<?php
    $currentDate = date("Y");
?>
<!doctype html>
<html>
    <head>
        <meta name="robots" content="noindex,nofollow">
        <title>Mandy Foster | Design | Develop | Deploy</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script type="text/javascript">
            $('document').ready(function(){
                
                $('.hiddenValue').html("first");
                
                $('#welcomeNote').hide().fadeIn('slow');
                
                $('#wrapper').hover(function(){
                    //alert('hello');
                    $('#gif, #gif2, #gif3, #gif4, #gif5, #gif6, #gif7').css('background-color', '#a3a3a3');
                },function(){
                    //alert('goodbye');
                    $('#gif, #gif2, #gif3, #gif4, #gif5, #gif6, #gif7').css('background-color', '#ccc');
                });
                
                $('#wrapper').click(function(e){
                    var hiddenValue = $('.hiddenValue').html();
                    if( hiddenValue == "first" ){
                        $('#welcomeNote').fadeOut('slow').hide().html('<p class="welcome">For real! I would love to show you some wicked stuff! But I have to clean up and look fresh, ya know?</p>').fadeIn('slow');
                        $('.hiddenValue').html("second");
                    }else if( hiddenValue == "second" ){
                        $('#welcomeNote').fadeOut('slow').hide().html('<p class="welcome">Come on now, you can wait a little while, right?</p>').fadeIn('slow');
                        $('.hiddenValue').html("third");
                    }else{
                        e.preventDefault();
                        $('#welcomeNote').fadeOut('slow').hide().html('<p class="welcome">.......</p>').fadeIn('slow');
                    }
                });
                
                $('a').click(function(){
                    $('#wrapper').fadeOut('slow');
                    $('#welcomeNote').fadeOut('slow');
                });
            });
        </script>
        <style>
            * {
                margin:0 auto;
            }
            
            body {
                background:#eeeeee;
                overflow:hidden;
            }
            
            .hiddenValue {
                display:none;
            }
            
            p, a {
                font-family:'arial', sans-serif;
            }
            
            a {
                color: #ccc;
            }
            
            a:hover {
                color:#a3a3a3;
            }
            
            p.tm {
                color:#ccc;
                font-size:.75em;
                letter-spacing:2px;
                position:absolute;
                bottom:10px;
                right:10px;
            }
            
            p.welcome {
                color:#a3a3a3;
                font-size:1.25em;
            }
            
            p.footer {
                color:#ccc;
            }
            
            #wrapper {
                height:75px;
                width:120px;
                position:absolute;
                top:calc(25%);
                left:calc(50% - 60px);
                text-align:center;
                cursor: pointer;
            }
            
            #welcomeNote {
                width:500px;
                position:absolute;
                top:calc(25% + 150px);
                left:calc(50% - 250px);
            }
            
            footer {
                width:500px;
                text-align:center;
                position:absolute;
                bottom:calc(5%);
                left:calc(50% - 250px);
            }
            
            #gif, #gif2, #gif3, #gif4, #gif5, #gif6, #gif7 {
                background:#ccc;
                border-radius:20px;
                height:10px;
                width:10px;
                position:absolute;
                bottom:10px;
            }
            
            #gif {
                z-index:2;
                left:calc(50% - 5px);
                -webkit-animation: one 5s linear;
                animation: one 5s linear;
                -webkit-animation-fill-mode:forwards;
                animation-fill-mode:forwards;
            }
            
            #gif2 {
                z-index:3;
                left:calc(50% - 5px);
                -webkit-animation: two 5s linear;
                animation: two 5s linear;
                -webkit-animation-fill-mode:forwards;
                animation-fill-mode:forwards;
            }
            
            #gif3 {
                z-index:4;
                right:calc(50% - 5px);
                -webkit-animation: three 5s linear;
                animation: three 5s linear;
                -webkit-animation-fill-mode:forwards;
                animation-fill-mode:forwards;
            }
            
            #gif4 {
                z-index:5;
                right:calc(50% - 5px);
                -webkit-animation: four 5s linear;
                animation: four 5s linear;
                -webkit-animation-fill-mode:forwards;
                animation-fill-mode:forwards;
            }
            
            #gif5 {
                z-index:6;
                left:calc(50% - 5px);
                -webkit-animation: five 5s linear;
                animation: five 5s linear;
                -webkit-animation-fill-mode:forwards;
                animation-fill-mode:forwards;
            }
            
            #gif6 {
                z-index:7;
                left:calc(50% - 5px);
                -webkit-animation: six 5s linear;
                animation: six 5s linear;
                -webkit-animation-fill-mode:forwards;
                animation-fill-mode:forwards;
            }
            
            #gif7 {
                z-index:8;
                left:calc(50% - 5px);
                -webkit-animation: seven 5s linear;
                animation: seven 5s linear;
                -webkit-animation-fill-mode:forwards;
                animation-fill-mode:forwards;
            }
            
            @keyframes one { /*red*/
                0% { width:10px; }
                16.6667% { width:30px; left:calc(50% - 15px); }
                33.3334% { width:30px; left:calc(50% - 15px); }
                50.0001% { width:30px; left:calc(50% - 15px); }
                66.6668% { width:30px; left:calc(50% - 15px); }
                83.3335% { width:30px; left:calc(50% - 15px); }
                100% { width:30px; left:calc(50% - 15px); }
            }
            
            @keyframes two { /*orange*/
                0% { width:10px; }
                16.6667% { height: 10px; left:calc(50% - 15px); }
                33.3334% { height:50px; left:calc(50% - 15px); }
                50.0001% { height:50px; left:calc(50% - 15px); }
                66.6668% { height:50px; left:calc(50% - 15px); }
                83.3335% { height:50px; left:calc(50% - 15px); }
                100% { height:50px; left:calc(50% - 15px); }
            }
            
            @keyframes three { /*yellow*/
                0% { width:10px; }
                16.6667% { height: 10px; right:calc(50% - 15px); }
                33.3334% { height:50px; right:calc(50% - 15px); }
                50.0001% { height:50px; right:calc(50% - 15px); }
                66.6668% { height:50px; right:calc(50% - 15px); }
                83.3335% { height:50px; right:calc(50% - 15px); }
                100% { height:50px; right:calc(50% - 15px); }
            }
            
            @keyframes four { /*green*/
                0% { width:10px; }
                16.6667% { bottom:10px; right:calc(50% - 15px); }
                33.3334% { bottom:50px; width:10px; right:calc(50% - 15px); }
                50.0001% { bottom:50px; width:50px; right:calc(50% - 55px); }
                66.6668% { bottom:50px; width:50px; right:calc(50% - 55px); }
                83.3335% { bottom:50px; width:50px; right:calc(50% - 55px); }
                100% { bottom:50px; width:50px; right:calc(50% - 55px); }
            }
            
            @keyframes five { /*blue*/
                0% { width:10px; }
                16.6667% { bottom:10px; left:calc(50% - 15px); }
                33.3334% { transform:rotate(-43deg); bottom:50px; width:10px; left:calc(50% - 15px); }
                50.0001% { transform:rotate(-43deg); bottom:30px; width:69px; left:calc(50% - 66px); }
                66.6668% { transform:rotate(-43deg); bottom:30px; width:69px; left:calc(50% - 66px); }
                83.3335% { transform:rotate(-43deg); bottom:30px; width:69px; left:calc(50% - 66px); }
                100% { transform:rotate(-43deg); bottom:30px; width:69px; left:calc(50% - 66px); }
            }
            
            @keyframes six { /*indigo*/
                0% { height:10px; width:10px; }
                16.6667% { bottom:10px; height:10px; left:calc(50% - 15px); }
                33.3334% { bottom:50px; height:10px; width:10px; left:calc(50% - 15px); }
                50.0001% { bottom:10px; height:10px; width:10px; left:calc(50% - 60px); }
                66.6668% { bottom:10px; height:50px; width:10px; left:calc(50% - 60px); }
                83.3335% { bottom:10px; height:50px; width:10px; left:calc(50% - 60px); }
                100% { bottom:10px; height:50px; width:10px; left:calc(50% - 60px); }
            }
            
            @keyframes seven { /*violet*/
                0% { height:10px; width:10px; }
                16.6667% { bottom:10px; height:10px; left:calc(50% - 15px); }
                33.3334% { bottom:50px; height:10px; width:10px; left:calc(50% - 15px); }
                50.0001% { bottom:10px; height:10px; width:10px; left:calc(50% - 60px); }
                66.6668% { bottom:50px; height:10px; width:10px; left:calc(50% - 60px); }
                83.3335% { transform:rotate(43deg); bottom:40px; height:10px; width:35px; left:calc(50% - 60px); }
                100% { transform:rotate(43deg); bottom:40px; height:10px; width:35px; left:calc(50% - 60px); }
            }
            
            /* WEBKIT */
            @-webkit-keyframes one { /*red*/
                0% { width:10px; }
                16.6667% { width:30px; left:calc(50% - 15px); }
                33.3334% { width:30px; left:calc(50% - 15px); }
                50.0001% { width:30px; left:calc(50% - 15px); }
                66.6668% { width:30px; left:calc(50% - 15px); }
                83.3335% { width:30px; left:calc(50% - 15px); }
                100% { width:30px; left:calc(50% - 15px); }
            }
            
            @-webkit-keyframes two { /*orange*/
                0% { width:10px; }
                16.6667% { height: 10px; left:calc(50% - 15px); }
                33.3334% { height:50px; left:calc(50% - 15px); }
                50.0001% { height:50px; left:calc(50% - 15px); }
                66.6668% { height:50px; left:calc(50% - 15px); }
                83.3335% { height:50px; left:calc(50% - 15px); }
                100% { height:50px; left:calc(50% - 15px); }
            }
            
            @-webkit-keyframes three { /*yellow*/
                0% { width:10px; }
                16.6667% { height: 10px; right:calc(50% - 15px); }
                33.3334% { height:50px; right:calc(50% - 15px); }
                50.0001% { height:50px; right:calc(50% - 15px); }
                66.6668% { height:50px; right:calc(50% - 15px); }
                83.3335% { height:50px; right:calc(50% - 15px); }
                100% { height:50px; right:calc(50% - 15px); }
            }
            
            @-webkit-keyframes four { /*green*/
                0% { width:10px; }
                16.6667% { bottom:10px; right:calc(50% - 15px); }
                33.3334% { bottom:50px; width:10px; right:calc(50% - 15px); }
                50.0001% { bottom:50px; width:50px; right:calc(50% - 55px); }
                66.6668% { bottom:50px; width:50px; right:calc(50% - 55px); }
                83.3335% { bottom:50px; width:50px; right:calc(50% - 55px); }
                100% { bottom:50px; width:50px; right:calc(50% - 55px); }
            }
            
            @-webkit-keyframes five { /*blue*/
                0% { width:10px; }
                16.6667% { bottom:10px; left:calc(50% - 15px); }
                33.3334% { transform:rotate(-43deg); bottom:50px; width:10px; left:calc(50% - 15px); }
                50.0001% { transform:rotate(-43deg); bottom:30px; width:69px; left:calc(50% - 66px); }
                66.6668% { transform:rotate(-43deg); bottom:30px; width:69px; left:calc(50% - 66px); }
                83.3335% { transform:rotate(-43deg); bottom:30px; width:69px; left:calc(50% - 66px); }
                100% { transform:rotate(-43deg); bottom:30px; width:69px; left:calc(50% - 66px); }
            }
            
            @-webkit-keyframes six { /*indigo*/
                0% { height:10px; width:10px; }
                16.6667% { bottom:10px; height:10px; left:calc(50% - 15px); }
                33.3334% { bottom:50px; height:10px; width:10px; left:calc(50% - 15px); }
                50.0001% { bottom:10px; height:10px; width:10px; left:calc(50% - 60px); }
                66.6668% { bottom:10px; height:50px; width:10px; left:calc(50% - 60px); }
                83.3335% { bottom:10px; height:50px; width:10px; left:calc(50% - 60px); }
                100% { bottom:10px; height:50px; width:10px; left:calc(50% - 60px); }
            }
            
            @-webkit-keyframes seven { /*violet*/
                0% { height:10px; width:10px; }
                16.6667% { bottom:10px; height:10px; left:calc(50% - 15px); }
                33.3334% { bottom:50px; height:10px; width:10px; left:calc(50% - 15px); }
                50.0001% { bottom:10px; height:10px; width:10px; left:calc(50% - 60px); }
                66.6668% { bottom:50px; height:10px; width:10px; left:calc(50% - 60px); }
                83.3335% { transform:rotate(43deg); bottom:40px; height:10px; width:35px; left:calc(50% - 60px); }
                100% { transform:rotate(43deg); bottom:40px; height:10px; width:35px; left:calc(50% - 60px); }
            }

        </style>
    </head>
    <body>
        <div id="wrapper">
            <div id="gif"></div>
            <div id="gif2"></div>
            <div id="gif3"></div>
            <div id="gif4"></div>
            <div id="gif5"></div>
            <div id="gif6"></div>
            <div id="gif7"></div>
            <p class="tm">tm</p>
        </div>
        <div id="welcomeNote">
            <p class="welcome">Just so you know, I'm glad you're here; but unfortunately things are still under construction. Come back later.</p>
        </div>
        <footer>
            <p class="footer">&copy; 2014 - <?=$currentDate;?> Mandy Foster || <a href="contact.php">Contact</a></p>
        </footer>
        
        <div class="hiddenValue"></div>
    </body>
</html>