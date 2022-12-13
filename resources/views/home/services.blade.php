<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link href="{{asset('home/css/style.css')}}" rel="stylesheet" />
   <link href="{{asset('home/css/responsive.css')}}" rel="stylesheet" />


   <link href="{{asset('home/css/serstyle.css')}}" rel="stylesheet" />
   <link href="{{asset('home/css/modalinservice.css')}}" rel="stylesheet" />
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</head>
@include('home.header')
<body>
<div class="containerikun">

   <h1 class="heading">Our Services</h1>

   <div class="box-container">

      <div class="sbox" data-name="p-1">
         <div class="image">
            <img src="{{asset('images/services/all in 5.jpg')}}" alt="">
         </div>
         <div class="content">
            <h3>All-in Wedding Packages</h3>
            <p>A wedding venue or wedding planner, all-inclusive packages will include all catering, floral, decorations, rentals, tables, chairs, linens, venue and so on.
            </p>
            <a class="btn">Learn More</a>
            <!-- <div class="icons">
               <span> <i class="fas fa-calendar"></i> 21st may, 2022 </span>
               <span> <i class="fas fa-user"></i> by admin </span>
            </div> -->
         </div>
      </div>

      <div class="sbox" data-name="p-2">
         <div class="image">
            <img src="{{asset('images/services/all in 0.jpg')}}" alt="">
         </div>
         <div class="content">
            <h3>Semi All-in Wedding Packages</h3>
            <p>A wedding venue or wedding planner, all-inclusive packages will include all catering, floral, decorations, rentals, tables, chairs, linens, venue and so on.
            </p>
            <a class="btn">Learn More</a>
            <!-- <div class="icons">
               <span> <i class="fas fa-calendar"></i> 21st may, 2022 </span>
               <span> <i class="fas fa-user"></i> by admin </span>
            </div> -->
         </div>
      </div>

      <div class="sbox" data-name="p-3">
         <div class="image">
            <img src="{{asset('images/services/photo 1.jpg')}}" alt="">
         </div>
         <div class="content">
            <h3>Photo & Video Coverage - Prenuptial Shoot</h3>
            <p>A photo can tell a story in one frame, these days, prenuptial sessions are means for couples to immortalize their love story, or even tell new tales with photos.
            </p>
            <a href="#" class="btn">read more</a>
            <!-- <div class="icons">
               <span> <i class="fas fa-calendar"></i> 21st may, 2022 </span>
               <span> <i class="fas fa-user"></i> by admin </span>
            </div> -->
         </div>
      </div>

      <div class="sbox" data-name="p-4">
         <div class="image">
            <img src="{{asset('images/services/cover 0.jpg')}}" alt="">
         </div>
         <div class="content">
            <h3>Full Coverage on the Wedding Day</h3>
            <p>Our goal is to document an authentic rendering of your wedding from start to finish, telling the story naturally as it unfolds. The ceremony and reception may take 5 or 6 hours, but getting ready, formal pictures, the grant exit and other elements add up.
            </p>
            <a href="#" class="btn">read more</a>
            <!-- <div class="icons">
               <span> <i class="fas fa-calendar"></i> 21st may, 2022 </span>
               <span> <i class="fas fa-user"></i> by admin </span>
            </div> -->
         </div>
      </div>

      <div class="sbox" data-name="p-5">
         <div class="image">
            <img src="{{asset('images/services/coordinator 3.jpeg')}}" alt="">
         </div>
         <div class="content">
            <h3>Coordination</h3>
            <p>Wedding day coordination is an increasingly popular choice for many couples as it allows you absolute control of the details and planning, before handing over the reins of responsibility for the smooth running of the day itself.
            </p>
            <a href="#" class="btn">read more</a>
            <!-- <div class="icons">
               <span> <i class="fas fa-calendar"></i> 21st may, 2022 </span>
               <span> <i class="fas fa-user"></i> by admin </span>
            </div> -->
         </div>
      </div>

      <div class="sbox" data-name="p-6">
         <div class="image">
            <img src="{{asset('images/services/church 1.jpg')}}" alt="">
         </div>
         <div class="content">
            <h3>Church & Venue Decoration</h3>
            <p>Other than setting the mood, creating the ambiance and theme as well as the ultimate experience of your Event, the Décor also underscores the importance of your Event. An Event that is well put together with style, class and the right Décor shows the importance of the Event and will make your guests feel special.
            </p>
            <a href="#" class="btn">read more</a>
            <!-- <div class="icons">
               <span> <i class="fas fa-calendar"></i> 21st may, 2022 </span>
               <span> <i class="fas fa-user"></i> by admin </span>
            </div> -->
         </div>
      </div>

      <div class="sbox" data-name="p-7">
         <div class="image">
            <img src="{{asset('images/services/fog 4.jpg')}}" alt="">
         </div>
         <div class="content">
            <h3>Fog Machine Rental</h3>
            <p>Stage productions make excellent use of fog and smoke machines to create the right atmosphere on stage. For these types of events, you'll want to ensure you hire or buy a smoke machine which can be safely used indoors. Smoke machines can be used to set the scene for a creepy tale or a misty Victorian street in the early morning – their uses are limited only by your imagination.
            </p>
            <a href="#" class="btn">read more</a>
            <!-- <div class="icons">
               <span> <i class="fas fa-calendar"></i> 21st may, 2022 </span>
               <span> <i class="fas fa-user"></i> by admin </span>
            </div> -->
         </div>
      </div>

      <div class="sbox" data-name="p-8">
         <div class="image">
            <img src="{{asset('images/services/giveaway.jpg')}}" alt="">
         </div>
         <div class="content">
            <h3>Wedding Invitation & Giveaways</h3>
            <p>Tell your guests more about your love story with a custom illustration at your wedding venue. If you love bright, bold colors or prefer a minimalist design, lean into whatever feels right to you. Personalizing your wedding makes the event even more special for your guests, as they'll leave the memorable experience feeling more connected to you both. Your wedding is all about you, and everything.
            </p>
            <a href="#" class="btn">read more</a>
            <!-- <div class="icons">
               <span> <i class="fas fa-calendar"></i> 21st may, 2022 </span>
               <span> <i class="fas fa-user"></i> by admin </span>
            </div> -->
         </div>
      </div>

      <div class="sbox" data-name="p-9">
         <div class="image">
            <img src="{{asset('images/services/host 4.jpg')}}" alt="">
         </div>
         <div class="content">
            <h3>Host / Emcee & Choir</h3>
            <p> Having an on site host for your wedding is paying for peace of mind. You won't have to worry about lulls in your wedding while everyone guesses what should come next.
               It's a worthwhile investment to guarantee a stress-free wedding. 
               Irish Gowns Rentals is dedicated to making the wedding you dreamed of a reality, which is why our wedding packages come with a wedding on site host who is trained to do all those things.</p>
            <a href="#" class="btn">read more</a>
            <!-- <div class="icons">
               <span> <i class="fas fa-calendar"></i> 21st may, 2022 </span>
               <span> <i class="fas fa-user"></i> by admin </span>
            </div> -->
         </div>
      </div>

      <div class="sbox" data-name="p-10">
         <div class="image">
            <img src="{{asset('images/services/light 6.jpg')}}" alt="">
         </div>
         <div class="content">
            <h3>Light & Sounds</h3>
            <p>The lighting in the wedding not only enhances the beauty of the venue but also brightens up the ambience significantly. Similarly, a quality sound system and music arrangement can help set a cheerful mood. After all a wedding is an event of rejoicing and celebrating with people who matter the most.
            </p>
            <a href="#" class="btn">read more</a>
            <!-- <div class="icons">
               <span> <i class="fas fa-calendar"></i> 21st may, 2022 </span>
               <span> <i class="fas fa-user"></i> by admin </span>
            </div> -->
         </div>
      </div>

      <div class="sbox" data-name="p-11">
         <div class="image">
            <img src="{{asset('images/services/bridal3.jpg')}}" alt="">
         </div>
         <div class="content">
            <h3>Bridal Car</h3>
            <p>They are used by the bride to travel from the house or hotel to the church and by the newly wedded couple to the reception. Choosing a perfect bridal car will surely be one of the couples can look back on during their most memorable life together.
            </p>
            <a href="#" class="btn">read more</a>
            <!-- <div class="icons">
               <span> <i class="fas fa-calendar"></i> 21st may, 2022 </span>
               <span> <i class="fas fa-user"></i> by admin </span>
            </div> -->
         </div>
      </div>

      <div class="sbox" data-name="p-12">
         <div class="image">
            <img src="{{asset('images/services/ento.jpg')}}" alt="">
         </div>
         <div class="content">
            <h3>Whole Wedding Entourage Attire</h3>
            <p>The Wedding Entourage also called The Bridal Entourage is composed of people who are closely related to the Bride and the Groom. Family members and honored friends are chosen to assist, sponsor, dress fancy and walk down the aisle to celebrate the glorious event.
            </p>
            <a href="#" class="btn">read more</a>
            <!-- <div class="icons">
               <span> <i class="fas fa-calendar"></i> 21st may, 2022 </span>
               <span> <i class="fas fa-user"></i> by admin </span>
            </div> -->
         </div>
      </div>

   </div>

   <div id="load-more"> See All Services </div>

