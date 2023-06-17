<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-center">
                        <h1 style="margin-top: 50px;"><b>Cuti</b></h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambah-cuti">
                        Tambah Cuti
                    </button>
                    <br>
                    <br>
                    <table class="table">
                        <thead class="table-dark">
                            <tr>
                                <th style="text-align: center;"><b>No</b></th>
                                <th style="text-align: center;"><b>Nama Pekerja</b></th>
                                <th style="text-align: center;"><b>Jumlah Cuti</b></th>
                                <th style="text-align: center;"><b>Action</b></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($data['cuti'] as $cuti) : ?>
                                <tr>
                                    <td style="text-align: center;"><?= $no++; ?></td>
                                    <td style="text-align: center;"><?= $cuti['nama_lengkap']; ?></td>
                                    <td style="text-align: center;"><?= $cuti['jumlah']; ?></td>
                                    <td style="text-align: center;">
                                        <a href="<?= BASEURL; ?>/cuti/detailCuti/<?= $cuti['id_pekerja']; ?>" class="btn btn-primary">Detail</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                    <br><br>
                    <a href="<?= BASEURL; ?>" class="btn btn-warning">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Modal Tambah Cuti -->
<div class="modal fade" id="tambah-cuti">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><b>Tambah Cuti</b></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="<?= BASEURL; ?>/Cuti/tambahCuti" method="post">
                <div class="modal-body">
                    <div class="col-md-12">
                        <div class="row" style="padding: 10px 0px;">
                            <div class="col-md-4">
                                <label for="unit">Nama Pekerja</label>
                            </div>
                            <div class="col-md-8">
                                <select name="pekerja" class="form-control">
                                    <option value=""></option>
                                    <?php foreach ($data['pekerja'] as $pekerja) : ?>
                                        <option value="<?= $pekerja['id_pegawai']; ?>"><?= $pekerja['nama']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <div class="row" style="padding: 10px 0px;">
                            <div class="col-md-4">
                                <label for="unit">Tanggal Cuti</label>
                            </div>
                            <div class="col-md-8">
                                <input type="date" class="form-control" name="tanggal_cuti">
                            </div>
                        </div>
                        <div class="row" style="padding: 10px 0px;">
                            <div class="col-md-4">
                                <label for="unit">Alasan</label>
                            </div>
                            <div class="col-md-8">
                                <textarea class="form-control" name="alasan" cols="20" rows="5" placeholder="Alasan"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary" id="pekerjaan-tambah-btn">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>