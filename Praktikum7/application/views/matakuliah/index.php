<div class="col-md-12">
    <h3>Daftar Mata Kuliah</h3>
    <table class="table">
        <thead>
            <tr>
                <th>#</th><th>Nama</th><th>SKS</th><th>Kode</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $nomor=1;
            foreach($list_matkul as $matkul){
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