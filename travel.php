<?php 

session_start();

include 'config.php';

error_reporting(0); // For not showing any error

if (isset($_POST['submit'])) { // Check press or not Post Comment Button
	$name = $_POST['name']; // Get Name from form
	$email = $_POST['email']; // Get Email from form
	$comment = $_POST['comment']; // Get Comment from form

	$sql = "INSERT INTO comments (name, email, comment)
			VALUES ('$name', '$email', '$comment')";
	$result = mysqli_query($conn, $sql);
	if ($result) {
		echo "<script>alert('Comment added successfully.')</script>";
	} else {
		echo "<script>alert('Comment does not add.')</script>";
	}
}

?>



<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="favicon.ico" rel="icon" type="image/x-icon" />
        <title>Explore More | Travel Guide Website</title>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="review.css">
    </head>
    <body>
            <header>
                <div id="menu-bar" class="fas fa-bars"></div>


                <a href="travel.php" class="logo"><span>E</span>XPLORE <span>M</span>ORE</a>

                <nav class="navbar">
                    <a href="#home">Home</a>
                    <a href="state.html">States</a>
                    <a href="#services">Services</a>
                    <a href="#review">Review</a>
                    <a href="contact.php">Contact</a>
                </nav>
                <div class="icons">
                    <a href="login.php"><i class="fas fa-user" id="login-btn"></i></a>
                </div>
                <form action="" id="searchUsers" class="search-bar-container" autocomplete="off">
                  <!--  <div class="instat-search__input-container">
                        <input type="search" id="search-bar" spellcheck="false" placeholder="Search Here....">
                        <label for="search-bar" class="fas  fa-search" type="submit"></label>
                    </div>

                    <div class="instant-search__results-container">
                        <a href="states/cities/hotels/lemonpune.html" class="instant-search__result">Lemon Tree Premier, City Center Pune</a>
                        <a href="states/cities/hotels/lemonpune.html" class="instant-search__result">Lemon Tree Premier, City Center Pune</a>
                        <a href="states/cities/hotels/lemonpune.html" class="instant-search__result">Lemon Tree Premier, City Center Pune</a>
                        <a href="states/cities/hotels/lemonpune.html" class="instant-search__result">Lemon Tree Premier, City Center Pune</a>
                        <a href="states/cities/hotels/lemonpune.html" class="instant-search__result">Lemon Tree Premier, City Center Pune</a>
                        <a href="states/cities/hotels/lemonpune.html" class="instant-search__result">Lemon Tree Premier, City Center Pune</a>
                        <a href="states/cities/hotels/lemonpune.html" class="instant-search__result">Lemon Tree Premier, City Center Pune</a>
                        <a href="states/cities/hotels/lemonpune.html" class="instant-search__result">Lemon Tree Premier, City Center Pune</a>
                        <a href="states/cities/hotels/lemonpune.html" class="instant-search__result">Lemon Tree Premier, City Center Pune</a>
                        <a href="states/cities/hotels/lemonpune.html" class="instant-search__result">Lemon Tree Premier, City Center Pune</a>
                        <a href="states/cities/hotels/lemonpune.html" class="instant-search__result">Lemon Tree Premier, City Center Pune</a>
                        <a href="states/cities/hotels/lemonpune.html" class="instant-search__result">Lemon Tree Premier, City Center Pune</a>
                        <a href="states/cities/hotels/lemonpune.html" class="instant-search__result">Lemon Tree Premier, City Center Pune</a>
                        <a href="states/cities/hotels/lemonpune.html" class="instant-search__result">Lemon Tree Premier, City Center Pune</a>
                        <a href="states/cities/hotels/lemonpune.html" class="instant-search__result">Lemon Tree Premier, City Center Pune</a>
                        <a href="states/cities/hotels/lemonpune.html" class="instant-search__result">Lemon Tree Premier, City Center Pune</a>
                        <a href="states/cities/hotels/lemonpune.html" class="instant-search__result">Lemon Tree Premier, City Center Pune</a>
                        <a href="states/cities/hotels/lemonpune.html" class="instant-search__result">Lemon Tree Premier, City Center Pune</a>
                    </div> -->
                </form>
            
        </header>
        

            <!--home section starts-->

            <section class="home" id="home">
                <div class="content">
                    <h3>Enjoy Wonderfull Experiences in India</h3>
                    <p>Discover new places with us , adventure awaits</p>
                </div>

                <div class="controls">
                    <span class="vid-btn active" data-src="images/nature4.mp4"></span>
                    <span class="vid-btn" data-src="images/nature2.mp4"></span>
                    <span class="vid-btn" data-src="images/nature5.mp4"></span>
                    <span class="vid-btn" data-src="images/nature6.mp4"></span>
                    <span class="vid-btn" data-src="images/nature3.mp4"></span>
                </div>
                <div class="video-container">
                    <video src="images/nature4.mp4" id="video-slider" loop autoplay muted></video>
                </div>

            </section>


            <!---home section ends-->
            <!--Services section start-->
            <section class="services" id="services">

                <h1 class="heading">
    
                    <span>S</span>
                    <span>E</span>
                    <span>R</span>
                    <span>V</span>
                    <span>I</span>
                    <span>C</span>
                    <span>E</span>
                    <span>S</span>
                </h1>
    
                <div class="box-container">
                    <div class="box">
                        <i class="fas fa-hotel"></i>
                        <h3>Affordabale Hotels</h3>
                        <p>A hotel that provides services for a lower price than a regular hotel in the area. Budget prices vary depending on the season,destination,the quality and the level of service. Most budget hotels fall into the category of 1-2 Star Hotels,therefore they provide the respective quality of services and facilities.</p>
                    </div>
    
                    <div class="box">
                        <i class="fas fa-utensils"></i>
                        <h3>Food And Drinks</h3>
                        <p>On our website, all hotels includes fresh, prepared foods as well as packaged foods, and alcoholic and nonalcoholic beverages.</p>
                    </div>
    
                    <div class="box">
                        <i class="fas fa-bullhorn"></i>
                        <h3>Safety Guide</h3>
                        <p>Staff working in food handling areas are good personal hygiene. at here, All hotels are safe and hygienic. you can safely book your pakage on our website. all hotels are clean and safe.</p>
                    </div>
    
                    <div class="box">
                        <i class="fas fa-globe-asia"></i>
                        <h3>Around the India</h3>
                        <p>On our website there are the best hotels in the world. They are safe and hygienic. you can choose your favorite hotels as per your budget.</p>
                    </div>
    
                </div>
            </section>
