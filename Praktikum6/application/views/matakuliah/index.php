<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mata Kuliah</title>
</head>
<body>
    <div class="col-md-12">
        <h3>Daftar Mata Kuliah</h3>
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nama</th>
                    <th>sks</th>
                    <th>kode</th>
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
</body>
</html>