<?php 

session_start();

	include("connection.php");
	include("function.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$username = $_POST['username'];
		$password = $_POST['password'];

		if(!empty($username) && !empty($password) && !is_numeric($username))
		{

			//read from database
			$query = "select * from users where username = '$username' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{

						$_SESSION['userid'] = $user_data['userid'];
						header("Location: contacts.php");
						die;
					}
				}
			}
			
			echo "wrong username or password!";
		}else
		{
			echo "wrong username or password!";
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
                    <a class="nav-link" href="./users.php">USERS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./fusers.php">CROSS-USERS</a>
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
                <h2>Application<br> Login Page</h2>
                <p>Login or register from here to access.</p>
            </div>
        </div>
        <div class="main">
            <div class="col-md-6 col-sm-12">
                <div class="login-form">
                <form method="post">
                    <div class="form-group">
                        <label>User Name</label>
                        <input type="text" name="username" class="form-control" placeholder="User Name">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" placeholder="Password">
                    </div>
                    <button type="submit" class="btn btn-dark">Login</button>
                    <a href = "./register.php" type="submit" class="btn btn-dark">Register</a>
                </form>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
