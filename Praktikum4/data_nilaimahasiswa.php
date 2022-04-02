<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nilai Mahasiswa</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">WEB02</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                        Review PHP
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                        PHP5 OOP
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">submit</button>
                </form>
            </div>
        </nav>
        <main class="mt-3">
            <h3>Form nilai Ujian</h3>
            <hr>
            <form class="mt-5 ml-lg-5" method="POST" action="data_nilaimahasiswa.php">
                <div class="form-group row">
                    <label for="nim" class="col-2 col-form-label">NIM</label> 
                    <div class="col-4">
                    <input id="nim" name="nim" placeholder="Masukan Nim" type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="matkul" class="col-2 col-form-label">Mata Kuliah</label> 
                    <div class="col-4">
                    <select id="matkul" name="matkul" class="custom-select">
                        <option value="ddp">Dasar-Dasar Pemograman</option>
                        <option value="basdat">Basis data 1</option>
                        <option value="web1">Pemograman Web 1</option>
                    </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nilai" class="col-2 col-form-label">Nilai</label> 
                    <div class="col-4">
                    <input id="nilai" name="nilai" placeholder="Masukan Nilai" type="text" class="form-control">
                    </div>
                </div> 
                <div class="form-group row">
                    <div class="offset-2 col-4">
                    <button name="submit" type="submit" class="btn btn-success">Simpan</button>
                    </div>
                </div>
            </form>
        </main>
        <?php
            require_once 'class_nilaimahasiswa.php';
            if($_POST){
                $ns = new NilaiMahasiswa($_POST['nim'], $_POST['matkul'], $_POST['nilai']);
                $keterangan = $ns->hitungnilai();
                $hasil = $ns->hasil($keterangan);
                $hasil2 = $ns->grade($keterangan);
                echo 'NIM : '.$ns->nim;
                echo '<br/> Mata Kuliah : '.$ns->matkul;
                echo '<br/> Nilai : '.$ns->nilai;
                echo '<br/> Status : '.$ns->hasil($keterangan);
                echo '<br/> Grade : '.$ns->grade($keterangan);
            }
        ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
</body>
</html>