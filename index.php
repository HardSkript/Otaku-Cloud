<?php include('header.php'); ?>

<!-- Start of Carousel
===============================-->
<div id="epicCarousel" class="container">
<div id="myCarousel" class="carousel slide">

  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>
    
    <div class="carousel-inner">
    <!-- Carousel Items -->
    	<div class="item active">
        	<img src="images\tsukiko.png" />
            <div class="container">
            	<div class="carousel-caption">
                	<img src="images/caption1.png" alt="Otaku Cloud" />
                    <p style="color: #E100FF;">A friendly environment for all otakus!</p>
                    <p><a class="btn btn-large btn-primary" href="register.php">Sign Up!</a></p>
                </div>
            </div>
        </div>
		
		<div class="item">
        	<img src="OniAi.png" />
            <div class="container">
            	<div class="carousel-caption">
                	<img src="images/caption2.png" alt="Streaming!" />
                    <p style="color: #E100FF;">We will organize streaming time for shows you vote on!</p>
                    <p><a class="btn btn-large btn-primary" href="/stream">View Events</a></p>
                </div>
            </div>
        </div>
		
		<div class="item">
        	<img src="saber.png" />
            <div class="container">
            	<div class="carousel-caption">
                	<img src="images/caption3.png" alt="Forum" />
                    <p style="color: #E100FF;">A place where every otaku can gather and chat!</p>
                    <p><a class="btn btn-large btn-primary" href="/forum">Forum</a></p>
                </div>
            </div>
        </div>
    
    </div>
    
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    	<span class="glyphicon glyphicon-chevron-left"></span>
    </a>
    
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
    	<span class="glyphicon glyphicon-chevron-right"></span>
    </a>

</div>
</div>

 <?php include('footer.php'); ?>