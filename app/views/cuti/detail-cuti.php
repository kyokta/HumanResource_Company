<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-center">
                        <h1 style="margin-top: 50px;"><b>Detail Cuti</b></h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-12">
                            <table>
                                <tr>
                                    <td><b>ID Pegawai</b></td>
                                    <td><b>:</b></td>
                                    <td><b><?= $data['id']; ?></b></td>
                                </tr>
                                <tr>
                                    <td><b>Nama Pegawai</b></td>
                                    <td><b>:</b></td>
                                    <td><b><?= $data['nama']; ?></b></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <br>
                    <br>
                    <div class="row">
                        <div class="col-md-12">
                            <table class="table">
                                <thead class="table-dark">
                                    <tr>
                                        <th style="text-align: center;"><b>No</b></th>
                                        <th style="text-align: center;"><b>Tanggal Cuti</b></th>
                                        <th style="text-align: center;"><b>Alasan</b></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($data['cuti'] as $cuti):?>
                                    <tr>
                                        <td style="text-align: center;"><?= $no++; ?></td>
                                        <td style="text-align: center;"><?= $cuti['tanggal_cuti']; ?></td>
                                        <td style="text-align: center;"><?= $cuti['alasan']; ?></td>
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