<!--Services section end-->

<!-- review section starts  -->

<section class="review" id="review">

    <h1 class="heading">
        <span>r</span>
        <span>e</span>
        <span>v</span>
        <span>i</span>
        <span>e</span>
        <span>w</span>
    </h1>

    <div class="wrapper">
		<form action="" method="POST" class="form">
			<div class="row">
				<div class="input-group">
					<label for="name">Name</label>
					<input type="text" name="name" id="name" placeholder="Enter your Name" required>
				</div>
				<div class="input-group">
					<label for="email">Email</label>
					<input type="email" name="email" id="email" placeholder="Enter your Email" required>
				</div>
			</div>
			<div class="input-group textarea">
				<label for="comment">Comment</label>
				<textarea id="comment" name="comment" placeholder="Enter your Comment" required></textarea>
			</div>
			<div class="input-group">
				<button name="submit" class="btn">Post Comment</button>
			</div>
		</form>
    </div>
		<div class="prev-comments">
			<?php 
			
			$sql = "SELECT * FROM comments";
			$result = mysqli_query($conn, $sql);
			if (mysqli_num_rows($result) > 0) {
				while ($row = mysqli_fetch_assoc($result)) {

			?>
			<div class="single-item">
				<h4><?php echo $row['name']; ?></h4>
				<a href="mailto:<?php echo $row['email']; ?>"><?php echo $row['email']; ?></a>
				<p><?php echo $row['comment']; ?></p>
			</div>
			<?php

				}
			}
			
			?>
		</div>

</section>

<!-- review section ends -->


<!-- footer section  -->

<section class="footer">
<center>
    <div class="box-container">

        <div class="box">
            <h3>about us</h3>
            <span>Come Travel With us</span>
            <p>If you're looking for a truly memorable family break, here you find the lowest price on the right hotel for you. it's indescribable. explore the india's most increadible places, and hotels, with us.</p>
        </div>
        <div class="box">
            <h3>quick links</h3>
            <a href="#home">Home</a>
            <a href="state.html">States</a>
            <a href="#services">Services</a>
            <a href="#review">Review</a>
            <a href="contact.php">Contact</a>
        </div>
        <div class="box">
            <h3>follow us</h3>
            <a href="https://www.facebook.com/moreexplore72">facebook</a>
            <a href="https://instagram.com/moreexplore_72?utm_medium=copy_link">instagram</a>
        </div>

    </div>
</center>

    <h1 class="credit"> created by <span> Ms. Mrunali Virkud, Ms. Samidha Vele and Mr. Vipul Karle </span> | all rights reserved! </h1>

</section>



<script src="js/script.js"></script>


    </body>
</html>