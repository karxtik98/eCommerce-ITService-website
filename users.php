<?php 
session_start();

	include("connection.php");
	include("function.php");

	$user_data = get_users($con);

?>

<!DOCTYPE html>
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
                    <a class="nav-link" href="./index.php">HOME</a>
                </li>
                </ul>
            </div>
            </div>
        </nav>
    </section>
    <table class="table">
      <thead class="thead-dark">
        <tr>
          <th scope="col">#</th>
          <th scope="col">First</th>
          <th scope="col">Last</th>
          <th scope="col">Address</th>
          <th scope="col">Email</th>
          <th scope="col">Home Phone Number</th>
          <th scope="col">Mobile-Number</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $row=1;
        while($info = mysqli_fetch_assoc( $user_data ))
        {
          $row++;
            echo "<tr>";
            echo "<th scope=\"row\">" . ($row-1) . "</th>";
            echo "<th scope=\"row\">" . $info['fname'] . "</th>";
            echo "<th scope=\"row\">" . $info['lname'] . "</th>";
            echo "<th scope=\"row\">" . $info['address'] . "</th>";
            echo "<th scope=\"row\">" . $info['email'] . "</th>";
            echo "<th scope=\"row\">" . $info['mnumber'] . "</th>";
            echo "<th scope=\"row\">" . $info['hnumber'] . "</th>";
            echo "</tr>";
        }
        echo "  </tbody>";
        echo "</table>";
        ?>
    </tbody>
    </table>
    <!--------Footer---------->
    <?php include('./footer.php') ?>
  </body>
</html>