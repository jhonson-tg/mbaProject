<?php
 	require 'mainpage_header.php';
 ?>

<!-- <nav class="navbar">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        		<span class="icon-bar"></span>
        		<span class="icon-bar"></span>
        		<span class="icon-bar"></span> 
      		</button>
		</div>
		<div class="navbar-body" align="center">
			<div class="collapse navbar-collapse" id="myNavbar">
			<ul class="nav navbar-nav" style="margin-left: 500px">
				<li class="nav-item">
					<button class="btn btn-info btn-lg btn_size">About Us</button>
				</li>
				<li class="nav-item">
					<button class="btn btn-info btn-lg btn_size">Opt Subjects</button>
				</li>
				<li class="nav-item">
					<button class="btn btn-info btn-lg btn_size">My Subjects</button>
				</li>
				<li class="nav-item">
					<button class="btn btn-info btn-lg btn_size">Team</button>
				</li>
				<li class="nav-item">
					<button class="btn btn-info btn-lg btn_size">Sign Out</button>
				</li>
				<li class="nav-item">
					<button class="btn btn-info btn-lg btn_size">Contact Us</button>
				</li>
			</ul>
		</div>
		</div>

	<div class="navbar-footer">
			
		</div>	
	</div>
</nav>
 -->
<div style="background-color: #000;margin-top: -20px;">
  <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#mydiv" aria-expanded="false">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#go" class="scroll"><b>About Us</b></a>
                </div>
                <div id="mydiv" class="navbar-collapse collapse" aria-expanded="false">
                    <ul class="nav navbar-nav">
                        <li><a href="#go">Opt Subject</a></li>
                        <li><a href="">My Subjects</a></li>
                        <li><a href="insert.php">Team</a></li>
                        <li><a href="">Contact Us</a></li>
                        <li style="margin-left: 300px"><a href="">Sign Out</a></li>
                    </ul>
                </div>
            </div>
        </nav>
  </div>      
<div class="container" style="margin-top: -19 px"> 
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="img/banner1.jpg" alt="Los Angeles" style="width:1600px;height: 500px;">
      </div>

      <div class="item">
        <img src="img/banner3.jpg" alt="Chicago" style="width:130%;height: 500px;">
      </div>
    
      <div class="item">
        <img src="img/banner2.jpg" alt="New york" style="width:130%;height: 500px;">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>


<div class="container" style="margin-top: 20px" align="center" id="go">
  <div class="jumbotron" style="width: 60%">
    <h2 align="center" style="background: #186EA7; color: #fff; height: 5%;border: 1px solid #000; border-radius: 5px;">St. Aloysius Institute of Management and Information Technology</h2>
    <p style="font-family: serif,monospace;" align="justify" class="effects">St Aloysius Institute of Management & Information Technology (AIMIT) is the new campus for MBA and IT programmes offered by St Aloysius College (Autonomous), Mangalore.</p>
    <p style="font-family: serif,monospace;" align="justify" class="effects">At AIMIT, students come first. All our courses are designed with your career prospects in mind. We offer excellent education, opportunities to engage with industry, state-of-the-art facilities, and access to an ever-growing alumni network. The AIMIT experience helps graduates become well-rounded, confident and skilled professionals – making a positive impact in their workplace and community.</p>
    
      
      <div class="collapse" id="more">
        <h2 align="center" style="background: #186EA7; color: #fff; height: 5%;border: 1px solid #000; border-radius: 5px;">Vision</h2>
        <p style="font-style: italic;" align="justify">“Empowering youth through excellence in education to shape a better future for humankind”</p>

        <h2 align="center" style="background: #186EA7; color: #fff; height: 5%;border: 1px solid #000; border-radius: 5px;">Mission</h2>
        <p style="font-style: italic;" align="justify">The Jesuit traditions of educational excellence, leadership and service to others will guide all our programs at St. Aloysius College (which is a Christian Minority Institution, run by the Fathers of the Society of Jesus). By fusing traditional wisdom and human values with learning and research, the College seeks to foster excellence, creativity and innovation in all our students. Our graduates will be individuals of high ethics, socially responsible, ecologically sensitive, professionally dedicated with a thirst for lifelong learning and commitment to build communities of human solidarity and compassion.</p>

      </div>
       <div align="center"><button class="btn btn-primary" data-toggle="collapse" data-target="#more" id="see-less">See more</button></div>

  </div>
  

</div>

<script type="text/javascript">
  $(document).ready(function(){
    $("#see-less").click(function(){
      $(this).text($(this).text() == 'See more' ? 'See less' : 'See more');
    });
     $(".scroll").click(function(){   
      event.preventDefault();
      $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
    });
  });

  $(window).load(function(){
    $('#mydiv ul li a').bind('click',function(event){
      var $anchor = $(this);
      $('html, body').stop().animate({
        scrollTop: $($anchor).attr('href')).offset().top-102
      },1500,'easeInOutExpo');
    });
  });

  
</script>
</body>
</html>