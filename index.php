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

    <!--    home section start    -->
    <div id="home">
        <nav class="navbar navbar-expand-xl navbar-dark bg-dark fixed-top">
            <div class="container-fluid p-2">
                <a class="navbar-brand" href="#">
                    <img src="./assets/img/aust.png" height="100" width="100">
                </a>
                <h6 class="uni_name">
                    Ahsanullah University of Science & Technology
                </h6>
                <button class="navbar-toggler custom-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav" style="padding-left: 3rem;">
                        <li class="nav-item">
                            <a class="nav-link" href="#home">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#about">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#soceity">Soceity</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#events">Events</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#testimonials">Testimonials</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="department.php">Department</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="transaction.php">Transaction</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#gallery">Gallery</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contact">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="profile.php">Profile</a>
                        </li>
                        <a href="index.php?logout='1'" class="btn btn-lg btn-outline-secondary btn-logout">Log
                            Out</a>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="landing">
            <div class="home-wrap">
                <div class="home-inner">

                </div>
            </div>
        </div>

        <div class="caption" data-aos="zoom-in" data-aos-duration="1000">
            <div class="row">
                <div class="col-12">
                    <?php if(isset($_SESSION['username'])): ?>
                    <h1>Welcome <?php echo $_SESSION['username']; ?> to <span style="color: #cda45e;">AUST CSE
                            SOCIETY</span></h1>
                    <?php endif ?>
                    <h2>Everything About CSE Department</h2>
                </div>
            </div>
        </div>
    </div>

    <!--    home section end    -->

    <!--    about section start    -->

    <div id="about" class="offset">
        <div class="fixed-background dark">
            <div class="container">
                <div class="row" data-aos="fade-up" data-aos-duration="1000">
                    <div class="col-lg-5 content">
                        <h3>We Belive in work for our Soceity.</h3>
                        <p><i>The mission of Our CSE Soceity is to build a community that would
                                work as a group of charity as well as they will work for the department
                                such as function, fest, sports, contest, etc.</i></p>
                    </div>
                    <div class="col-lg-1"></div>
                    <div class="col-lg-6 content" data-aos="zoom-in" data-aos-duration="1000">
                        <div class="row">
                            <div class="col-6">
                                <img class="about-img" src="assets/img/classmaterials.jpg">
                            </div>
                            <div class="col-6">
                                <img class="about-img" src="assets/img/contest.jpg">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <img class="about-img" src="assets/img/donation.jpg">
                            </div>
                            <div class="col-6">
                                <img class="about-img" src="assets/img/sport.jpg">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="fixed-wrap">
                    <div class="fixed f1">

                    </div>
                </div>
            </div>
        </div>
        <div class="container why-us" data-aos="fade-up" data-aos-duration="1000">

            <div class="row">
                <div class="col-lg-3 card-holder-1">
                    <a>
                        <div class="card" data-aos="zoom-in" data-aos-duration="1200">
                            <div class="card-body">
                                <h4 class="card-title">Soceity</h4>
                                <p class="card-text">CSE Society is a non-political organization. In Ahsanullah
                                    University of Science and Technolohy , CSE society is the largest
                                    organization consists of all students and teachers of CSE department.
                                    The objective of the CSE Society is to promote
                                    <span class="card-read-more soceity-read-more">Computer Science & Engineering
                                        awareness among the students in the CSE by organizing technical activities
                                        such as lectures, workshop, quizzes and excursion and to foster relationship
                                        among the past and present students and the teachers of the CSE by organizing
                                        various departmental events such as annual day celebration, fresher's welcome,
                                        farewell etc.</span>
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 mt-4 mt-lg-0 card-holder-2">
                    <a>
                        <div class="card" data-aos="zoom-in" data-aos-duration="1200">
                            <div class="card-body">
                                <h4 class="card-title">Event</h4>
                                <p class="card-text">The society will organize events with approval described below but
                                    are not limited to:
                                    <ul class="card-text">
                                        <li><i class="fa fa-check-circle-o li-icon" aria-hidden="true"></i>Seminars</li>
                                        <li><i class="fa fa-check-circle-o li-icon" aria-hidden="true"></i>Workshops and
                                            Tutorials</li>
                                        <li><i class="fa fa-check-circle-o li-icon" aria-hidden="true"></i>Study tours
                                        </li>
                                        <li><i class="fa fa-check-circle-o li-icon" aria-hidden="true"></i>Blood
                                            Donation</li>
                                        <li><i class="fa fa-check-circle-o li-icon" aria-hidden="true"></i>Software fair
                                        </li>
                                        <span class="card-read-more event-read-more">
                                            <li><i class="fa fa-check-circle-o li-icon" aria-hidden="true"></i>Arranging
                                                different programs (for example Electronics fair, Math Olympiad,
                                                Informatics Olympiad, Job fair etc.)</li>
                                            <li><i class="fa fa-check-circle-o li-icon" aria-hidden="true"></i>Career
                                                Counseling</li>
                                            <li><i class="fa fa-check-circle-o li-icon" aria-hidden="true"></i>Gaming
                                                Competition</li>
                                            <li><i class="fa fa-check-circle-o li-icon"
                                                    aria-hidden="true"></i>Programming Contest</li>
                                            <li><i class="fa fa-check-circle-o li-icon" aria-hidden="true"></i>General
                                                Knowledge / Quiz Competition</li>
                                            <li><i class="fa fa-check-circle-o li-icon" aria-hidden="true"></i>Cultural
                                                program (with prior consent of the advisor of Cultural Club)</li>
                                            <li><i class="fa fa-check-circle-o li-icon" aria-hidden="true"></i>Other
                                                activities which will be decided by the executive committee</li>
                                        </span>
                                    </ul>
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 mt-4 mt-lg-0 card-holder-3">
                    <a>
                        <div class="card" data-aos="zoom-in" data-aos-duration="1200">
                            <div class="card-body">
                                <h4 class="card-title">Department</h4>
                                <p class="card-text">
                                    CSE Society is run by an executive committee where the Head of the
                                    Department of CSE is the President of the society by constitution. A treasurer is
                                    also appointed by the President among the teachers of the
                                    <ul class="card-text">
                                        <span class="card-read-more dept-read-more">Department. Rest of the
                                            executive members of the society are formed by conduction election among
                                            students.
                                            Current executive body of the society is as below:
                                            <li><i class="fa fa-check-circle-o li-icon" aria-hidden="true"></i>Dr.
                                                Shafiul Alam [President]</li>
                                            <li><i class="fa fa-check-circle-o li-icon" aria-hidden="true"></i>Shimul
                                                Paul [Vice President]</li>
                                            <li><i class="fa fa-check-circle-o li-icon" aria-hidden="true"></i>Sha
                                                Faisal Raju [General Secretary]</li>

                                            Our Class representatives and Society representatives are also work in
                                            here, Department maintain many programme, club and many things. So here we
                                            work all together.
                                        </span></ul>
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 mt-4 mt-lg-0 card-holder-4">
                    <a>
                        <div class="card" data-aos="zoom-in" data-aos-duration="1200">
                            <div class="card-body">
                                <h4 class="card-title">Donation</h4>
                                <p class="card-text">Aust Cse society represent a good platform, it always here for the
                                    help of Student and who is need for help.
                                    We make e donation system, here anyone can donate and helps other.
                                    Many organisations can give charity to student or other person.
                                    <span class="card-read-more donation-read-more"> There is sponsore for program.
                                        Student can give amount or Others thing that can help the need one.</span>
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!--    about section end    -->

    <!--    soceity section start    -->

    <div id="soceity" class="offset">
        <div class="container specials" data-aos="fade-up" data-aos-duration="1000">
            <div class="row">
                <div class="col-12 mr-auto">
                    <div class="section">
                        <h2>soceity</h2>
                    </div>
                    <h1 class="names">check our soceity members</h1>
                </div>
            </div>
            <div class="row" data-aos="fade-up" data-aos-duration="800">
                <div class="col-lg-3">
                    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <a class="nav-link active" id="v-pills-item1-tab" data-toggle="pill" href="#v-pills-item1"
                            role="tab" aria-controls="v-pills-item1" aria-selected="true">Teachers</a>
                        <a class="nav-link" id="v-pills-item2-tab" data-toggle="pill" href="#v-pills-item2" role="tab"
                            aria-controls="v-pills-item2" aria-selected="false">Soceity Members</a>
                        <a class="nav-link" id="v-pills-item3-tab" data-toggle="pill" href="#v-pills-item3" role="tab"
                            aria-controls="v-pills-item3" aria-selected="false">Club Members</a>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade show active special-title" id="v-pills-item1" role="tabpanel"
                            aria-labelledby="v-pills-item1-tab">
                            <div class="row text-center">
                                <div class="col-lg-4">
                                    <img src="assets/img/faculty/mamun.jpg" alt="" class="img-fluid rounded-circle">
                                    <div class="row">
                                        <h3>Dr. S.M.A. Al-Mamun</h3>
                                    </div>
                                    <div class="row">
                                        <p>Professor & Dean</p>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <img src="assets/img/faculty/suvo.jpg" alt="" class="img-fluid rounded-circle">
                                    <div class="row">
                                        <h3>Prof. Dr. Mohammad Shafiul Alam</h3>
                                    </div>
                                    <div class="row">
                                        <p>Professor & Head</p>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <img src="assets/img/faculty/kalpona.jpg" alt="" class="img-fluid rounded-circle">
                                    <div class="row">
                                        <h3>Prof. Dr. Kazi A Kalpona</h3>
                                    </div>
                                    <div class="row">
                                        <p>Professor & Director, ICT Center</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <a href="teacher.php" class="btn btn-lg btn-outline-secondary" target="_blank">see
                                    all</a>
                            </div>
                        </div>
                        <div class="tab-pane fade special-title" id="v-pills-item2" role="tabpanel"
                            aria-labelledby="v-pills-item2-tab">
                            <div class="row text-center">
                                <div class="col-lg-4">
                                    <img src="assets/img/faculty/suvo.jpg" alt="" class="img-fluid rounded-circle">
                                    <div class="row">
                                        <h3>Prof. Dr. Mohammad Shafiul Alam</h3>
                                    </div>
                                    <div class="row">
                                        <p>Professor & Head</p>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <img src="assets/img/faculty/paris.jpg" alt="" class="img-fluid rounded-circle">
                                    <div class="row">
                                        <h3>Mr. Md. Khairul Hasan</h3>
                                    </div>
                                    <div class="row">
                                        <p>Associate Professor</p>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <img src="assets/img/faculty/aminul.jpg" alt="" class="img-fluid rounded-circle">
                                    <div class="row">
                                        <h3>Mr. Md. Aminur Rahman</h3>
                                    </div>
                                    <div class="row">
                                        <p>Assistant Professor</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <a href="soceity_member.php" class="btn btn-lg btn-outline-secondary"
                                    target="_blank">see all</a>
                            </div>
                        </div>
                        <div class="tab-pane fade special-title" id="v-pills-item3" role="tabpanel"
                            aria-labelledby="v-pills-item3-tab">
                            <div class="row text-center">
                                <div class="col-lg-4">
                                    <img src="assets/img/club/pran.jpg" alt="" class="img-fluid rounded-circle">
                                    <div class="row">
                                        <h3>Easinur Rashid Prantick</h3>
                                    </div>
                                    <div class="row">
                                        <p>Photography</p>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <img src="assets/img/club/tahmid.png" alt="" class="img-fluid rounded-circle">
                                    <div class="row">
                                        <h3>Tahmid Khandakar</h3>
                                    </div>
                                    <div class="row">
                                        <p>Web Developer</p>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <img src="assets/img/club/tamanna.png" alt="" class="img-fluid rounded-circle">
                                    <div class="row">
                                        <h3>Tamanna Naznim</h3>
                                    </div>
                                    <div class="row">
                                        <p>Innovation & Design</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <a href="club_member.php" class="btn btn-lg btn-outline-secondary" target="_blank">see
                                    all</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--    soceity section end    -->

    <!--    events section start    -->

    <div id="events" class="offset">
        <div class="fixed-background dark">
            <div class="container" data-aos="fade-up" data-aos-duration="1000">
                <div class="row">
                    <div class="col-12 mr-auto">
                        <div class="section">
                            <h2>events</h2>
                        </div>
                        <h1 class="names">Upcoming Events</h1>
                    </div>
                </div>
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-aos="fade-up"
                    data-aos-duration="1000">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row">
                                <div class="col-lg-6 ">
                                    <img class="d-block w-100 img-fluid" src="assets/img/contest.jpg"
                                        alt="Programming Contest">
                                </div>
                                <div class="col-lg-6 pt-4 pl-lg-4 pt-lg-3 event">
                                    <h3>Programming Contest</h3>
                                    <div class="event_menu ">
                                        <a href="default.php" target="_blank">
                                            <p><span>Learn More</span></p>
                                        </a>
                                    </div>
                                    <p class="font-italic">
                                        Our Society Organize indoor Programming contest as well as we go for national
                                        level or many other contest program
                                    </p>
                                    <ul>
                                        <li><i class="fa fa-check-circle-o" aria-hidden="true"></i> Contest
                                            Measure & improve your coding skills with contest.</li>
                                        <li><i class="fa fa-check-circle-o" aria-hidden="true"></i> Acpc, Icm and many
                                            other contest function arrange here to build up student skill.</li>
                                        <li><i class="fa fa-check-circle-o" aria-hidden="true"></i> It Encourages other
                                            student to do participate here for more coding skill.</li>
                                    </ul>
                                    <p>
                                        Our Society is working hard in the regard of good quality contest program and
                                        helping students to encoure themselves and learn effectively.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-lg-6 ">
                                    <img class="d-block w-100 img-fluid" src="assets/img/sport-1.png"
                                        alt="Sports and Entertainment">
                                </div>
                                <div class="col-lg-6 pt-4 pl-lg-4 pt-lg-3 event">
                                    <h3>Sports and Entertainment</h3>
                                    <div class="event_menu ">
                                        <a href="default.php" target="_blank">
                                            <p><span>Learn More</span></p>
                                        </a>
                                    </div>
                                    <p class="font-italic">
                                        Every semester our Society offer student to perticipate games like cricket,
                                        football, badminton both for male and female student.
                                    </p>
                                    <ul>
                                        <li><i class="fa fa-check-circle-o" aria-hidden="true"></i> Our Techers
                                            help in performing the sport.</li>
                                        <li><i class="fa fa-check-circle-o" aria-hidden="true"></i> We perform and
                                            re-arrange class in a way not to miss any lecture.</li>
                                        <li><i class="fa fa-check-circle-o" aria-hidden="true"></i> It helps in creating
                                            bonding between teachers, senior and juniors.</li>
                                    </ul>
                                    <p>
                                        Sport pertains to any form of competitive physical activity or game that aims to
                                        use, maintain or improve physical ability and skills while providing enjoyment
                                        to participants.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-lg-6 ">
                                    <img class="d-block w-100 img-fluid" src="assets/img/job-fair.jpg" alt="Job Fair">
                                </div>
                                <div class="col-lg-6 pt-4 pl-lg-4 pt-lg-3 event">
                                    <h3>Job Fair</h3>
                                    <div class="event_menu ">
                                        <a href="default.php" target="_blank">
                                            <p><span>Learn More</span></p>
                                        </a>
                                    </div>
                                    <p class="font-italic">
                                        A job fair, also referred commonly as a job expo or career fair or career expo,
                                        is an event in which employers, recruiters, and schools give information to
                                        potential employees.
                                    </p>
                                    <ul>
                                        <li><i class="fa fa-check-circle-o" aria-hidden="true"></i> Many organisations
                                            came here to motivate student in job sector.</li>
                                        <li><i class="fa fa-check-circle-o" aria-hidden="true"></i> They give us a idea
                                            about job sectort.</li>
                                        <li><i class="fa fa-check-circle-o" aria-hidden="true"></i> our Society arrange
                                            this kind of job fair,and maintain many other functions like this..</li>
                                    </ul>
                                    <p>
                                        This type of work will help student to know the fact about job factor and how to
                                        approach to their dream job.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-lg-6 ">
                                    <img class="d-block w-100 img-fluid" src="assets/img/hardware.jpg"
                                        alt="Hardware Showcase">
                                </div>
                                <div class="col-lg-6 pt-4 pl-lg-4 pt-lg-3 event">
                                    <h3>Hardware Showcase</h3>
                                    <div class="event_menu ">
                                        <a href="default.php" target="_blank">
                                            <p><span>Learn More</span></p>
                                        </a>
                                    </div>
                                    <p class="font-italic">
                                        Our Society is linked with a lot of club and AUST Innovation and Design
                                        Club(IDC) works on hardware and completed so many projects.
                                    </p>
                                    <ul>
                                        <li><i class="fa fa-check-circle-o" aria-hidden="true"></i>Whoever like hardware
                                            problem and want their career in that field.</li>
                                        <li><i class="fa fa-check-circle-o" aria-hidden="true"></i> LFR, Robotics many
                                            Competition are arranged here in AUST.</li>
                                        <li><i class="fa fa-check-circle-o" aria-hidden="true"></i> AUST MARS, Team RedX
                                            etc acheived international respect.</li>
                                    </ul>
                                    <p>
                                        As a merry band of innovators employing technology and developing new content,
                                        our projects explore the creative realm and are constrained only by imagination
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-lg-6 ">
                                    <img class="d-block w-100 img-fluid" src="assets/img/picnic.png" alt="Picnic">
                                </div>
                                <div class="col-lg-6 pt-4 pl-lg-4 pt-lg-3 event">
                                    <h3>Fest and Picnic</h3>
                                    <div class="event_menu ">
                                        <a href="default.php" target="_blank">
                                            <p><span>Learn More</span></p>
                                        </a>
                                    </div>
                                    <p class="font-italic">
                                        We arrange fest and seminer as many as possible. This gives student and teacher
                                        refreshment.
                                        Also we welcome our fresher student with fresher reception.
                                    </p>
                                    <ul>
                                        <li><i class="fa fa-check-circle-o" aria-hidden="true"></i> We arrange cultural
                                            programs, fests, picnic and important national days every year.</li>
                                        <li><i class="fa fa-check-circle-o" aria-hidden="true"></i> In fest we farewell
                                            our respective seniors.</li>
                                        <li><i class="fa fa-check-circle-o" aria-hidden="true"></i> We can show our
                                            extra curricual activities.</li>
                                    </ul>
                                    <p>
                                        University is not just place for study but also to biuld a good personality and
                                        sharping the extra curricular skills and this is the right place for this.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-lg-6 ">
                                    <img class="d-block w-100 img-fluid" src="assets/img/seminar.jpeg" alt="Seminar">
                                </div>
                                <div class="col-lg-6 pt-4 pl-lg-4 pt-lg-3 event">
                                    <h3>Seminar</h3>
                                    <div class="event_menu ">
                                        <a href="default.php" target="_blank">
                                            <p><span>Learn More</span></p>
                                        </a>
                                    </div>
                                    <p class="font-italic">
                                        Our Society arrange seminar to informed us about a lot of reality, ideas and
                                        factor regarding to our subjecct and filed.
                                    </p>
                                    <ul>
                                        <li><i class="fa fa-check-circle-o" aria-hidden="true"></i> Seminar about Higher
                                            Education helps in Study in abroad for all students.</li>
                                        <li><i class="fa fa-check-circle-o" aria-hidden="true"></i> Seminar about
                                            linkedIn helps in creating job profile for all members.</li>
                                        <li><i class="fa fa-check-circle-o" aria-hidden="true"></i> Seminar About GitHub
                                            let us know pushing project and code.</li>
                                    </ul>
                                    <p>
                                        Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                                        in reprehenderit in voluptate
                                        velit esse cillum dolore eu fugiat nulla pariatur
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-lg-6 ">
                                    <img class="d-block w-100 img-fluid" src="assets/img/other.jpg" alt="Other">
                                </div>
                                <div class="col-lg-6 pt-4 pl-lg-4 pt-lg-3 event">
                                    <h3>Other</h3>
                                    <div class="event_menu ">
                                        <a href="default.php" target="_blank">
                                            <p><span>Learn More</span></p>
                                        </a>
                                    </div>
                                    <p class="font-italic">
                                        We arrange a lot of other event too. All the event is under our CSE Society
                                    </p>
                                    <ul>
                                        <li><i class="fa fa-check-circle-o" aria-hidden="true"></i> We arrange official
                                            arrangement.</li>
                                        <li><i class="fa fa-check-circle-o" aria-hidden="true"></i> Govt event on 26th
                                            march, 16 dec etc.</li>
                                        <li><i class="fa fa-check-circle-o" aria-hidden="true"></i> Program like Ghuri
                                            fair, Boishakh etc.</li>
                                        <li><i class="fa fa-check-circle-o" aria-hidden="true"></i> We arrange art
                                            exhibition.</li>
                                        <li><i class="fa fa-check-circle-o" aria-hidden="true"></i> We also arrange
                                            poster
                                            presentation.</li>
                                    </ul>
                                    <p>
                                        Our Society lead those program to execute well and security and ensure the
                                        safety of everyone.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="fixed-wrap">
                <div class="fixed f2">

                </div>
            </div>
        </div>
    </div>

    <!--    events section end    -->

    <!--    Comment section start    -->

    <div id="booktable">
        <div class="container specials" data-aos="fade-up" data-aos-duration="1000">
            <div class="row">
                <div class="col-12 mr-auto">
                    <div class="section">
                        <h2>Hire Us</h2>
                    </div>
                    <h1 class="names">Send<span style="text-transform: lowercase;"> us </span>Text</h1>
                </div>
            </div>

            <form action="" name="createprofile">
                <div class="form-row">
                    <div class="col-lg-4 col-md-6 form-group" data-aos="fade-up" data-aos-duration="800">
                        <input type="text" class="form-control" name="name" id="name" placeholder="Your Name" required>
                    </div>

                    <div class="col-lg-4 col-md-6 form-group" data-aos="fade-up" data-aos-duration="800">
                        <input type="email" class="form-control" name="email" id="email" placeholder="Your Email"
                            required>
                    </div>

                    <div class="col-lg-4 col-md-6 form-group" data-aos="fade-up" data-aos-duration="800">
                        <input type="text" class="form-control" name="phone" id="phone" placeholder="Your Phone"
                            required>
                    </div>

                    <div class="col-lg-4 col-md-6 form-group" data-aos="fade-up" data-aos-duration="800">
                        <input type="text" class="form-control" name="date" id="date" placeholder="mm/dd/yy"
                            onfocus="(this.type='date')" onblur="(this.type='text')" required>
                    </div>

                    <div class="col-lg-4 col-md-6 form-group" data-aos="fade-up" data-aos-duration="800">
                        <input type="text" class="form-control" name="time" id="time" placeholder="Time"
                            onfocus="(this.type='time')" onblur="(this.type='text')" required>
                    </div>

                    <div class="col-lg-4 col-md-6 form-group" data-aos="fade-up" data-aos-duration="800">
                        <input type="number" class="form-control" name="people" id="people" placeholder="# of people"
                            required>
                    </div>

                    <div class="col-12 form-group" data-aos="fade-up" data-aos-duration="800">
                        <textarea class="form-control" rows="6" name="massage" id="massage"
                            placeholder="Message"></textarea>
                    </div>

                    <button type="submit" class="btn btn-lg btn-outline-secondary" data-aos="fade-up"
                        data-aos-duration="800">SUBMIT</button>
                </div>
            </form>
        </div>
    </div>

    <!--    comment section end    -->

    <!--    testimonials section start     -->

    <div id="testimonials" class="offset">
        <div class="jumbotron" data-aos="fade-up" data-aos-duration="1000">
            <div class="container">
                <div class="row">
                    <div class="col-12 mr-auto">
                        <div class="section">
                            <h2>testimonials</h2>
                        </div>
                        <h1 class="names">What they're saying about us</h1>
                    </div>
                </div>

                <div id="carouselExampleIndicators1" class="carousel slide c2" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators1" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators1" data-slide-to="1"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row testimonials">
                                <div class="col-md-6">
                                    <div class="card" data-aos="zoom-in" data-aos-duration="1200">
                                        <div class="card-body">
                                            <p><i class="fa fa-quote-left" aria-hidden="true"></i>Proin iaculis purus
                                                consequat sem cure digni ssim donec porttitora entum suscipit rhoncus.
                                                Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen
                                                aliquam, risus at semper.<i class="fa fa-quote-right"
                                                    aria-hidden="true"></i></p>
                                            <img class="img-fluid" src="assets/img/testimonials/testimonials-1.jpg"
                                                alt="">
                                        </div>
                                        <h3>H.E. Mr. Md. Abdul Hamid</h3>
                                        <h4>Chancellor<br>Honourable President of the People's Republic of Bangladesh
                                        </h4>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card" data-aos="zoom-in" data-aos-duration="1200">
                                        <div class="card-body">
                                            <p><i class="fa fa-quote-left" aria-hidden="true"></i>Export tempor illum
                                                tamen malis malis eram quae irure esse labore quem cillum quid cillum
                                                eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure
                                                amet legam anim culpa.<i class="fa fa-quote-right"
                                                    aria-hidden="true"></i></p>
                                            <img class="img-fluid" src="assets/img/testimonials/testimonials-2.jpg"
                                                alt="">
                                        </div>
                                        <h3>Prof. Dr. Muhammad Fazli Ilahi</h3>
                                        <h4>Vice-Chancellor</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row testimonials">
                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <p><i class="fa fa-quote-left" aria-hidden="true"></i>Enim nisi quem export
                                                duis labore cillum quae magna enim sint quorum nulla quem veniam duis
                                                minim tempor labore quem eram duis noster aute amet eram fore quis sint
                                                minim.<i class="fa fa-quote-right" aria-hidden="true"></i></p>
                                            <img class="img-fluid" src="assets/img/testimonials/testimonials-3.jpg"
                                                alt="">
                                        </div>
                                        <h3>Mr. Kazi Rafiqul Alam</h3>
                                        <h4>Chairman, Board of Trustees<br>President, Dhaka Ahsania Mission</h4>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <p><i class="fa fa-quote-left" aria-hidden="true"></i>Fugiat enim eram quae
                                                cillum dolore dolor amet nulla culpa multos export minim fugiat minim
                                                velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem
                                                dolore labore.<i class="fa fa-quote-right" aria-hidden="true"></i></p>
                                            <img class="img-fluid" src="assets/img/testimonials/testimonials-4.jpg"
                                                alt="">
                                        </div>
                                        <h3>Prof. Dr. Mustafizur Rahman</h3>
                                        <h4>Treasurer</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--    testimonials section end    -->

    <!--    gallery section start     -->

    <div id="gallery" class="offset" data-aos="fade-up" data-aos-duration="1000">
        <div class="container specials">
            <div class="row">
                <div class="col-12 mr-auto">
                    <div class="section">
                        <h2>gallery</h2>
                    </div>
                    <h1 class="names">some photos from our activities</h1>
                </div>
            </div>
        </div>

        <div class="row no-padding" data-aos="fade-up" data-aos-duration="1000">
            <div class="col-lg-3 col-md-4">
                <div class="gallery">
                    <a href="assets/img/gallery/gallery-1.jpg" target="_blank"> <img
                            src="assets/img/gallery/gallery-1.jpg" class="img-fluid">
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-4">
                <div class="gallery">
                    <a href="assets/img/gallery/gallery-2.jpg" target="_blank"> <img
                            src="assets/img/gallery/gallery-2.jpg" class="img-fluid">
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-4">
                <div class="gallery">
                    <a href="assets/img/gallery/gallery-3.jpg" target="_blank"> <img
                            src="assets/img/gallery/gallery-3.jpg" class="img-fluid">
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-4">
                <div class="gallery">
                    <a href="assets/img/gallery/gallery-4.jpg" target="_blank"> <img
                            src="assets/img/gallery/gallery-4.jpg" class="img-fluid">
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-4">
                <div class="gallery">
                    <a href="assets/img/gallery/gallery-5.jpg" target="_blank"> <img
                            src="assets/img/gallery/gallery-5.jpg" class="img-fluid">
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-4">
                <div class="gallery">
                    <a href="assets/img/gallery/gallery-6.jpg" target="_blank"> <img
                            src="assets/img/gallery/gallery-6.jpg" class="img-fluid">
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-4">
                <div class="gallery">
                    <a href="assets/img/gallery/gallery-7.jpg" target="_blank"> <img
                            src="assets/img/gallery/gallery-7.jpg" class="img-fluid">
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-4">
                <div class="gallery">
                    <a href="assets/img/gallery/gallery-8.jpg" target="_blank"> <img
                            src="assets/img/gallery/gallery-8.jpg" class="img-fluid">
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!--    gallery section end     -->

    <!--    chefs section start    -->

    <div id="contact" class="offset" data-aos="fade-up" data-aos-duration="1000">
        <div class="container specials">
            <div class="row">
                <div class="col-12 mr-auto">
                    <div class="section">
                        <h2>Developers</h2>
                    </div>
                    <h1 class="names">brains behind this site</h1>
                </div>
            </div>

            <div class="row chefs">
                <div class="member col-lg-4 col-md-6" data-aos="zoom-in" data-aos-duration="2000">
                    <img src="assets/img/club/pran.jpg" alt="" class="img-fluid">
                    <div class="member-info">
                        <div class="member-info-content">
                            <h4>Easinur Rashid</h4>
                            <h5>Frontend Developer</h5>
                        </div>
                        <div class="social">
                            <a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            <a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            <a href=""><i class="fa fa-instagram" aria-hidden="true"></i></a>
                            <a href=""><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
                <div class="member col-lg-4 col-md-6" data-aos="zoom-in" data-aos-duration="2000">
                    <img src="assets/img/club/takia.jpg" alt="" class="img-fluid">
                    <div class="member-info">
                        <div class="member-info-content">
                            <h4>Takia Maliha</h4>
                            <h5>Designer</h5>
                        </div>
                        <div class="social">
                            <a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            <a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            <a href=""><i class="fa fa-instagram" aria-hidden="true"></i></a>
                            <a href=""><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
                <div class="member col-lg-4 col-md-6" data-aos="zoom-in" data-aos-duration="2000">
                    <img src="assets/img/club/tahmid.png" alt="" class="img-fluid">
                    <div class="member-info">
                        <div class="member-info-content">
                            <h4>Tahmid Khandakar</h4>
                            <h5>Backend Developer</h5>
                        </div>
                        <div class="social">
                            <a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            <a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            <a href=""><i class="fa fa-instagram" aria-hidden="true"></i></a>
                            <a href=""><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--    chefs section end    -->

    <!--    contact section start    -->

    <div data-aos="fade-up" data-aos-duration="1500">

        <div class="container specials" style="padding-bottom: 1rem;">
            <div class="row">
                <div class="col-12 mr-auto">
                    <div class="section">
                        <h2>contact</h2>
                    </div>
                    <h1 class="names">contact us</h1>
                </div>
            </div>
        </div>

        <iframe style="border:0; width: 100%; height: 350px;"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.538620356898!2d90.40448511476718!3d23.763826894180603!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c77decb5f845%3A0xc2eadd2f3b867792!2sAhsanullah%20University%20of%20Science%20and%20Technology!5e0!3m2!1sen!2sbd!4v1616411779003!5m2!1sen!2sbd"
            frameborder="0" allowfullscreen="" loading="lazy"></iframe>

        <!--        contact form     -->\

        <div class="container specials location">
            <div class="row">
                <div class="col-lg-4">
                    <div class="address" data-aos="fade-up" data-aos-duration="1000">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                        <h4>Location:</h4>
                        <p>141 & 142, Love Road, Tejgaon, Dhaka-1208</p>
                    </div>
                    <div class="open" data-aos="fade-up" data-aos-duration="1000">
                        <i class="fa fa-clock-o" aria-hidden="true"></i>
                        <h4>Open Hours:</h4>
                        <p>Sunday-Thursday:<br>08:00 AM - 06:00 PM</p>
                    </div>
                    <div class="email" data-aos="fade-up" data-aos-duration="1000">
                        <i class="fa fa-envelope-o" aria-hidden="true"></i>
                        <h4>Email:</h4>
                        <p>prantick1997@gmail.com</p>
                    </div>
                    <div class="phone" data-aos="fade-up" data-aos-duration="1000">
                        <i class="fa fa-phone" aria-hidden="true"></i>
                        <h4>Call:</h4>
                        <p>+880 1521 431446</p>
                    </div>
                </div>
                <div class="col-lg-8">
                    <form action="" name="sendmessage">
                        <div class="form-row">
                            <div class="col-md-6 form-group" data-aos="fade-up" data-aos-duration="1000">
                                <input type="text" class="form-control" name="name" id="name" placeholder="Your Name"
                                    required>
                            </div>

                            <div class="col-md-6 form-group" data-aos="fade-up" data-aos-duration="1000">
                                <input type="email" class="form-control" name="email" id="email"
                                    placeholder="Your Email" required>
                            </div>

                            <div class="col-12 form-group" data-aos="fade-up" data-aos-duration="1000">
                                <input type="text" class="form-control" name="subject" id="subject"
                                    placeholder="Subject" required>
                            </div>

                            <div class="col-12 form-group" data-aos="fade-up" data-aos-duration="1000">
                                <textarea class="form-control" rows="8" placeholder="Message" required></textarea>
                            </div>

                            <button type="submit" class="btn btn-lg btn-outline-secondary" data-aos="fade-up"
                                data-aos-duration="1000">send message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!--       footer section     -->

        <footer>
            <div class="container">
                <div class="row footer-top">
                    <div class="col-md-6">
                        <h4>AUST CSE SOCEITY</h4>
                        <h6>141 & 142 Love Road<br>
                            Tejgaon, Dhaka-1208<br>
                            Bangladesh</h6>
                        <p><b>Phone:</b> +880 1521 431446<br>
                            <b>Email:</b> prantick1997@gmail.com</p>
                        <div class="socialicon">
                            <a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            <a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            <a href=""><i class="fa fa-instagram" aria-hidden="true"></i></a>
                            <a href=""><i class="fa fa-skype" aria-hidden="true"></i></a>
                            <a href=""><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h5 class="footername">
                            useful links
                        </h5>
                        <ul>
                            <li><i class="fa fa-arrow-right" aria-hidden="true"></i>Home</li>
                            <li><i class="fa fa-arrow-right" aria-hidden="true"></i>About us</li>
                            <li><i class="fa fa-arrow-right" aria-hidden="true"></i>Soceity</li>
                            <li><i class="fa fa-arrow-right" aria-hidden="true"></i>Events</li>
                            <li><i class="fa fa-arrow-right" aria-hidden="true"></i>Gallery</li>
                        </ul>
                    </div>
                </div>
            </div>
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

        $(".card-holder-1").hover(function () {
            $(".soceity-read-more").css({
                "opacity": "1",
                "height": "100%"
            });
        }, function () {
            $(".soceity-read-more").css({
                "opacity": "0",
                "height": "0"
            });
        });
        $(".card-holder-2").hover(function () {
            $(".event-read-more").css({
                "opacity": "1",
                "height": "100%"
            });
        }, function () {
            $(".event-read-more").css({
                "opacity": "0",
                "height": "0"
            });
        });

        $(".card-holder-4").hover(function () {
            $(".donation-read-more").css({
                "opacity": "1",
                "height": "100%"
            });
        }, function () {
            $(".donation-read-more").css({
                "opacity": "0",
                "height": "0"
            });
        });

        $(".card-holder-3").hover(function () {
            $(".dept-read-more").css({
                "opacity": "1",
                "height": "100%"
            });
        }, function () {
            $(".dept-read-more").css({
                "opacity": "0",
                "height": "0"
            });
        });
    </script>
</body>

</html>