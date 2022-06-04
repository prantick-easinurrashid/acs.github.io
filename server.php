<?php

session_start();

$name = "";
$email = "";
$errors = array();
//connect to db

$db = mysqli_connect('localhost', 'root', '', 'cse_soceity') or die("Could not connect to database");

//register user

if(isset($_POST['register'])){
    $name = mysqli_real_escape_string($db, $_POST['username']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $phone = mysqli_real_escape_string($db, $_POST['phone']);
    $id = mysqli_real_escape_string($db, $_POST['id']);
    $dept = mysqli_real_escape_string($db, $_POST['dept']);
    $semester = mysqli_real_escape_string($db, $_POST['semester']);
    $club = mysqli_real_escape_string($db, $_POST['club']);
    $profession = mysqli_real_escape_string($db, $_POST['profession']);
    $pass = mysqli_real_escape_string($db, $_POST['pass']);
    $photo = "default-img.png";
    //check user for existing user with same email

    $user_check_query = "SELECT * FROM user WHERE email = '$email' LIMIT 1";

    $result = mysqli_query($db, $user_check_query);
    $user = mysqli_fetch_assoc($result);

    if($user['email'] === $email){
        array_push($errors, "User already exists with this email");
    }

    //register user if no error
    if(count($errors) == 0){
        $password = md5($pass);
        $query = "INSERT INTO user(username, email, pass, phone, roll, department, semester, club, profession, photo)
                    VALUES('$name', '$email', '$password', '$phone', '$id', '$dept', '$semester', '$club', '$profession', '$photo')";

        mysqli_query($db, $query);
        $_SESSION['email'] = $email;
        $_SESSION['username'] = $name;
        $_SESSION['id'] = $id;
        $_SESSION['dept'] = $dept;
        $_SESSION['sem'] = $semester;
        $_SESSION['prof'] = $profession;
        $_SESSION['club'] = $club;
        $_SESSION['phone'] = $phone;
        $_SESSION['photo'] = $photo;
        header('location: index.php');
    }
    
}

//log in

if(isset($_POST['login'])){
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $pass = mysqli_real_escape_string($db, $_POST['pass']);

    //log in user if no error
    if(count($errors) == 0){
        $password = md5($pass);
        $query = "SELECT * FROM user WHERE email = '$email' AND pass = '$password'";
        $result = mysqli_query($db, $query);
        $row = $result->fetch_assoc();
        if(mysqli_num_rows($result) == 1){
            $_SESSION['email'] = $email;
            $_SESSION['username'] = $row['username'];
            $_SESSION['id'] = $row['roll'];
            $_SESSION['dept'] = $row['department'];
            $_SESSION['sem'] = $row['semester'];
            $_SESSION['prof'] = $row['profession'];
            $_SESSION['club'] = $row['club'];
            $_SESSION['phone'] = $row['phone'];
            $_SESSION['photo'] = $row['photo'];
            header('location: index.php');
        }
        else{
            array_push($errors, "Email or Password is incorrect");
        }
    }
    
}

// update

if(isset($_POST['update'])){
    $email = $_SESSION['email'];
    $name = mysqli_real_escape_string($db, $_POST['username']);
    $phone = mysqli_real_escape_string($db, $_POST['phone']);
    $id = mysqli_real_escape_string($db, $_POST['id']);
    $dept = mysqli_real_escape_string($db, $_POST['dept']);
    $semester = mysqli_real_escape_string($db, $_POST['semester']);
    $club = mysqli_real_escape_string($db, $_POST['club']);
    $profession = mysqli_real_escape_string($db, $_POST['profession']);

    if(count($errors) == 0){
        $query = "UPDATE user
                  SET username = '$name', phone = $phone, roll = $id, department = '$dept', semester = '$semester', club = '$club', profession = '$profession'
                  WHERE email = '$email'";
        if(mysqli_query($db, $query)){
            $_SESSION['username'] = $name;
            $_SESSION['id'] = $id;
            $_SESSION['dept'] = $dept;
            $_SESSION['sem'] = $semester;
            $_SESSION['prof'] = $profession;
            $_SESSION['club'] = $club;
            $_SESSION['phone'] = $phone;
            header('location: profile.php');
        }
        else{
            array_push($errors, "Could not update database");
        }
        
    }   
}

//upload photo

if(isset($_POST["upload"])){
        if(is_array($_FILES)) {
        $file = $_FILES['image']['tmp_name']; 
        $sourceProperties = getimagesize($file);
        $fileNewName = time();
        $folderPath = "assets/img/profile/";
        $ext = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
        $imageType = $sourceProperties[2];


        switch ($imageType) {


            case IMAGETYPE_PNG:
                $imageResourceId = imagecreatefrompng($file); 
                $targetLayer = imageResize($imageResourceId,$sourceProperties[0],$sourceProperties[1]);
                imagepng($targetLayer,$folderPath. $fileNewName. ".". $ext);
                break;


            case IMAGETYPE_GIF:
                $imageResourceId = imagecreatefromgif($file); 
                $targetLayer = imageResize($imageResourceId,$sourceProperties[0],$sourceProperties[1]);
                imagegif($targetLayer,$folderPath. $fileNewName. ".". $ext);
                break;


            case IMAGETYPE_JPEG:
                $imageResourceId = imagecreatefromjpeg($file); 
                $targetLayer = imageResize($imageResourceId,$sourceProperties[0],$sourceProperties[1]);
                imagejpeg($targetLayer,$folderPath. $fileNewName. ".". $ext);
                break;


            default:
                echo "Invalid Image type.";
                exit;
                break;
        }
        
        $email = $_SESSION['email'];
        $query = "UPDATE user SET photo = '$fileNewName.$ext' WHERE email = '$email'";

        mysqli_query($db, $query);

        $_SESSION['photo'] = $fileNewName. ".". $ext;
        header('location: profile.php');
    }
    }
function imageResize($imageResourceId,$width,$height) {


    $targetWidth =800;
    $targetHeight =822;


    $targetLayer=imagecreatetruecolor($targetWidth,$targetHeight);
    imagecopyresampled($targetLayer,$imageResourceId,0,0,0,0,$targetWidth,$targetHeight, $width,$height);


    return $targetLayer;
}

//log out

if(isset($_GET['logout'])){
    session_destroy();
    unset($_SESSION['email']);
    unset($_SESSION['username']);
    header('location: home.php');
}