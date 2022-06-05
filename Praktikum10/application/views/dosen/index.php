<head>
<script>
    function hapusDosen(pesan){
        if (confirm(pesan)) {
            return true;
        } else {
            return false;
        }
    }
</script>
</head>
<div class="col-md-12">
    <h3>Daftar Dosen</h3>
    <table class="table" border="1">
        <thead>
            <tr>
                <th>#</th><th>Nidm</th><th>Pendidikan</th><th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $nomor=1;
            foreach($dosen as $dsn){
            ?>
            <tr>
                <td><?=$nomor?></td>
                <td><?=$dsn->nidn?></td>
                <td><?=$dsn->pendidikan?></td>
                <td>
                    <a href="<?php echo base_url("index.php/dosen/detail/$dsn->id")?>"class="btn btn-info">Detail</a>
                    <a href="<?php echo base_url("index.php/dosen/edit/$dsn->id")?>" class="btn btn-success btn-m">Edit</a>
                    <a href="<?php echo base_url("index.php/dosen/delete/$dsn->id")?>" class="btn btn-danger btn-m" onclick="return hapusDosen('Anda yakin ingin dihapus data ini')">Delete</a>
                </td>
            </tr>
            <?php
            $nomor++;
            }
            ?>
        </tbody>
    </table>
    <a href="<?php echo base_url("index.php/dosen/form")?>" class="btn btn-primary btn-m">Tambah</a>
</div>