</div>



























<div class="products-preview">

   <div class="preview" data-target="p-1">
      <i class="fas fa-times"></i>
      {{-- i tried to have text at the right in modal --}}
      <div id="contento-wrappero">
      {{-- i tried to have text at the right in modal --}}
      <div class="columno">
			<img id=featured1 src="{{asset('images/services/all in 5.jpg')}}" alt="">
         {{-- <h3>title</h3> --}}
         
			<div id="slide-wrapper" >
				<img id="slideLeft" class="arrow" src="{{asset('images/arrow-left.png')}}" alt="">

				<div id="slider">
					<img class="thumbnail actives" src="{{asset('images/services/all in 5.jpg')}}" alt="">
					<img class="thumbnail" src="{{asset('images/imagesinservice/img-1.jpg')}}" alt="">
					<img class="thumbnail" src="{{asset('images/imagesinservice/img-3.jpg')}}" alt="">

					<img class="thumbnail" src="{{asset('images/imagesinservice/img-9.jpg')}}" alt="">
					{{-- <img class="thumbnail" src="images/preset2.jpg">
					<img class="thumbnail" src="images/preset3.jpg">
					<img class="thumbnail" src="images/preset4.jpg"> --}}
				</div>

				<img id="slideRight" class="arrow" src="{{asset('images/arrow-right.png')}}" alt="">
			</div>
		</div>
      {{-- side columno --}}
      <div class="columno">
			<h1>All-in Wedding Package</h1>
			<hr>
			<h3> ₱150, 000</h3>

			<h5>CATERING FOR 100PAX <b style="font-size: 30px">&#183;</b> GHOST CHAIRS FOR ALL GUEST  <b style="font-size: 30px">&#183;</b> PRENUP PICTORIAL
            WITH HAIR AND MAKE UP 8X10 GUESTBOOK WITH PRENUPS PICS  <b style="font-size: 30px">&#183;</b> HD PHOTO AND VIDEO
            COVERAGE-3PHOTOGRAPHERS, 3 VIDEOGRAPHERS  <b style="font-size: 30px">&#183;</b> SAVE THE DATE VIDEO  <b style="font-size: 30px">&#183;</b> SAME DAY EDIT VIDEO
            <b style="font-size: 30px">&#183;</b> 8X10 40 PAGES WEDDING ALBUM <b style="font-size: 30px">&#183;</b> 7O PCS WEDDING INVITATIONS <b style="font-size: 30px">&#183;</b> 4 HOURS BRIDAL CAR &#91; 
            FORD MUSTANG, VINTAGE JAGUAR, LAMBORGHINI&#93; <b style="font-size: 30px">&#183;</b> 4 HOURS PHOTOBOOTH <b style="font-size: 30px">&#183;</b> BOTTLE OF WINE AND DOVES FOR TRADITION
            <b style="font-size: 30px">&#183;</b> 4 LAYER FONDANT WEDDING CAKE 10 MINI CAKES FOR PRINCIPAL SPONSORS <b style="font-size: 30px">&#183;</b>
            100 PCS ICING CUPCAKES FOR GIVEAWAYS <b style="font-size: 30px">&#183;</b> ACOUSTIC BAND FOR RECEPTION <b style="font-size: 30px">&#183;</b>
            SOUND SYSTEM AND MOOD LIGHTS <b style="font-size: 30px">&#183;</b> ELEGANT BRIDAL BOUQUET AND ENTOURAGE FLOWERSS
            <b style="font-size: 30px">&#183;</b> THEMED STAGE DESIGN AND CEILING SWAG <b style="font-size: 30px">&#183;</b> 3 WEDDING COORDINATORS + 1 BRIDE MANAGER + GROOM MANAGER
            <b style="font-size: 30px">&#183;</b> PROGRAM EMCEE <b style="font-size: 30px">&#183;</b> MEMORY BOOK
         </h5>

			
		</div>
      {{-- side columno --}}
      {{-- contento wrapper --}}
   </div>
   {{-- contento wrapper --}}
   </div>

   <div class="preview" data-target="p-2">
      <i class="fas fa-times"></i>
      <div id="contento-wrappero">
      <div class="columno">
         {{-- <h4>title</h4> --}}
			<img id=featured2 src="{{asset('images/services/all in 0.jpg')}}" alt="">
         {{-- <h3>title</h3> --}}
         
			<div id="slide-wrapper" >
				<img id="slideLeft2" class="arrow" src="{{asset('images/arrow-left.png')}}" alt="">

				<div id="slider2">
					<img class="thumbnail2 actives2" src="{{asset('images/services/all in 0.jpg')}}" alt="">
					<img class="thumbnail2" src="{{asset('images/imagesinservice/img-1.jpg')}}" alt="">
					<img class="thumbnail2" src="{{asset('images/imagesinservice/img-3.jpg')}}" alt="">

					<img class="thumbnail2" src="{{asset('images/imagesinservice/img-9.jpg')}}" alt="">
					{{-- <img class="thumbnail" src="images/preset2.jpg">
					<img class="thumbnail" src="images/preset3.jpg">
					<img class="thumbnail" src="images/preset4.jpg"> --}}
				</div>

				<img id="slideRight2" class="arrow" src="{{asset('images/arrow-right.png')}}" alt="">
			</div>
		</div>
      {{-- side columno --}}
      <div class="columno">
			<h1>Semi All-in Wedding Package</h1>
			<hr>
			<h3> ₱90, 000</h3>

			<h5>CATERING FOR 100PAX <b style="font-size: 30px">&#183;</b> GHOST CHAIRS FOR ALL GUEST  <b style="font-size: 30px">&#183;</b> PRENUP PICTORIAL
            WITH HAIR AND MAKE UP 8X10 GUESTBOOK WITH PRENUPS PICS  <b style="font-size: 30px">&#183;</b> HD PHOTO AND VIDEO
            COVERAGE-3PHOTOGRAPHERS, 3 VIDEOGRAPHERS  <b style="font-size: 30px">&#183;</b> SAVE THE DATE VIDEO  <b style="font-size: 30px">&#183;</b> SAME DAY EDIT VIDEO
            <b style="font-size: 30px">&#183;</b> 8X10 40 PAGES WEDDING ALBUM <b style="font-size: 30px">&#183;</b> 7O PCS WEDDING INVITATIONS <b style="font-size: 30px">&#183;</b> 4 HOURS BRIDAL CAR &#91; 
            FORD MUSTANG, VINTAGE JAGUAR, LAMBORGHINI&#93; <b style="font-size: 30px">&#183;</b> 4 HOURS PHOTOBOOTH <b style="font-size: 30px">&#183;</b> BOTTLE OF WINE AND DOVES FOR TRADITION
            <b style="font-size: 30px">&#183;</b> 4 LAYER FONDANT WEDDING CAKE 10 MINI CAKES FOR PRINCIPAL SPONSORS <b style="font-size: 30px">&#183;</b>
            100 PCS ICING CUPCAKES FOR GIVEAWAYS <b style="font-size: 30px">&#183;</b> ACOUSTIC BAND FOR RECEPTION <b style="font-size: 30px">&#183;</b>
            SOUND SYSTEM AND MOOD LIGHTS <b style="font-size: 30px">&#183;</b> ELEGANT BRIDAL BOUQUET AND ENTOURAGE FLOWERSS
            <b style="font-size: 30px">&#183;</b> THEMED STAGE DESIGN AND CEILING SWAG <b style="font-size: 30px">&#183;</b> 3 WEDDING COORDINATORS + 1 BRIDE MANAGER + GROOM MANAGER
            <b style="font-size: 30px">&#183;</b> PROGRAM EMCEE <b style="font-size: 30px">&#183;</b> MEMORY BOOK
         </h5>

			
		</div>
      {{-- side columno --}}
      {{-- contento wrapper --}}
   </div>
   {{-- contento wrapper --}}
   </div>

   <div class="preview" data-target="p-3">
      <i class="fas fa-times"></i>
      {{-- i tried to have text at the right in modal --}}
      <div id="contento-wrappero">
         {{-- i tried to have text at the right in modal --}}
      <div class="columno">
			<img id=featured3 src="{{asset('images/services/bridal2.jpg')}}" alt="">
         {{-- <h3>title</h3> --}}
         
			<div id="slide-wrapper" >
				<img id="slideLeft3" class="arrow" src="{{asset('images/arrow-left.png')}}" alt="">

				<div id="slider3">
					<img class="thumbnail3 actives3" src="{{asset('images/imagesinservice/img-2.jpg')}}" alt="">
					<img class="thumbnail3" src="{{asset('images/services/photo 1.jpg')}}" alt="">
					<img class="thumbnail3" src="{{asset('images/imagesinservice/img-3.jpg')}}" alt="">

					<img class="thumbnail3" src="{{asset('images/imagesinservice/img-9.jpg')}}" alt="">
					{{-- <img class="thumbnail" src="images/preset2.jpg">
					<img class="thumbnail" src="images/preset3.jpg">
					<img class="thumbnail" src="images/preset4.jpg"> --}}
				</div>

				<img id="slideRight3" class="arrow" src="{{asset('images/arrow-right.png')}}" alt="">
			</div>
		</div>
      {{-- side columno --}}
      <div class="columno">
			<h1>Photo/Video Coverage - Prenuptial Shoot</h1>
			<hr>
			{{-- <h3> ₱150, 000</h3> --}}

			<h5>
            - Pre-Nuptial Pictorial with MAKEUP, PROPS and STYLING <br>
            - 4 Professional Videographers w/ HD Video DSLR Video Camera <br>
            1 Creative Videographer / Editor<br>
            1 Main Videographer<br>
            1 Second Angle Videographer
            1 Aerial Videographer / Third Angle Candids Videographer<br>
            Complete with Creative Equipments for Cinematic Shots <br>
            (Stabilizers, Slider, Tripod, Etc)<br>
            - 3 Professional Photographers w/ Digital SLR Camera<br>
            1 Creative Photographer<br>
            1 Main Photographer<br>
            1 Second Angle Photographer / Onsite Photo Editor<br>
            - Edited Video (20-30 mins Highlights) <br>
            - 8x10 Magnetic Guestbook with Prenuptial Pictures<br>
            - 8x10 40 pages Wedding Album with Leather Box<br>
            - Couple's Growing Up AVP or Then and Now Slideshow<br>
            - Pre-Wedding Film (2-3 mins Prenup Video)<br>
            -  SAME DAY EDIT PHOTO - Onsite Wedding Photo Highlights<br>
            (3-5 mins Wedding Highlights to be played during reception)<br>
            -  SAME DAY EDIT VIDEO - Onsite Wedding Video Highlights<br>
            (3-5 mins  Wedding  Highlights to be played during reception)<br>
            - AERIAL VIDEOGRAPHY on the Wedding Day<br>
            - Awesome Events 16 Gig USB for Photo / Video Highlights<br>
            - 500 gig External Hard Drive for Photo / Video Files<br>
            - A beautiful Memory Book to showcase your Wedding films <br>
         </h5>

			
		</div>
      {{-- side columno --}}
      {{-- contento wrapper --}}
   </div>
   {{-- contento wrapper --}}
   </div>

   <div class="preview" data-target="p-4">
      <i class="fas fa-times"></i>
      {{-- i tried to have text at the right in modal --}}
      <div id="contento-wrappero">
         {{-- i tried to have text at the right in modal --}}
      <div class="columno">
         {{-- <h4>title</h4> --}}
			<img id=featured4 src="{{asset('images/services/cover 0.jpg')}}" alt="">
         {{-- <h3>title</h3> --}}
         
			<div id="slide-wrapper" >
				<img id="slideLeft4" class="arrow" src="{{asset('images/arrow-left.png')}}" alt="">

				<div id="slider4">
					<img class="thumbnail4 actives4" src="{{asset('images/services/cover 0.jpg')}}" alt="">
					<img class="thumbnail4" src="{{asset('images/imagesinservice/img-1.jpg')}}" alt="">
					<img class="thumbnail4" src="{{asset('images/imagesinservice/img-3.jpg')}}" alt="">

					<img class="thumbnail4" src="{{asset('images/imagesinservice/img-9.jpg')}}" alt="">
					{{-- <img class="thumbnail" src="images/preset2.jpg">
					<img class="thumbnail" src="images/preset3.jpg">
					<img class="thumbnail" src="images/preset4.jpg"> --}}
				</div>

				<img id="slideRight4" class="arrow" src="{{asset('images/arrow-right.png')}}" alt="">
			</div>
		</div>
      {{-- side columno --}}
      <div class="columno">
			<h1>Full Coverage on the Wedding Day</h1>
			<hr>
			{{-- <h3> ₱150, 000</h3> --}}

			<h5>
            - Unlimited Shots in 16 gig USB <br>
            - Edited Video (20-30 mins Highlights) also in the USB<br>
            - 10-15 mins Extended Cinematic Highlights also in the USB <br>
            - 10x10 40 pages Leather Seamless Guestbook with Prenuptial Pictures<br>
            - 12x12 40 pages Leather Seamless Wedding Album<br>
            - Two (2) 10x10 40 pages Leather Seamless Parents' Album<br>
            - Couple's Growing Up AVP or Then and Now Slideshow<br>
            - Pre-Wedding Film with Aerial Shots (2-3 mins Prenup Video)<br>
            -  SAME DAY EDIT PHOTO - Onsite Wedding Photo Highlights<br>
            (3-5 mins Wedding Highlights to be played during reception)<br>
            -  SAME DAY EDIT VIDEO - Onsite Wedding Video Highlights<br>
            (3-5 mins  Wedding Highlights to be played during reception)<br>
            - AERIAL VIDEOGRAPHY during Prenup and Wedding Day<br>
            - Creative Directors<br>
            - Awesome Events 16 Gig USB for Photo / Video Highlights<br>
            - 1 Terabyte External Hard Drive for all Photo / Video Files<br>
            - Pictorial of Couple at the reception venue also known as the "Closed-Door Reception Shot"  before the program is required <br>
            - A beautiful Memory Book to showcase your Wedding films <br>
         </h5>

			
		</div>
      {{-- side columno --}}
      {{-- contento wrapper --}}
   </div>
   {{-- contento wrapper --}}
   </div>

   <div class="preview" data-target="p-5">
      <i class="fas fa-times"></i>
      {{-- i tried to have text at the right in modal --}}
      <div id="contento-wrappero">
         {{-- i tried to have text at the right in modal --}}
      <div class="columno">
			<img id=featured5 src="{{asset('images/services/coordinator 2.jpg')}}" alt="">
         {{-- <h3>title</h3> --}}
         
			<div id="slide-wrapper" >
				<img id="slideLeft5" class="arrow" src="{{asset('images/arrow-left.png')}}" alt="">

				<div id="slider5">
					<img class="thumbnail5 actives5" src="{{asset('images/services/coordinator 2.jpg')}}" alt="">
					<img class="thumbnail5" src="{{asset('images/services/coordinator 5.png')}}" alt="">
					<img class="thumbnail5" src="{{asset('images/services/coordinator 3.jpeg')}}" alt="">

					<img class="thumbnail5" src="{{asset('images/services/coordinator 4.png')}}" alt="">
					{{-- <img class="thumbnail" src="images/preset2.jpg">
					<img class="thumbnail" src="images/preset3.jpg">
					<img class="thumbnail" src="images/preset4.jpg"> --}}
				</div>

				<img id="slideRight5" class="arrow" src="{{asset('images/arrow-right.png')}}" alt="">
			</div>
		</div>
      {{-- side columno --}}
      <div class="columno">
			<h1>Coordination</h1>
			<hr>
			{{-- <h3> ₱150, 000</h3> --}}

			<h5>
            - 3 Coordinators from Preparation to Ceremony to Reception <br>
            - 1 Bride Manager to assist the bride throughout the day<br>
            - 1 Groom Manager to assist the groom throughout the day<br>
            - Prenup - Traditional Hair and Makeup &#40;Trial&#41;<br>
            - Wedding Day - Airbrush Hair and Makeup for Bride only<br>
            - Bride and Groom &#40;If same preparation place&#41;<br>
            - 3 additional heads &#40;mother,maid of honor,etc&#41;<br>
            - Unlimited Retouch before Reception <br>
         </h5>

			
		</div>
      {{-- side columno --}}
      {{-- contento wrapper --}}
   </div>
   {{-- contento wrapper --}}
   </div>

   <div class="preview" data-target="p-6">
      <i class="fas fa-times"></i>
      {{-- i tried to have text at the right in modal --}}
      <div id="contento-wrappero">
         {{-- i tried to have text at the right in modal --}}
      <div class="columno">
			<img id=featured6 height="400px" width="630px" src="{{asset('images/services/church 1.jpg')}}" alt="">
         {{-- <h3>title</h3> --}}
         
			<div id="slide-wrapper" >
				<img id="slideLeft6" class="arrow" src="{{asset('images/arrow-left.png')}}" alt="">

				<div id="slider6">
					<img class="thumbnail6 actives6" src="{{asset('images/services/church 2.jpg')}}" alt="">
					<img class="thumbnail6" src="{{asset('images/services/church 3.jpg')}}" alt="">
					<img class="thumbnail6" src="{{asset('images/services/church 4.jpg')}}" alt="">

					{{-- <img class="thumbnail" src="{{asset('images/services/church.jpg')}}" alt=""> --}}
					{{-- <img class="thumbnail" src="images/preset2.jpg">
					<img class="thumbnail" src="images/preset3.jpg">
					<img class="thumbnail" src="images/preset4.jpg"> --}}
				</div>

				<img id="slideRight6" class="arrow" src="{{asset('images/arrow-right.png')}}" alt="">
			</div>
		</div>
      {{-- side columno --}}
      <div class="columno">
			<h1>Church and Venue Decoration</h1>
			<hr>
			{{-- <h3> ₱150, 000</h3> --}}

			<h5>
            - Special Exclusive Food Tasting &#40;Good for 6&#41; <br>
            - Welcome Treats: Grazing Station for Pica-Pica with Cocktail Tables<br>
            - UPGRADED Full-Course Buffet Menu with Free Flowing Drinks <br>
            &#40;Menu available upon request&#41;
            - Carving Station for Roast Beef Station<br>
            - Personalized Labels for each dish<br>
            - Use of complete sets of Dinnerware, Flatware and Glassware<br>
            - Complete Table Setting with Table Numbers<br>
            - Dressed Banquet Tables with Cloth Table Napkins<br>
            - Special VIP Treatment Food Service for the Presidential Table <br>
            - Professionally Trained Banquet Staff in Uniform<br>
            - Pair of Doves for Dove Release Tradition<br>
            - Bottle of Wine for Wedding Toast<br>
            - Reception White Carpet<br>
            - Elegant Candice Chairs and Mirror Table for VIP and Couple &#40;22pax&#41;<br>
            - Elegant Plateset for VIP and Couple &#40;22 pax&#41;<br>
            - Gold Cutlery for all guests<br>
         </h5>

			
		</div>
      {{-- side columno --}}
      {{-- contento wrapper --}}
   </div>
   {{-- contento wrapper --}}
   </div>

   <div class="preview" data-target="p-7">
      <i class="fas fa-times"></i>
      {{-- i tried to have text at the right in modal --}}
      <div id="contento-wrappero">
         {{-- i tried to have text at the right in modal --}}
      <div class="columno">
			<img id=featured7 src="{{asset('images/services/fog 4.jpg')}}" alt="">
         {{-- <h3>title</h3> --}}
         
			<div id="slide-wrapper" >
				<img id="slideLeft7" class="arrow" src="{{asset('images/arrow-left.png')}}" alt="">

				<div id="slider7">
					<img class="thumbnail7 actives7" src="{{asset('images/services/fog 4.jpg')}}" alt="">
					<img class="thumbnail7" src="{{asset('images/services/fog 1.jpg')}}" alt="">
					<img class="thumbnail7" src="{{asset('images/services/fog 5.png')}}" alt="">

					<img class="thumbnail7" src="{{asset('images/services/fog 2.jpg')}}" alt="">
					{{-- <img class="thumbnail" src="images/preset2.jpg">
					<img class="thumbnail" src="images/preset3.jpg">
					<img class="thumbnail" src="images/preset4.jpg"> --}}
				</div>

				<img id="slideRight7" class="arrow" src="{{asset('images/arrow-right.png')}}" alt="">
			</div>
		</div>
      {{-- side columno --}}
      <div class="columno">
			<h1>Fog Machine Rental</h1>
			<hr>
			{{-- <h3> ₱150, 000</h3> --}}

			<h5>
            Foggers and smoke machines can be used in a wide variety of situations. Those who are having a concert or a dance might find that you can add to the experience. Of course, it can also be a nice addition for parties around Halloween time. Some may even want to use these machines outside of their home on Halloween as a means to create a spookier atmosphere for the trick-or-treaters. A number of DJs like to utilize these devices as well, as it can provide some added visual interest to their performance.
         </h5>

			
		</div>
      {{-- side columno --}}
      {{-- contento wrapper --}}
   </div>
   {{-- contento wrapper --}}
   </div>

   <div class="preview" data-target="p-8">
      <i class="fas fa-times"></i>
      {{-- i tried to have text at the right in modal --}}
      <div id="contento-wrappero">
         {{-- i tried to have text at the right in modal --}}
      <div class="columno">
			<img id=featured8 src="{{asset('images/services/giveaway.jpg')}}" alt="">
         {{-- <h3>title</h3> --}}
         
			<div id="slide-wrapper" >
				<img id="slideLeft8" class="arrow" src="{{asset('images/arrow-left.png')}}" alt="">

				<div id="slider8">
					<img class="thumbnail8 actives8" src="{{asset('images/services/giveaway.jpg')}}" alt="">
					<img class="thumbnail8" src="{{asset('images/services/giveaway1.jpg')}}" alt="">
					<img class="thumbnail8" src="{{asset('images/services/giveaway2.jpg')}}" alt="">

					<img class="thumbnail8" src="{{asset('images/imagesinservice/img-9.jpg')}}" alt="">
					{{-- <img class="thumbnail" src="images/preset2.jpg">
					<img class="thumbnail" src="images/preset3.jpg">
					<img class="thumbnail" src="images/preset4.jpg"> --}}
				</div>

				<img id="slideRight8" class="arrow" src="{{asset('images/arrow-right.png')}}" alt="">
			</div>
		</div>
      {{-- side columno --}}
      <div class="columno">
			<h1>Wedding Invitation and Giveaways</h1>
			<hr>
			{{-- <h3> ₱150, 000</h3> --}}

			<h5>
            - 80 pieces Wedding Invitations <br>
            - 4 Layer Fondant Themed - Wedding Cake with Topper<br>
            - 10 pcs Fondant Mini-Cakes for Principal Sponsor Give-aways<br>
            - 100 pcs Fondant Cupcakes for Guest Give-aways<br>
            - 4 Hours Photobooth with Props and STOP TIME<br>
         </h5>

			
		</div>
      {{-- side columno --}}
      {{-- contento wrapper --}}
   </div>
   {{-- contento wrapper --}}
   </div>

   <div class="preview" data-target="p-9">
      <i class="fas fa-times"></i>
      {{-- i tried to have text at the right in modal --}}
      <div id="contento-wrappero">
         {{-- i tried to have text at the right in modal --}}
      <div class="columno">
			<img id=featured9 src="{{asset('images/services/host 4.jpg')}}" alt="">
         {{-- <h3>title</h3> --}}
         
			<div id="slide-wrapper" >
				<img id="slideLeft9" class="arrow" src="{{asset('images/arrow-left.png')}}" alt="">

				<div id="slider9">
					<img class="thumbnail9 actives9" src="{{asset('images/services/host 4.jpg')}}" alt="">
					<img class="thumbnail9" src="{{asset('images/services/host 5.jpg')}}" alt="">
					<img class="thumbnail9" src="{{asset('images/services/host 6.jpg')}}" alt="">

					<img class="thumbnail9" src="{{asset('images/services/host 7.jpg')}}" alt="">
					{{-- <img class="thumbnail" src="images/preset2.jpg">
					<img class="thumbnail" src="images/preset3.jpg">
					<img class="thumbnail" src="images/preset4.jpg"> --}}
				</div>

				<img id="slideRight9" class="arrow" src="{{asset('images/arrow-right.png')}}" alt="">
			</div>
		</div>
      {{-- side columno --}}
      <div class="columno">
			<h1>Host/Emcee & Choir</h1>
			<hr>
			{{-- <h3> ₱150, 000</h3> --}}

			<h5>
            - 1 Singer <br>
            - 1 Violinist  <br>
            - 1 Pianist <br>
         </h5>

			
		</div>
      {{-- side columno --}}
      {{-- contento wrapper --}}
   </div>
   {{-- contento wrapper --}}
   </div>

   <div class="preview" data-target="p-10">
      <i class="fas fa-times"></i>
      {{-- i tried to have text at the right in modal --}}
      <div id="contento-wrappero">
         {{-- i tried to have text at the right in modal --}}
      <div class="columno">
			<img id=featured10 src="{{asset('images/services/light 6.jpg')}}" alt="">
         {{-- <h3>title</h3> --}}
         
			<div id="slide-wrapper" >
				<img id="slideLeft10" class="arrow" src="{{asset('images/arrow-left.png')}}" alt="">

				<div id="slider10">
					<img class="thumbnail10 actives10" src="{{asset('images/services/light 6.jpg')}}" alt="">
					<img class="thumbnail10" src="{{asset('images/services/light 7.jpg')}}" alt="">
					<img class="thumbnail10" src="{{asset('images/services/light.jpg')}}" alt="">

					<img class="thumbnail10" src="{{asset('images/services/light 8.jpg')}}" alt="">
					{{-- <img class="thumbnail" src="images/preset2.jpg">
					<img class="thumbnail" src="images/preset3.jpg">
					<img class="thumbnail" src="images/preset4.jpg"> --}}
				</div>

				<img id="slideRight10" class="arrow" src="{{asset('images/arrow-right.png')}}" alt="">
			</div>
		</div>
      {{-- side columno --}}
      <div class="columno">
			<h1>Light and Sounds</h1>
			<hr>
			{{-- <h3> ₱150, 000</h3> --}}

			<h5>
            - 6x9 ft LED Wall with Live Feed <br>
            -  Soundcraft 8 channel mixer <br>
            - 4 units SRX Dual 15 speakers<br>
            - 2 units SM 58 or C audio Wired Vocal microphones<br>
            - 2 Wireless Microphones<br>
            - Crew, Sound Technician with DJ<br>
            - 10 LED Par Lights and other light effects<br>
         </h5>

			
		</div>
      {{-- side columno --}}
      {{-- contento wrapper --}}
   </div>
   {{-- contento wrapper --}}
   </div>

   <div class="preview" data-target="p-11">
      <i class="fas fa-times"></i>
      {{-- i tried to have text at the right in modal --}}
      <div id="contento-wrappero">
         {{-- i tried to have text at the right in modal --}}
      <div class="columno">
         {{-- <h4>title</h4> --}}
			<img id=featured11 height="400px" width="630px" src="{{asset('images/services/bridal.jpg')}}" alt="">
         {{-- <h3>title</h3> --}}
         
			<div id="slide-wrapper" >
				<img id="slideLeft11" class="arrow" src="{{asset('images/arrow-left.png')}}" alt="">

				<div id="slider11">
					<img class="thumbnail11 actives11" src="{{asset('images/services/bridal1.jpg')}}" alt="">
					<img class="thumbnail11" src="{{asset('images/services/bridal2.jpg')}}" alt="">
					<img class="thumbnail11" src="{{asset('images/services/bridal3.jpg')}}" alt="">

					<img class="thumbnail11" src="{{asset('images/services/bridal4.png')}}" alt="">
					{{-- <img class="thumbnail" src="images/preset2.jpg">
					<img class="thumbnail" src="images/preset3.jpg">
					<img class="thumbnail" src="images/preset4.jpg"> --}}
				</div>

				<img id="slideRight11" class="arrow" src="{{asset('images/arrow-right.png')}}" alt="">
			</div>
		</div>
      {{-- side columno --}}
      <div class="columno">
			<h1>Bridal Car</h1>
			<hr>
			{{-- <h3> ₱150, 000</h3> --}}

			<h5>
            - 4 Hours Bridal Car 
            	&#40;Chrysler 300c, Vintage Jaguar, Ford Mustang, Stretch <br> Limousine, Vintage Combi, Hummer H2, Mercedes Benz 1966 Fintail, MRS Spyder, Vintage Ford 1923, Vintage Plymouth 1948&#41; <br>
            - Preparation to Church to Reception <br>
         </h5>

			
		</div>
      {{-- side columno --}}
      {{-- contento wrapper --}}
   </div>
   {{-- contento wrapper --}}
   </div>

   <div class="preview" data-target="p-12">
      <i class="fas fa-times"></i>
      {{-- i tried to have text at the right in modal --}}
      <div id="contento-wrappero">
         {{-- i tried to have text at the right in modal --}}
      <div class="columno">
         {{-- <h4>title</h4> --}}
			<img id=featured12 src="{{asset('images/services/ento.jpg')}}" alt="">
         {{-- <h3>title</h3> --}}
         
			<div id="slide-wrapper" >
				<img id="slideLeft12" class="arrow" src="{{asset('images/arrow-left.png')}}" alt="">

				<div id="slider12">
					<img class="thumbnail12 actives12" src="{{asset('images/services/ento.jpg')}}" alt="">
					<img class="thumbnail12" src="{{asset('images/services/ento1.jpg')}}" alt="">
					<img class="thumbnail12" src="{{asset('images/services/ento2.jpg')}}" alt="">

					<img class="thumbnail12" src="{{asset('images/services/ento3.jpg')}}" alt="">
					{{-- <img class="thumbnail" src="images/preset2.jpg">
					<img class="thumbnail" src="images/preset3.jpg">
					<img class="thumbnail" src="images/preset4.jpg"> --}}
				</div>

				<img id="slideRight12" class="arrow" src="{{asset('images/arrow-right.png')}}" alt="">
			</div>
		</div>
      {{-- side columno --}}
      <div class="columno">
			<h1>Whole Wedding Entourage Attire</h1>
			<hr>
			{{-- <h3> ₱150, 000</h3> --}}

			<h6 style="text-transform: lowercase">
         <li style="float: left; font-weight: bold; font-size: 18px">Earth Tone</li><br>
         Range of colors would be in the realm of warm, earth tones. These hues are so pleasing to the eyes and absolutely flattering for anyone. The sleek fabric of these cocktail dresses also add to how chic the bridal party looks. <br>
         <li style="float: left; font-weight: bold; font-size: 18px">Modern Filipiniana</li><br>
         We've featured several Filipiniana themed weddings, so a modern interpretation of the terno is definitely included on this list. The silhouette of these Filipiniana dresses look so universally flattering, and it highlights how lovely the entourage members are even more. We find this uniformed style for your entourage so cohesive and pretty! <br>
         <li style="float: left; font-weight: bold; font-size: 18px">Prints and Patterns</li><br>
         It's so much fun to see prints and patterns on entourage dresses! Stripes, polka dots, even floral patterns certainly jazz up these lovely ensembles of Carla Abellana's bride squad. Being adventurous and going for bold patterns as fabric makes your entourage stand out. <br>
         <li style="float: left; font-weight: bold; font-size: 18px">Edgy Boots</li><br>
         Let's talk about footwear! Don't these boots look absolutely chic? This bridal squad is making the case for matching boots and we're all for it! For this particular boho wedding, the boots are an excellent choice for the ladies' wrap dresses. The length shows off their stylish choice for shoes. We also love the fact that they wore different styles of boots from stilettos to block heels. This entourage nailed the fashion. <br>


         </h6>

			
		</div>
      {{-- side columno --}}
      {{-- contento wrapper --}}
   </div>
   {{-- contento wrapper --}}
   </div>

