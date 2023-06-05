<div class="container">
    <div class="inner">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-right">
                            <h1>
                                <b>
                                    DATA PEKERJA PT. TRPL
                                </b>
                            </h1>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <a href="<?= BASEURL; ?>/pekerja/tambah" type="button" class="btn btn-primary">Tambah Pekerja</a><br><br>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <table class="table table-striped table-bordered tabl-hover">
                            <thead>
                                <tr>
                                    <td>No</td>
                                    <td>ID Pekerja</td>
                                    <td>Nama Pekerja</td>
                                    <td>Seksi</td>
                                    <td>Detail</td>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($data['pekerja'] as $index) : ?>
                                    <tr>
                                        <td><?= $no++; ?></td>
                                        <td><?= $index['id_pegawai']; ?></td>
                                        <td><?= $index['nama_lengkap']; ?></td>
                                        <td><?= $index['seksi']; ?></td>
                                        <td>
                                            <a href="<?= BASEURL; ?>/pekerja/detail/<?= $index['id_pegawai']; ?>" type="button" class="btn btn-warning" value="<?= $index['id_pegawai']; ?>">Detail</a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>