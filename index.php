<?php 
require 'admin/connect_user.php';
$result = mysqli_query($db,"SELECT * FROM user");
$result_mes = mysqli_query($db,"SELECT * FROM comment")

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Puskom | Dasboard</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top shadow-sm">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">PUSKOM</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item in-page">
                <a class="active" href="#">
                <i class="fa-solid fa-chart-line"></i>Dasboard</a>
              </li>
              <li class="nav-item">
                <a href="users/">
                <i class="fa-solid fa-user-plus"></i>Anggota</a>
              </li>
              <li class="nav-item">
                <a href="laporan/">
                <i class="fa-solid fa-circle-exclamation"></i>Laporan-Laporan</a>
              </li>
            </ul>
            <div class="usr">
                <div class="user-name">
                <a href="#!">
                    <i class="fa-solid fa-user"></i>Username</a>
                </div>

            </div>
          </div>
        </div>
      </nav>


<!-- End Navbar -->

<div class="well-page">
    <div class="con">
        <ul>
            <li>
                <h1>Selamat datang!</h1>
            </li>
            <li>
                <p>
                    Hey Selamat Datang Di Websites Puskom. Websites ini masih dalam pengembangan jadi dukung terus agar website ini berkembang
                </p>
            </li>
        </ul>
    </div>

<?php $i=0; while(mysqli_fetch_assoc($result)) {
    $i++;
} ?>
    <div class="con-list">
            <div class="item">
                <div class="item-con">
                    <i class="fa-solid fa-users"></i>
                    <h2><?php echo $i; ?></h2>
                </div>
                <h3>Anggota</h3>
            </div>
            <div class="item">
                <div class="item-con">
                    <i class="fa-sharp fa-solid fa-layer-group"></i>
                    <h2>04</h2>
                </div>
                <h3>Devition</h3>
            </div>
            <div class="item">
                <div class="item-con">
                    <i class="fa-solid fa-toggle-off"></i>
                    <h2>active</h2>
                </div>
                <h3>Status</h3>
            </div>
            <div class="item">
                <div class="item-con">
                    <?php $u=0; while (mysqli_fetch_assoc($result_mes)) {
 $u++;   
} ?>
                    <i class="fa-sharp fa-solid fa-envelopes-bulk"></i>
                    <h2><?php echo $u; ?></h2>
                </div>
                <h3>Message</h3>
            </div>
        </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>