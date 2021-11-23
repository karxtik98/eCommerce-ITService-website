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
    <section id="table">
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

      $ch = curl_init(); 
      curl_setopt($ch, CURLOPT_URL, 'https://sudheendra.me/users.php'); 
      curl_setopt($ch, CURLOPT_HEADER, 0); 
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 

      echo $data = curl_exec($ch);

      curl_close($ch);

    ?>
        </tbody>
    </table>
</section>
  <!--------Footer---------->
    <?php include('./footer.php') ?>
  </body>
</html>