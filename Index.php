<?php
	include './Assets/Php/Connection.php';
?> 
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>AMARESA - Find your dream house</title>
	<!-- Link: Custom -->
	<link rel="stylesheet" type="text/css" href="./Assets/Css/Index.css?v=<?php echo time(); ?>">
	<link rel="stylesheet" type="text/css" href="./Assets/Css/Table.css?v=<?php echo time(); ?>">
	<!-- LINK: FOR AMARESA FONT -->
	<link rel="stylesheet" type="text/css" href="./Assets/Momoiro-Regular/style.css">	
	<!-- Link: Google Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic\.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
	<!-- Link: Web Icon -->
	<link rel="website icon" type="png" href="./Assets/Images/Icon.PNG">
	<!-- Script: JQuery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
	<!-- Link: Swiper -->
	<link rel="stylesheet" type="text/css" href="./Assets/Css/swiper-bundle.min.css">
  	<!-- Include SweetAlert2 CSS and JS -->
	  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
	<!-- LEAFLET -->
	<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
	     integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY="
	     crossorigin=""/>		

</head>
<body>

	<!-- Section: Header -->
	<header class="header" id="header">
		<div class="header-top"> 
			<div class="container">
				<ul class="header-top-list">

					<li>
						<a href="https://www.amaresa.ph/" class="header-top-link" title="www.amaresa.ph">
							<i class="fa-solid fa-paper-plane"></i>
							<span>amaresa.ph</span>
						</a>
					</li>						

					<li> 
						<a href="https://www.google.com/maps/dir//Amaresa+Marilao,+3019+M.+Villarica+Rd,+Marilao,+3019+Bulacan/@14.7950949,121.0162162,17z/data=!4m17!1m7!3m6!1s0x3397b38da5906293:0x8b01e358c47a7685!2sAmaresa+Marilao!8m2!3d14.7950897!4d121.0187911!16s%2Fg%2F11gpnfmdlb!4m8!1m0!1m5!1m1!1s0x3397b38da5906293:0x8b01e358c47a7685!2m2!1d121.0188034!2d14.7951434!3e2?entry=ttu"  class="header-top-link" title="Amaresa location">
							<i class="fa-solid fa-map-location-dot"></i>
							<span>3019 M. Villarica Rd, Marilao, 3019 Bulacan</span>
						</a>
					</li>
				</ul>
				<div class="wrapper">

					<ul class="header-top-social-list">
						<li>
							<a href="#about" class="header-top-social-link" title="Redirect to About us">
								<i class="fa-solid fa-circle-info"></i>
								<span>About us</span>
							</a>
						</li>
						<li>
							<a href="#location" class="header-top-social-link" title="Redirect to Location">
								<i class="fa-solid fa-location-crosshairs"></i>
								<span> Location</span>
							</a>
						</li>
						<li>
							<a href="#service" class="header-top-social-link" title="Redirect to Service">
								<i class="fa-brands fa-servicestack"></i>
								<span> Service </span>
							</a>
						</li>
						<li>
							<a href="#property" class="header-top-social-link" title="Redirect to Property listing">
								<i class="fa-solid fa-house-lock"></i>
								<span> Properties </span>
							</a>
						</li>	
						<li class="header-btn-wrapper">
				
							<button class="header-top-btn " onclick="ShowLogin()" > <i class="fa-solid fa-right-to-bracket"></i>Log in </span></button>
						</li>																						
					</ul>


					<!--<button class="header-top-btn btn-acc" onclick="ShowLogin()" > <i class="fa-solid fa-plus"></i> <span> Log in </span></button>-->
							<button class="header-top-btn" onclick="ShowSignup()" > <i class="fa-solid fa-user-tie"></i> <span> Sign up </span></button>	
				</div>
			</div>

		</div>
	</header>
	<!-- Section: Main Contents -->
	<main>
		<article>
			<!-- Section: Hero -->
			<section class="hero" id="home">
				<div class="container">

					<div class="hero-top-part">
                        <div class="hero-logo">
                     
                             <img src="./Assets/Images/Amaresa-logo.PNG" alt="Amaresa Logo" >

                        </div>
						<div class="hero-top-details">

							<h2 class="h1 hero-title">Find Your Dream House By Us!</h2>
							<p class="hero-text">
								At Amaresa, we are committed to helping you find your dream home with ease and confidence. Whether you're a first-time homebuyer or looking to upgrade, we guide you through every step of the process, ensuring a seamless and stress-free experience. Trust us to turn your dream of homeownership into a reality.
							</p>						
						</div>						
					</div>
					<button class="Inquiry-btn btn" onclick="ShowLogin()" > 
						<span>Make an Inquiry</span>
					</button>
					<figure class="hero-banner">

						<div class="swiper mySwiper-autoplay">
							<div class="swiper-wrapper">
								<div class="swiper-slide"><img src="./Assets/Images/Amaresa Marilao.PNG" alt="Amaresa Marilao" class="w-100"></div>
								<div class="swiper-slide"><img src="./Assets/Images/Amaresa about us .PNG" alt="Amaresa Marilao" class="w-100"></div>
								<div class="swiper-slide"><img src="./Assets/Images/Dropshot.png" alt="Amaresa Marilao" class="w-100"></div>
							</div>
						</div>
					</figure>
				</div>
			</section>
			<!-- Section: About -->
			<section class="about" id="about">
				<div class="container"> 
					<div class="about-content"> 
						<p class="section-subtitle"> About Us! </p>
						<h2 class="h2 section-title"> The Faces Behind Your Dream Home</h2>
						<p class="about-text">
							We’re more than real estate experts; we’re your partners in finding and crafting the place you’ll love to call home.
						</p>
						<ul class="about-list"> 

							<li class="about-item">
								<div class="about-item-icon">
									<i class="fa-solid fa-house"></i>
								</div>

								<p class="about-item-text"> Smart Home Design </p>
							</li>							


							<li class="about-item">
								<div class="about-item-icon">
									<i class="fa-solid fa-leaf"></i>
								</div>

								<p class="about-item-text"> Beautiful Scene Around </p>
							</li>							

							<li class="about-item">
								<div class="about-item-icon">
									<i class="fa-solid fa-wine-bottle"></i>
								</div>

								<p class="about-item-text"> Exceptional Lifestyle </p>
							</li>

							<li class="about-item">
								<div class="about-item-icon">
									<i class="fa-solid fa-shield-halved"></i>
								</div>

								<p class="about-item-text"> Complete 24/7 Security </p>
							</li>

						</ul>
						<p class="callout">
							Discover the passion and expertise that make your home search special.
						</p>

					</div>
					<div class="about-banner">
						<div class="swiper mySwiper-autoplay">
							<div class="swiper-wrapper">
								<div class="swiper-slide"> <img src="./Assets/Images/Alexandria/Alexandria Exterior.png"></div>
								<div class="swiper-slide"> <img src="./Assets/Images/Amara Expanded/Amara Exterior.png"></div>
								<div class="swiper-slide"> <img src="./Assets/Images/Arya Prime/Arya Exterior.png"></div>
								<div class="swiper-slide"> <img src="./Assets/Images/Kayla Prime/Kayla Prime.png"></div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- Section: Locale -->
			<section class="location" id="location">

				<div class="container">
					<figure class="location-banner">
						<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d241.09605306750007!2d121.01878519274672!3d14.795098133967587!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397b38da5906293%3A0x8b01e358c47a7685!2sAmaresa%20Marilao!5e0!3m2!1sen!2sph!4v1729579498328!5m2!1sen!2sph" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>					
					</figure>	

					<div class="location-wrapper">
						<p class="section-subtitle"> Location </p>
						<h2 class="h2 section-title"> Family-Friendly Neighborhood </h2>

						<p class="locale-text"> Set in the welcoming community of Marilao Bulacan, our homes are ideal for families. Benefit from nearby parks, excellent schools, and a variety of family-friendly amenities. It’s a safe and nurturing environment where you can watch your family grow and thrive. </p>	

						<p class="locale-text">Marilao is not just a place to live, but a place to thrive. With its combination of natural beauty, convenience, and a family-oriented lifestyle, it's an ideal setting for creating lifelong memories. This is where comfort meets community, where safety and family values come together, offering you the perfect place to plant your roots and watch your family flourish.</p>		
						<p class="callout">
							Explore Neighborhoods That Align with Your Dreams and Daily Needs
						</p>		
					</div>
					
				</div>
			</section>
			<!-- Section: Service -->
			<section class="service" id="service">
				<div class="container"> 

					<p class="section-subtitle"> Our Services </p>
					<h2 class="h2 section-title"> Our Main Focus </h2>

					<ul class="service-list">
						<li>
							<div class="service-card"> 
								<div class="card-icon">
									<img src="./Assets/Images/Houses.PNG" alt="service icon">
								</div>

								<h3 class="h3 card-title">
									<!-- MAKE IT BUTTON TO INQUIRY -->
									<button onclick="ShowLogin()"> Buy a Home </button> 
								</h3>
								<p class="card-text">
									Your dream home awaits! Whether you’re looking for a cozy starter home or your forever dream house, our expert team is here to turn your vision into reality. We offer a diverse selection of homes and personalized assistance to help you find a perfect fit. Let’s embark on this exciting journey together!
								</p>

								<a href="#property" class="card-link"> 
									<span>Find a home</span>
									<i class="fa-solid fa-arrow-right-long"></i>
								</a>								
							</div>

						</li>						

					</ul>


				</div>
			</section>
			<!-- Section: Property -->
			<section class="property" id ="property">
				<div class="container"> 
					<p class="section-subtitle"> Properties </p>
					<h2 class="h2 section-title"> Featured Listing </h2>
					<p class="locale-text"> Step into the finest homes available right now. Our featured listings offer a blend of exceptional design, prime locations, and unparalleled value. Don’t miss out on these standout properties </p>
					<?php

							echo "
								<form method='POST'>
								<div class='Block-Options-item'>
									<input type='text' list='Block-Options' id='Block' name='Block' placeholder='Filter by block'>
									<input type = 'Submit' name='block_btn'> 
								</div>

								<datalist id='Block-Options'>
							";
							$blocksql = "SELECT * FROM properties";
							$blockrs = $conn->query($blocksql);

							if($blockrs){
								$unique_blocks = [];
								while($blockrw = mysqli_fetch_assoc($blockrs)){
									$Status = $blockrw['Status'];
									$Block = $blockrw['Block'];
									if($Status == "Sale" && !in_array($Block, $unique_blocks)){
									echo "
										<option value='$Block'> </option>
									";
									$unique_blocks[] = $Block;
									}
									
								}

								echo "
								<option value='Default'> </option>
								</datalist>
								</form>
								";

							}
					?>					
					<!--Section: Featured Card -->
					<section class="featuredcard" id = "card">
						<div class="card-container">
							<?php

								if(isset($_POST['block_btn'])){
								    $Sort = $_POST['Block'];
								    if($Sort == "Default"){
								        $sql = "SELECT * FROM properties";
								        $stmt = $conn->prepare($sql);
								    } else {
								        $sql = "SELECT * FROM properties WHERE Block = ?";
								        $stmt = $conn->prepare($sql);
								        $stmt->bind_param("s", $Sort);
								    }
								} else {
								    $sql = "SELECT * FROM properties";
								    $stmt = $conn->prepare($sql);
								}

								$stmt->execute();
								$rs = $stmt->get_result();

			
							if($rs){
								while ($row = mysqli_fetch_assoc($rs)) {

									$ImageExterior = './Images/'.$row['IExterior'];
									$Bed = $row['Bedrooms'];
									$Bath = $row['Bathrooms'];
									$Property = $row['Property'];
									$Status = $row['Status'];
									$Area = $row['Area_sqft'];
									$ID = $row['PropertyID'];
	    							
									$BathList = [
										1 => "One Bath",
										2 => "Two Baths",
										3 => "Three Baths",
										4 => "Four Baths",
										5 => "Five Baths",
										6 => "Six Baths",
										7 => "Seven Baths",
										8 => "Eight Baths",
										9 => "Nine Baths",
										10 => "Ten Baths"
									];									
									$BedList = [
										1 => "One Bed",
										2 => "Two Beds",
										3 => "Three Beds",
										4 => "Four Beds",
										5 => "Five Beds",
										6 => "Six Beds",
										7 => "Seven Beds",
										8 => "Eight Beds",
										9 => "Nine Beds",
										10 => "Ten Beds"
									];
									$Bath = $BathList[$Bath] ?? $Bath;
									$Bed = $BedList[$Bed] ?? $Bed;   
								  	if($Status === "Sale"){
									echo "
									<div class='card wallet'>
									<div class='overlay'></div>
									<div class='first-content'>
									<div class='circle'>
									<img src='$ImageExterior' /> 
									</div>
									</div>
									<h1>$Property</h1>

									<div class='second-content'>
									<p><i class='fa-solid fa-maximize'></i>: $Area </p>
									<p><i class='fa-solid fa-bed'></i>: $Bed</p>
									<p><i class='fa-solid fa-shower'></i>: $Bath </p>
									</div>

									<form method='POST' action='./Assets/Php/Index.php'>
									<div class='third-content'>

										
											<input type='hidden' name='IDHolder' value='$ID'>
											<button type='submit'   name='PassIDUser' '>
											<i class='fa-solid fa-eye'></i>
											<span>See more</span>
											</button>
										
									</div>
									</form>
									
									</div>

									";
									}

								}
							}

							?>

            
						</div>
					</section>
				</div>
			</section>
			<!-- Sample Computation -->
			<section class="Computation" id="Computation">
				<div class="container">
			<section class="Payment" id="Payment">
				<h1 class="Payment_Title">Mode of Payment</h1>
				<span class="Payment_Subtitle">Full payment of the property price at one time. </span>
				<div class="Container">
				    <div class="block">
				        <div class="block-header">
				            <h3>Bank Financing</h3>
				        </div>
				        <div class="details">
				            <h2>STAGE 1: Reserved Sale</h2>
				            <br>
				            <p><strong>Documents 1-6 should be Submitted to guarantee reservation of unit </strong></p> <br>
				            <p>1. Full Reservation Fee (Cash or Dated Check)</p> <br>
				            <p>2. Reservation Agreement</p> <br>
				            <p>3. Buyer’s Information Sheet</p> <br>
				            <p>4. Photocopy of (2) two Valid Gov’t ID (Driver’s License, Passport, PRC ID, SSS, Postal ID, TIN ID & other valid gov’t ID).</p> <br>
				            <p>5. Proof of billing (Meralco, PLDT, credit card, water bill, cellphone statement of account) <br> <br>
					         <strong>Note:</strong> if no proof of billing under the name of buyer. <br>
					         <strong>Provide:</strong> Certification Letter of Owner and Valid ID.</p> <br> <br>
				            <p>6. Proof of Income: <br>
							<strong>A. If locally employed</strong> <br>
							a.1 Latest 3 months payslip or Certificate of Employment and Compensation <br>
							<br>

							<strong>B. OFW</strong> <br>
							b.1 Job Contract or Certificate of Employment and Conpensation or 3 months payslip <br>
							b.2 Photocopy of two(2) Valid ID of SPA <br>
							b.3 Information Sheet of SPA
							<br> <br>
							<strong>C. FOR SELF-EMPLOYED</strong><br>
							c.1 Certificate of Registration of Business Name (DTI Registration) or Business Permit<br>
							c.2 Bank Statement (Latest 3 months) or ITR</p> 
							<br><br>
							<p>Note: if insufficient income, provide additional source of income or provide CO-BUYER.</p><br> <br>

					         <h2>STAGE 2: Closed Sale</h2>
				            <br>
				            <p><strong>For submission 7 to 30 days upon approval of sale</strong></p> <br>
				            <p>1. Tax Identification Number with verification slip</p> <br>
				            <p>2. Sketch of present address</p> <br>
				            <p>3. 1X1 ID Photo (3pcs)</p> <br>
				            <p>4. If single: Birth Certificate & CENOMAR</p> <br>
				            <p>5. If married: Marriage Certificate</p> <br>
				            <p>6. COMPLETE POST DATED CHECKS FOR DOWNPAYMENT</p> <br>
				            <p>7. Proof of Income:</p> <br>
				            <p><strong>A. If locally employed</strong> <br> a.1 Latest Certificate of Employment and Compensation<br>
				            a.2 Latest ITR </p> <br>
				            <p><strong>B. OFW</strong> <br>
				            b.1 Latest Job Contract or Certificate of Employment and Compensation with English Translation <br>
				        	b.2 Notarized Special Power of Attorney <br>
				        	b.3 Latest 3 months bank statement</p> <br>
				            <p><strong>C. FOR SELF-EMPLOYED</strong><br>
				            	c.1 Latest ITR or BIR Audited Financial Statement <br>
				            	c.2 Certificate of Registration of Business Name (DTI Registration) <br>
				            	c.3 Business Permit<br>
				            	c.4 Clients and Suppliers (including contact persons and numbers, at least (5) five)</p><br> <br>


				            <h2>STAGE 3: Before Full Downpayment</h2> <br>
				            <p>1. 6 months PDC's</p> <br> <br>
				        </div>
				    </div>

				    <div class="block">
				        <div class="block-header">
				            <h3>In-House</h3>
				        </div>
				        <div class="details">
				            <h2 class="stage">STAGE 1: Reserved Sale</h2>
				            <br>
				            <p><strong>Documents 1-6 should be Submitted to guarantee reservation of unit</strong></p> <br>
				            <p>1. Full Reservation Fee (Cash or Dated Check)</p> <br>
				            <p>2. Reservation Agreement</p> <br>
				            <p>3. Buyer’s Information Sheet</p> <br>
				            <p>4. Photocopy of (2) two Valid Gov’t ID (Driver’s License, Passport, PRC ID, SSS, Postal ID, TIN ID & other valid gov’t ID). </p> <br>
				            <p>5. Proof of billing (Meralco, PLDT, credit card, water bill, cellphone statement of account)  <br> <br>
					         <strong>Note:</strong> if no proof of billing under the name of buyer. <br>
					         <strong>Provide:</strong> Certification Letter of Owner and Valid ID.</p> <br> <br> 
					       
				            <p>6. Proof of Income: <br>
							<strong>A. If locally employed</strong> <br>
							a.1 Latest 3 months payslip or Certificate of Employment and Compensation <br>
							<br>
							<strong>B. OFW</strong> <br>
							b.1 Job Contract or Certificate of Employment and Conpensation or 3 months payslip <br>
							b.2 Photocopy of two(2) Valid ID of SPA <br>
							b.3 Information Sheet of SPA
							<br> <br>
							<strong>C. FOR SELF-EMPLOYED</strong><br>
							c.1 Certificate of Registration of Business Name (DTI Registration) or Business Permit<br>
							c.2 Bank Statement (Latest 3 months) or ITR</p> 
							<br><br>
							<p>Note: if insufficient income, provide additional source of income or provide CO-BUYER.</p> <br> <br>

					         <h2>STAGE 2: Closed Sale</h2>
				            <br>
				            <p><strong>For submission 7 to 30 days upon approval of sale</strong></p> <br>
				            <p>1. Tax Identification Number with verification slip</p> <br>
				            <p>2. Sketch of present address</p> <br>
				            <p>3. 1X1 ID Photo (3pcs)</p> <br>
				            <p>4. If single: Birth Certificate</p> <br>
				            <p>5. If married: Marriage Certificate</p> <br>
				            <p>6. COMPLETE POST DATED CHECKS FOR DOWNPAYMENT</p> <br>
				            <p>7. Proof of Income:</p> <br>
				            <p><strong>A. If locally employed</strong> <br> a.1 Latest Certificate of Employment and Compensation or Latest ITR </p> <br>
				            <p><strong>B. OFW</strong> <br>
				            b.1 Latest Job Contract or Certificate of Employment and Compensation with English Translation <br>
				        	b.2 Notarized Special Power of Attorney <br>
				        	b.3 Latest 3 months bank statement</p> <br>
				            <p><strong>C. FOR SELF-EMPLOYED</strong><br>
				            	c.1 Latest ITR or BIR Audited Financial Statement <br>
				            	c.2 Certificate of Registration of Business Name (DTI Registration) <br>
				            	c.3 Business Permit</p><br> <br>


				            <h2>STAGE 3: Before Full Downpayment</h2> <br>
				            <p>1. 36 months PDC's</p> <br>
				            <p>2. Any Latest Proof of Income (3 month payslip or Certificate of Employment and Compensation or ITR)</p> <br> <br>

				            
				        </div>
				    </div>
				    
				</div>
				<div class="notes">
							<p><strong>Notes: </strong> <br><br>
				            	1. For buyers who cannot provide proof of income due to undeclared income/assets/source of income: <br>
				            	a. Suggest cash payment or <br>
				            	b. Suggest deffered cash payment of 24 months</p> <br>

				            <p>2. If seller wishes to hold unit for buyer, the following should be provided: <br>
				            	a. Full reservation fee<br>
				            	b. BIS<br>
				            	c. Reservation Agreement<br>
				            	-Holding unit must 7 calendar days only <br>
				            	-Res. Fee is forfeited upon non-compliance of RS requirements after the 7th day.<br>
				            	-Non-compliance of RS requirements on 8th day, we will re-open the said unit.</p> <br>

				            	<p>3. For OFW buyers who will be providing past due job contracts, new job contracts must be submitted before DP and upon submission of M.A. PDC's</p>

				</div>	
						<div class="table-block">
						    <div class="table-header">
						        <h3>IN-HOUSE</h3>
						    </div>
						    <div class="table">
						        <table>
						            <thead>
						                <tr>
						                    <th>House Model</th>
						                    <th>Kayla-Prime</th>
						                    <th>Arya-Prime</th>
						                    <th>Amara-Expanded</th>
						                    <th>Alexandria</th>
						                </tr>
						            </thead>
						            <tbody>
						                <tr>
						                    <td>Lot Area</td>
						                    <td>89 sqm.</td>
						                    <td>89 sqm.</td>
						                    <td>110 sqm.</td>
						                    <td>159 sqm.</td>
						                </tr>
						                <tr>
						                    <td>Usable Floor Area</td>
						                    <td>94 sqm.</td>
						                    <td>99 sqm.</td>
						                    <td>147 sqm.</td>
						                    <td>174 sqm.</td>
						                </tr>
						                <tr>
						                    <td>TCP(IN-HOUSE)</td>
						                    <td>5,721,410.00</td>
						                    <td>5,962,300.00</td>
						                    <td>8,261,110.00</td>
						                    <td>10,200,220.00</td>
						                </tr>
						                <tr>
						                    <td>DISCOUNT</td>
						                    <td>0.00</td>
						                    <td>0.00</td>
						                    <td>0.00</td>
						                    <td>0.00</td>
						                </tr>
						                <tr>
						                    <td>TCP NET</td>
						                    <td>5,721,410.00</td>
						                    <td>5,962,300.00</td>
						                    <td>8,261,110.00</td>
						                    <td>10,200,220.00</td>
						                </tr>
						                <tr>
						                    <td>Less Reservation Fee</td>
						                    <td>20,000.00</td>
						                    <td>20,000.00</td>
						                    <td>30,000.00</td>
						                    <td>35,000.00</td>
						                </tr>
						                <tr>
						                	<td>20% Downpayment (Less Reservation Fee)</td>
						                    <td>1,124,282.00</td>
						                    <td>1,172,460.00</td>
						                    <td>1,622,222.00</td>
						                    <td>2,0005,004.00</td>
						                </tr>
						                <tr>
						                    <td>DP Payable in 24 months</td>
						                    <td>46,845.08</td>
						                    <td>48,852.50</td>
						                    <td>67,592.58</td>
						                    <td>83,543.50</td>
						                </tr>
						                <tr>
						                    <td>80% Balance</td>
						                    <td>4,557,128.00</td>
						                    <td>4,769,840.00</td>
						                    <td>6,608,888.00</td>
						                    <td>8,160,176.00</td>
						                </tr>
						                <tr>
						                    <td>(IN-HOUSE) 5 years @ 17% int p.a.</td>
						                    <td>114,565.19</td>
						                    <td>119,388.76</td>
						                    <td>165,420.00</td>
						                    <td>201,248.63</td>
						                </tr>
						                <tr>
						                    <td>(IN-HOUSE) 10 years @ 17% int p.a.</td>
						                    <td>85,225.07</td>
						                    <td>88,813.32</td>
						                    <td>123,005.97</td>
						                    <td>151,940.60</td>
						                </tr>
						              
						            </tbody>
						        </table>
						    </div>
						    <div class="table-block">
						    <div class="table-header">
						        <h3>BANK FINANCE</h3>
						    </div>
						    <div class="table">
						        <table>
						            <thead>
						                <tr>
						                    <th>House Model</th>
						                    <th>Kayla-Prime</th>
						                    <th>Arya-Prime</th>
						                    <th>Amara-Expanded</th>
						                    <th>Alexandria</th>
						                </tr>
						            </thead>
						            <tbody>
						                <tr>
						                    <td>Lot Area</td>
						                    <td>89 sqm.</td>
						                    <td>89 sqm.</td>
						                    <td>110 sqm.</td>
						                    <td>159 sqm.</td>
						                </tr>
						                <tr>
						                    <td>Usable Floor Area</td>
						                    <td>94 sqm.</td>
						                    <td>99 sqm.</td>
						                    <td>147 sqm.</td>
						                    <td>174 sqm.</td>
						                </tr>
						                
						                    <td>TCP(BANK FIN)</td>
						                    <td>5,826,390.00</td>
						                    <td>6,071,700.00</td>
						                    <td>8,412,690.00</td>
						                    <td>10,387,380.00</td>
						                </tr>
						                <tr>
						                    <td>DISCOUNT</td>
						                    <td>0.00</td>
						                    <td>0.00</td>
						                    <td>0.00</td>
						                    <td>0.00</td>
						                </tr>
						                <tr>
						                    <td>TCP NET</td>
						                    <td>5,826,390.00</td>
						                    <td>6,071,700.00</td>
						                    <td>8,412,690.00</td>
						                    <td>10,387,380.00</td>
						                </tr>
						                <tr>
						                    <td>10% Downpayment (less res. Fee)</td>
						                    <td>562,639.00</td>
						                    <td>587,170.00</td>
						                    <td>811,269.00</td>
						                    <td>1,003,738.00</td>
						                </tr>
						                <tr>
						                    <td>DP Payable in 24 months</td>
						                    <td>23,443.29</td>
						                    <td>24,465.42</td>
						                    <td>33,802.88</td>
						                    <td>41,822.42</td>
						                </tr>
						                <tr>
						                    <td>90% Balance</td>
						                    <td>5,243,751.00</td>
						                    <td>5,464,530.00</td>
						                    <td>7,671,421.00</td>
						                    <td>9,348,542.00</td>
						                </tr>
						                <tr>
						                    <td>(BANK) 5 years @ 8.25% int p.a.</td>
						                    <td>106,952.86</td>
						                    <td>111,445.92</td>
						                    <td>154,428.60</td>
						                    <td>190,677.24</td>
						                </tr>
						                <tr>
						                    <td>(BANK) 10 years @ 8.25% int p.a.</td>
						                    <td>64,315.97</td>
						                    <td>67,023.88</td>
						                    <td>92,865.45</td>
						                    <td>114,663.52</td>
						                </tr>
						                <tr>
						                    <td>(BANK) 15 years @ 8.25% int p.a.</td>
						                    <td>50,871.73</td>
						                    <td>53,013.59</td>
						                    <td>73,453.38</td>
						                    <td>90,694.92</td>
						                </tr>
						                <tr>
						                    <td>(BANK) 20 years @ 8.25% int p.a.</td>
						                    <td>44,680.22</td>
						                    <td>46,561.40</td>
						                    <td>64,513.50</td>
						                    <td>79,656.60</td>
						                </tr>
						            </tbody>
						        </table>
						    </div>
						</div>


			</section>
			<!-- Section: Testimonial -->
			<section class="testimonial" id="testimonial">
				<div class="container">

					<div class="testimonial-feedback">

						<div class="testimonial-headline">
							<h3 class="h3 testimonial-title"> We Appreciate your Feedback! </h3>
							<span> We are committed to continuously enhancing your experience with us, and your feedback plays an invaluable role in that journey. Please take a few moments to evaluate our services and share your thoughts. Your insights—whether they’re about what you love, areas you think could be improved, or suggestions you’d like to see implemented—will help us serve you better and create a more fulfilling experience. Thank you for helping us grow and improve</span>
						</div>

						<div class="testimonial-feedbox">
							<form method="POST" action="./Assets/Php/Index.php">
								<div class="testimonial-feedbox-top">
									<input type="text" name="Name" placeholder="Enter your name" required>
									<div class="star-rating">
										<input type="radio" id="star5" name="rating" value="5" required><label for="star5" title="excellent">★</label>
										<input type="radio" id="star4" name="rating" value="4" required><label for="star4" title="Good">★</label>
										<input type="radio" id="star3" name="rating" value="3" required><label for="star3" title="Average">★</label>
										<input type="radio" id="star2" name="rating" value="2" required><label for="star2" title="Poor">★</label>
										<input type="radio" id="star1" name="rating" value="1" required><label for="star1" title="Very Poor">★</label>
									</div>
								</div>

								<div class="testimonial-Message-Container">
									<textarea id="message" rows="5" maxlength="300" name="Message" placeholder="What do you think about your experience with us?" required></textarea>
								</div>
								<button type="submit" name="Submit"  class="testimonial-btn btn"> submit</button>
							</form>
						</div>

					</div>

				</div>
			</section>
			<!-- SECTION: RATE DISPLAY -->
			<section class="displaytest" id="displaytest">
				<div class="container">
					<h3 class="h3 displaytest-title">Testimonial Reviews</h3>
					<div class="Displaytest-content">
						<div class="Displaytest-swiper mySwiper-autoplay">
							<div class="Displaytest-wrapper swiper-wrapper">
								<?php
									$sql = "SELECT * FROM message";
									$rs = $conn->query($sql);
									if($rs){
										while ($row = mysqli_fetch_assoc($rs)) {
											$rating = $row['Rate'];
											if($rating >= 3){
											echo "
											<div class='Displaytest-card swiper-slide'>
												<h3 class='Displaytest-user'> $row[Sender] </h3>
												<div class='star-rating'>";
												for ($i = 5; $i >= 1; $i--) { 
													echo "
													<input type='radio' id='star$i'  value='$i' " . ($i == $rating ? "checked" : "") . "> 
													<label for='star$i' title='Rating: $i'>★</label>
													"; 
												}
											echo "</div> <span class='Displaytest-message'>$row[Message]</span> </div>";
											}
										}			
									}
									?>
							</div>
						</div>
					</div>
				</div>
			</section>
		</article>
	</main>
	<!-- Section: Dialogs -->
	<section class="Dialogs">
		<!-- Dialog: Sign up -->
		<dialog id="Signup-Modal" class="dialog">
			<button onclick="CloseSignup()" class="closebtn"><i class="fa-solid fa-x"></i></button>	
			<div class="container">
				<form  method="POST" class="form signup" enctype="multipart/form-data" action="./Assets/Php/Index.php"  autocomplete="on" onsubmit="return validatePassword()">
					<div class="form-items">
						<input type="text" name="Firstname" placeholder="First Name" required>
						<input type="text" name="Lastname" placeholder="Last Name" required>		
					</div>
					<input type="email" name="Email" placeholder="Email Address" required>
					<div class="form-items">

						<input type="tel" maxlength="11" name="Phone" class="PhoneInput" id="phoneInput" placeholder="Contact Number" required autocomplete="off">	
						<input type="text" name="Address" placeholder="Address" required>
					</div>
					<div class="form-items">
						<input type="password" name="Password" id="password" placeholder="Password" required>
						<input type="password" name="Confirmpass" id="confirmpass" placeholder="Confirm Password" required> 
					</div>	
					<div class="Validation-wrapper">
						<p id="error-message-Password"> </p>
						<p id="error-message-character"> </p>
						<p id="error-message-number"> </p>
						<p id="error-message-case"> </p>
						<p id="error-message-special-char"> </p>
					</div>
					<input type="submit" name="Signin-btn" value="Sign up">		
				</form>
				<button onclick="ShowLogin()" class="lowerbuttons">Already have an account</button>
			</div>
		</dialog>
		<script>
		function validatePassword() {
		    var password = document.getElementById('password').value;
		    var confirmPassword = document.getElementById('confirmpass').value;
		    var valid = true;

		    // Reset error messages
		    document.getElementById('error-message-Password').textContent = '';
		    document.getElementById('error-message-character').textContent = '';
		    document.getElementById('error-message-number').textContent = '';
		    document.getElementById('error-message-case').textContent = '';
		    document.getElementById('error-message-special-char').textContent = '';

		    // Password criteria
		    var lengthCriteria = /.{8,}/;
		    var lowercaseCriteria = /[a-z]/;
		    var uppercaseCriteria = /[A-Z]/;
		    var numberCriteria = /\d/;
		    var specialCharCriteria = /[\W_]/;

		    if (!password.match(lengthCriteria)) {
		        document.getElementById('error-message-Password').textContent = 'Password must be at least 8 characters long.';
		        valid = false;
		    }
		    if (!password.match(lowercaseCriteria) || !password.match(uppercaseCriteria)) {
		        document.getElementById('error-message-case').textContent = 'Password must contain both uppercase and lowercase letters.';
		        valid = false;
		    }
		    if (!password.match(numberCriteria)) {
		        document.getElementById('error-message-number').textContent = 'Password must contain at least one number.';
		        valid = false;
		    }
		    if (!password.match(specialCharCriteria)) {
		        document.getElementById('error-message-special-char').textContent = 'Password must contain at least one special character.';
		        valid = false;
		    }
		    if (password !== confirmPassword) {
		        document.getElementById('error-message-character').textContent = 'Passwords do not match.';
		        valid = false;
		    }

		    return valid;
		}
		</script>	
		<!-- Dialog: Login  -->
		<dialog id="Login-Modal" class="dialog">
			<button onclick="CloseLogin()" class="closebtn"><i class="fa-solid fa-x"></i></button>	
			<div class="container">
				<form  method="POST" class="form login" enctype="multipart/form-data" action="./Assets/Php/Index.php">

					<input type="email" name="email" placeholder="Email Address" required>
					<input type="password" name="password" placeholder="Password" required>	
					<input type="submit" name="login-btn" value="Login" >
				</form>
				<button onclick="ShowSignup()" class="lowerbuttons" >Dont have account</button>				
			</div>		
		</dialog>

		</section>



		<!-- Section: Footer -->
		<footer class="footer">
			<div class="footer-top">

				<ul class="footer-list help">
					<h3 class="h3 list-title"> Get Help </h3>
					<div class="list-items">
						<li><a href="#"> Inquire Process </a></li>
						<li><a href="#"> Pending Process </a></li>
					</div>
				</ul>					

				<ul class="footer-list company">
					<h3 class="h3 list-title">	Company </h3>
					<div class="list-items">
						<li><a href="#"> About us </a></li>
						<li><a href="#"> Service </a></li>
						<li><a href="#"> Privacy Policy </a></li>
					</div>
				</ul>					

				<ul class="footer-list social">
					<h3 class="h3 list-title"> Follow us </h3>
					<div class="list-items">
						<li>
							<a href="#" class="list-item"> 
								<i class="fa-brands fa-facebook"></i>
								<span>Facebook </span>
							</a>
						</li>				

						<li>
							<a href="#" class="list-item"> 
								<i class="fa-brands fa-instagram"></i>
								<span>Instagram </span>
							</a>
						</li>				

						<li>
							<a href="#" class="list-item"> 
								<i class="fa-brands fa-x-twitter"></i>
								<span>Twitter </span>
							</a>
						</li>				

						<li>
							<a href="#" class="list-item"> 
								<i class="fa-brands fa-linkedin"></i>
								<span>LinkIn </span>
							</a>
						</li>
					</div>
				</ul>			

				<ul class="footer-list Developer">
					<h3 class="h3 list-title"> Developer </h3>
					<div class="list-items">
						<li><a href="#"> FAQ </a></li>
						<li><a href="#"> Payment Process </a></li>
						<li><a href="#"> Pending Process </a></li>
					</div>
				</ul>		
			</div>		


			<div class="terms">
				<button > <span>Terms of Service</span></button>
				<button >Privacy Polocy</button>
			</div>
		</footer>

		<!-- Script: Fontawesome -->
		<script src="https://kit.fontawesome.com/83786b8894.js" crossorigin="anonymous"></script>
		<!-- Script: Custom -->
		<script src="./Assets/Js/script.js?v=<?php echo time(); ?>"></script>
		<script src="./Assets/Js/Swiper.js?v=<?php echo time(); ?>"></script>
		<script src="./Assets/Js/Notification.js?v=<?php echo time(); ?>"></script>
		<script src="./Assets/Js/Leaflet.js?v=<?php echo time(); ?>"></script>
		<!-- JS: Swiper -->
		<script type="text/javascript" src="./Assets/Js/swiper-bundle.min.js"></script> 	
		<script src="./Assets/Js/PhoneValidation.js?v=<?php echo time(); ?>"></script>
		<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>	
		<!-- NO TURNING BACK -->
		<script language="javascript" type="text/javascript">	
	            window.history.forward();
		</script>		
		 <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
		     integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo="
		     crossorigin=""></script>
  		<script type="text/javascript" src="Leaflet.js?v=<?php echo time(); ?>"></script>

	</body>
	</html>