</div>




















<script src="{{asset('home/js/modalinservice.js')}}"></script>


<script>

let loadMoreBtn = document.querySelector('#load-more');
let currentItem = 3;

loadMoreBtn.onclick = () =>{
   let boxes = [...document.querySelectorAll('.containerikun .box-container .sbox')];
   for (var i = currentItem; i < currentItem + 9; i++){
      boxes[i].style.display = 'inline-block';
   }
   currentItem += 12;

   if(currentItem >= boxes.length){
      loadMoreBtn.style.display = 'none';
   }
}

</script>


{{-- what a long night --}}
{{-- 2 --}}
<script type="text/javascript">
   let thumbnails2 = document.getElementsByClassName('thumbnail2')
   let activeImages2 = document.getElementsByClassName('actives2')

   for (var j=0; j < thumbnails2.length; j++){
      thumbnails2[j].addEventListener('mouseover', function(){
         console.log(activeImages2)
         
         if (activeImages2.length > 0){
            activeImages2[0].classList.remove('actives2')
         }
         
         this.classList.add('actives2')
         document.getElementById('featured2').src = this.src

      })
   }
</script>
{{-- 3 --}}
<script type="text/javascript">
   let thumbnails3 = document.getElementsByClassName('thumbnail3')
   let activeImages3 = document.getElementsByClassName('actives3')

   for (var k=0; k < thumbnails3.length; k++){
      thumbnails3[k].addEventListener('mouseover', function(){
         console.log(activeImages3)
         
         if (activeImages3.length > 0){
            activeImages3[0].classList.remove('actives3')
         }
         
         this.classList.add('actives3')
         document.getElementById('featured3').src = this.src

      })
   }
