<head></head>
<?php
    $username = $this->session->userdata('username');
    if ($username) {
        echo "<h2>Selamat Datang $username</h2>";
    }
?>
<body>
    <div class="col-md-12">
        <h3>Daftar Mata Kuliah</h3>
        <table class="table" border="1">
            <thead>
                <tr>
                    <th>No</th><th>Nama</th><th>SKS</th><th>Kode</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $nomor=1;
                foreach($matakuliah as $matkul){
                ?>
                <tr>
                    <td><?=$nomor?></td>
                    <td><?=$matkul->nama?></td>
                    <td><?=$matkul->sks?></td>
                    <td><?=$matkul->kode?></td>
                </tr>
                <?php
                $nomor++;
                }
                ?>
            </tbody>
        </table>
    </div>
</body>