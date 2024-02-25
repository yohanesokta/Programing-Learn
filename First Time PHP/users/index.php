<?php 
require "../admin/connect_user.php";
$result = mysqli_query($db,"SELECT * FROM user");
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Puskom | Anggota</title>
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
              <li class="nav-item ">
                <a  href="../">
                <i class="fa-solid fa-chart-line"></i>Dasboard</a>
              </li>
              <li class="nav-item in-page">
                <a href="#">
                <i class="fa-solid fa-user-plus"></i>Anggota</a>
              </li>
              <li class="nav-item">
                <a href="../laporan/">
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

<!-- shel -->
<div class="window">
  <div class="window-left">
    <h1>Anggota</h1>
    <a href="#!" ><p class="win-active">Semua Anggota</p></a>
    <a href="#!"><p>Divisi Markom</p></a>
    <a href="#!"><p>Divisi S-Ar</p></a>
    <a href="#!"><p>Divisi C-Ar</p></a>
    <a href="../users/tambah/"><p>Tambah Anggota</p></a>
  </div>
  <div class="window-right">
    <div class="win-con">

      <!-- table anggota -->
      
      <table cellpadding="10" cellspacing="10" class="mx-auto">
        <tr>
          <th>No</th>
          <th>Kelas</th>
          <th>Nama</th>
          <th>Divisi</th>
        </tr>
<?php $i=1; while( $data = mysqli_fetch_assoc($result)) { ?>

        <tr>
          <td><?php echo $i ?></td>
          <td><?php echo $data["kelas"] ?></td>
          <td><?php echo $data["nama"] ?></td>
          <td><?php echo $data["divisi"] ?></td>
        </tr>
<?php $i++; } ?>

      </table>
    </div>
  </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>