<?php
$message = '';
if($_POST['submit']) {
    $title = 'Подписка с Showdev'; 
    $mess =  substr(htmlspecialchars(trim($_POST['email'])), 0, 1000000); 
    // $to - кому отправляем 
    $to = 'marchukilya@gmail.com,vladimir.stasevich@gmail.com,roman.efimushkin@gmail.com'; 
    // $from - от кого 
    $from='showdev@gmail.com'; 

    if(preg_match('/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$/', $_POST['email'])) {
      if (mail($to, $title, $mess, 'From:'.$from)) {
        $message =  '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">&times;</button>'.
                    '&nbsp;&nbsp;Sent successfully</div>';
      } else {
        $message =  '<div class="alert alert-error"><button type="button" class="close" data-dismiss="alert">&times;</button>'.
                    '<strong>Warning!</strong>&nbsp;&nbsp;Sent unsuccessfully</div>';
      }
    } else {
      $message =  '<div class="alert alert-error"><button type="button" class="close" data-dismiss="alert">&times;</button>'.
                  '<strong>Warning!</strong>&nbsp;&nbsp;Incorrect email</div>';
    };
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>ShowDev</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="marchukilya@gmail.com">  
	<link href="/showdev/css3/bootstrap.min.css" rel="stylesheet" type="text/css" />    
	<link href="/showdev/css3/bootstrap-responsive.min.css" rel="stylesheet" type="text/css" />
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <!-- Fav and touch icons -->
    <link rel="shortcut icon" href="../assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
  </head>
  <body>
    <a href="#" class="scrolltop"><span>up</span></a>
    <div class="container-narrow">
      <div class="masthead navbar">
        <div class="navbar-inner">
          <h1>ShowDev</h1>
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <div class="nav-collapse collapse">
            <ul class="nav nav-pills pull-right">
              <li class="active"><a href="#">Home</a></li>
              <li><a href="#proposition" data-section="#proposition">Proposition</a></li>
              <li><a href="#business_model" data-section="#business_model">Business model</a></li>
              <li><a href="#technology" data-section="#technology">Technology</a></li>
              <li><a href="#team" data-section="#team">Team</a></li>
              <li><a href="#portfolio" data-section="#portfolio">Portfolio&nbsp;&nbsp;</a></li>
              <li><a href="#contact" data-section="#contact">Contact</a></li>
              <li><a href="/ru" class="btn-inverse">Rus</a></li>
            </ul>
          </div>
        </div>
      </div>

      <hr>

      <div class="jumbotron">        
        <h1>We build tech prototypes</h1>
        <div id="myCarousel" class="carousel slide">
          <div class="carousel-inner">
            <div class="active item"><img src="/showdev/img/ShowDev_4.jpg" alt="slide1" /></div>
            <div class="item"><img src="/showdev/img/ShowDev_5.jpg" width="900" alt="slide2" /></div>
            <div class="item"><img src="/showdev/img/ShowDev_6.jpg" width="900" alt="slide3" /></div>
            <div class="item"><img src="/showdev/img/ShowDev_7.jpg" width="900" alt="slide4" /></div>
            <div class="item"><img src="/showdev/img/ShowDev_8.jpg" width="900" alt="slide5" /></div>
            <div class="item"><img src="/showdev/img/ShowDev_9.jpg" width="900" alt="slide6" /></div>
            <div class="item"><img src="/showdev/img/ShowDev_10.jpg" width="900" alt="slide7" /></div>
          </div>
          <!-- Carousel nav -->
          <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
          <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
        </div>
        <h3>If you don't know how to build your tech solution - engage with us</h3>
        <p class="lead">We are able to deliver Web/Native software applications as well as solutions in construction/ electronics/ robotics/ ai.</p>

        <div class="row-fluid marketing" id="contact">
          <div class="form-inline email_form">
            <form action="" method="POST">
              <input class="span6" id="appendedInputButton" type="email" name="email" placeholder="email-example@site.com" />
              <input type="submit" class="btn btn-large" value="You will get a response!" name="submit" />
            </form>
            <?php if($_POST['submit']) { echo $message; } ?>
          </div>
        </div>
      </div>

      <div class="row-fluid marketing" id="team">
        <h2 class="section_header">
            <hr class="left visible-desktop">
            <span>Team</span>
            <hr class="right visible-desktop">
        </h2>
        <div class="row-fluid">
          <div class="span6 thumbnail">
            <a class="pull-left" href="http://showcode.ru" target="_blank">
              <img class="media-object mo_team" alt="showcode" width="130" src="/showdev/img/ShowDev_10_1.jpg">
            </a>
            <div class="th_team">
              <h4 class="media-heading">Vladimir Stasevich</h4>
              <p>CEO. Tech professional with 15 years IT-industry background.<br>
Responsible for Product ownership in the Showdev development lifecycle.<br>
Having business development experience with big international banks. <br>
Education: PhD in System Analysis, Graduate in Robotics and AI from Bauman Moscow State Technical University</p>
            </div>
          </div>
          <div class="span6 thumbnail">
            <a class="pull-left" href="http://showstaff.ru" target="_blank">
              <img class="media-object mo_team" alt="showstaff" width="130" src="/showdev/img/ShowDev_10_2.jpg">
            </a>
            <div class="th_team">
              <h4 class="media-heading">Roman Efimushkin</h4>
              <p>CTO. Tech professional with 15 years IT-industry background. Having experience in mechanical and electronics systems design.
Responsible for Development in the Showdev development lifecycle.<br>
Having strong engineering background working in different state backed and commercial projects across different tech domains.
Education: Graduate in Engineering from Bauman Moscow State Technical University</p>
            </div>
          </div>
        </div>
      </div>

      <div class="row-fluid marketing" id="proposition">
        <h2 class="section_header clearfix">
            <hr class="left visible-desktop">
            <span>Proposition</span>
            <hr class="right visible-desktop">
        </h2>
        <div class="row-fluid">
          <div class="span6">
            <h4>Problem</h4>
            <p>While we were implementing internet services showcode.ru and showstaff.ru we ran into the problem:
            <p>We could not find the reliable teams able to deliver the product development with proper quality, with proper
            control over time delivery and with reasonable price.</p>
            <p>The typical issues with existing teams are: </p>
            <ul>
              <li>Low quality, Lack of timely delivery and lack of expertise</li>
              <li>Massiveness and non-agile approach as well as high costs</li>
            </ul>
            <p>We realized the same issue happens with a lot of startupers: People that don't know how to build software, try to
            find the reliable teams and doesn't succeed</p>
          </div>

          <div class="span6">
            <h4>Solution</h4>
            <p>How we solved this? We created the product development team ourselves, prove it able to deliver and now we're ready to offer the team engagement to public.</p>

            <p>WWe've created the solution:</p>
            <ul>
              <li>The development cycle with fully distributed team (we don't have office!)</li>
              <li>Online collaboration techniques</li>
              <li>Created and setup specialists engagement model</li>
            </ul>
            <p>We've build the robust and scalable development process and now we can announce:<br>Have an idea? Don't know how to create your tech solution? Engage with us. We know how to deliver</p>
          </div>
        </div>
      </div>

      <div class="row-fluid marketing" id="business_model">
        <h2 class="section_header">
            <hr class="left visible-desktop">
            <span>Business model</span>
            <hr class="right visible-desktop">
        </h2>
        <div class="row-fluid">
          <div class="span12">
            <p>3 types of partnerships are considered:</p>
            <ul>
              <li>Preferable: Moderate level of payments for our engagement (below the most competition) + equity in the business</li>
              <li>Equity not possible: Service engagement model with aligned to market payments level. Product IP ownership terms are negotiable</li>
              <li>Payments not possible: No payment, only equity in business. Considered to be our prop investment and will be a separate stream of business value through running own products</li>
            </ul>
          </div>
        </div>
      </div>

      <div class="row-fluid marketing" id="technology">
        <h2 class="section_header">
            <hr class="left visible-desktop">
            <span>Technology</span>
            <hr class="right visible-desktop">
        </h2>
        <div class="row-fluid">
          <div class="span12">
            <p>Web, Mobile, Native. Construction, Electronics, Robotics.</p>
          </div>
        </div>
      </div>

      <div class="row-fluid marketing" id="portfolio">
        <h2 class="section_header">
            <hr class="left visible-desktop">
            <span>Portfolio</span>
            <hr class="right visible-desktop">
        </h2>
        <div class="row-fluid">
          <div class="span6 thumbnail">
            <a class="pull-left" href="http://showcode.ru" target="_blank">
              <img class="media-object" alt="showcode" src="/showdev/img/showcode_.png">
            </a>
            <div class="">
              <h4 class="media-heading">Showcode.ru</h4>
              <p>Electronic ticketing service with the ready to use customer and organizer parts. You just register, create event, create tickets, promote event with selling tickets online. Web, iOS applications were done with agile iterative delivery</p>
            </div>
          </div>
          <div class="span6 thumbnail">
            <a class="pull-left" href="http://showstaff.ru" target="_blank">
              <img class="media-object" alt="showstaff" src="/showdev/img/showstaff.png">
            </a>
            <div class="">
              <h4 class="media-heading">Showstaff.ru</h4>
              <p>Staff management service for restaraunts staff. Planning, actuals tracking, analytics. Web application. The development has been being done in Scrum process with iterative delivery</p>
            </div>
          </div>
        </div>
      </div>
      <hr>
      <div class="footer">
        <p>&copy; ShowDev.ru 2012</p>
      </div>
    </div>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<!-- <script src="/showdev/js/cufon-yui.js"></script>
<script src="/showdev/js/Neo_Sans_Pro_Light_300-Neo_Sans_Pro_700.font.js"></script> -->
<script src="http://twitter.github.com/bootstrap/assets/js/bootstrap.min.js"></script>    
<script>
$(function () {

    //Cufon.replace('h1');

    $(window).scroll(function(){
        // add navbar opacity on scroll
        if ($(this).scrollTop() > 100) {
            $(".navbar.navbar-fixed-top").addClass("scroll");
        } else {
            $(".navbar.navbar-fixed-top").removeClass("scroll");
        }

        // global scroll to top button
        if ($(this).scrollTop() > 300) {
            $('.scrolltop').fadeIn();
        } else {
            $('.scrolltop').fadeOut();
        }        
    });

    // scroll back to top btn
    $('.scrolltop').click(function(){
        $("html, body").animate({ scrollTop: 0 }, 700);
        return false;
    });
    
    // scroll navigation functionality
    $('.scroller').click(function(){
      var section = $($(this).data("section"));
      var top = section.offset().top;
        $("html, body").animate({ scrollTop: top }, 700);
        return false;
    });
});
</script></body></html>