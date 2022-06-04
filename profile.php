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

<body>

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
                    <div class="col-md-6 mr-auto">
                        <div class="section">
                            <h2>Profile</h2>
                        </div>
                        <h1 class="names">Personal Information</h1>
                    </div>
                    <div class="col-md-6" style="text-align: right; margin-top: 5px;">
                        <a href="index.php" class="btn btn-lg btn-outline-secondary">Home</a>
                    </div>
                </div>
                <div class="row menu text-center">
                    <div class="col-12">
                        <img src="assets/img/profile/<?php echo $_SESSION['photo']; ?>" alt="" class="menu-img" style="float:none;">
                        <h3><?php echo $_SESSION['username']; ?></h3>
                        <table style="text-align: left; margin-top: 2rem;">
                            <tr>
                                <td>Department:</td>
                                <td class="td_padding"><?php echo $_SESSION['dept']; ?></td>
                            </tr>
                            <tr>
                                <td>ID:</td>
                                <td class="td_padding"><?php echo $_SESSION['id']; ?></td>
                            </tr>
                            <tr>
                                <td>Semester</td>
                                <td class="td_padding"><?php echo $_SESSION['sem']; ?></td>
                            </tr class="td_padding">
                            <tr>
                                <td>Profession:</td>
                                <td class="td_padding"><?php echo $_SESSION['prof']; ?></td>
                            </tr>
                            <tr>
                                <td>Club:</td>
                                <td class="td_padding"><?php echo $_SESSION['club']; ?></td>
                            </tr>
                            <tr>
                                <td>Email:</td>
                                <td class="td_padding"><?php echo $_SESSION['email']; ?></td>
                            </tr>
                            <tr>
                                <td>Phone:</td>
                                <td class="td_padding"><?php echo $_SESSION['phone']; ?></td>
                            </tr>
                        </table>
                        <form method="post" action="profile.php" enctype="multipart/form-data">
                            <?php include('errors.php'); ?>
                            <input type="file" name="image" style="margin: 0 auto; padding: 1rem;" required/>
                            <br/>
                            <button type="submit" name="upload" class="btn btn-lg btn-outline-secondary">upload</button>
                        </form>
                        <a href="update.php" style="margin-top: 1rem;" class="btn btn-lg btn-outline-secondary">Update Profile</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--    menu section end    -->
    <!--       footer section     -->

    <footer>
        <div class="last text-center">
            &copy;Copyright <b>AUST CSE</b>. All Rights Reserved
        </div>

    </footer>

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