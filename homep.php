<html>
 <head>
   <script>
    var name=prompt("Enter your name:","Name");
   </script>
   <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js" ></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="style.css">
   <script src="http://code.jquery.com/jquery-latest.js"></script>
<script type="text/javascript" src="effects.js"></script>
  </head>
 <body>
   <div class="container">
     <div class= "row">
	   <ul class="nav navbar-nav" >
	   <li><a href="/" style="color:#fe6f5e;">Home</a></li>
	   <li><a href="#" style="color:#fe6f5e;">Poetry</a></li>
	   <li><a href="#" style="color:#fe6f5e;">Fiction</a></li>
	   <li><a href="#" style="color:#fe6f5e;">Startup</a></li>
	   <li><a href="#"style="color:#fe6f5e;">Politics</a></li>
	   <li><a href="#" style="color:#fe6f5e;">Unsung heroes</a></li>
	   <li><a href="#" style="color:#fe6f5e;">Recent/Opnion/Generic</a></li>
	 <li>
    <button type="button" class="btn  navbar-btn" id="but" style="background-color:#fe6f5e;color:black;">You too can upload your articles here</button></li>
	 <li>
	 <a href="signuppage.php"
    <button type="button" class="btn  navbar-btn" id="but1" style="background-color:#fe6f5e;color:black;">Sign up
	</button></a>
	</li>
	 <li>
	 <a href="loginpage.php>
    <button type="button" class="btn navbar-btn" id="but1" style="background-color:#fe6f5e;color:black;">Log in
	</button>
	</a>
	</li>
	  </ul>
	  <!--div class="checkbox">
  <label>
    <input type="checkbox" data-toggle="toggle">
  </label>
