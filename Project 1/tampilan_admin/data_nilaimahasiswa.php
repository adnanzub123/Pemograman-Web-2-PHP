<?php
include_once 'bagian_web/atas.php';
?>

<!-- Sidebar Menu -->
<nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="index.html" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p> Dashboard</p>
            </a>
          </li>
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-book-open"></i>
              <p>
                 Tugas Praktikum
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-file"></i>
                  <p>Praktikum 1</p>
                  <i class="right fas fa-angle-left"></i>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="array_buah.php" class="nav-link">
                      <i class="nav-icon fas fa-code"></i>
                      <p>Array Buah</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="array_fungsi.php" class="nav-link">
                      <i class="nav-icon fas fa-code"></i>
                      <p>Array Fungsi</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="array_pop.php" class="nav-link">
                      <i class="nav-icon fas fa-code"></i>
                      <p>Array Pop</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="array_push.php" class="nav-link">
                      <i class="nav-icon fas fa-code"></i>
                      <p>Array Push</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="array_shift.php" class="nav-link">
                      <i class="nav-icon fas fa-code"></i>
                      <p>Array Shift</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="array_siswa.php" class="nav-link">
                      <i class="nav-icon fas fa-code"></i>
                      <p>Array Siswa</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="array_unshift.php" class="nav-link">
                      <i class="nav-icon fas fa-code"></i>
                      <p>Array Unshift</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="variabel_konstan.php" class="nav-link ">
                      <i class="nav-icon fas fa-code"></i>
                      <p>Variabel Konstan</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="variabel_system.php" class="nav-link">
                      <i class="nav-icon fas fa-code"></i>
                      <p>Variabel System</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="variabel_user" class="nav-link">
                      <i class="nav-icon fas fa-code"></i>
                      <p>Variabel User</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-file"></i>
                  <p>Praktikum 2</p>
                  <i class="right fas fa-angle-left"></i>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="form_belanja.php" class="nav-link">
                      <i class="nav-icon fas fa-code"></i>
                      <p>Form Belanja</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="nav-icon fas fa-code"></i>
                      <p>Form Nilai</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="nav-icon fas fa-code"></i>
                      <p>Form Siswa</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-file"></i>
                  <p>Praktikum 3</p>
                  <i class="right fas fa-angle-left"></i>
                </a>
                <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="atas.php" class="nav-link">
                      <i class="nav-icon fas fa-code"></i>
                      <p>Atas</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="tampilan.php" class="nav-link">
                      <i class="nav-icon fas fa-code"></i>
                      <p>tampilan</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="bawah.php" class="nav-link">
                      <i class="nav-icon fas fa-code"></i>
                      <p>bawah</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item menu-open">
                <a href="#" class="nav-link active">
                  <i class="nav-icon fas fa-file"></i>
                  <p>Praktikum 4</p>
                  <i class="right fas fa-angle-left"></i>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="data_lingkaran.php" class="nav-link">
                      <i class="nav-icon fas fa-code"></i>
                      <p>Data Lingkaran</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="data_mahasiswa.php" class="nav-link">
                      <i class="nav-icon fas fa-code"></i>
                      <p>Data Mahasiswa</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="data_nilaimahasiswa.php" class="nav-link active">
                      <i class="nav-icon fas fa-code"></i>
                      <p>Data Nilai Mahasiswa</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-file"></i>
                  <p>Praktikum 5</p>
                  <i class="right fas fa-angle-left"></i>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="account_bank.php" class="nav-link">
                      <i class="nav-icon fas fa-code"></i>
                      <p>Account Bank</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="dispenser.php" class="nav-link">
                      <i class="nav-icon fas fa-code"></i>
                      <p>Dispenser</p>
                    </a>
                  </li>
                </ul>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside> 
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Data Nilai Mahasiswa</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Praktikum 4</li>
              <li class="breadcrumb-item active">Data Nilai Mahasiswa</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="card">
        <div class="card-body row">
          <div class="d-flex row">
            <form id="quickForm" method="POST" action="data_nilaimahasiswa.php">
              <div class="card-body">
                  <div class="form-group row">
                      <label for="nim" class="col-4 col-form-label">NIM</label> 
                      <div class="col-5">
                      <input id="nim" name="nim" placeholder="Masukan Nim" type="text" class="form-control">
                      </div>
                  </div>
                  <div class="form-group row">
                      <label for="matkul" class="col-4 col-form-label">Mata Kuliah</label> 
                      <div class="col-8">
                      <select id="matkul" name="matkul" class="custom-select">
                          <option value="ddp">Dasar-Dasar Pemograman</option>
                          <option value="basdat">Basis data 1</option>
                          <option value="web1">Pemograman Web 1</option>
                      </select>
                      </div>
                  </div>
                  <div class="form-group row">
                      <label for="nilai" class="col-4 col-form-label">Nilai</label> 
                      <div class="col-8">
                      <input id="nilai" name="nilai" placeholder="Masukan Nilai" type="text" class="form-control">
                      </div>
                  </div> 
                  <div class="form-group row">
                      <div class="offset-4 col-4">
                      <button name="submit" type="submit" class="btn btn-success">Simpan</button>
                  </div>
                </div>
                <?php 
                  class NilaiMahasiswa {
                    public $nim;
                    public $matkul;
                    public $nilai;
                    
                    
                    function __construct ($nim, $matkul, $nilai){
                      $this->nim = $nim;  
                      $this->matkul = $matkul;
                      $this->nilai = $nilai;
                    }

                    function hitungnilai(){
                        return $this->nilai;
                    }

                    function grade () {
                      if ($this->nilai > 85 && $this->nilai <= 100)
                          return "A";
                      elseif ($this->nilai > 84 && $this->nilai <= 70)
                          return "B";
                      elseif ($this->nilai > 56 && $this->nilai <= 69)
                          return "C";
                      elseif ($this->nilai > 36 && $this->nilai <= 55)
                          return "D";
                      elseif ($this->nilai > 0 && $this->nilai <= 35)
                          return "E";
                      }
                    function hasil (){
                      if ($this->nilai < 56)
                          return "TIDAK LULUS";
                          
                      elseif ($this->nilai >= 56) 
                          return "LULUS";
                    }
                  }
                  if(isset($_POST['submit'])){
                    $ns = new NilaiMahasiswa($_POST['nim'], $_POST['matkul'], $_POST['nilai']);
                    $keterangan = $ns->hitungnilai();
                    $hasil = $ns->hasil($keterangan);
                    $hasil2 = $ns->grade($keterangan);
                    echo 'NIM : '.$ns->nim;
                    echo '<br/> Mata Kuliah : '.$ns->matkul;
                    echo '<br/> Nilai : '.$ns->nilai;
                    echo '<br/> Status : '.$ns->hasil($keterangan);
                    echo '<br/> Grade : '.$ns->grade();
                  };
                ?>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
        <div class="p-3">
        <h5>Title</h5>
        <p>Sidebar content</p>
        </div>
    </aside>

<?php
require_once 'bagian_web/bawah.php';
?>