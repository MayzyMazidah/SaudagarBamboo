<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saudagar Bamboo</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.tudung.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
<link rel="stylesheet" href="style.css">
<script src="https://kit.fontawesome.com/5a53d05429.js" crossorigin="anonymous"></script>

</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php">Utama</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          </li>
          <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="jenisjualan.php">Jenis Jualan</a>
          </li>
         </ul>
       </div>
     </div>
  </nav>
  <!-- navbar close -->

  <!-- borang start -->

  <div class="container" border="3" style="background-color:#D8BFD8;">
   <form action="proses/create.php" method="POST" class="row g-4 form group">
   <div class="col-md-9">
    <label for="nama" class="form-label"><br>Nama<br></label>
    <input type="text" name="nama" class="form-control" id="nama">
  </div>
  <div class="col-md-9">
    <label for="alamat" class="form-label"><br>Alamat<br></label>
    <input type="text" name="alamat" class="form-control" id="alamat">
  </div>
  <div class="col-md-9">
    <label for="nombortelefon" class="form-label"><br>Nombor Telefon<br></label>
    <input type="text" name="nombortelefon" class="form-control" id="nombortelefon">
  </div>
  <div class="col-md-4">
    <label for="tempahan" class="form-label"><br>Jenis Tempahan<br></label>
    <select id="tempahan" name="jenistempahan" class="form-select">
    <option selected>Kerusi</option>
    <option selected>Meja dan Kerusi (Satu Set)</option>
    <option selected>Pancang Buluh</option>
    <option selected>Pondok</option>
    <option selected>Katil</option>
      <option>Lain-lain</option>
    </select>
  </div>
  <div class="col-md-12">
    <button type="submit" name ="hantar" class="btn btn-primary">Hantar</button>
  </div>
</form>
  </div>
</section>
 
</body>
</html>