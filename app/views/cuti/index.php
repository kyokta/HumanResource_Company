<section class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-12">
                    <div class="text">
                        <h1><b>Cuti</b></h1>
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
                        <thead>
                            <tr>
                                <td>No</td>
                                <td>Nama Pekerja</td>
                                <td>Jumlah Cuti</td>
                                <td>Action</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($data['cuti'] as $cuti) : ?>
                                <tr>
                                    <td><?= $no++; ?></td>
                                    <td><?= $cuti['nama_lengkap']; ?></td>
                                    <td><?= $cuti['jumlah']; ?></td>
                                    <td>
                                        <a href="<?= BASEURL; ?>/cuti/detailCuti/<?= $cuti['id_pekerja']; ?>" class="btn btn-primary">Detail</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
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