<?php
ob_start();
session_start();
require_once('includes/connect.inc');

$image='Digital tools-pana (1).png';
    include('config.php');

    if (isset($_POST['submit'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $find_user_query = "select password from register where email='$email'";
        $result_query = mysqli_query($conn,$find_user_query) or die ("Cannot connect to table");
        if(mysqli_num_rows($result_query) == 1) {
            $dbpassword = mysqli_fetch_row($result_query);
            print_r($dbpassword);
          
            
        }
    
//         }    else{
// $message = "";

    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link href='https://fonts.googleapis.com/css?family=Fredoka One' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <style>
        * {

            background: #EBC6A9;
            font-family: 'Fredoka One';
            font-size: 22px;
        }

        input[type=email] {
            /* position: absolute; */
            width: 315px;
            height: 45px;
            margin-left: 14px;
            margin-top: 10px;
            background: #D0F3A5;
            border: 1px solid #6C8054;
            border-radius: 20px;
        }

        input[type=password] {
            /* position: absolute; */
            width: 315px;
            height: 45px;
            margin-left: 14px;
            margin-top: 20px;
            background: #D0F3A5;
            border: 1px solid #6C8054;
            border-radius: 20px;

        }

        button {
            /* position: absolute; */
            width: 147px;
            height: 48.78px;
            margin-left: 100px;
            margin-top: 40px;
            background: #6C8054;
            color: white;
            border-radius: 20px;
        }

        button:hover {
            color:#EBC6A9;;
           
        }

        img {
            width: 480px;
            height: 430px;
            left: 140px;
            top: 150px;

        }

        .container {
            padding: 100px;
            margin-left: 23px;
            display: flex;
            flex: wrap;
            float: left;

        }

        h1 {
            padding-left: 16%;
            margin-top: 75px;
            font-size: 50px;
            position:absolute;
            color: #6C8054;
            font-family: 'Fredoka One';
        }
        h2{
            padding-left: 3px;
            margin-top: 30px;
            font-size: 25px;
        }
        h3 {
            padding-left: 25%;
            margin-top: 145px;
            font-size: 20px;
            color: #6F4E37;
            font-family: 'Quicksand';
            position:absolute;
        }
        h4 {
            padding-left: 5%;
            margin-top: 360px;
            font-size: 17px;
            color: #6F4E37;
            font-family: 'Quicksand';
            position:absolute;
        }
        h5{
            color: #6C8054;
            margin-top: 405px;
            padding-left: 25%;
            position: absolute;
            font-size: 18px;
        }
        .login {
            box-sizing: border-box;
            position: absolute;
            width: 400px;
            height: 470px;
            left: 690px;
            top: 85px;
            background: #DC9C74;
            border: 1px solid #6C8054;
            border-radius: 25px;

        }

        .login h2 {
            letter-spacing: 0.1em;
            color: #6C8054;
            background: #DC9C74;


        }

        span.psw {
            font-size: medium;
            position: absolute;
            height: 54px;
            left: 58px;
            top: 335px;
           background: #DC9C74; 

        }
        a {
            background: #DC9C74;
             font-size: large;
        }

        .reg {
            font-size: medium;
            position: absolute;
            height: 54px;
            left:130px;
            top: 355px;
            background: #DC9C74;
        }

        .social {
            position: absolute;
            height: 60px;
            left: 160px;
            top: 390px;
            background: #DC9C74;

        }
        p{
            color: #6C8054;
            margin-top: 600px;
            position: absolute;
            font-size: 18px;
            margin-left: 450px ;
        }
    
    </style>
</head>

<body>

    
        <form action="login.php" method="post" name= "login"></form>
    <h1>TASKISM</h1>
    <h3>makes your day more productive</h3>
    <form class="container">
        <img src="<?php echo $image;?>">
        <h4>"Goals are good for setting a direction, but systems <br>
            are best for making progress."</h4>
        <h5>-James Clear</h5>
        </form>     

        <form class="container1">
            <div style="padding-left:20px;" class="login">
                <center>
                    <h2> Log in here</h2>
                </center>
                <input type="email" placeholder="Enter Username" name="email" id="email" required>
                <input type="password" placeholder="Enter Password" name="password" id="password" required>
                <button type="submit">Login</button>
                <span class="psw">Don't have an account? <a href="register.php">register here</a></span>
                <span class="reg">or register with</span>
                <div class="social">
                    <i class="bi bi-facebook"><a href="https://www.facebook.com/"></a></i>
                    <i class="bi bi-instagram"></i>
                    <i class="bi bi-google"></i>
                </div>
            </div>
        </form>
    
   <p>privacy policy | terms & condition ©  2022 | taskism</p>

</html>