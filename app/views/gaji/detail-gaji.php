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
                                    foreach ($data['gaji'] as $gaji) : ?>
                                        <tr>
                                            <td style="text-align: center;"><?= $no++; ?></td>
                                            <td style="text-align: center;">
                                                <?php if ($gaji['bulan'] == 1) {
                                                    echo "Januari";
                                                } else if ($gaji['bulan'] == 2) {
                                                    echo "Februari";
                                                } else if ($gaji['bulan'] == 3) {
                                                    echo "Maret";
                                                } else if ($gaji['bulan'] == 4) {
                                                    echo "April";
                                                } else if ($gaji['bulan'] == 5) {
                                                    echo "Mei";
                                                } else if ($gaji['bulan'] == 6) {
                                                    echo "Juni";
                                                } else if ($gaji['bulan'] == 7) {
                                                    echo "Juli";
                                                } else if ($gaji['bulan'] == 8) {
                                                    echo "Agustus";
                                                } else if ($gaji['bulan'] == 9) {
                                                    echo "September";
                                                } else if ($gaji['bulan'] == 10) {
                                                    echo "Oktober";
                                                } else if ($gaji['bulan'] == 11) {
                                                    echo "November";
                                                } else {
                                                    echo "Desember";
                                                }
                                                ?>
                                            </td>
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