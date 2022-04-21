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
                    <a href="array_buah.php" class="nav-link ">
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
                    <a href="array_unshift.php" class="nav-link ">
                      <i class="nav-icon fas fa-code"></i>
                      <p>Array Unshift</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="variabel_konstan.php" class="nav-link">
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
                  <a href="variabel_user.php" class="nav-link">
                      <i class="nav-icon fas fa-code"></i>
                      <p>Variabel User</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item menu-open">
                <a href="#" class="nav-link active">
                  <i class="nav-icon fas fa-file"></i>
                  <p>Praktikum 2</p>
                  <i class="right fas fa-angle-left"></i>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="form_belanja.php" class="nav-link active">
                      <i class="nav-icon fas fa-code"></i>
                      <p>Form Belanja</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="form_nilai.php" class="nav-link">
                      <i class="nav-icon fas fa-code"></i>
                      <p>Form Nilai</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="form_siswa.php" class="nav-link">
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
              <li class="nav-item">
                <a href="#" class="nav-link">
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
                    <a href="data_nilaimahasiswa.php" class="nav-link">
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
            <h1 class="m-0">Form Belanja</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Praktikum 2</li>
              <li class="breadcrumb-item active">Form Belanja</li>
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
              <form id="quickForm" method="POST">
                <div class="card-body">
                  <div class="form-group row">
                      <label for="customer" class="col-4 col-form-label">Customer</label> 
                      <div class="col-8">
                        <input id="customer" name="customer" placeholder="Nama Customer" type="text" class="form-control">
                      </div>
                  </div>
                  <div class="form-group row">
                      <label class="col-4">Pilih Produk</label> 
                      <div class="col-8">
                          <div class="custom-control custom-radio custom-control">
                              <input name="produk" id="produk_0" type="radio" class="custom-control-input" value="TV"> 
                              <label for="produk_0" class="custom-control-label">TV</label>
                          </div>
                          <div class="custom-control custom-radio custom-control">
                              <input name="produk" id="produk_1" type="radio" class="custom-control-input" value="Kulkas"> 
                              <label for="produk_1" class="custom-control-label">Kulkas</label>
                          </div>
                          <div class="custom-control custom-radio custom-control">
                              <input name="produk" id="produk_2" type="radio" class="custom-control-input" value="Mesin Cuci"> 
                              <label for="produk_2" class="custom-control-label">Mesin Cuci</label>
                          </div>
                      </div>
                  </div>
                  <div class="form-group row">
                      <label for="jumlah" class="col-4 col-form-label">Jumlah</label> 
                      <div class="col-8">
                      <input id="jumlah" name="jumlah" placeholder="Jumlah" type="text" class="form-control">
                      </div>
                  </div> 
                  <div class="form-group row">
                      <div class="offset-4 col-8">
                      <button name="proses" value="proses" class="btn btn-success">Kirim</button>
                  </div>
                </div>
              </form>
              </div>
              <div class="col-4">
                  <div class="container-fluid bg-primary text-white p-2 border border-primary">
                      Daftar Harga
                  </div>
                  <div class="container-fluid p-2 border border-info">
                      TV : 4.200.000
                  </div>
                  <div class="container-fluid p-2 border border-info">
                      Kulkas: 3.100.000
                  </div>
                  <div class="container-fluid p-2 border border-info">
                      Mesin Cuci : 3.800.000
                  </div>
                  <div class="container-fluid bg-primary text-white p-2 border border-primary">
                      Harga dapat berubah setiap saat
                  </div>
              </div>
              <?php
              if (isset($_POST['proses'])) {
                $nama_customer = $_POST['customer'];
                $produk = $_POST['produk'];
                if($produk == "TV") {
                    $harga_produk = 4200000;
                } elseif ($produk == "Kulkas") {
                    $harga_produk = 3100000;
                } elseif ($produk == "Mesin Cuci") {
                    $harga_produk = 3800000;
                } else {
                    $harga_produk = 0;
                }
                $jumlah = $_POST['jumlah'];
                $total_biaya = $harga_produk*$jumlah;
                echo 'Nama Customer : '.$nama_customer;
                echo '<br>Produk Pilihan : '.$produk;
                echo '<br>Jumlah : '.$jumlah;
                echo '<br>Total Harga : Rp '.number_format($total_biaya);
              }
              ?>
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