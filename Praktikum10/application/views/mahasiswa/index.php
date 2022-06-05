<head>
<script>
    function hapusMahasiswa(pesan){
        if (confirm(pesan)) {
            return true;
        } else {
            return false;
        }
    }
</script>
</head>
<?php
    $username = $this->session->userdata('username');
    if ($username) {
        echo "<h2>Selamat Datang $username</h2>";
    }
?>
<body>
<div class="col-md-12">
    <h3>Daftar Mahasiswa</h3>
    <table border='1' class="table">
        <thead>
            <tr>
                <th>No</th><th>NIM</th><th>Nama</th><th>Gender</th>
                <th>IPK</th><th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $nomor=1;
            foreach($mahasiswa as $mhs){
            ?>
            <tr>
                <td><?=$nomor?></td>
                <td><?=$mhs->nim?></td>
                <td><?=$mhs->nama?></td>
                <td><?=$mhs->gender?></td>
                <td><?=$mhs->ipk?></td>
                <td>
                    <a href="<?php echo base_url("index.php/mahasiswa/detail/$mhs->id")?>"class="btn btn-info">Detail</a>
                    <a href="<?php echo base_url("index.php/mahasiswa/edit/$mhs->id")?>" class="btn btn-success btn-m">Edit</a>
                    <a href="<?php echo base_url("index.php/mahasiswa/delete/$mhs->id")?>" class="btn btn-danger btn-m" onclick="return hapusMahasiswa('Anda yakin ingin dihapus data ini')">Delete</a>
                </td>
            </tr>
            <?php
            $nomor++;
            }
            ?>
        </tbody>
    </table>
    <a href="<?php echo base_url("index.php/mahasiswa/form")?>" class="btn btn-primary btn-m">Tambah</a>
</div>
</body>