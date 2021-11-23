<?php
session_start();
    include("connection.php");
    include("function.php");
    if($_SERVER['REQUEST_METHOD'] == "POST")
	{
    $username=$_POST["user"];
    $password=$_POST["pass"];
    $fname=$_POST["fname"];
    $lname=$_POST["lname"];
    $email=$_POST["email"];
    $address=$_POST["address"];
    $city=$_POST["city"];
    $state=$_POST["state"];
    $code=$_POST["code"];
    $hnumber=$_POST["hnumber"];
    $mnumber=$_POST["mnumber"];
    if(!empty($username) && !empty($password) && !is_numeric($username))
    {
        //save to database
        $userid = random_num(20);
            
        $query = "insert into users (userid,username,password,fname,lname,email,address,city,state,code,hnumber,mnumber) values ('$userid','$username','$password','$fname','$lname','$email','$address','$city','$state','$code','$hnumber','$mnumber')";
        //echo $userid,$password,$username,$query . "<br><br>";
        mysqli_query($con, $query);

        header("Location: login.php");
        die;
    }else
    {
        echo "Please enter valid information!!!";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!----------header---------->
    <?php include('./header.php') ?>
</head>
<body>
    <!-----------NavigationBar----------->
    <section id="nav-bar">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
            <a class="navbar-brand" href="./index.php"><img src="img/logo.jpg"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="./index.php">HOME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./login.php">CONTACTS</a>
                </li>
                </ul>
            </div>
            </div>
        </nav>
    </section>
    <!----------login---------->
    <section id="login">
        <div class="sidenav">
            <div class="login-main-text">
                <h2>Application<br> Registration Page</h2>
                <p>Login or register from here to access.</p>
            </div>
        </div>
        <div class="main">
            <div class="col-md-6 col-sm-12">
                <div class="login-form">
                <form method="post">
                    <div class="form-group">
                        <label>User Name*</label>
                        <input type="text" class="form-control" name="user" placeholder="User Name">
                        <!-- <input id="text" type="text" name="user"> -->
                    </div>
                    <div class="form-group">
                        <label>Password*</label>
                        <input type="password" class="form-control" name="pass" placeholder="Password">
                        <!-- <input id="text" type="password" name="pass"> -->
                    </div>
                    <div class="form-group">
                        <label>First Name*</label>
                        <input type="text" class="form-control" name="fname" placeholder="First Name">
                    </div>
                    <div class="form-group">
                        <label>Last Name*</label>
                        <input type="text" class="form-control" name="lname" placeholder="Last Name">
                    </div>
                    <div class="form-group">
                        <label>Email address*</label>
                        <input type="text" class="form-control" name="email" placeholder="Email address">
                    </div>
                    <div class="form-group">
                        <label>Address*</label>
                        <input type="text" class="form-control" name="address" placeholder="Address">
                    </div>
                    <div class="form-group">
                        <label>City*</label>
                        <input type="text" class="form-control" name="city" placeholder="City">
                    </div>
                    <div class="form-group">
                        <label>State*</label>
                        <input type="text" class="form-control" name="state" placeholder="State">
                    </div>
                    <div class="form-group">
                        <label>Postal Code*</label>
                        <input type="text" class="form-control" name="code" placeholder="Postal Code">
                    </div>
                    <div class="form-group">
                        <label>Home Phone Number</label>
                        <input type="text" class="form-control" name="hnumber" placeholder="Home Phone Number">
                    </div>
                    <div class="form-group">
                        <label>Mobile Number</label>
                        <input type="text" class="form-control" name="mnumber" placeholder="Mobile Number">
                    </div>
                    <input id="button" type="submit" class="btn btn-dark" value="Register">
                </form>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
