<?php include('server.php'); 

    if(empty($_SESSION['email'])){
        header('location: home.php');
    }

?>

<!DOCTYPE html>
<html style="font-size: 16px;">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <meta name="keywords"
    content="In our Campus you can, Our Courses, Our Project, Our university, Course Registration, Teachers, John Mcallister, Jane Doe, Mary Mgrayan, Hanna Kim">
  <meta name="description" content="">
  <meta name="page_type" content="np-template-header-footer-from-plugin">
  <title>AUST CSE SOCEITY</title>
      <link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">
  <link rel="stylesheet" href="nicepage.css" media="screen">
  <link href="assets/css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="assets/css/fixed.css">
  <link rel="stylesheet" href="assets/css/animate.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css" />
  <link rel="stylesheet" href="department.css" media="screen">
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">
  <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
  <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
  <meta name="generator" content="Nicepage 3.7.2, nicepage.com">
  <link id="u-theme-google-font" rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
  <link id="u-page-google-font" rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700">
    
</head>

<body class="u-body">
  <div id="loader-wrapper">
    <div id="loader"></div>
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
  </div>
  <section class="u-clearfix u-image u-shading u-section-1" id="sec-b5dd">
    <nav class="navbar navbar-expand-xl navbar-dark bg-dark fixed-top">
      <div class="container p-2">
        <a class="navbar-brand" href="#">
          <img src="./assets/img/aust.png" height="100" width="100">
        </a>
        <h6 class="uni_name">
          Ahsanullah University of Science & technology
        </h6>
        <button class="navbar-toggler custom-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav" style="padding-left: 3rem;">
            <li class="nav-item">
              <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="department.php">Department <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="transaction.php">Transaction</a>
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
    <div class="u-container-layout caption" style="text-align: center; padding: 0;">
      <h1 class="u-custom-font u-font-oswald u-text u-title">In our Campus You Can</h1>
      <h2 class="u-text">Learn and Gain Knowledge</h2>
    </div>
  </section>
  <section class="u-align-center u-clearfix u-section-2" id="sec-f3d6">
    <div class="u-clearfix u-sheet u-sheet-1">
      <div class="u-expanded-width u-list u-repeater u-list-1">
        <div
          class="u-align-center u-container-style u-grey-5 u-list-item u-repeater-item u-video-cover u-list-item-1 list-box" data-aos="flip-left" data-aos-duration="1500">
          <div class="u-container-layout u-similar-container u-valign-middle u-container-layout-1">
            <span class="u-icon u-icon-circle u-text-black u-icon-1">
              <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 59.986 59.986">
                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-5176">
                </use>
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                xml:space="preserve" class="u-svg-content" viewBox="0 0 59.986 59.986" x="0px" y="0px" id="svg-5176"
                style="enable-background:new 0 0 59.986 59.986;">
                <path
                  d="M59.972,20.164c0.007-0.041,0.011-0.081,0.013-0.123c0.002-0.049,0.001-0.096-0.003-0.145  c-0.004-0.042-0.01-0.082-0.02-0.123c-0.011-0.048-0.026-0.094-0.044-0.14c-0.009-0.024-0.011-0.049-0.022-0.072  c-0.008-0.017-0.022-0.03-0.031-0.047c-0.009-0.017-0.013-0.035-0.023-0.052l-10-16c-0.046-0.073-0.1-0.139-0.161-0.197  c-0.001-0.001-0.002-0.001-0.003-0.002c-0.086-0.081-0.188-0.139-0.297-0.185c-0.014-0.006-0.023-0.018-0.038-0.024  c-0.011-0.004-0.023-0.002-0.034-0.005c-0.101-0.034-0.205-0.057-0.314-0.057h-38c-0.108,0-0.211,0.023-0.31,0.056  c-0.011,0.003-0.022,0.001-0.032,0.005c-0.015,0.005-0.024,0.017-0.038,0.023c-0.104,0.043-0.202,0.099-0.287,0.175  c-0.005,0.005-0.012,0.008-0.017,0.012c-0.062,0.058-0.117,0.125-0.163,0.198l-10,16c-0.01,0.016-0.014,0.035-0.023,0.052  c-0.009,0.017-0.023,0.03-0.031,0.047c-0.011,0.023-0.013,0.048-0.023,0.072c-0.018,0.046-0.033,0.092-0.044,0.14  c-0.009,0.041-0.016,0.082-0.02,0.124C0,19.945-0.001,19.993,0.001,20.041c0.002,0.042,0.006,0.082,0.013,0.123  c0.008,0.048,0.021,0.095,0.037,0.142c0.013,0.039,0.027,0.077,0.045,0.115c0.009,0.018,0.012,0.038,0.022,0.056  c0.016,0.029,0.04,0.051,0.058,0.078c0.014,0.021,0.022,0.044,0.039,0.064l28.989,35.986c0.002,0.003,0.004,0.005,0.006,0.007  l0.005,0.007c0.003,0.004,0.008,0.005,0.011,0.009c0.082,0.099,0.184,0.174,0.295,0.234c0.03,0.016,0.058,0.03,0.089,0.043  c0.121,0.051,0.249,0.087,0.383,0.087c0.114,0,0.229-0.02,0.343-0.061c0.017-0.006,0.028-0.02,0.045-0.027  c0.051-0.021,0.091-0.055,0.137-0.084c0.076-0.048,0.147-0.098,0.206-0.163c0.014-0.015,0.035-0.022,0.048-0.038l29-36  c0.016-0.02,0.024-0.044,0.039-0.064c0.019-0.027,0.042-0.049,0.058-0.078c0.01-0.018,0.013-0.038,0.022-0.056  c0.018-0.038,0.032-0.075,0.045-0.115C59.95,20.259,59.964,20.213,59.972,20.164z M32.095,4.993h15.459l-4.86,13.045L32.095,4.993z   M40.892,18.993H19.095L29.993,5.58L40.892,18.993z M17.222,18.125L12.423,4.993h15.469L17.222,18.125z M41.593,20.993  L29.818,52.599L18.269,20.993H41.593z M49.221,6.246l7.967,12.748H44.472L49.221,6.246z M10.756,6.259l4.653,12.734H2.798  L10.756,6.259z M16.14,20.993l10.839,29.664L3.083,20.993H16.14z M32.39,51.423l11.337-30.43h13.176L32.39,51.423z">
                </path>
              </svg>


            </span>
            <h5 class="u-align-center u-text u-text-1">Learn Materials</h5>
            <p class="u-text u-text-2"> <a href="">Click to select</a>
            </p>
          </div>
        </div>
        <div class="u-align-center u-container-style u-grey-5 u-list-item u-repeater-item u-list-item-2 list-box" data-aos="flip-up" data-aos-duration="1500">
          <div class="u-container-layout u-similar-container u-valign-middle u-container-layout-2"><span
              class="u-icon u-icon-circle u-text-black u-icon-2"><svg class="u-svg-link"
                preserveAspectRatio="xMidYMin slice" viewBox="0 0 54 54">
                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-1065"></use>
              </svg><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                xml:space="preserve" class="u-svg-content" viewBox="0 0 54 54" x="0px" y="0px" id="svg-1065"
                style="enable-background:new 0 0 54 54;">
                <g>
                  <path d="M27,8c-9.374,0-17,7.626-17,17c0,7.112,4.391,13.412,11,15.9V50c0,0.553,0.447,1,1,1h1v2c0,0.553,0.447,1,1,1h6
		c0.553,0,1-0.447,1-1v-2h1c0.553,0,1-0.447,1-1v-9.1c6.609-2.488,11-8.788,11-15.9C44,15.626,36.374,8,27,8z M30,49
		c-0.553,0-1,0.447-1,1v2h-4v-2c0-0.553-0.447-1-1-1h-1v-5h8v5H30z M31.688,39.242C31.277,39.377,31,39.761,31,40.192V42h-8v-1.808
		c0-0.432-0.277-0.815-0.688-0.95C16.145,37.214,12,31.49,12,25c0-8.271,6.729-15,15-15s15,6.729,15,15
		C42,31.49,37.855,37.214,31.688,39.242z"></path>
                  <path d="M27,6c0.553,0,1-0.447,1-1V1c0-0.553-0.447-1-1-1s-1,0.447-1,1v4C26,5.553,26.447,6,27,6z">
                  </path>
                  <path d="M51,24h-4c-0.553,0-1,0.447-1,1s0.447,1,1,1h4c0.553,0,1-0.447,1-1S51.553,24,51,24z"></path>
                  <path d="M7,24H3c-0.553,0-1,0.447-1,1s0.447,1,1,1h4c0.553,0,1-0.447,1-1S7.553,24,7,24z"></path>
                  <path d="M43.264,7.322l-2.828,2.828c-0.391,0.391-0.391,1.023,0,1.414c0.195,0.195,0.451,0.293,0.707,0.293
		s0.512-0.098,0.707-0.293l2.828-2.828c0.391-0.391,0.391-1.023,0-1.414S43.654,6.932,43.264,7.322z"></path>
                  <path d="M12.15,38.436l-2.828,2.828c-0.391,0.391-0.391,1.023,0,1.414c0.195,0.195,0.451,0.293,0.707,0.293
		s0.512-0.098,0.707-0.293l2.828-2.828c0.391-0.391,0.391-1.023,0-1.414S12.541,38.045,12.15,38.436z"></path>
                  <path d="M41.85,38.436c-0.391-0.391-1.023-0.391-1.414,0s-0.391,1.023,0,1.414l2.828,2.828c0.195,0.195,0.451,0.293,0.707,0.293
		s0.512-0.098,0.707-0.293c0.391-0.391,0.391-1.023,0-1.414L41.85,38.436z"></path>
                  <path d="M12.15,11.564c0.195,0.195,0.451,0.293,0.707,0.293s0.512-0.098,0.707-0.293c0.391-0.391,0.391-1.023,0-1.414l-2.828-2.828
		c-0.391-0.391-1.023-0.391-1.414,0s-0.391,1.023,0,1.414L12.15,11.564z"></path>
                  <path d="M27,13c-6.617,0-12,5.383-12,12c0,0.553,0.447,1,1,1s1-0.447,1-1c0-5.514,4.486-10,10-10c0.553,0,1-0.447,1-1
		S27.553,13,27,13z"></path>
                </g>
              </svg>


            </span>
            <h5 class="u-align-center u-text u-text-3">SKill Development</h5>
            <p class="u-text u-text-4"><a href="">Click to select</a>
            </p>
          </div>
        </div>
        <div
          class="u-align-center u-container-style u-grey-5 u-list-item u-repeater-item u-video-cover u-list-item-3 list-box" data-aos="flip-right" data-aos-duration="1500">
          <div class="u-container-layout u-similar-container u-valign-middle u-container-layout-3"><span
              class="u-icon u-icon-circle u-text-black u-icon-3"><svg class="u-svg-link"
                preserveAspectRatio="xMidYMin slice" viewBox="0 0 60 60">
                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-d70d"></use>
              </svg><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                xml:space="preserve" class="u-svg-content" viewBox="0 0 60 60" x="0px" y="0px" id="svg-d70d"
                style="enable-background:new 0 0 60 60;">
                <g>
                  <path d="M55.201,15.5h-8.524l-4-10H17.323l-4,10H12v-5H6v5H4.799C2.152,15.5,0,17.652,0,20.299v29.368
		C0,52.332,2.168,54.5,4.833,54.5h50.334c2.665,0,4.833-2.168,4.833-4.833V20.299C60,17.652,57.848,15.5,55.201,15.5z M8,12.5h2v3H8
		V12.5z M58,49.667c0,1.563-1.271,2.833-2.833,2.833H4.833C3.271,52.5,2,51.229,2,49.667V20.299C2,18.756,3.256,17.5,4.799,17.5H6h6
		h2.677l4-10h22.646l4,10h9.878c1.543,0,2.799,1.256,2.799,2.799V49.667z"></path>
                  <path d="M30,14.5c-9.925,0-18,8.075-18,18s8.075,18,18,18s18-8.075,18-18S39.925,14.5,30,14.5z M30,48.5c-8.822,0-16-7.178-16-16
		s7.178-16,16-16s16,7.178,16,16S38.822,48.5,30,48.5z"></path>
                  <path d="M30,20.5c-6.617,0-12,5.383-12,12s5.383,12,12,12s12-5.383,12-12S36.617,20.5,30,20.5z M30,42.5c-5.514,0-10-4.486-10-10
		s4.486-10,10-10s10,4.486,10,10S35.514,42.5,30,42.5z"></path>
                  <path d="M52,19.5c-2.206,0-4,1.794-4,4s1.794,4,4,4s4-1.794,4-4S54.206,19.5,52,19.5z M52,25.5c-1.103,0-2-0.897-2-2s0.897-2,2-2
		s2,0.897,2,2S53.103,25.5,52,25.5z"></path>
                </g>
              </svg>


            </span>
            <h5 class="u-align-center u-text u-text-5">Photography</h5>
            <p class="u-text u-text-6"> <a href="">Click to select</a>
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="u-clearfix u-valign-top-xs u-white u-section-3" id="sec-c797">
    <img class="u-expanded-width u-image u-image-1" src="assets/img/3b91742c7e026b49e43d4d9e3bc6edf4.jpeg">
    <div class="u-container-style u-group u-group-1">
      <div class="u-container-layout">
        <h2 class="u-custom-font u-font-oswald u-text u-text-body-alt-color u-text-1">Our Courses</h2>
        <p class="u-text u-text-body-alt-color u-text-2">Our course rotuine, materials, lecture all are here.....</p>
      </div>
    </div>
    <div class="u-clearfix u-gutter-20 u-layout-wrap u-layout-wrap-1">
      <div class="u-layout">
        <div class="u-layout-row">
          <div
            class="u-align-left-sm u-align-left-xs u-container-style u-layout-cell u-left-cell u-size-20 u-size-20-md u-layout-cell-1" data-aos="zoom-in" data-aos-duration="1500">
            <div class="u-container-layout">
              <img class="u-expanded-width u-image u-image-2" src="assets/img/3fc11f88a285d97ae68cff4fb70747c6.jpeg">
              <h6 class="u-custom-font u-font-oswald u-text u-text-3">Database</h6>
              <p class="u-text u-text-4">Database course </p>
            </div>
          </div>
          <div
            class="u-align-left-sm u-align-left-xs u-container-style u-layout-cell u-size-20 u-size-20-md u-layout-cell-2"  data-aos="zoom-in" data-aos-duration="1500">
            <div class="u-container-layout">
              <img class="u-expanded-width u-image u-image-3" src="assets/img/55a159ed5c60911252abd3ac4e5ce805.jpeg">
              <h6 class="u-custom-font u-font-oswald u-text u-text-5">Information system and Design</h6>
              <p class="u-text u-text-6">Information system and Design course</p>
            </div>
          </div>
          <div
            class="u-align-left-sm u-align-left-xs u-container-style u-layout-cell u-right-cell u-size-20 u-size-20-md u-layout-cell-3"  data-aos="zoom-in" data-aos-duration="1500">
            <div class="u-container-layout">
              <img class="u-expanded-width u-image u-image-4" src="assets/img/33496b61e8c69d633c310dadab3f03dd.jpeg">
              <h6 class="u-custom-font u-font-oswald u-text u-text-7"> Math</h6>
              <p class="u-text u-text-8">Math course </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="u-clearfix u-section-4" id="sec-80d0">
    <div class="u-clearfix u-sheet u-sheet-1">
      <div class="u-container-style u-group u-group-1">
        <div class="u-container-layout u-valign-middle">
          <h2 class="u-custom-font u-font-oswald u-text u-text-1">Our Project</h2>
          <p class="u-text u-text-2">All kind of student project are here.....</p>
        </div>
      </div>
      <div class="u-clearfix u-expanded-width u-gutter-20 u-layout-wrap u-layout-wrap-1">
        <div class="u-layout">
          <div class="u-layout-row">
            <div class="u-size-20 u-size-30-md">
              <div class="u-layout-col">
                <div class="u-container-style u-image u-layout-cell u-left-cell u-size-20 u-image-1" data-aos="fade-right" data-aos-duration="1500">
                  <div class="u-container-layout"></div>
                </div>
                <div class="u-container-style u-layout-cell u-left-cell u-size-40 u-layout-cell-2">
                  <div class="u-container-layout u-container-layout-3">
                    <h2 class="u-custom-font u-font-oswald u-text u-text-3">
                      <a name="top">Our university</a>
                    </h2>
                    <p class="u-text u-text-4">Our campuses offer high quality learning, teaching and research spaces to
                      better meet the needs of students, academics and researchers.<br>
                      <br>Is a major Australian university with a global outlook and a real-world
                      focus. We are one of the nation’s fastest growing research universities and our courses are in
                      high demand. Our graduates include eight Rhodes Scholars, five of these awarded in the past six
                      years.<br>
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="u-size-20 u-size-30-md">
              <div class="u-layout-col">
                <div class="u-container-style u-layout-cell u-size-40 u-layout-cell-3">
                  <div class="u-container-layout u-container-layout-4">
                    <blockquote class="u-border-black u-custom-font u-text u-text-font u-text-5">We are an ambitious and
                      collaborative institution that seeks to equip our students and graduates with the skills they'll
                      need in an increasingly disrupted and challenged world. We are transforming the student experience
                      we offer our 50,000 students and we place a premium on the international and national
                      accreditation of our various professional degrees.</blockquote>
                  </div>
                </div>
                <div class="u-container-style u-image u-layout-cell u-size-20 u-image-2" data-aos="fade-up" data-aos-duration="1500">
                  <div class="u-container-layout"></div>
                </div>
              </div>
            </div>
            <div class="u-size-20 u-size-60-md">
              <div class="u-layout-col">
                <div class="u-container-style u-image u-layout-cell u-right-cell u-size-20 u-image-3" data-aos="fade-left" data-aos-duration="1500">
                  <div class="u-container-layout"></div>
                </div>
                <div class="u-container-style u-layout-cell u-right-cell u-size-40 u-layout-cell-6">
                  <div class="u-container-layout">
                    <h2 class="u-custom-font u-font-oswald u-text u-text-6">
                      <a class="nicdark_color_greydark nicdark_first_font"
                        href="http://www.nicdarkthemes.com/themes/education/html/demo/university/single.php">Course
                        Registration</a>
                    </h2>
                    <p class="u-text u-text-7">Our internationally award-winning Science and Engineering Centre is home
                      to The Cube, acknowledged as one of the world’s largest digital interactive learning and display
                      spaces. We established the world's first
                      Creative Industries Faculty, and we invest heavily in collaborative learning and interdisciplinary
                      research environments.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="u-clearfix u-grey-5 u-section-5" id="sec-abc0">
    <div class="u-clearfix u-sheet u-sheet-1">
      <div class="u-align-center-sm u-container-style u-group u-group-1">
        <div class="u-container-layout u-container-layout-1">
          <h2 class="u-custom-font u-font-oswald u-text u-text-1">Teachers</h2>
        </div>
      </div>
      <div
        class="u-clearfix u-expanded-width-lg u-expanded-width-md u-expanded-width-xl u-expanded-width-xs u-gutter-20 u-layout-wrap u-layout-wrap-1">
        <div class="u-layout">
          <div class="u-layout-col">
            <div class="u-size-30">
              <div class="u-layout-row">
                <div class="u-container-style u-image u-layout-cell u-left-cell u-size-10 u-size-30-md u-image-1" data-aos="fade-down-right" data-aos-duration="1500">
                  <div class="u-container-layout"></div>
                </div>
                <div class="u-container-style u-layout-cell u-size-20 u-size-30-md u-layout-cell-2">
                  <div class="u-container-layout u-valign-middle u-container-layout-3">
                    <h2 class="u-custom-font u-font-oswald u-text u-text-3">Promi</h2>
                    <h6 class="u-text u-text-4"> TEACHER</h6>
                    <div class="socialicon">
                      <a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a>
                      <a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a>
                      <a href=""><i class="fa fa-instagram" aria-hidden="true"></i></a>
                      <a href=""><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                      <a href=""><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                    </div>
                  </div>
                </div>
                <div class="u-container-style u-image u-layout-cell u-size-10 u-size-30-md u-image-2" data-aos="fade-down-left" data-aos-duration="1500">
                  <div class="u-container-layout"></div>
                </div>
                <div class="u-container-style u-layout-cell u-right-cell u-size-20 u-size-30-md u-layout-cell-4">
                  <div class="u-container-layout u-valign-middle u-container-layout-5">
                    <h2 class="u-custom-font u-font-oswald u-text u-text-6">Rahman</h2>
                    <h6 class="u-text u-text-7"> Database TEACHER</h6>
                    <div class="socialicon">
                      <a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a>
                      <a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a>
                      <a href=""><i class="fa fa-instagram" aria-hidden="true"></i></a>
                      <a href=""><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                      <a href=""><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="u-size-30">
              <div class="u-layout-row">
                <div class="u-container-style u-image u-layout-cell u-left-cell u-size-10 u-size-30-md u-image-3" data-aos="fade-up-right" data-aos-duration="1500">
                  <div class="u-container-layout"></div>
                </div>
                <div class="u-container-style u-layout-cell u-size-20 u-size-30-md u-layout-cell-6">
                  <div class="u-container-layout u-valign-middle u-container-layout-7">
                    <h2 class="u-custom-font u-font-oswald u-text u-text-9">Raisa</h2>
                    <h6 class="u-text u-text-10">Math TEACHER</h6>
                    <div class="socialicon">
                      <a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a>
                      <a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a>
                      <a href=""><i class="fa fa-instagram" aria-hidden="true"></i></a>
                      <a href=""><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                      <a href=""><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                    </div>
                  </div>
                </div>
                <div class="u-container-style u-image u-layout-cell u-size-10 u-size-30-md u-image-4" data-aos="fade-up-left" data-aos-duration="1500">
                  <div class="u-container-layout"></div>
                </div>
                <div class="u-container-style u-layout-cell u-right-cell u-size-20 u-size-30-md u-layout-cell-8">
                  <div class="u-container-layout u-valign-middle u-container-layout-9">
                    <h2 class="u-custom-font u-font-oswald u-text u-text-12">Lisaa</h2>
                    <h6 class="u-text u-text-13">Economics TEACHER</h6>
                    <div class="socialicon">
                      <a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a>
                      <a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a>
                      <a href=""><i class="fa fa-instagram" aria-hidden="true"></i></a>
                      <a href=""><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                      <a href=""><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-9e68" style="background-color: black;">
    <div class="u-clearfix u-sheet u-sheet-1">
      <p class="u-small-text u-text u-text-variant u-text-1">&copy; Copyright <b>AUST CSE</b>. All Rights Reserved</p>
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