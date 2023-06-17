<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-center">
                        <h1 style="margin-top: 50px;"><b>Detail Gaji</b></h1>
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
                                        <th style="text-align: center;"><b>Bulan</b></th>
                                        <th style="text-align: center;"><b>Tahun</b></th>
                                        <th style="text-align: center;"><b>Jumlah Gaji</b></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($data['gaji'] as $gaji):?>
                                    <tr>
                                        <td style="text-align: center;"><?= $no++; ?></td>
                                        <td style="text-align: center;"><?= $gaji['bulan']; ?></td>
                                        <td style="text-align: center;"><?= $gaji['tahun']; ?></td>
                                        <td style="text-align: center;"><?= $gaji['jumlah']; ?></td>
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