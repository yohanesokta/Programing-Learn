<?php 
require '../admin/connect_user.php';
$result = mysqli_query($db,"SELECT * FROM comment ORDER BY no Desc");

if (isset($_POST["submit"])){
  require '../admin/send.php';
  send($_POST);
  $result = mysqli_query($db,"SELECT * FROM comment ORDER BY no Desc");
}  
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Puskom | Laporan</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body onload="clearForms()" onunload="clearForms()">
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
              <li class="nav-item ">
                <a href="../users/">
                <i class="fa-solid fa-user-plus"></i>Anggota</a>
              </li>
              <li class="nav-item in-page">
                <a href="#"><i class="fa-solid fa-circle-exclamation"></i>Laporan-Laporan</a>
              </li>
            </ul>
            <div class="usr">
                <div class="user-name">
                   
                <a href="#!"> <i class="fa-solid fa-user"></i>Username</a>
                </div>

            </div>
          </div>
        </div>
      </nav>


<div class="origin">
      <?php while($data = mysqli_fetch_assoc($result)) { ?>

        <div class="origin-mes">
          <div class="mes">
            <p class="mes-username">
              <?php echo $data["username"];?>
            </p>
            <br>
           
          </div>
          <div class="d-flex">
            <p class="mes-message <?php if ($data["short"] == 1){echo "mes-short";} ?>">
              <?php echo $data["comment"]; ?>
            </p>
          </div>
           
          </div>
<?php } ?>
</div>
<!-- End Navbar -->
<div class="send fixed-bottom">
  <form action="" method="post">
    <input type="text" id="laporan" name="laporan" placeholder="kirim laporan Singkat" require value>
    <button type="submit" name="submit" onclick="refresh()"><i class="fa-sharp fa-solid fa-share" require></i></button> 
  </form>
</div>

<script>
  function refresh(){
    location.reload();
  }
      function clearForms()
    {
      var i;
      for (i = 0; (i < document.forms.length); i++) {
        document.forms[i].reset();
      }
    }
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>