</script>
{{-- 4 --}}
<script type="text/javascript">
   let thumbnails4 = document.getElementsByClassName('thumbnail4')
   let activeImages4 = document.getElementsByClassName('actives4')

   for (var l=0; l < thumbnails4.length; l++){
      thumbnails4[l].addEventListener('mouseover', function(){
         console.log(activeImages4)
         
         if (activeImages4.length > 0){
            activeImages4[0].classList.remove('actives4')
         }
         
         this.classList.add('actives4')
         document.getElementById('featured4').src = this.src

      })
   }
</script>
{{-- 5 --}}
<script type="text/javascript">
   let thumbnails5 = document.getElementsByClassName('thumbnail5')
   let activeImages5 = document.getElementsByClassName('actives5')

   for (var m=0; m < thumbnails5.length; m++){
      thumbnails5[m].addEventListener('mouseover', function(){
         console.log(activeImages5)
         
         if (activeImages5.length > 0){
            activeImages5[0].classList.remove('actives5')
         }
         
         this.classList.add('actives5')
         document.getElementById('featured5').src = this.src

      })
   }
</script>
{{-- 6 --}}
<script type="text/javascript">
   let thumbnails6 = document.getElementsByClassName('thumbnail6')
   let activeImages6 = document.getElementsByClassName('actives6')

   for (var n=0; n < thumbnails6.length; n++){
      thumbnails6[n].addEventListener('mouseover', function(){
         console.log(activeImages6)
         
         if (activeImages6.length > 0){
            activeImages6[0].classList.remove('actives6')
         }
         
         this.classList.add('actives6')
         document.getElementById('featured6').src = this.src

      })
   }
