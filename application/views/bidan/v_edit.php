<div class="col-lg-7">
    <div class="panel panel-primary">
        <div class="panel-heading">
            Lokasi Praktik Bidan
        </div>
        <div class="panel-body">
            <?= $map['html'] ?>
        </div>
    </div>
</div>

<div class="col-lg-5">
    <div class="panel panel-primary">
        <div class="panel-heading">
            Edit Data Bidan
        </div>
        <div class="panel-body">
            <!-- form input data -->
            <?php echo form_open('bidan/edit/' . $bidan->id_bidan); ?>
            <div class="form-group">
                <label>Nama Tempat Praktik Bidan</label>
                <input class="form-control" value="<?= $bidan->tempat ?>" name="tempat" placeholder="Nama Tempat Praktik Bidan" required>
            </div>

            <div class="form-group">
                <label>Nomor Telepon</label>
                <input class="form-control" value="<?= $bidan->no_telepon ?>" name="no_telepon" placeholder="Nomor Telepon" required>
            </div>

            <div class="form-group">
                <label>Alamat</label>
                <input class="form-control" value="<?= $bidan->alamat ?>" name="alamat" placeholder="Alamat" required>
            </div>

            <div class="form-group">
                <label>Latitude</label>
                <input class="form-control" value="<?= $bidan->latitude ?>" name="latitude" placeholder="Latitude" required readonly>
            </div>

            <div class="form-group">
                <label>Longitude</label>
                <input class="form-control" value="<?= $bidan->longitude ?>" name="longitude" placeholder="Longitude" required readonly>
            </div>

            <div class="form-group">
                <label>Deskripsi</label>
                <textarea class="form-control" rows="4" name="deskripsi" required><?= $bidan->deskripsi ?></textarea>
            </div>

            <div class="form-group">
                <button class="btn btn-success btn-sm" type="submit">Simpan</button>
                <button class="btn btn-danger btn-sm" type="reset">Reset</button>
            </div>

            <?php echo form_close() ?>
            <!-- end form input data -->
        </div>
    </div>
</div>