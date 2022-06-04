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
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
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
                            <h2>Teachers</h2>
                        </div>
                        <h1 class="names">Teachers Information</h1>
                    </div>
                </div>

                <div class="row menu">
                    <div class="row">
                        <div class="col-12 mr-auto">
                            <div class="section">
                                <h2>Professors</h2>
                            </div>
                        </div>

                        <div class="col-lg-6 menu-item" data-aos="fade-up" data-aos-duration="800">
                            <img src="assets/img/faculty/mamun.jpg" class="menu-img" alt="">
                            <div class="menu-content">
                                <a href="#">Dr. S.M.A. Al-Mamun</a>
                            </div>
                            <div class="menu-ingredients">
                                Professor & Dean
                            </div>
                            <div class="menu-ingredients">
                                <a href="almamun@aust.edu"> almamun@aust.edu</a>
                            </div>
                        </div>

                        <div class="col-lg-6 menu-item" data-aos="fade-up" data-aos-duration="800">
                            <img src="assets/img/faculty/kalpona.jpg" class="menu-img" alt="">
                            <div class="menu-content">
                                <a href="#">Prof. Dr. Kazi A Kalpona</a>
                            </div>
                            <div class="menu-ingredients">
                                Professor & Director, ICT Center
                            </div>
                            <div class="menu-ingredients">
                                <a href="kalpoma@aust.edu">kalpoma@aust.edu</a>
                            </div>
                        </div>

                        <div class="col-lg-6 menu-item" data-aos="fade-up" data-aos-duration="800">
                            <img src="assets/img/faculty/suvo.JPG" class="menu-img" alt="">
                            <div class="menu-content">
                                <a href="#">Dr. Mohammad Shafiul Alam</a>
                            </div>
                            <div class="menu-ingredients">
                                Professor & Head, CSE
                            </div>
                            <div class="menu-ingredients">
                                <a href="shafiul.cse@aust.edu">shafiul.cse@aust.edu</a>
                            </div>
                        </div>

                        <div class="col-lg-6 menu-item" data-aos="fade-up" data-aos-duration="800">
                            <img src="assets/img/faculty/default-img.png" class="menu-img" alt="">
                            <div class="menu-content">
                                <a href="#">Dr. Md. Shahriar Mahbub</a>
                            </div>
                            <div class="menu-ingredients">
                                Professor, CSE
                            </div>
                            <div class="menu-ingredients">
                                <a href="shahriar.cse@aust.edu">shahriar.cse@aust.edu</a>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 mr-auto">
                            <div class="section">
                                <h2>Associate Professors</h2>
                            </div>
                        </div>

                        <div class="col-lg-6 menu-item" data-aos="fade-up" data-aos-duration="800">
                            <img src="assets/img/faculty/paris.jpg" class="menu-img" alt="">
                            <div class="menu-content">
                                <a href="#">Mr. Md. Khairul Hasan</a>
                            </div>
                            <div class="menu-ingredients">
                                Associate Professor
                            </div>
                            <div class="menu-ingredients">
                                <a href="khairul271276@aust.edu">khairul271276@aust.edu</a>
                            </div>
                        </div>

                        <div class="col-lg-6 menu-item" data-aos="fade-up" data-aos-duration="800">
                            <img src="assets/img/faculty/Moinul.png" class="menu-img" alt="">
                            <div class="menu-content">
                                <a href="#">Mr. Mohammad Moinul Hoque</a>
                            </div>
                            <div class="menu-ingredients">
                                Associate Professor
                            </div>
                            <div class="menu-ingredients">
                                <a href="  moinul@aust.edu"> moinul@aust.edu</a>
                            </div>
                        </div>

                        <div class="col-lg-6 menu-item" data-aos="fade-up" data-aos-duration="800">
                            <img src="assets/img/faculty/faisal.png" class="menu-img" alt="">
                            <div class="menu-content">
                                <a href="#">Mr. Faisal Muhammad Shah</a>
                            </div>
                            <div class="menu-ingredients">
                                Associate Professor

                            </div>
                            <div class="menu-ingredients">
                                <a href="faisal.cse@aust.edu">faisal.cse@aust.edu</a>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 mr-auto">
                            <div class="section">
                                <h2>Assistant Professors</h2>
                            </div>
                        </div>

                        <div class="col-lg-6 menu-item" data-aos="fade-up" data-aos-duration="800">
                            <img src="assets/img/faculty/lisa.png" class="menu-img" alt="">
                            <div class="menu-content">
                                <a href="#">Dr. -Ing. Nusrat Jahan Lisa</a>
                            </div>
                            <div class="menu-ingredients">
                                Assistant Professor
                            </div>
                            <div class="menu-ingredients">
                                <a href="nusratlisa.cse@aust.edu">nusratlisa.cse@aust.edu</a>
                            </div>
                        </div>

                        <div class="col-lg-6 menu-item" data-aos="fade-up" data-aos-duration="800">
                            <img src="assets/img/faculty/eity.png" class="menu-img" alt="">
                            <div class="menu-content">
                                <a href="#">Ms. Qamrun Nahar Eity</a>
                            </div>
                            <div class="menu-ingredients">
                                Assistant Professor

                            </div>
                            <div class="menu-ingredients">
                                <a href=" eity.cse@aust.edu"> eity.cse@aust.edu</a>
                            </div>
                        </div>

                        <div class="col-lg-6 menu-item" data-aos="fade-up" data-aos-duration="800">
                            <img src="assets/img/faculty/emam.png" class="menu-img" alt="">
                            <div class="menu-content">
                                <a href="#">Mr. Emam Hossain</a>
                            </div>
                            <div class="menu-ingredients">
                                Assistant Professor
                            </div>
                            <div class="menu-ingredients">
                                <a href=" emamhossain.cse@aust.edu">emamhossain.cse@aust.edu</a>
                            </div>
                        </div>

                        <div class="col-lg-6 menu-item" data-aos="fade-up" data-aos-duration="800">
                            <img src="assets/img/faculty/shabnam.png" class="menu-img" alt="">
                            <div class="menu-content">
                                <a href="#">Ms. Syeda Shabnam Hasan</a>
                            </div>
                            <div class="menu-ingredients">
                                Assistant Professor
                            </div>
                            <div class="menu-ingredients">
                                <a href="shabnam.cse@aust.edu">shabnam.cse@aust.edu</a>
                            </div>
                        </div>

                        <div class="col-lg-6 menu-item" data-aos="fade-up" data-aos-duration="800">
                            <img src="assets/img/faculty/sakib.png" class="menu-img" alt="">
                            <div class="menu-content">
                                <a href="#">Mr. Nazmus Sakib</a>
                            </div>
                            <div class="menu-ingredients">
                                Assistant Professor
                            </div>
                            <div class="menu-ingredients">
                                <a href="nazmussakib009@gmail.com">nazmussakib009@gmail.com</a>
                            </div>
                        </div>

                        <div class="col-lg-6 menu-item" data-aos="fade-up" data-aos-duration="800">
                            <img src="assets/img/faculty/rab.png" class="menu-img" alt="">
                            <div class="menu-content">
                                <a href="#">Ms. Raqeebir Rab</a>
                            </div>
                            <div class="menu-ingredients">
                                Assistant Professor
                            </div>
                            <div class="menu-ingredients">
                                <a href=" raqeebir.cse@aust.edu.edu">raqeebir.cse@aust.edu.cse@aust.edu</a>
                            </div>
                        </div>

                        <div class="col-lg-6 menu-item" data-aos="fade-up" data-aos-duration="800">
                            <img src="assets/img/faculty/jubair.png" class="menu-img" alt="">
                            <div class="menu-content">
                                <a href="#">Mr. Mohammad Imrul Jubair</a>
                            </div>
                            <div class="menu-ingredients">
                                Assistant Professor
                            </div>
                            <div class="menu-ingredients">
                                <a href="  jubair.cse@aust.edu"> jubair.cse@aust.edu</a>
                            </div>
                        </div>

                        <div class="col-lg-6 menu-item" data-aos="fade-up" data-aos-duration="800">
                            <img src="assets/img/faculty/munia.png" class="menu-img" alt="">
                            <div class="menu-content">
                                <a href="#">Ms. Afsana Ahmed Munia</a>
                            </div>
                            <div class="menu-ingredients">
                                Assistant Professor
                            </div>
                            <div class="menu-ingredients">
                                <a href="  afsana.cse@aust.edu"> afsana.cse@aust.edu</a>
                            </div>
                        </div>

                        <div class="col-lg-6 menu-item" data-aos="fade-up" data-aos-duration="800">
                            <img src="assets/img/faculty/nayeem.png" class="menu-img" alt="">
                            <div class="menu-content">
                                <a href="#">Mr. Mir Tafseer Nayeem</a>
                            </div>
                            <div class="menu-ingredients">
                                Assistant Professor
                            </div>
                            <div class="menu-ingredients">
                                <a href="  mtnayeem.cse@aust.edu"> mtnayeem.cse@aust.edu</a>
                            </div>
                        </div>

                        <div class="col-lg-6 menu-item" data-aos="fade-up" data-aos-duration="800">
                            <img src="assets/img/faculty/jabir.png" class="menu-img" alt="">
                            <div class="menu-content">
                                <a href="#">Mr. H M Zabir Haque</a>
                            </div>
                            <div class="menu-ingredients">
                                Assistant Professor
                            </div>
                            <div class="menu-ingredients">
                                <a href="  zabir.haque.cse@aust.edu"> zabir.haque.cse@aust.edu</a>
                            </div>
                        </div>

                        <div class="col-lg-6 menu-item" data-aos="fade-up" data-aos-duration="800">
                            <img src="assets/img/faculty/belal.png" class="menu-img" alt="">
                            <div class="menu-content">
                                <a href="#">Mr. Tanveer Ahmed Belal</a>
                            </div>
                            <div class="menu-ingredients">
                                Assistant Professor
                            </div>
                            <div class="menu-ingredients">
                                <a href=" belal92.cse@gmail.com"> belal92.cse@gmail.com</a>
                            </div>
                        </div>

                        <div class="col-lg-6 menu-item" data-aos="fade-up" data-aos-duration="800">
                            <img src="assets/img/faculty/shoeb.png" class="menu-img" alt="">
                            <div class="menu-content">
                                <a href="#">Mr. Shoeb Mohammad Shahriar</a>
                            </div>
                            <div class="menu-ingredients">
                                Assistant Professor
                            </div>
                            <div class="menu-ingredients">
                                <a href=" shoeb.cse@aust.edu"> shoeb.cse@aust.edu</a>
                            </div>
                        </div>

                        <div class="col-lg-6 menu-item" data-aos="fade-up" data-aos-duration="800">
                            <img src="assets/img/faculty/aminul.jpg" class="menu-img" alt="">
                            <div class="menu-content">
                                <a href="#">Mr. Md. Aminur Rahman</a>
                            </div>
                            <div class="menu-ingredients">
                                Assistant Professor
                            </div>
                            <div class="menu-ingredients">
                                <a href="aminul.haque.cse@aust.edu">aminul.haque.cse@aust.edu</a>
                            </div>
                        </div>

                        <div class="col-lg-6 menu-item" data-aos="fade-up" data-aos-duration="800">
                            <img src="assets/img/faculty/tahsina.png" class="menu-img" alt="">
                            <div class="menu-content">
                                <a href="#">Ms. Tahsin Aziz</a>
                            </div>
                            <div class="menu-ingredients">
                                Assistant Professor
                            </div>
                            <div class="menu-ingredients">
                                <a href="tahsina.cse@gmail.com">tahsin.cse@gmail.co</a>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 mr-auto">
                            <div class="section">
                                <h2>Lecturer Grade-I</h2>
                            </div>
                        </div>

                        <div class="col-lg-6 menu-item" data-aos="fade-up" data-aos-duration="800">
                            <img src="assets/img/faculty/masud.png" class="menu-img" alt="">
                            <div class="menu-content">
                                <a href="#">Mr. Md. Masudur Rahman</a>
                            </div>
                            <div class="menu-ingredients">
                                Lecturer Grade-I
                            </div>
                            <div class="menu-ingredients">
                                <a href="  masudur.rahman0413.cse@aust.edu"> masudur.rahman0413.cse@aust.edu</a>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 mr-auto">
                            <div class="section">
                                <h2>Lecturer Grade-II</h2>
                            </div>
                        </div>

                        <div class="col-lg-6 menu-item" data-aos="fade-up" data-aos-duration="800">
                            <img src="assets/img/faculty/tasfia.png" class="menu-img" alt="">
                            <div class="menu-content">
                                <a href="#">Ms. Tasfia Zahin</a>
                            </div>
                            <div class="menu-ingredients">
                                Lecturer Grade-II
                            </div>
                            <div class="menu-ingredients">
                                <a href=" tasfia.cse@aust.edu"> tasfia.cse@aust.edu</a>
                            </div>
                        </div>

                        <div class="col-lg-6 menu-item" data-aos="fade-up" data-aos-duration="800">
                            <img src="assets/img/faculty/tawkat.png" class="menu-img" alt="">
                            <div class="menu-content">
                                <a href="#">Mr. Md. Tawkat Islam Khondaker</a>
                            </div>
                            <div class="menu-ingredients">
                                Lecturer Grade-II
                            </div>
                            <div class="menu-ingredients">
                                <a href=" tawkat.cse@aust.edu"> tawkat.cse@aust.edu</a>
                            </div>
                        </div>

                        <div class="col-lg-6 menu-item" data-aos="fade-up" data-aos-duration="800">
                            <img src="assets/img/faculty/shibli.png" class="menu-img" alt="">
                            <div class="menu-content">
                                <a href="#">Mr. G. M. Shahariar</a>
                            </div>
                            <div class="menu-ingredients">
                                Lecturer Grade-II
                            </div>
                            <div class="menu-ingredients">
                                <a href=" shahariar_shibli.cse@aust.edu"> shahariar_shibli.cse@aust.edu</a>
                            </div>
                        </div>

                        <div class="col-lg-6 menu-item" data-aos="fade-up" data-aos-duration="800">
                            <img src="assets/img/faculty/nibir.png" class="menu-img" alt="">
                            <div class="menu-content">
                                <a href="#">Mr. Nibir Chandra Mandal</a>
                            </div>
                            <div class="menu-ingredients">
                                Lecturer Grade-II
                            </div>
                            <div class="menu-ingredients">
                                <a href="   1405088.ncm@ugrad.cse.buet.ac.bd"> 1405088.ncm@ugrad.cse.buet.ac.bd</a>
                            </div>
                        </div>

                        <div class="col-lg-6 menu-item" data-aos="fade-up" data-aos-duration="800">
                            <img src="assets/img/faculty/abrar.png" class="menu-img" alt="">
                            <div class="menu-content">
                                <a href="#">Mr. Md. Hasin Abrar</a>
                            </div>
                            <div class="menu-ingredients">
                                Lecturer Grade-II
                            </div>
                            <div class="menu-ingredients">
                                <a href="hasinabrar1405@gmail.com">hasinabrar1405@gmail.com</a>
                            </div>
                        </div>

                        <div class="col-lg-6 menu-item" data-aos="fade-up" data-aos-duration="800">
                            <img src="assets/img/faculty/mohsena.png" class="menu-img" alt="">
                            <div class="menu-content">
                                <a href="#">Ms. Mohsena Ashraf</a>
                            </div>
                            <div class="menu-ingredients">
                                Lecturer Grade-II
                            </div>
                            <div class="menu-ingredients">
                                <a href="  mohsena.ria20@gmail.com"> mohsena.ria20@gmail.com</a>
                            </div>
                        </div>

                        <div class="col-lg-6 menu-item" data-aos="fade-up" data-aos-duration="800">
                            <img src="assets/img/faculty/hasib.png" class="menu-img" alt="">
                            <div class="menu-content">
                                <a href="#">Mr. Al Hasib Mahamud</a>
                            </div>
                            <div class="menu-ingredients">
                                Lecturer Grade-II
                            </div>
                            <div class="menu-ingredients">
                                <a href="hasib.cse@aust.edu">hasib.cse@aust.edu</a>
                            </div>
                        </div>

                        <div class="col-lg-6 menu-item" data-aos="fade-up" data-aos-duration="800">
                            <img src="assets/img/faculty/tonmoy.png" class="menu-img" alt="">
                            <div class="menu-content">
                                <a href="#">Mr. Tonmoy Hossain</a>
                            </div>
                            <div class="menu-ingredients">
                                Lecturer Grade-II
                            </div>
                            <div class="menu-ingredients">
                                <a href="tonmoy.cse@aust.edu">tonmoy.cse@aust.edu</a>
                            </div>
                        </div>

                        <div class="col-lg-6 menu-item" data-aos="fade-up" data-aos-duration="800">
                            <img src="assets/img/faculty/junayed.png" class="menu-img" alt="">
                            <div class="menu-content">
                                <a href="#">Mr. Junaed Younus Khan</a>
                            </div>
                            <div class="menu-ingredients">
                                Lecturer Grade-II
                            </div>
                            <div class="menu-ingredients">
                                <a href="junaed.cse@aust.edu">junaed.cse@aust.edu</a>
                            </div>
                        </div>

                        <div class="col-lg-6 menu-item" data-aos="fade-up" data-aos-duration="800">
                            <img src="assets/img/faculty/arony.png" class="menu-img" alt="">
                            <div class="menu-content">
                                <a href="#">Ms. Nowshin Nawar Arony</a>
                            </div>
                            <div class="menu-ingredients">
                                Lecturer Grade - II
                            </div>
                            <div class="menu-ingredients">
                                <a href="arony.cse@aust.edu">arony.cse@aust.edu</a>
                            </div>
                        </div>

                        <div class="col-lg-6 menu-item" data-aos="fade-up" data-aos-duration="800">
                            <img src="assets/img/faculty/amanat.png" class="menu-img" alt="">
                            <div class="menu-content">
                                <a href="#">Mr. A. K. M. Amanat Ullah</a>
                            </div>
                            <div class="menu-ingredients">
                                Lecturer Grade-II
                            </div>
                            <div class="menu-ingredients">
                                <a href=" amanat.cse@aust.edu"> amanat.cse@aust.edu</a>
                            </div>
                        </div>

                        <div class="col-lg-6 menu-item" data-aos="fade-up" data-aos-duration="800">
                            <img src="assets/img/faculty/farzad.png" class="menu-img" alt="">
                            <div class="menu-content">
                                <a href="#">Mr. Farzad Ahmed</a>
                            </div>
                            <div class="menu-ingredients">
                                Lecturer Grade-II
                            </div>
                            <div class="menu-ingredients">
                                <a href="farzad.cse@aust.edu">farzad.cse@aust.edu</a>
                            </div>
                        </div>

                        <div class="col-lg-6 menu-item" data-aos="fade-up" data-aos-duration="800">
                            <img src="assets/img/faculty/maruf.png" class="menu-img" alt="">
                            <div class="menu-content">
                                <a href="#">Mr. Mohammad Marufur Rahman</a>
                            </div>
                            <div class="menu-ingredients">
                                Lecturer Grade-II
                            </div>
                            <div class="menu-ingredients">
                                <a href="maruf.cse@aust.edu">maruf.cse@aust.edu</a>
                            </div>
                        </div>

                        <div class="col-lg-6 menu-item" data-aos="fade-up" data-aos-duration="800">
                            <img src="assets/img/faculty/default-img.png" class="menu-img" alt="">
                            <div class="menu-content">
                                <a href="#">Mr. Saaduddin Mahmud</a>
                            </div>
                            <div class="menu-ingredients">
                                Lecturer Grade-II
                            </div>
                            <div class="menu-ingredients">
                                <a href="Saaduddin.cse@aust.edu">Saaduddin.cse@aust.edu</a>
                            </div>
                        </div>

                        <div class="col-lg-6 menu-item" data-aos="fade-up" data-aos-duration="800">
                            <img src="assets/img/faculty/moumita.png" class="menu-img" alt="">
                            <div class="menu-content">
                                <a href="#">Ms. Moumita Choudhury</a>
                            </div>
                            <div class="menu-ingredients">
                                Lecturer Grade-II
                            </div>
                            <div class="menu-ingredients">
                                <a href=" moumita.cse@aust.edu"> moumita.cse@aust.edu</a>
                            </div>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"
        integrity="sha512-CEiA+78TpP9KAIPzqBvxUv8hy41jyI3f2uHi7DGp/Y/Ka973qgSdybNegWFciqh6GrN2UePx2KkflnQUbUhNIA=="
        crossorigin="anonymous"></script>
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