</script>
{{-- 7 --}}
<script type="text/javascript">
   let thumbnails7 = document.getElementsByClassName('thumbnail7')
   let activeImages7 = document.getElementsByClassName('actives7')

   for (var o=0; o < thumbnails3.length; o++){
      thumbnails7[o].addEventListener('mouseover', function(){
         console.log(activeImages3)
         
         if (activeImages7.length > 0){
            activeImages7[0].classList.remove('actives7')
         }
         
         this.classList.add('actives7')
         document.getElementById('featured7').src = this.src

      })
   }
</script>
{{-- 8 --}}
<script type="text/javascript">
   let thumbnails8 = document.getElementsByClassName('thumbnail8')
   let activeImages8 = document.getElementsByClassName('actives8')

   for (var p=0; p < thumbnails8.length; p++){
      thumbnails8[p].addEventListener('mouseover', function(){
         console.log(activeImages8)
         
         if (activeImages8.length > 0){
            activeImages8[0].classList.remove('actives8')
         }
         
         this.classList.add('actives8')
         document.getElementById('featured8').src = this.src

      })
   }
</script>
{{-- 9 --}}
<script type="text/javascript">
   let thumbnails9 = document.getElementsByClassName('thumbnail9')
   let activeImages9 = document.getElementsByClassName('actives9')

   for (var q=0; q < thumbnails9.length; q++){
      thumbnails9[q].addEventListener('mouseover', function(){
         console.log(activeImages9)
         
         if (activeImages9.length > 0){
            activeImages9[0].classList.remove('actives9')
         }
         
         this.classList.add('actives9')
         document.getElementById('featured9').src = this.src

      })
   }
