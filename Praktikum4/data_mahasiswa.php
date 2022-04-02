<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<div class="container-fluid">
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#">WEB02</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Review PHP
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#"></a></li>
              <li><a class="dropdown-item" href="#"></a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#"></a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              PHP5OOP
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#"></a></li>
              <li><a class="dropdown-item" href="#"></a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#"></a></li>
            </ul>
          </li>
          <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Submit</button>
          </form>
        </ul>
        <ul class="navbar-nav d-flex">
            <li class="nav-item">
                <a class="nav-link" href="#">Login</a>
            </li>
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              dropdown
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#"></a></li>
              <li><a class="dropdown-item" href="#"></a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#"></a></li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  <main style="margin-top: 30px;">
    <?php
      require_once "class_mahasiswa.php";
      $mahasiswa1 = new Mahasiswa("02011", "Faiz Fikri","TI", 2012,  3.8);
      $mahasiswa2 = new Mahasiswa("02012", "Jamaludin","TI", 2012,  3.9);
      $mahasiswa3 = new Mahasiswa("01011", "Supriyadi", "SI", 2010,  3.46);
      $mahasiswa4 = new Mahasiswa("01012", "Juminten", "SI", 2010,  3.2);
      
      echo '<br>';
      echo '<h5> Mahasiswa 1</h5>';
      echo"<br/>NIM : ".$mahasiswa1->nim;
      echo"<br/>Nama : ".$mahasiswa1->nama;
      echo "<br/> Prodi : ".$mahasiswa1->prodi;
      echo "<br/> Tahun Angkatan : ".$mahasiswa1->thn_angkatan;
      echo "<br/> IPK : ".$mahasiswa1->ipk;
      echo "<br/> Predikat : ".$mahasiswa1->predikat_ipk();
      
      echo '<h5> Mahasiswa 2</h5>';
      echo"<br/>NIM : ".$mahasiswa2->nim;
      echo"<br/>Nama : ".$mahasiswa2->nama;
      echo "<br/> Prodi : ".$mahasiswa2->prodi;
      echo "<br/> Tahun Angkatan : ".$mahasiswa2->thn_angkatan;
      echo "<br/> IPK : ".$mahasiswa2->ipk;
      echo "<br/> Predikat : ".$mahasiswa2->predikat_ipk();

      echo '<br>';
      echo '<h5> Mahasiswa 3</h5>';
      echo"<br/>NIM : ".$mahasiswa3->nim;
      echo"<br/>Nama : ".$mahasiswa3->nama;
      echo "<br/> Prodi : ".$mahasiswa3->prodi;
      echo "<br/> Tahun Angkatan : ".$mahasiswa3->thn_angkatan;
      echo "<br/> IPK : ".$mahasiswa3->ipk;
      echo "<br/> Predikat : ".$mahasiswa3->predikat_ipk();
      
      echo '<br>';
      echo '<h5> Mahasiswa 4</h5>';
      echo"<br/>NIM : ".$mahasiswa4->nim;
      echo"<br/>Nama : ".$mahasiswa4->nama;
      echo "<br/> Prodi : ".$mahasiswa4->prodi;
      echo "<br/> Tahun Angkatan : ".$mahasiswa4->thn_angkatan;
      echo "<br/> IPK : ".$mahasiswa4->ipk;
      echo "<br/> Predikat : ".$mahasiswa4->predikat_ipk();
    ?>
  </main>
</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>