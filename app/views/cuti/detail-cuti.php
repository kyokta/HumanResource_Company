<section class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-12">
                    <div class="text">
                        <h1><b>Detail Cuti</b></h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-12">
                            <table>
                                <tr>
                                    <td>ID Pegawai</td>
                                    <td>:</td>
                                    <td><?= $data['id']; ?></td>
                                </tr>
                                <tr>
                                    <td>Nama Pegawai</td>
                                    <td>:</td>
                                    <td><?= $data['nama']; ?></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <br>
                    <br>
                    <div class="row">
                        <div class="col-md-12">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <td>No</td>
                                        <td>Tanggal Cuti</td>
                                        <td>Alasan</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($data['cuti'] as $cuti):?>
                                    <tr>
                                        <td><?= $no++; ?></td>
                                        <td><?= $cuti['tanggal_cuti']; ?></td>
                                        <td><?= $cuti['alasan']; ?></td>
                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <br>
                    <br>
                    <div class="row">
                        <div class="col-md-12">
                            <a href="<?= BASEURL; ?>/Cuti/index" class="btn btn-warning">Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>