</script>
{{-- 10 --}}
<script type="text/javascript">
   let thumbnails10 = document.getElementsByClassName('thumbnail10')
   let activeImages10 = document.getElementsByClassName('actives10')

   for (var r=0; r < thumbnails10.length; r++){
      thumbnails10[r].addEventListener('mouseover', function(){
         console.log(activeImages10)
         
         if (activeImages10.length > 0){
            activeImages10[0].classList.remove('actives10')
         }
         
         this.classList.add('actives10')
         document.getElementById('featured10').src = this.src

      })
   }
</script>
{{-- 11 --}}
<script type="text/javascript">
   let thumbnails11 = document.getElementsByClassName('thumbnail11')
   let activeImages11 = document.getElementsByClassName('actives11')

   for (var s=0; s < thumbnails11.length; s++){
      thumbnails11[s].addEventListener('mouseover', function(){
         console.log(activeImages11)
         
         if (activeImages11.length > 0){
            activeImages11[0].classList.remove('actives11')
         }
         
         this.classList.add('actives11')
         document.getElementById('featured11').src = this.src

      })
   }
</script>
{{-- 12 --}}
<script type="text/javascript">
   let thumbnails12 = document.getElementsByClassName('thumbnail12')
   let activeImages12 = document.getElementsByClassName('actives12')
  
   for (var t=0; t < thumbnails12.length; t++){
      thumbnails12[t].addEventListener('mouseover', function(){
         console.log(activeImages12)
         
         if (activeImages12.length > 0){
            activeImages12[0].classList.remove('actives12')
         }
         
         this.classList.add('actives12')
         document.getElementById('featured12').src = this.src

      })
   }
