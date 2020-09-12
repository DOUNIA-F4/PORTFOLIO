
<?php 
include '../Admin/config/db.php';
include '../Admin/config/session.php';
$selectT = $db->query("SELECT * FROM projects");
$project = $selectT->fetchAll();
?>


<!DOCTYPE html>
<!--[if IE 8 ]><html class="no-js oldie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js oldie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->
<head>

   <!--- basic page needs
   ================================================== -->
   <meta charset="utf-8">
	<title>Portfolio</title>
	<meta name="description" content="">  
	<meta name="author" content="">

   <!-- mobile specific metas
   ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

 	<!-- CSS
   ================================================== -->
   <link rel="stylesheet" href="css/base.css">  
   <link rel="stylesheet" href="css/main.css">
   <link rel="stylesheet" href="css/vendor.css">     

   <!-- script
   ================================================== -->   
	<script src="js/modernizr.js"></script>
	<script src="js/pace.min.js"></script>

   <!-- favicons
	================================================== -->
	<link rel="icon" type="image/png" href="favicon.png">

</head>

<body id="top">

	<!-- header 
   ================================================== -->
   <header>   	
   	<div class="row">

   		<div class="top-bar">
   			<a class="menu-toggle" href="#"><span>Menu</span></a>

	   		<a href=""><img src="images/logo.jpg" class="logo"></a>		      

		   	<nav id="main-nav-wrap">
					<ul class="main-navigation">
						<li class="current"><a class="smoothscroll"  href="#intro" title="">Home</a></li>
						<li><a class="smoothscroll"  href="#about" title="">About</a></li>
						<li><a class="smoothscroll"  href="#portfolio" title="">Portfolio</a></li>
						<li><a class="smoothscroll"  href="#contact" title="">Contact</a></li>	
						<li><a href="../Admin/login.php" title="">login</a></li>				
					</ul>
				</nav>    		
   		</div> <!-- /top-bar --> 
   		
   	</div> <!-- /row --> 		
   </header> <!-- /header -->

	<!-- intro section
   ================================================== -->
   <section id="intro">   

   	<div class="intro-overlay"></div>	

   	<div class="intro-content">
   		<div class="row">

   			<div class="col-twelve">

	   			<h5>Hello, World.</h5>
	   			<h1>I'M DOUNIA LASFAR</h1>

	   			<p class="intro-position">
	   				<span>Front-end Developer</span>
	   				<span>UI/UX Designer</span> 
	   			</p>

	   			<a class="button stroke smoothscroll" href="#about" title="">More About Me</a>

	   		</div>  
   			
   		</div>   		 		
   	</div> <!-- /intro-content --> 

   	<ul class="intro-social">        
         <li><a href=" https://www.facebook.com/dounia.lasfar.9"><i class="fa fa-facebook"></i></a></li>
         <li><a href="https://instagram.com/lasfardounia?igshid=1aq6gfjttsbj3"><i class="fa fa-instagram"></i></a></li>
      </ul> <!-- /intro-social -->      	

   </section> <!-- /intro -->


   <!-- about section
   ================================================== -->
   <section id="about">  

   	<div class="row section-intro">
   		<div class="col-twelve">

   			<h5>About</h5>
   			<h1>Let me introduce myself.</h1>

   			<div class="intro-info">

   				<img src="images/profile-pic.jpg" alt="Profile Picture">

   				<p class="lead">My name is Dounia Lasfar,
						I am 22 years old, a Moroccan web integrator, 
						I have a diploma in industrial chemistry.
						 I am currently studying in Yooucode Youssoufia, 
						 where I have acquired several qualifications
						  that enable me to create websites and applications,Designer UI/UX....</p>
   			</div>   			

   		</div>   		
   	</div> <!-- /section-intro -->

   	<div class="row about-content">

   		<div class="col-six tab-full">

   			<h3>Profile</h3>
   			<p>
				I am a learner at Youcode school</br> 
				, web integrator.</br> 
				
			  I am a curious and passionate person,</br> 
			   I like to experiment, discover and learn </br> 
			   through my professional and personal projects.</br> 
			</p>

   			<ul class="info-list">
   				<li>
   					<strong>Fullname:</strong>
   					<span>Dounia Lasfar</span>
   				</li>
   				<li>
   					<strong>Birth Date:</strong>
   					<span>january/07/1998</span>
   				</li>
   				<li>
   					<strong>Job:</strong>
   					<span>Frontend Developer, chemist</span>
   				</li>
   				
   				<li>
   					<strong>Email:</strong>
   					<span>dounia.lasfar1@gmail.com</span>
   				</li>

   			</ul> <!-- /info-list -->

   		</div>

   		<div class="col-six tab-full">

   			<h3>Skills</h3>
   			<p>
				Today, I use my knowledge for the following missions:</br> 
				- HTML / CSS integration from your graphic models </br>
				- Responsive site “Adaptable to all types of screens” </br>
				- Creation of sites and themes with the Wordpress CMS </br>
				
				- Creation showcase sites.</p>

				<ul class="skill-bars">
				   <li>
				   	<div class="progress percent90"><span>90%</span></div>
				   	<strong>CSS3</strong>
				   </li>
				   <li>
				   	<div class="progress percent85"><span>85%</span></div>
				   	<strong>WORDPRESS</strong>
				   </li>
				   <li>
				   	<div class="progress percent70"><span>70%</span></div>
				   	<strong>JAVASCRIPT</strong>
				   </li>
				   <li>
				   	<div class="progress percent95"><span>95%</span></div>
				   	<strong>HTML5</strong>
				   </li>
				   <li>

				   	<div class="progress percent75"><span>75%</span></div>
				   	<strong>GIT & GITHUB</strong>
				   </li>
      
				</ul> <!-- /skill-bars -->		

   		</div>

   	</div>

   	<div class="row button-section">
   		<div class="col-twelve">
   			<a href="#contact" title="Hire Me" class="button stroke smoothscroll">Hire Me</a>
   			<a href="file:///C:/Users/Administrateur/Desktop/CV%20lasfar.pdf" title="Download CV" class="button button-primary">Download CV</a>
   		</div>   		
   	</div>

   </section> <!-- /process-->    


  


	<!-- Portfolio Section
   ================================================== -->
	<section id="portfolio">

		<div class="row section-intro">
   		<div class="col-twelve">

   			<h5>Portfolio</h5>
   			<h1>Check Out Some of My Works.</h1>

   			<p class="lead">A summary of several works that I have done since my beginning in this field that express my technical qualifications in programming.</p>

   		</div>   		
   	</div> <!-- /section-intro--> 

   	<div class="row portfolio-content">

   		<div class="col-twelve">

   			<!-- portfolio-wrapper -->
	         <div id="folio-wrapper" class="block-1-2 block-mob-full stack">
				 <?php  foreach($project as $project):?>

	         	<div class="bgrid folio-item">
	               <div class="item-wrap">
				   <img src="../Admin/assets/img/<?= $project['pict'];?>" alt="">
	                  <a href="#<?= $project['id_pro'];?>" class="overlay">	                  	           
	                     <div class="folio-item-table">
	                     	<div class="folio-item-cell">
		     					       <h3 class="folio-title"><?=$project['name_project'] ?></h3>	     					    
		     					    	 <span class="folio-types">
										  <?=$project['category'] ?>
		     					       </span>
		     					   </div>	                      	
	                     </div>                    
	                  </a>
	               </div>	               
				   </div> <!-- /folio-item -->
	            

	            <!-- modal popups - begin
	            ============================================================= -->
	            <div id="<?= $project['id_pro'];?>" class="popup-modal slider mfp-hide">	

				     	<div class="media">
						 <img src="../Admin/assets/img/<?= $project['pict'];?>" alt="">
				     	</div>      	

					   <div class="description-box">
					      <h4><?=$project['name_project'] ?></h4>		      
					      <p><?=$project['desc_project'] ?></p>

					      <div class="categories"><?=$project['category'] ?></div>			               
					   </div>

			         <div class="link-box">
			            <a href="<?=$project['url_project'] ?>">Code source</a>
					      <a href="#" class="popup-modal-dismiss">Close</a>
			         </div>		      

				   </div> <!-- /modal-01 -->
				   <?php endforeach ?>


			        

				   <!-- modal popups - end
	            ============================================================= -->

	         </div> <!-- /portfolio-wrapper --> 

   		</div>  <!-- /twelve -->   

   	</div> <!-- /portfolio-content --> 
		
	</section> <!-- /portfolio --> 


	
	
	

	
   <!-- contact
   ================================================== -->
	<section id="contact">

		<div class="row section-intro">
   		<div class="col-twelve">

   			<h5>Contact</h5>
   			<h1>I'd Love To Hear From You.</h1>

   			<p class="lead">
				if you want to get in contact with me, just send message.</p>

   		</div> 
   	</div> <!-- /section-intro -->

   	<div class="row contact-form">

   		<div class="col-twelve">

            <!-- form -->
            <form name="contactForm" id="contactForm" method="post" action="sendEmail.php">
      			<fieldset>

                  <div class="form-field">
 						   <input name="name" type="text" id="contactName" placeholder="Name" value="" minlength="2" required="">
                  </div>
                  <div class="form-field">
	      			   <input name="email" type="email" id="contactEmail" placeholder="Email" value="" required="">
	               </div>
                  <div class="form-field">
	     				   <input name="subject" type="text" id="contactSubject" placeholder="Subject" value="">
	               </div>                       
                  <div class="form-field">
	                 	<textarea name="message" id="contactMessage" placeholder="message" rows="10" cols="50" required=""></textarea>
	               </div>                      
                 <div class="form-field">
                     <button class="submitform">Submit</button>
                     <div id="submit-loader">
                        <div class="text-loader">Sending...</div>                             
       				      <div class="s-loader">
								  	<div class="bounce1"></div>
								  	<div class="bounce2"></div>
								  	<div class="bounce3"></div>
								</div>
							</div>
                  </div>

      			</fieldset>
      		</form> <!-- Form End -->

            <!-- contact-warning -->
            <div id="message-warning">            	
            </div>            
            <!-- contact-success -->
      		<div id="message-success">
               <i class="fa fa-check"></i>Your message was sent, thank you!<br>
      		</div>

         </div> <!-- /col-twelve -->
   		
   	</div> <!-- /contact-form -->

   	<div class="row contact-info">

   		<div class="col-four tab-full">

   			<div class="icon">
   				<i class="icon-pin"></i>
   			</div>

   			<h5>Where to find me</h5>

   			<p>
            DAKHLA,street BANAFSSAGE<br>
            N° 49,YOUSSOUFIA<br>
           63000
            </p>

   		</div>

   		<div class="col-four tab-full collapse">

   			<div class="icon">
   				<i class="icon-mail"></i>
   			</div>

   			<h5>Email Me At</h5>

   			<p>dounia.lasfar1@gmail.com			     
			   </p>

   		</div>

   		<div class="col-four tab-full">

   			<div class="icon">
   				<i class="icon-phone"></i>
   			</div>

   			<h5>Call Me At</h5>

   			<p>Phone: (+212) 0664029969
			   </p>

   		</div>
   		
   	</div> <!-- /contact-info -->
		
	</section> <!-- /contact -->


   <!-- footer
   ================================================== -->

   <footer>
     	<div class="row">

     		<div class="col-six tab-full pull-right social">

     			<ul class="footer-social">        
			      <li><a href=" https://www.facebook.com/dounia.lasfar.9"><i class="fa fa-facebook"></i></a></li>
			      <li><a href="https://instagram.com/lasfardounia?igshid=1aq6gfjttsbj3"><i class="fa fa-instagram"></i></a></li>
			   </ul> 
	      		
	      </div>

      	<div class="col-six tab-full">
	      	<div class="copyright">
		        	<span>© Copyright Dounia 2020.</span> 	         	
		         </div>		                  
	      	</div>

	      	<div id="go-top">
		         <a class="smoothscroll" title="Back to Top" href="#top"><i class="fa fa-long-arrow-up"></i></a>
		      </div>

      	</div> <!-- /row -->     	
   </footer>  

   <div id="preloader"> 
    	<div id="loader"></div>
   </div> 

   <!-- Java Script
   ================================================== --> 
   <script src="js/jquery-2.1.3.min.js"></script>
   <script src="js/plugins.js"></script>
   <script src="js/main.js"></script>

</body>

</html>