</div-->
	 </div>
	 <div class="row" >
	    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"id="cf" >
		 <img class="bottom" src="img/podium.jpg" />
		 <img class="top" src="img/writer.jpg" />
		</div>
			    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="background-color:black;margin-top:-.5%;color:#fe6f5e;opacity:.8;font-size:150%">
				 <script>
				  document.write("Welcome "+name);
				 </script>
				</div>
	 </div>
	
	  <div class="row" id="row1">
	  <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9" style="font-family:Didot"><h1>Recent articles</h1></div>
	  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 "style="font-family:Didot"><h1>Our sponsers</h1></div>
	  </div>
	  <div class="row">
	 
	  <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9" style="overflow-y:scroll;max-height:150%">
	  <div class="row"><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 " style="margin-left:5%;font-family:Garamond"><h1>poetry</h1></div></div>
	   <div class="row row2">
	  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 well hoverrow"><div class="row"><img src="<?php echo $h_r['im_name']; ?>"/></div><div class="row"><h3><?php echo $h_r['tagline']?></h3><span>><a href="article.php?ar_id=<?php echo $h_r['ar_id']; ?>"><?php echo $h_r['title']?></a><br/></</span>
	  <p class="date"><?php echo $h_r['date']?> &nbsp;&nbsp | Post by: <?php echo $h_r['au_name']?> | Category:<a href="category.php?id=<?php echo $h_r['id'];?>"><?php echo $h_r['label']?></a></p>
	  </div></div>
	  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 well hoverrow"><div class="row"><img src="<?php echo $h_r['im_name']; ?>"/></div><div class="row"><h3><?php echo $h_r['tagline']?></h3><span>><a href="article.php?ar_id=<?php echo $h_r['ar_id']; ?>"><?php echo $h_r['title']?></a><br/></</span>
	  <p class="date"><?php echo $h_r['date']?> &nbsp;&nbsp | Post by: <?php echo $h_r['au_name']?> | Category:<a href="category.php?id=<?php echo $h_r['id'];?>"><?php echo $h_r['label']?></a></p>
	  </div></div>
	  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 well hoverrow"><div class="row"><img src="<?php echo $h_r['im_name']; ?>"/></div><div class="row"><h3><?php echo $h_r['tagline']?></h3><span>><a href="article.php?ar_id=<?php echo $h_r['ar_id']; ?>"><?php echo $h_r['title']?></a><br/></</span>
	  <p class="date"><?php echo $h_r['date']?> &nbsp;&nbsp | Post by: <?php echo $h_r['au_name']?> | Category:<a href="category.php?id=<?php echo $h_r['id'];?>"><?php echo $h_r['label']?></a></p>
	  </div></div>
	  </div>
      <div class="row"><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 " style="margin-left:5%;font-family:Garamond"><h1>fiction</h1></div></div>
	   <div class="row row2">
	  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 well hoverrow"><div class="row"><img src="<?php echo $h_r['im_name']; ?>"/></div><div class="row"><h3><?php echo $h_r['tagline']?></h3><span>><a href="article.php?ar_id=<?php echo $h_r['ar_id']; ?>"><?php echo $h_r['title']?></a><br/></</span>
	  <p class="date"><?php echo $h_r['date']?> &nbsp;&nbsp | Post by: <?php echo $h_r['au_name']?> | Category:<a href="category.php?id=<?php echo $h_r['id'];?>"><?php echo $h_r['label']?></a></p>
	  </div></div>
	  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 well hoverrow"><div class="row"><img src="<?php echo $h_r['im_name']; ?>"/></div><div class="row"><h3><?php echo $h_r['tagline']?></h3><span>><a href="article.php?ar_id=<?php echo $h_r['ar_id']; ?>"><?php echo $h_r['title']?></a><br/></</span>
	  <p class="date"><?php echo $h_r['date']?> &nbsp;&nbsp | Post by: <?php echo $h_r['au_name']?> | Category:<a href="category.php?id=<?php echo $h_r['id'];?>"><?php echo $h_r['label']?></a></p>
	  </div></div>
	  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 well hoverrow"><div class="row"><img src="<?php echo $h_r['im_name']; ?>"/></div><div class="row"><h3><?php echo $h_r['tagline']?></h3><span>><a href="article.php?ar_id=<?php echo $h_r['ar_id']; ?>"><?php echo $h_r['title']?></a><br/></</span>
	  <p class="date"><?php echo $h_r['date']?> &nbsp;&nbsp | Post by: <?php echo $h_r['au_name']?> | Category:<a href="category.php?id=<?php echo $h_r['id'];?>"><?php echo $h_r['label']?></a></p>
	  </div></div>
	  </div>
	  <div class="row"><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 " style="margin-left:5%;font-family:Garamond"><h1>startup</h1></div></div>
	  <div class="row row2">
	  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 well hoverrow"><div class="row"><img src="<?php echo $h_r['im_name']; ?>"/></div><div class="row"><h3><?php echo $h_r['tagline']?></h3><span>><a href="article.php?ar_id=<?php echo $h_r['ar_id']; ?>"><?php echo $h_r['title']?></a><br/></</span>
	  <p class="date"><?php echo $h_r['date']?> &nbsp;&nbsp | Post by: <?php echo $h_r['au_name']?> | Category:<a href="category.php?id=<?php echo $h_r['id'];?>"><?php echo $h_r['label']?></a></p>
	  </div></div>
	  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 well hoverrow"><div class="row"><img src="<?php echo $h_r['im_name']; ?>"/></div><div class="row"><h3><?php echo $h_r['tagline']?></h3><span>><a href="article.php?ar_id=<?php echo $h_r['ar_id']; ?>"><?php echo $h_r['title']?></a><br/></</span>
	  <p class="date"><?php echo $h_r['date']?> &nbsp;&nbsp | Post by: <?php echo $h_r['au_name']?> | Category:<a href="category.php?id=<?php echo $h_r['id'];?>"><?php echo $h_r['label']?></a></p>
	  </div></div>
	  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 well hoverrow"><div class="row"><img src="<?php echo $h_r['im_name']; ?>"/></div><div class="row"><h3><?php echo $h_r['tagline']?></h3><span>><a href="article.php?ar_id=<?php echo $h_r['ar_id']; ?>"><?php echo $h_r['title']?></a><br/></</span>
	  <p class="date"><?php echo $h_r['date']?> &nbsp;&nbsp | Post by: <?php echo $h_r['au_name']?> | Category:<a href="category.php?id=<?php echo $h_r['id'];?>"><?php echo $h_r['label']?></a></p>
	  </div></div>
	  </div>
	  <div class="row"><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 " style="margin-left:5%;font-family:Garamond"><h1>startup</h1></div></div>
	  <div class="row row2">
	  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 well hoverrow"><div class="row"><img src="<?php echo $h_r['im_name']; ?>"/></div><div class="row"><h3><?php echo $h_r['tagline']?></h3><span>><a href="article.php?ar_id=<?php echo $h_r['ar_id']; ?>"><?php echo $h_r['title']?></a><br/></</span>
	  <p class="date"><?php echo $h_r['date']?> &nbsp;&nbsp | Post by: <?php echo $h_r['au_name']?> | Category:<a href="category.php?id=<?php echo $h_r['id'];?>"><?php echo $h_r['label']?></a></p>
	  </div></div>
	  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 well hoverrow"><div class="row"><img src="<?php echo $h_r['im_name']; ?>"/></div><div class="row"><h3><?php echo $h_r['tagline']?></h3><span>><a href="article.php?ar_id=<?php echo $h_r['ar_id']; ?>"><?php echo $h_r['title']?></a><br/></</span>
	  <p class="date"><?php echo $h_r['date']?> &nbsp;&nbsp | Post by: <?php echo $h_r['au_name']?> | Category:<a href="category.php?id=<?php echo $h_r['id'];?>"><?php echo $h_r['label']?></a></p>
	  </div></div>
	  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 well hoverrow"><div class="row"><img src="<?php echo $h_r['im_name']; ?>"/></div><div class="row"><h3><?php echo $h_r['tagline']?></h3><span>><a href="article.php?ar_id=<?php echo $h_r['ar_id']; ?>"><?php echo $h_r['title']?></a><br/></</span>
	  <p class="date"><?php echo $h_r['date']?> &nbsp;&nbsp | Post by: <?php echo $h_r['au_name']?> | Category:<a href="category.php?id=<?php echo $h_r['id'];?>"><?php echo $h_r['label']?></a></p>
	  </div></div>
	  </div>
	  </div>
	  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
	  <div class="row row2">
	  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12  ">
	  <img src="img/aa.jpg" style="margin-top:10%;margin-left:3%;margin-bottom:10%;"/>
	  </div>
	  </div>
	  <div class="row row2">
	  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12  ">
	  <img src="img/aa.jpg" style="margin-top:10%;margin-left:5%;margin-bottom:10%;"/>
	  </div>
	  </div>
	  <div class="row row2">
	  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12  ">
	  <img src="img/aa.jpg" style="margin-top:10%;margin-left:5%;margin-bottom:10%;"/>
	  </div>
	  </div>
	  <div class="row row2">
	  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12  ">
	  <img src="img/aa.jpg" style="margin-top:10%;margin-left:5%;margin-bottom:10%;"/>
	  </div>
	  </div>
	 </div>
	   <div class="row" style="text-align:center;">
	          <div class="row">
	     	   <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-top:3%;margin-bottom:3%;ont-family:comicsans">
			     <a href="aboutus.php" style="font-family:comicsans;font-size:150%;color:#fe6f5e;font-weight:bold">KNOW ABOUT OUR TEAM</a>
			  </div>    
				  <div class="row">
				    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
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
      <img src="img/nishi.jpg" alt="Los Angeles" style="width:100%;max-height:5%">
    </div>

    <div class="item">
      <img src="img/aditi.jpg" alt="Chicago" style="width:100%;max-height:5%">
    </div>

    <div class="item">
      <img src="img/gaurav.jpg" alt="New York" style="width:100%;max-height:5%">
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
				  </div>
			   </div> 
	   </div>
	      <div class="row" style="background-color:gray;color:white;margin-top:2%">
	   <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
	      <h1 style="text-align:center;margin-bottom:-1%;font-size:150%;font-weight:lighter">Contact Us</h1>
		  <h2 style="text-align:center;font-size:150%;font-weight:lighter">soanli : 9999999999</h2>
	   </div>
	 </div>
	 <div class="row" style="background-color:black;color:white">
	     <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		 <img src="facebook.ico" class="img1"/>
		 <img src="facebook.ico" class="img2"/>
		 <img src="facebook.ico" class="img3"/>
		 <img src="facebook.ico" class="img4"/>
		 </div>
	 </div>
	 
	 <div class="row">
	   <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="background-color:black;color:white">
	    <h2 style="text-align:center;padding:1%;font-size:130%;font-weight:lighter">Impetus Student's Society</h2>
	   </div>
	 </div>
   </div>
 </body>
</html>