</script>

<script type="text/javascript">
   let thumbnails = document.getElementsByClassName('thumbnail')

   let activeImages = document.getElementsByClassName('actives')

   for (var i=0; i < thumbnails.length; i++){

      thumbnails[i].addEventListener('mouseover', function(){
         console.log(activeImages)
         
         if (activeImages.length > 0){
            activeImages[0].classList.remove('actives')
         }
         

         this.classList.add('actives')
         document.getElementById('featured1').src = this.src
      })
   }


   let buttonRight = document.getElementById('slideRight');
   let buttonLeft = document.getElementById('slideLeft');

   buttonLeft.addEventListener('click', function(){
      document.getElementById('slider').scrollLeft -= 180
   })

   buttonRight.addEventListener('click', function(){
      document.getElementById('slider').scrollLeft += 180
   })

   // slider 2

   let buttonRight2 = document.getElementById('slideRight2');
   let buttonLeft2 = document.getElementById('slideLeft2');

   buttonLeft2.addEventListener('click', function(){
      document.getElementById('slider2').scrollLeft -= 180
   })

   buttonRight2.addEventListener('click', function(){
      document.getElementById('slider2').scrollLeft += 180
   })
   // end of slider 2

   // slider 3

   let buttonRight3 = document.getElementById('slideRight3');
   let buttonLeft3 = document.getElementById('slideLeft3');

   buttonLeft3.addEventListener('click', function(){
      document.getElementById('slider3').scrollLeft -= 180
   })

   buttonRight3.addEventListener('click', function(){
      document.getElementById('slider3').scrollLeft += 180
   })
   // end of slider 3

   // slider 4

   let buttonRight4 = document.getElementById('slideRight4');
   let buttonLeft4 = document.getElementById('slideLeft4');

   buttonLeft4.addEventListener('click', function(){
      document.getElementById('slider4').scrollLeft -= 180
   })

   buttonRight4.addEventListener('click', function(){
      document.getElementById('slider4').scrollLeft += 180
   })
   // end of slider 4

   // slider 5

   let buttonRight5 = document.getElementById('slideRight5');
   let buttonLeft5 = document.getElementById('slideLeft5');

   buttonLeft5.addEventListener('click', function(){
      document.getElementById('slider5').scrollLeft -= 180
   })

   buttonRight5.addEventListener('click', function(){
      document.getElementById('slider5').scrollLeft += 180
   })
   // end of slider 5

   // slider 6

   let buttonRight6 = document.getElementById('slideRight6');
   let buttonLeft6 = document.getElementById('slideLeft6');

   buttonLeft6.addEventListener('click', function(){
      document.getElementById('slider6').scrollLeft -= 180
   })

   buttonRight6.addEventListener('click', function(){
      document.getElementById('slider6').scrollLeft += 180
   })
   // end of slider 6

   // slider 7

   let buttonRight7 = document.getElementById('slideRight7');
   let buttonLeft7 = document.getElementById('slideLeft7');

   buttonLeft7.addEventListener('click', function(){
      document.getElementById('slider7').scrollLeft -= 180
   })

   buttonRight7.addEventListener('click', function(){
      document.getElementById('slider7').scrollLeft += 180
   })
   // end of slider 7

   // slider 8

   let buttonRight8 = document.getElementById('slideRight8');
   let buttonLeft8 = document.getElementById('slideLeft8');

   buttonLeft8.addEventListener('click', function(){
      document.getElementById('slider8').scrollLeft -= 180
   })

   buttonRight8.addEventListener('click', function(){
      document.getElementById('slider8').scrollLeft += 180
   })
   // end of slider 8

   // slider 9

   let buttonRight9 = document.getElementById('slideRight9');
   let buttonLeft9 = document.getElementById('slideLeft9');

   buttonLeft9.addEventListener('click', function(){
      document.getElementById('slider9').scrollLeft -= 180
   })

   buttonRight9.addEventListener('click', function(){
      document.getElementById('slider9').scrollLeft += 180
   })
   // end of slider 9

   // slider 10

   let buttonRight10 = document.getElementById('slideRight10');
   let buttonLeft10 = document.getElementById('slideLeft10');

   buttonLeft10.addEventListener('click', function(){
      document.getElementById('slider10').scrollLeft -= 180
   })

   buttonRight10.addEventListener('click', function(){
      document.getElementById('slider10').scrollLeft += 180
   })
   // end of slider 10

   // slider 11

   let buttonRight11 = document.getElementById('slideRight11');
   let buttonLeft11 = document.getElementById('slideLeft11');

   buttonLeft11.addEventListener('click', function(){
      document.getElementById('slider11').scrollLeft -= 180
   })

   buttonRight11.addEventListener('click', function(){
      document.getElementById('slider11').scrollLeft += 180
   })
   // end of slider 11

   // slider 12

   let buttonRight12 = document.getElementById('slideRight12');
   let buttonLeft12 = document.getElementById('slideLeft12');

   buttonLeft12.addEventListener('click', function(){
      document.getElementById('slider12').scrollLeft -= 180
   })

   buttonRight12.addEventListener('click', function(){
      document.getElementById('slider12').scrollLeft += 180
   })
   // end of slider 12


</script>

</body>
</html>