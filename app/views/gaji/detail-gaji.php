<section class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-12">
                    <div class="text">
                        <h1><b>Detail Gaji</b></h1>
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
                                        <td>Bulan</td>
                                        <td>Tahun</td>
                                        <td>Jumlah Gaji</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($data['gaji'] as $gaji):?>
                                    <tr>
                                        <td><?= $no++; ?></td>
                                        <td><?= $gaji['bulan']; ?></td>
                                        <td><?= $gaji['tahun']; ?></td>
                                        <td><?= $gaji['jumlah']; ?></td>
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
                            <a href="<?= BASEURL; ?>/Gaji/index" class="btn btn-warning">Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>