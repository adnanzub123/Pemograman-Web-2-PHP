<div class="col-md-12">
    <h3>Detail Dosen</h3>
    <table class="table">
        <thead>
            <tr>
                <th>No</th><th>Nama</th><th>Gender</th>
                <th>Tempat Lahir</th><th>Tanggal Lahir</th>
                <th>nidn</th><th>pendidikan</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?=$dosen->id?></td>
                <td><?=$dosen->nama?></td>
                <td><?=$dosen->gender?></td>
                <td><?=$dosen->tmp_lahir?></td>
                <td><?=$dosen->tgl_lahir?></td>
                <td><?=$dosen->nidn?></td>
                <td><?=$dosen->pendidikan?></td>
            </tr>
        </tbody>
    </table>
    <div class="col-md5 mb3">
        <div class="card">
            <div class="card-body">
                <div class="align-items-center text-center">
                    <img src="<?=base_url()?>uploads/photos/<?=$dosen->id?>.jpg" width="300">
                    <div class="mt4">
                        <h4><?=$dosen->nama?></h4>
                        <p>Foto dosen</p>
                        <?=$error;?>
                        <?=form_open_multipart('dosen/upload');?>
                        <input type="file" name="foto" size="300">
                        <input type="hidden" name="iddosen" value="<?=$dosen->id?>">
                        <input type="submit" value="Upload Foto" class="btn btn-primary">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>