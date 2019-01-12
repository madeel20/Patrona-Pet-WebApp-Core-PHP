<?php 
session_start();
if(isset($_SESSION['name'])){
	if($_SESSION['name'] == 'admin'){
		header("Location: admin.php");
	}
}
else {
	header("Location: ../index.php");
	}
	
	
	?>
<!DOCTYPE html >

<head><!-- jquery smooth scroll to id's -->   
<!-- SMOOTH SCROLL -->
<script src="js/jquery.min.js"></script>
<script>
$(function() {
  $('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });
});
</script>
<!-- End of SMOOTH SCROLL -->

<link rel="shortcut icon" href="images/logosmall.png"/>
<link rel="shortcut icon" href="images/logosmall.png"/>
<script src="assets/jquery.min.js"></script>
	<script>

		$(function () {

			var links = $('.sidebar-links > div');

			links.on('click', function () {

				links.removeClass('selected');
				$(this).addClass('selected');

			});
		});

	</script>
<link rel="stylesheet" href="css/demo.css">
	<link rel="stylesheet" href="css/footer-distributed-with-contact-form.css">

	<link rel="stylesheet" href="css/font-awesome.min.css">


<link rel="stylesheet" href="assets/demo.css">
	<link rel="stylesheet" href="assets/sidebar-collapse.css">

	<link rel="stylesheet" href="assets/font-awesome.min.css">

<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Welcome  <?php 
echo $_SESSION['name']; ?> | Home - Patrona , encyclopedia of dogs</title>

<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
<link href="fontfamily.css" rel="stylesheet" type="text/css"  />

<!--Slider section -->
<link rel="stylesheet" type="text/css" href="css/mainslider/style.css" />
<script type="text/javascript" src="js/jquery.js"></script>
<!-- End Slider section --></head>
<body>

<div class=" pull-right text-center" >
<form method="post" action="../logout.php"> <input style="margin-top:10px; padding:25px; margin:10px;" type="submit" class="btn btn-default" value="Log Out"> </form>
      </div>
<div id="header-wrapper">
	<div id="header" class="container">
		<div id="logo">
			<img src="images/logocomplete.png" width="180" style="margin:5px;">
            <p>  <strong> "Every dog isn't a growler, and every growler isn't a dog."</strong></p>
		</div>
         
	</div>`
   
</div>

<aside class="sidebar-left-collapse">

		<a href="#" class="company-logo"><img width="80" src="images/logo.png"></a>

		<div class="sidebar-links">
<div class="link-blue selected">
<a href="#">
					<i class="fa fa-picture-o"></i>Home
				</a> </div>

			<div class="link-blue ">

				<a href="#!">
					<i class="fa fa-picture-o"></i>About Dogs
				</a>

				<ul class="sub-links">
					<li><a href="#domesticdogs">Domestic Dogs</a></li>
					<li><a href="#dogsbehaviors">Dog Behaviours</a></li>
					<li><a href="#dogsintelligence"> Dogs Intelligence</a></li>
					<li><a href="#roleswithhuman">Roles With Human</a></li>
					<li><a href="#aspets">As   Pets</a></li>
				</ul>

			</div>

			<div class="link-red">

				<a href="#!">
					<i class="fa fa-heart-o"></i> Types Of Dogs
				</a>

				<ul class="sub-links">
					<li><a href="lab.html">1. Labrador Retriever</a></li>
					<li><a href="germanshepherd.html">2. German Shepherd</a></li>
                    
					<li><a href="poodle.html">3. Poodle</a></li>
					<li><a href="chihuahua.html">4. Chihuahua</a></li>
					<li><a href="goldenretriever.html">5. Golden Retriever</a></li>
					<li><a href="yorkshireterrier.html">6. Yorkshire Terrier </a></li>
                    <li><a href="dachshund.html">7. Dachshund </a></li>
                    <li><a href="beagle.html">8. Beagle</a></li>
                    <li><a href="boxer.html">9. Boxer </a></li>
                    <li><a href="bulldog.html">10. Bull Dog </a></li>

				</ul>

			</div>
<div class="link-red">

				<a href="typesatoz.html">
					<i class="fa fa-heart-o"></i> Types A - Z
				</a>
</div>
<div class="link-red">

				<a href="typesbycountry.html">
					<i class="fa fa-heart-o"></i> Types By Country
				</a>
</div>
			<div class="link-yellow">

				<a href="#!">
					<i class="fa fa-keyboard-o"></i>More About Dogs
				</a>

				<ul class="sub-links">
					<li><a href="foods.html">Foods</a></li>
					<li><a href="nutritions.html">Nutritions</a></li>
					<li><a href="deseases.html">Deseases</a></li>
					<li><a href="care.html">Care</a></li>
				</ul>

			</div>

			<div class="link-green">

				<a href="gallery.html">
					<i class="fa fa-map-marker"></i>Gallery
				</a>

			</div>
<div class="link-green">

				<a href="#aboutus">
					<i class="fa fa-map-marker"></i>About Us
				</a>

			</div>
<div class="link-green">

				<a href="#contactus">
					<i class="fa fa-map-marker"></i>Contact Us
				</a>

			</div>

		</div>

	</aside>
	

<div id="wrapper">
	
<div id="slider1"> <!-- Start Slider section -->
<div id="wowslider-container1">
<div class="ws_images"><ul>
		<li><img src="images/mainslider/images/img09.jpg" alt="" title="" id="wows1_0"/></li>
		<li><img src="images/mainslider/images/img04.jpg" alt="" title="" id="wows1_1"/></li>
		<li><img src="images/mainslider/images/img01.jpg" alt="" title="" id="wows1_2"/></li>
		<li><img src="images/mainslider/images/img11.jpg" alt="" title="" id="wows1_3"/></li>
		<li><img src="images/mainslider/images/img02.jpg" alt="" title="" id="wows1_4"/></li>
		<li><img src="images/mainslider/images/img05.jpg" alt="" title="" id="wows1_5"/></li>
		<li><img src="images/mainslider/images/img07.jpg" alt="" title="" id="wows1_6"/></li>
		<li><img src="images/mainslider/images/img03.jpg" alt="" title="" id="wows1_7"/></li>
		<li><img src="images/mainslider/images/img06.jpg" alt="" title="" id="wows1_8"/></li>
		<li><img src="images/mainslider/images/img08.jpg" alt="" title="" id="wows1_9"/></li>
		<li><a href=""><img src="images/mainslider/images/img10.jpg" alt="jquery carousel" title="" id="wows1_10"/></a></li>
		<li><img src="images/mainslider/images/img12.jpg" alt="" title="" id="wows1_11"/></li>
	</ul></div>
	<div class="ws_bullets"><div>
		<a href="#" title=""><span><img src="images/mainslider/tooltips/img09.jpg" alt=""/>1</span></a>
		<a href="#" title=""><span><img src="images/mainslider/tooltips/img04.jpg" alt=""/>2</span></a>
		<a href="#" title=""><span><img src="images/mainslider/tooltips/img01.jpg" alt=""/>3</span></a>
		<a href="#" title=""><span><img src="images/mainslider/tooltips/img11.jpg" alt=""/>4</span></a>
		<a href="#" title=""><span><img src="images/mainslider/tooltips/img02.jpg" alt=""/>5</span></a>
		<a href="#" title=""><span><img src="images/mainslider/tooltips/img05.jpg" alt=""/>6</span></a>
		<a href="#" title=""><span><img src="images/mainslider/tooltips/img07.jpg" alt=""/>7</span></a>
		<a href="#" title=""><span><img src="images/mainslider/tooltips/img03.jpg" alt=""/>8</span></a>
		<a href="#" title=""><span><img src="images/mainslider/tooltips/img06.jpg" alt=""/>9</span></a>
		<a href="#" title=""><span><img src="images/mainslider/tooltips/img08.jpg" alt=""/>10</span></a>
		<a href="#" title=""><span><img src="images/mainslider/tooltips/img10.jpg" alt=""/>11</span></a>
		<a href="#" title=""><span><img src="images/mainslider/tooltips/img12.jpg" alt=""/>12</span></a>
	</div></div><div class="ws_script" style="position:absolute;left:-99%"></div>
<div class="ws_shadow"></div>
</div>	
<script type="text/javascript" src="js/slider.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<!-- End Slider section --></div>
<div id="page" class="container">
<br><br><br>
		<div id="content">
			<div class="post">
				<h2 class="title" ><a href="#" style="text-transform:none;">Dogs :</a></h2>
				<div class="entry">
					<p><img src="images/img06.jpg" width="620" height="200" alt="" /></p>
                    <h4 id="domesticdogs"> Domestic Dogs </h4>
					<p>The domestic dog (Canis lupus familiaris or Canis familiaris) is a domesticated canid which has been selectively bred for millennia for various behaviors, sensory capabilities, and physical attributes.

Although initially thought to have originated as a manmade variant of an extant canid species (variously supposed as being the dhole, golden jackal, or gray wolf), extensive genetic studies undertaken during the 2010s indicate that dogs diverged from other wolf-like canids in Eurasia 40,000 years ago. Being the oldest domesticated animals, their long association with people has allowed dogs to be uniquely attuned to human behavior,as well as thrive on a starch-rich diet which would be inadequate for other canid species.</p>
<br>
<img src="images/img07.jpg" width="620" height="200" alt="" />
<h4 id="dogsbehaviors"> Dogs <strong>Behaviors</strong></h4>
<p> Dog behavior is the internally coordinated responses (actions or inactions) of the domestic dog (individuals or groups) to internal and/or external stimuli. As the oldest domesticated species, with estimates ranging from 9,000–30,000 years BCE, the minds of dogs inevitably have been shaped by millennia of contact with humans. As a result of this physical and social evolution, dogs, more than any other species, have acquired the ability to understand and communicate with humans and they are uniquely attuned to our behaviors. Behavioral scientists have uncovered a surprising set of social-cognitive abilities in the otherwise humble domestic dog. These abilities are not possessed by the dog's closest canine relatives nor by other highly intelligent mammals such as great apes. Rather, these skills parallel some of the social-cognitive skills of human children. </p>
<img src="images/img08.jpg" width="620" height="200" alt="" />
<h4 id="dogsintelligence"> Dogs <strong>Intelligence</strong></h4>
<p> Dog intelligence is the ability of the dog to perceive information and retain it as knowledge for applying to solve problems. Dogs have been shown to learn by inference. A study with Rico showed that he knew the labels of over 200 different items. He inferred the names of novel items by exclusion learning and correctly retrieved those novel items immediately and also 4 weeks after the initial exposure. Dogs have advanced memory skills. A study documented the learning and memory capabilities of a border collie, "Chaser", who had learned the names and could associate by verbal command over 1,000 words. Dogs are able to read and react appropriately to human body language such as gesturing and pointing, and to understand human voice commands. Dogs demonstrate a theory of mind by engaging in deception. A study showed compelling evidence that Australian dingos can outperform domestic dogs in non-social problem-solving experiment, indicating that domestic dogs may have lost much of their original problem-solving abilities once they joined humans. Another study indicated that after undergoing training to solve a simple manipulation task, dogs that are faced with an insoluble version of the same problem look at the human, while socialized wolves do not. Modern domestic dogs use humans to solve their problems for them. </p>
<img src="images/img07.png" width="620" height="200" alt="" />
<h4 id="roleswithhuman"> Roles With Human </h4>
<p>Domestic dogs inherited complex behaviors, such as bite inhibition, from their wolf ancestors, which would have been pack hunters with complex body language. These sophisticated forms of social cognition and communication may account for their trainability, playfulness, and ability to fit into human households and social situations, and these attributes have given dogs a relationship with humans that has enabled them to become one of the most successful species on the planet today.

The dogs value to early human hunter-gatherers led to them quickly becoming ubiquitous across world cultures. Dogs perform many roles for people, such as hunting, herding, pulling loads, protection, assisting police and military, companionship, and, more recently, aiding handicapped individuals. This impact on human society has given them the nickname "man's best friend" in the Western world. In some cultures, however, dogs are also a source of meat. </p>
<img src="images/img10.jpg" width="620" height="200" alt="" />
<h4 id="aspets">  As Pets</h4>
<p> It is estimated that three-quarters of the world's dog population lives in the developing world as feral, village or community dogs, with pet dogs uncommon.

"The most widespread form of interspecies bonding occurs between humans and dogs" and the keeping of dogs as companions, particularly by elites, has a long history.] (As a possible example, at the Natufian culture site of Ain Mallaha in Israel, dated to 12,000 BC, the remains of an elderly human and a four-to-five-month-old puppy were found buried together). However, pet dog populations grew significantly after World War II as suburbanization increased. In the 1950s and 1960s, dogs were kept outside more often than they tend to be today (using the expression "in the doghouse" to describe exclusion from the group signifies the distance between the doghouse and the home) and were still primarily functional, acting as a guard, children's playmate, or walking companion. From the 1980s, there have been changes in the role of the pet dog, such as the increased role of dogs in the emotional support of their human guardians. People and dogs have become increasingly integrated and implicated in each other's lives, to the point where pet dogs actively shape the way a family and home are experienced.

There have been two major trends in the changing status of pet dogs. The first has been the 'commodification' of the dog, shaping it to conform to human expectations of personality and behaviour. The second has been the broadening of the concept of the family and the home to include dogs-as-dogs within everyday routines and practices.

There are a vast range of commodity forms available to transform a pet dog into an ideal companion. The list of goods, services and places available is enormous: from dog perfumes, couture, furniture and housing, to dog groomers, therapists, trainers and caretakers, dog cafes, spas, parks and beaches, and dog hotels, airlines and cemeteries. While dog training as an organized activity can be traced back to the 18th century, in the last decades of the 20th century it became a high profile issue as many normal dog behaviors such as barking, jumping up, digging, rolling in dung, fighting, and urine marking[further explanation needed] became increasingly incompatible with the new role of a pet dog. Dog training books, classes and television programs proliferated as the process of commodifying the pet dog continued. </p>
				</div>
			</div>
			<div style="clear: both;">&nbsp;</div>
		</div>
		<!-- end #content -->
		
		<div style="clear: both;">&nbsp;</div>
	</div>
	<!-- end #page --> 
</div>
<div id="footer-content" class="container">
	<div id="footer-bg">
		<div id="column1" >
			<h2 id="aboutus" style=" text-transform:none;">About Us</h2>
			<p>The PATRONA puppy website is a website which is actually encyclopedia about all types of dogs. The Famous Veteran Patrona is fond of animals specially  Dogs, Cats, Rabbits. With her achievements in the field of serving as veteran, she also had interest in writing books on animals and their behavior<br />
			</p>
            <p> All those years she had came across various type of breeds and their characteristics and behavior. Due to passion of photography she has huge collection of animals pictures of all types discovered. Ms Patrona wish to share this images with all for which she had decided to develop an website of various animals.
					</p>
		</div>
	</div>
</div>
<div id="contactus" class="footer-distributed">

			<div class="footer-left">

				<img src="images/logocomplete.png" width="400">

				<p class="footer-company-name">PATRONA &copy; 2015</p>

				<div class="footer-icons">

					<a href="#"><i class="fa fa-facebook"></i></a>
					<a href="#"><i class="fa fa-twitter"></i></a>
					<a href="#"><i class="fa fa-linkedin"></i></a>
					<a href="#"><i class="fa fa-github"></i></a>

				</div>

			</div>

			<div class="footer-right">

				<p>Contact Us</p>

				<form action="#" method="post">

					<input type="text" name="email" placeholder="Email" required />
					<textarea name="message" required placeholder="Message"></textarea>
					<button>Send</button>

				</form>

			</div>

		</div>

<div id="footer">
	<p><a href="" style="color:white;">&copy;Patrona</a>.</p>
</div>
<!-- end #footer -->

</body>
</html>
