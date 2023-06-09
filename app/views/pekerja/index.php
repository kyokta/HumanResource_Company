<section class="content">
    <div class="row">
        <div class="col-lg-12">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center">
                        <h1 style="margin-top: 50px;"><b>DATA PEKERJA PT. TRPL</b></h1>
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
                    <table class="table">
                        <thead class="table-dark">
                            <tr>
                                <td style="text-align: center;"><b>No</b></td>
                                <td style="text-align: center;"><b>ID Pekerja</b></td>
                                <td style="text-align: center;"><b>Nama Pekerja</b></td>
                                <td style="text-align: center;"><b>Seksi</b></td>
                                <td style="text-align: center;"><b>Detail</b></td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($data['pekerja'] as $index) : ?>
                                <tr>
                                    <td style="text-align: center;"><?= $no++; ?></td>
                                    <td style="text-align: center;"><?= $index['id_pegawai']; ?></td>
                                    <td style="text-align: center;"><?= $index['nama_lengkap']; ?></td>
                                    <td style="text-align: center;"><?= $index['seksi']; ?></td>
                                    <td style="text-align: center;">
                                        <button type="button" class="btn btn-primary detailpekerja" value="<?= $index['id_pegawai']; ?>" data-bs-toggle="modal" data-bs-target="#detailpekerja">Detail</button>
                                        <button type="button" class="btn btn-danger hapuspekerja" value="<?= $index['id_pegawai']; ?>">Hapus</button>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                    <br>
                    <br>
                    <a href="<?= BASEURL; ?>" class="btn btn-warning">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Modal -->
<div class="modal fade" id="detailpekerja" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><b>Detail Pekerja</b></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <table>
                    <tr>
                        <td colspan="3"><b>Data Pribadi</b></td>
                    </tr>
                    <tr>
                        <td>ID Pekerja</td>
                        <td>:</td>
                        <td id="detail-id"></td>
                    </tr>
                    <tr>
                        <td>Nama Pekerja</td>
                        <td>:</td>
                        <td id="detail-namapekerja"></td>
                    </tr>
                    <tr>
                        <td>Tempat Lahir</td>
                        <td>:</td>
                        <td id="detail-tmplahir"></td>
                    </tr>
                    <tr>
                        <td>Tanggal Lahir</td>
                        <td>:</td>
                        <td id="detail-tgllahir"></td>
                    </tr>
                    <tr>
                        <td>NPWP</td>
                        <td>:</td>
                        <td id="detail-npwp"></td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td>:</td>
                        <td id="detail-alamat"></td>
                    </tr>
                </table>
                <br>
                <table>
                    <tr>
                        <td colspan="3"><b>Data Perusahaan</b></td>
                    </tr>
                    <tr>
                        <td>Departemen</td>
                        <td>:</td>
                        <td id="detail-departemen"></td>
                    </tr>
                    <tr>
                        <td>Unit</td>
                        <td>:</td>
                        <td id="detail-unit"></td>
                    </tr>
                    <tr>
                        <td>Seksi</td>
                        <td>:</td>
                        <td id="detail-seksi"></td>
                    </tr>
                    <tr>
                        <td>Jabatan</td>
                        <td>:</td>
                        <td id="detail-jabatan"></td>
                    </tr>
                    <tr>
                        <td>Golongan</td>
                        <td>:</td>
                        <td id="detail-golongan"></td>
                    </tr>
                    <tr>
                        <td>Pekerjaan</td>
                        <td>:</td>
                        <td id="detail-pekerjaan"></td>
                    </tr>
                </table>
            </div>
            <div class="modal-footer">
                <a href="<?= BASEURL; ?>/pekerja/detail/" type="button" class="btn btn-warning detail-button">Edit</a>
            </div>
        </div>
    </div>
</div>