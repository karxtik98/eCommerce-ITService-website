<?php 
session_start();

	include("connection.php");
	include("function.php");

	$user_data = check_login($con);

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
                    <a class="nav-link" href="./logout.php">LOGOUT</a>
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
          <th scope="col">Email</th>
          <th scope="col">Phone-Number</th>
        </tr>
      </thead>
      <tbody>
    <?php
    $row = 1;
    if (($contacts = fopen("./contacts.csv", "r")) !== FALSE) {
        while (($data = fgetcsv($contacts, 1000, ",")) !== FALSE) {
            $num = count($data);
            $row++;
            echo "<tr>";
            echo "<th scope=\"row\">" . ($row-1) . "</th>";
            for ($c=0; $c < $num; $c++) {
                echo "<td>" . $data[$c] . "</td>";
            }
            echo "</tr>";
        }
        echo "  </tbody>";
        echo "</table>";
        fclose($contacts);
    }
    ?>
    <!--------Footer---------->
    <?php include('./footer.php') ?>
  </body>
</html>