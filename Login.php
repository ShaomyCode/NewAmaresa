<?php
    include './Assets/Php/Connection.php';
    session_start();

    if(isset($_SESSION['Firstname']) && isset($_SESSION['Lastname']) && isset($_SESSION['UserID'])){
        $Firstname = $_SESSION['Firstname'];
        $Lastname = $_SESSION['Lastname'];
        $UserID = $_SESSION['UserID'];        
    }else{
        header("location: ./Index.php");

    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AMARESA - Welcome </title>

    <!-- Custom Css Link -->
    <link rel="stylesheet" type="text/css" href="./Assets/Css/Index.css?v=<?php echo time(); ?>">
    <!-- Google font link -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- WEBSITE ICON -->
    <link rel="website icon" type="png" href="./Assets/Images/Icon.png">
    <!-- JQUERY -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />   
</head>
<body>

    <!-- HEADERS -->
    <header class="header">
            <div class="header-top"> 
                <div class="container">
                    <ul class="header-top-list">

                        <li>
                            <a href="https://www.amaresa.ph/" class="header-top-link">
                                <i class="fa-solid fa-paper-plane"></i>
                                <span>amaresa.ph</span>
                            </a>
                        </li>                       

                        <li> 
                            <a href="https://www.google.com/maps/dir//Amaresa+Marilao,+3019+M.+Villarica+Rd,+Marilao,+3019+Bulacan/@14.7950949,121.0162162,17z/data=!4m17!1m7!3m6!1s0x3397b38da5906293:0x8b01e358c47a7685!2sAmaresa+Marilao!8m2!3d14.7950897!4d121.0187911!16s%2Fg%2F11gpnfmdlb!4m8!1m0!1m5!1m1!1s0x3397b38da5906293:0x8b01e358c47a7685!2m2!1d121.0188034!2d14.7951434!3e2?entry=ttu"  class="header-top-link">
                                <i class="fa-solid fa-map-location-dot"></i>
                                <span>3019 M. Villarica Rd, Marilao, 3019 Bulacan</span>
                            </a>
                        </li>
                    </ul>
                    <div class="wrapper">

                    <ul class="header-top-social-list">
                        <li>
                            <a href="#about" class="header-top-social-link">
                                <i class="fa-solid fa-circle-info"></i>
                                <span>About us</span>
                            </a>
                        </li>
                        <li>
                            <a href="#location" class="header-top-social-link">
                                <i class="fa-solid fa-location-crosshairs"></i>
                                <span> Location</span>
                            </a>
                        </li>
                        <li>
                            <a href="#service" class="header-top-social-link">
                                <i class="fa-brands fa-servicestack"></i>
                                <span> Service </span>
                            </a>
                        </li>
                        <li>
                            <a href="#property" class="header-top-social-link">
                                <i class="fa-solid fa-house-lock"></i>
                                <span> Properties </span>
                            </a>
                        </li>                                                                                           
                    </ul>

                        <a href="./Assets/Php/Logout.php" class="header-top-btn"> 
                            <i class="fa-solid fa-user-tie"></i> 
                            <span> Sign out </span>
                        </a>

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
                            <img src="./Assets/Images/Amaresa-Logo.png" alt="Amaresa Logo" >
                        </div>  
                        <div class="hero-top-details">

                            <h2 class="h1 hero-title">Find Your Dream House By Us!</h2>
                            <p class="hero-text">
                                At Amaresa, we are committed to helping you find your dream home with ease and confidence. Whether you're a first-time homebuyer or looking to upgrade, we guide you through every step of the process, ensuring a seamless and stress-free experience. Trust us to turn your dream of homeownership into a reality.
                            </p>                        
                        </div>                      
                    </div>
                    <?php
                    $Get = $UserID;
                    echo "
                    <section class='Welcome'>
                        <div class='container'>
                            <div class='Welcome-info'>
                                <h3 class='Welcome-Title'>Welcome: $Firstname, $Lastname  </h3>
                                <span class='Welcome-sign'>Preferred Buyer</span>
                                <span class='callout'> Explore the best properties matching your preferences. </span>
                            </div>
                            <div class='Welcome-btn'>
                       
                             <a href='./Profile.php?EditID=$Get'  class='Profile-btn btn'> 
                                    <i class='fa-regular fa-id-card'></i>
                                 <span> Profile </span> 
                             </a>
                            </div>
                        </div>
                    </section>
                    ";
                    ?>
                    <figure class="hero-banner">

                        <div class="swiper mySwiper-autoplay">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide"><img src="./Assets/Images/Amaresa Marilao.png" alt="Amaresa Marilao" class="w-100"></div>
                                <div class="swiper-slide"><img src="./Assets/Images/Amaresa about us .png" alt="Amaresa Marilao" class="w-100"></div>
                                <div class="swiper-slide"><img src="./Assets/Images/Drop-shot-buy.jpg" alt="Amaresa Marilao" class="w-100"></div>

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
                                <div class="swiper-slide"> <img src="./Assets/Images/AlexandriaBanner.png"></div>
                                <div class="swiper-slide"> <img src="./Assets/Images/AmaraBanner.png"></div>
                                <div class="swiper-slide"> <img src="./Assets/Images/AryaBanner.png"></div>
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
                                    <img src="./Assets/Images/Drop-shot-buy.jpg" alt="service icon">
                                </div>

                                <h3 class="h3 card-title">
                                    <!-- MAKE IT BUTTON TO INQUIRY -->
                                    <button onclick="ShowInquiry()"> Buy a Home </button> 
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
                    <!--Section: Featured Card -->
                    <section class="featuredcard" id = "card">
                        <div class="card-container">
                            <?php
                            $sql = "SELECT * FROM Properties";
                            $rs = mysqli_query($conn,$sql);
                            if($rs){
                                while ($row = mysqli_fetch_assoc($rs)) {

                                    $ImageExterior = './Images/'.$row['IExterior'];
                                    $Bed = $row['Bedrooms'];
                                    $Bath = $row['Bathrooms'];
                                    $Property = $row['Property'];
                                    $Area = $row['Area_sqft'];
                                    $ID = $row['PropertyID'];
                                    // $_SESSION['HouseID'] = $ID;
                                    $BathList = [
                                        1 => "One Bathroom",
                                        2 => "Two Bathrooms",
                                        3 => "Three Bathrooms",
                                        4 => "Four Bathrooms",
                                        5 => "Five Bathrooms",
                                        6 => "Six Bathrooms",
                                        7 => "Seven Bathrooms",
                                        8 => "Eight Bathrooms",
                                        9 => "Nine Bathrooms",
                                        10 => "Ten Bathrooms"
                                    ];                                  
                                    $BedList = [
                                        1 => "One Bedroom",
                                        2 => "Two Bedrooms",
                                        3 => "Three Bedrooms",
                                        4 => "Four Bedrooms",
                                        5 => "Five Bedrooms",
                                        6 => "Six Bedrooms",
                                        7 => "Seven Bedrooms",
                                        8 => "Eight Bedrooms",
                                        9 => "Nine Bedrooms",
                                        10 => "Ten Bedrooms"
                                    ];
                                    $Bath = $BathList[$Bath] ?? $Bath;
                                    $Bed = $BedList[$Bed] ?? $Bed;                              
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
                                    <p><i class='fa-solid fa-maximize'></i> : $Area </p>
                                    <p><i class='fa-solid fa-bed'></i> : $Bed</p>
                                    <p><i class='fa-solid fa-shower'></i> : $Bath </p>
                                    </div>

                                    <form method='POST' action='./Assets/Php/Index.php'>
                                    <div class='third-content'>

                                        
                                            <input type='hidden' name='IDHolder' value='$ID'>
                                            <button type='submit'   name='PassID' '>
                                            <i class='fa-solid fa-eye'></i>
                                            <span>See more</span>
                                            </button>
                                        
                                    </div>
                                    </form>
                                    
                                    </div>

                                    ";

                                }
                            }

                            ?>


                        </div>
                    </section>
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
                                    <img src="./Assets/Images/Feedback.gif" class="Feedback-Image">
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
                                    $sql = "SELECT * FROM Message";
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
                <form  method="POST" class="form signup" enctype="multipart/form-data" action="./Assets/Php/Index.php"  autocomplete="on">
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
                        <input type="password" name="Password" placeholder="Password" required>
                        <input type="password" name="Confirmpass" placeholder="Confirm Password" required>  
                    </div>  
                    <input type="submit" name="Signin-btn" value="Sign up">     
                </form>
                <button onclick="ShowLogin()" class="lowerbuttons">Already have an account</button>
            </div>
        </dialog>       
        <!-- Dialog: Login  -->
        <dialog id="Login-Modal" class="dialog">
            <button onclick="CloseLogin()" class="closebtn"><i class="fa-solid fa-x"></i></button>  
            <div class="container">
                <form  method="POST" class="form login" enctype="multipart/form-data" action="./Assets/Php/Index.php">

                    <input type="email" name="email" placeholder="Email Address" required>
                    <input type="password" name="password" placeholder="Password" required> 
                    <input type="submit" name="login-btn" value="Login">
                </form>
                <button onclick="ShowSignup()" class="lowerbuttons">Dont have account</button>              
            </div>      
        </dialog>
        <!-- Dialog: Inquiry -->
       
       <dialog id="Inquiry-Modal" class="dialog">
            <button onclick="CloseInquiry()" class="closebtn">X</button>    

            <div class="container">

                <form class="form Inquiry" method="POST" enctype="multipart/form-data" action="./Assets/Php/Index.php" autocomplete="on">
                    <?php 

                    $query = "
                    SELECT *
                    FROM User
                    WHERE UserID = $UserID
                    ";
                    $result = $conn->query($query);
                    $row = $result->fetch_assoc();
                    $firstname = $row['Firstname'];
                    $UserID = $row['UserID'];
                    $lastname = $row['Lastname'];
                    $number = $row['Phone'];
                    $Address = $row['Address'];
                    $Email = $row['Email'];

                     echo " 
                 
                    <div class='form-items'>

                        <input type='text' name='Firstname' placeholder='First name' value='$firstname' required>
                        <input type='text' name='Lastname' placeholder='Last name' value='$lastname'  required> 

                        <input type='tel' maxlength='11' name='Phone'  class='PhoneInput' id'PhoneInput' placeholder='Contact Number' value='$number' required autocomplete='off'>       

                    </div>
                    <div class='form-items'>
                    <input type='text' name='Address' placeholder='Address' value='$Address' required>
                    <input type='email' name='Email' placeholder='Email Address' value='$Email' required>
                    </div> 
                    <input type='hidden' name='UserID' value='$UserID'>
                    <input type='hidden' name='PropertyID' id='propertyID'>
           
                    <input list='options' id='Role' name='Property' placeholder='Select Property' required>
                         <datalist id='options'>
                    ";
                      $sql = "SELECT * FROM Properties";
                            $rs = $conn->query($sql);
                            if($rs){
                                while($rw = mysqli_fetch_assoc($rs)){
                                    echo "
                                        <option value='$rw[PropertyID]'> $rw[Property] </option>

                                    ";
                                }
                                echo " </datalist>";

                            }
                     echo " 
                        <div class='textarea-container'>
                            <textarea id='message' rows='5' name='Message' placeholder='Id like to inquire about this property...'></textarea>
                        </div>
                        <div class='form-items'>

                            </div>
                            <div>
                                <input type='checkbox' id='cbx2' onclick='ShowReservation()' style='display: none;'> 
                                <label for='cbx2' class='check'>
                                    <svg width='18px' height='18px' viewBox='0 0 18 18'>
                                        <path d='M 1 9 L 1 9 c 0 -5 3 -8 8 -8 L 9 1 C 14 1 17 5 17 9 L 17 9 c 0 4 -4 8 -8 8 L 9 17 C 5 17 1 14 1 9 L 1 9 Z'></path>
                                        <polyline points='1 9 7 14 15 4'></polyline>
                                    </svg>
                                    Reservation Fee (optional)
                                </label>


                                <div class='payments' id='payments'>
                                    <h3 class='h3 payment-title'> Gcash </h3>
                                    <img id='paymentImg' src='./Assets/Images/payment.png' >

                                    <div class='payment-upload' >
                                        <label for='file-upload' class='custom-file-upload btn'>
                                            Upload Here
                                        </label>
                                        <input id='file-upload' type='file' name='Receipt' accept='image/*'>
                                    </div>

                                </div>

                     ";
                    ?>

                                <script>
                                    const checkbox = document.getElementById('cbx2');
                                    const div = document.getElementById('payments');

                                    checkbox.addEventListener('change', function() {
                                        if (this.checked) {
                                            div.style.display = 'block'; 
                                        } else {
                                            div.style.display = 'none';
                                        }
                                    });
                                </script>
                            </div>
                        </div>

                        <div class="inquiry-buttons">
                            <div id="panel">
                                <span>Hello </span>
                            </div>
                            <span id="requirements" class="btn">Requirements</span>
                            <button type="submit" name="SentInquiry" onclick="ShowSignupInquiry()" class="btn">Send Inquiry</button>
                        </div>
                    </form>

             </div>
            </dialog>
        <!-- Section: Footer -->
        <footer class="footer">
            <div class="footer-top">
                <ul class="footer-list">
                    <li>
                        <figure class="footer-top-list-logo">
                            <img src="./Assets/Images/Amaresa-Logo.png">
                        </figure>
                    </li>


                </ul>               

                <ul class="footer-list help">
                    <h3 class="h3 list-title"> Get Help </h3>
                    <li><a href="#"> Inquire Process </a></li>
                    <li><a href="#"> Pending Process </a></li>

                </ul>                   

                <ul class="footer-list company">
                    <h3 class="h3 list-title">  Company </h3>
                    <li><a href="#"> About us </a></li>
                    <li><a href="#"> Service </a></li>
                    <li><a href="#"> Privacy Policy </a></li>


                </ul>                   

                <ul class="footer-list social">
                    <h3 class="h3 list-title"> Follow us </h3>
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


                </ul>           

                <ul class="footer-list Developer">
                    <h3 class="h3 list-title"> Developer </h3>
                    <li><a href="#"> FAQ </a></li>
                    <li><a href="#"> Payment Process </a></li>
                    <li><a href="#"> Pending Process </a></li>

                </ul>       
            </div>      


            <div class="terms">
                <button > <span>Terms of Service</span></button>
                <button >Privacy Polocy</button>
            </div>
        </footer>
        <!-- Script: Custom -->
        <script src="./Assets/Js/script.js?v=<?php echo time(); ?>"></script>
        <script src="./Assets/Js/Swiper.js?v=<?php echo time(); ?>"></script>
        <!-- JS: Swiper -->
        <script type="text/javascript" src="./Assets/Js/swiper-bundle.min.js"></script>     
        <script src="./Assets/Js/PhoneValidation.js?v=<?php echo time(); ?>"></script>
        <!-- Script: Fontawesome -->
        <script src="https://kit.fontawesome.com/83786b8894.js" crossorigin="anonymous"></script>

    
    </body>
    </html>