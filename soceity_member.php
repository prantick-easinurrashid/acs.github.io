<?php include('server.php'); 

    if(empty($_SESSION['email'])){
        header('location: home.php');
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1" name="viewport">

    <title>AUST CSE SOCIETY</title>

    <!-- Bootstrap -->
    <link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css" />
    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/css/fixed.css">
    <link rel="stylesheet" href="assets/css/animate.css">
</head>

<body data-spy="scroll" data-target="#navbarNav">

    <!--    loader animation start    -->
   
    <div id="loader-wrapper">
        <div id="loader"></div>
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
    </div>

    <!--    loader animation end   -->
       
    <!--    menu section start    -->
    
    <div id="menu" class="offset">
        <div class="jumbotron" data-aos="fade-up" data-aos-duration="1000">
            <div class="container">
                <div class="row">
                    <div class="col-12 mr-auto">
                        <div class="section">
                            <h2>Soceity Members</h2>
                        </div>
                        <h1 class="names">Members Information</h1>
                    </div>
                </div>
                <div class="row menu">
					
                    <div class="col-lg-6 menu-item" data-aos="fade-up" data-aos-duration="800">
                        <img src="assets/img/club/paul.JPG" class="menu-img" alt="">
                        <div class="menu-content">
                            <a href="https://www.facebook.com/shimulaust" target="_blank">Shimul Paul</a><span>VP</span>
                        </div>
                        <div class="menu-ingredients">
                            Vice President, Semester - 4.2
                        </div>
                    </div>
					
                    <div class="col-lg-6 menu-item" data-aos="fade-up" data-aos-duration="800">
                        <img src="assets/img/club/GS.JPG" class="menu-img" alt="">
                        <div class="menu-content">
                            <a href="https://www.facebook.com/shahfaisalraju">Md Shah Faisal Raju</a><span>GS</span>
                        </div>
                        <div class="menu-ingredients">
                            General Secretary, Semester - 4.1
                        </div>
                    </div>

                    <div class="col-lg-6 menu-item" data-aos="fade-up" data-aos-duration="800">
                        <img src="assets/img/club/default-img.png" class="menu-img" alt="">
                        <div class="menu-content">
                            <a href="https://www.facebook.com/aniqua.tabassum.5">Anika Tabassum</a><span>4.2</span>
                        </div>
                        <div class="menu-ingredients">
                            General Member, Return38
                        </div>
                    </div>
					
					<div class="col-lg-6 menu-item" data-aos="fade-up" data-aos-duration="800">
                        <img src="assets/img/club/default-img.png" class="menu-img" alt="">
                        <div class="menu-content">
                            <a href="https://www.facebook.com/daiyan.ibrahim71">Hussain Mohammad Ibrahim</a><span>4.1</span>
                        </div>
                        <div class="menu-ingredients">
                            General Member, Prototype39
                        </div>
                    </div>
					
					<div class="col-lg-6 menu-item" data-aos="fade-up" data-aos-duration="800">
                        <img src="assets/img/club/default-img.png" class="menu-img" alt="">
                        <div class="menu-content">
                            <a href="https://www.facebook.com/sUvoMshaHa">Suvom Som</a><span>4.1</span>
                        </div>
                        <div class="menu-ingredients">
                            General Member, Prototype39
                        </div>
                    </div>
					
					<div class="col-lg-6 menu-item" data-aos="fade-up" data-aos-duration="800">
                        <img src="assets/img/club/pran.jpg" class="menu-img" alt="">
                        <div class="menu-content">
                            <a href="https://www.facebook.com/easinurrashid.prantick.98/">Easinur Rashid Prantick</a><span>3.2</span>
                        </div>
                        <div class="menu-ingredients">
                            General Member, Recursive40
                        </div>
                    </div>
					
					<div class="col-lg-6 menu-item" data-aos="fade-up" data-aos-duration="800">
                        <img src="assets/img/club/default-img.png" class="menu-img" alt="">
                        <div class="menu-content">
                            <a href="https://www.facebook.com/abrar.rafid.21">Abrar Rafid Noor</a><span>3.2</span>
                        </div>
                        <div class="menu-ingredients">
                            General Member, Recursive40
                        </div>
                    </div>
					
					<div class="col-lg-6 menu-item" data-aos="fade-up" data-aos-duration="800">
                        <img src="assets/img/club/default-img.png" class="menu-img" alt="">
                        <div class="menu-content">
                            <a href="#">Rahat Chowdhury</a><span>3.1</span>
                        </div>
                        <div class="menu-ingredients">
                            General Member, Enigma41
                        </div>
                    </div>
					
					<div class="col-lg-6 menu-item" data-aos="fade-up" data-aos-duration="800">
                        <img src="assets/img/club/default-img.png" class="menu-img" alt="">
                        <div class="menu-content">
                            <a href="#">Tashfiq Nahiyan Khan</a><span>3.1</span>
                        </div>
                        <div class="menu-ingredients">
                            General Member, Enigma41
                        </div>
                    </div>
					
					<div class="col-lg-6 menu-item" data-aos="fade-up" data-aos-duration="800">
                        <img src="assets/img/club/default-img.png" class="menu-img" alt="">
                        <div class="menu-content">
                            <a href="#">Asifur Rahman</a><span>3.1</span>
                        </div>
                        <div class="menu-ingredients">
                            General Member, Enigma41
                        </div>
                    </div>
					
					<div class="col-lg-6 menu-item" data-aos="fade-up" data-aos-duration="800">
                        <img src="assets/img/club/default-img.png" class="menu-img" alt="">
                        <div class="menu-content">
                            <a href="#">Md Zahidul Haque</a><span>2.2</span>
                        </div>
                        <div class="menu-ingredients">
                            General Member, Origin42
                        </div>
                    </div>
					
					<div class="col-lg-6 menu-item" data-aos="fade-up" data-aos-duration="800">
                        <img src="assets/img/club/default-img.png" class="menu-img" alt="">
                        <div class="menu-content">
                            <a href="#">Md Hujaifa Islam </a><span>2.2</span>
                        </div>
                        <div class="menu-ingredients">
                            General Member, Origin42
                        </div>
                    </div>
					
					<div class="col-lg-6 menu-item" data-aos="fade-up" data-aos-duration="800">
                        <img src="assets/img/club/default-img.png" class="menu-img" alt="">
                        <div class="menu-content">
                            <a href="#">Israt Moyeen Noumi</a><span>2.1</span>
                        </div>
                        <div class="menu-ingredients">
                            General Member, Integer43
                        </div>
                    </div>
					
					<div class="col-lg-6 menu-item" data-aos="fade-up" data-aos-duration="800">
                        <img src="assets/img/club/default-img.png" class="menu-img" alt="">
                        <div class="menu-content">
                            <a href="#">Saidur Rahman Sujon</a><span>2.1</span>
                        </div>
                        <div class="menu-ingredients">
                            General Member, Integer43
                        </div>
                    </div>
					
					<div class="col-lg-6 menu-item" data-aos="fade-up" data-aos-duration="800">
                        <img src="assets/img/club/default-img.png" class="menu-img" alt="">
                        <div class="menu-content">
                            <a href="#">Unknown</a><span>2.1</span>
                        </div>
                        <div class="menu-ingredients">
                            General Member, Integer43
                        </div>
                    </div>
					
					<div class="col-lg-6 menu-item" data-aos="fade-up" data-aos-duration="800">
                        <img src="assets/img/club/default-img.png" class="menu-img" alt="">
                        <div class="menu-content">
                            <a href="#">Unknown</a><span>1.2</span>
                        </div>
                        <div class="menu-ingredients">
                            General Member, 
                        </div>
                    </div>
					
					<div class="col-lg-6 menu-item" data-aos="fade-up" data-aos-duration="800">
                        <img src="assets/img/club/default-img.png" class="menu-img" alt="">
                        <div class="menu-content">
                            <a href="#">Unknown</a><span>1.2</span>
                        </div>
                        <div class="menu-ingredients">
                            General Member, 
                        </div>
                    </div>
					
					<div class="col-lg-6 menu-item" data-aos="fade-up" data-aos-duration="800">
                        <img src="assets/img/club/default-img.png" class="menu-img" alt="">
                        <div class="menu-content">
                            <a href="#">Unknown</a><span>1.1</span>
                        </div>
                        <div class="menu-ingredients">
                            General Member, 
                        </div>
                    </div>
					
					<div class="col-lg-6 menu-item" data-aos="fade-up" data-aos-duration="800">
                        <img src="assets/img/club/default-img.png" class="menu-img" alt="">
                        <div class="menu-content">
                            <a href="#">Unknown</a><span>1.1</span>
                        </div>
                        <div class="menu-ingredients">
                            General Member, 
                        </div>
                    </div>
					
					<div class="col-lg-6 menu-item" data-aos="fade-up" data-aos-duration="800">
                        <img src="assets/img/club/default-img.png" class="menu-img" alt="">
                        <div class="menu-content">
                            <a href="#">Unknown</a><span>1.1</span>
                        </div>
                        <div class="menu-ingredients">
                            General Member, 
                        </div>
                    </div>
                    
					
					
                </div>
            </div>
        </div>
    </div>
    
    <!--    menu section end    -->
    
    <!--    contact section start    -->
    
    <div id="contact" class="offset" data-aos="fade-up" data-aos-duration="1500">

        <!--       footer section     -->
        
        <footer>
            <div class="last text-center">
                &copy;Copyright <b>AUST CSE</b>. All Rights Reserved
            </div>

        </footer>
    </div>
    
    <!--    contact section end    -->
    
    <!--    scroll top button start    -->
    
    <div class="scrolltop float-right">
        <i class="fa fa-arrow-up" onclick="topFunction();" id="myBtn"></i>
    </div>

    <!--    scroll top button end    -->


    <script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js" integrity="sha512-CEiA+78TpP9KAIPzqBvxUv8hy41jyI3f2uHi7DGp/Y/Ka973qgSdybNegWFciqh6GrN2UePx2KkflnQUbUhNIA==" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="main.js"></script>


    <script>
        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0; // For Safari
            document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
        }
    </script>
</body>

</html>