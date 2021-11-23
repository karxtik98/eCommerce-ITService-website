<?php 

session_start();

	include("connection.php");
	include("function.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
        $email = $_POST['email'];
		$hnum = $_POST['hnum'];
        $mnum = $_POST['mnum'];
        if(!empty($fname)){
            $searchvar="fname";
            $varsearch=$fname;
        }
        if(!empty($lname)){
            $searchvar="lname";
            $varsearch=$lname;
        }
        if(!empty($email)){
            $searchvar="email";
            $varsearch=$email;
        }
        if(!empty($hnum)){
            $searchvar="hnum";
            $varsearch=$hnum;
        }
        if(!empty($mnum)){
            $searchvar="mnum";
            $varsearch=$mnum;
        }
        $query = "select * from users where ' $searchvar ' like ' $varsearch";
        $result = mysqli_query($con, $query);
        if($result)
        {
            if($result && mysqli_num_rows($result) > 0)
            {

                $user_data = mysqli_fetch_assoc($result);
                $num_rows = mysql_num_rows($result);
                header("Location: users.php");
            }
        }
	}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!----------header---------->
    <?php include('./header.php') ?>
    <title>LOGIN</title>
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
                    <a class="nav-link" href="./search.php">SEARCH</a>
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
                <h2>Users<br>Search Page</h2>
                <p>Search Users from here to access.</p>
            </div>
        </div>
        <div class="main">
            <div class="col-md-6 col-sm-12">
                <div class="login-form">
                <form method="post">
                    <div class="form-group">
                        <label>First Name</label>
                        <input type="text" name="fname" class="form-control" placeholder="First Name">
                    </div>
                    <div class="form-group">
                        <label>Last Name</label>
                        <input type="text" name="lname" class="form-control" placeholder="Last Name">
                    </div>
                    <div class="form-group">
                        <label>Email Address</label>
                        <input type="text" name="email" class="form-control" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <label>Home Phone Number</label>
                        <input type="password" name="hnum" class="form-control" placeholder="Home Phone Number">
                    </div>
                    <div class="form-group">
                        <label>Mobile Number</label>
                        <input type="password" name="mnum" class="form-control" placeholder="Mobile Number">
                    </div>
                    <button type="submit" class="btn btn-dark">Search</button>
                </form>
                </div>
            </div>
        </div>
    </section>
</body>
</html>