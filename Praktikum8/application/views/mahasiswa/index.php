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
                    <a href="<?php echo base_url("index.php/mahasiswa/detail/$mhs->id")?>">Detail</a>
                </td>
            </tr>
            <?php
            $nomor++;
            }
            ?>
        </tbody>
    </table>
</div>