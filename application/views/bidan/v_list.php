<div class="col-lg-12">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <?= $title ?>
        </div>
        <!-- /.panel-heading -->
        <div class="panel-body">
            <?php if (
                $this->session->userdata('username') <> ""
            ) { ?>
                <a href="<?= base_url('bidan/input') ?>" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i>Input Data</a>
            <?php } ?>
            <div><br></div>
            <?php
            if ($this->session->flashdata('pesan')) {
                echo '<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                ';
                echo $this->session->flashdata('pesan');
                echo '<a href="#" class="alert-link"></a>. </div>';
            }
            ?>
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Tempat</th>
                            <th>No Telepon</th>
                            <th>Alamat</th>
                            <th>latitude</th>
                            <th>Longitude</th>
                            <?php if (
                                $this->session->userdata('username') <> ""
                            ) { ?>
                                <th>Aksi</th>
                            <?php } ?>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach ($bidan as $key => $value) { ?>
                            <tr>
                                <td><?= $no++; ?></td>
                                <td><?= $value->tempat ?></td>
                                <td><?= $value->no_telepon ?></td>
                                <td><?= $value->alamat ?></td>
                                <td><?= $value->latitude ?></td>
                                <td><?= $value->longitude ?></td>
                                <?php if (
                                    $this->session->userdata('username') <> ""
                                ) { ?>
                                    <td>
                                        <a href="<?= base_url('bidan/edit/' . $value->id_bidan) ?>" class="btn btn-success btn-sm">Edit</a>
                                        <a href="<?= base_url('bidan/delete/' . $value->id_bidan) ?>" class="btn btn-danger btn-sm" onclick=" return confirm('Apakah Ingin Hapus Data?')">Delete</a>
                                    </td>
                                <?php } ?>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>