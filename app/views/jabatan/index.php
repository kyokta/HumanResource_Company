<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-right">
                        <h1><b>Jabatan</b></h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Tambah Jabatan
                    </button>
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th>No</th>
                                <th>Kode Jabatan</th>
                                <th>Jabatan</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($data['jabatan'] as $jabatan) : ?>
                                <tr>
                                    <td><?= $no++; ?></td>
                                    <td><?= $jabatan['kd_jabatan']; ?></td>
                                    <td><?= $jabatan['jabatan']; ?></td>
                                    <td>
                                        <button type="button" class="btn btn-primary jabatan-edit-btn" data-bs-toggle="modal" data-bs-target="#edit-jabatan" value="<?= $jabatan['id_jabatan']; ?>">
                                            Edit
                                        </button>
                                        <button type="button" class="btn btn-danger jabatan-delete-btn" value="<?= $jabatan['id_jabatan']; ?>">Hapus</button>
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

<!-- Modal Tambah Jabatan -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><b>Tambah Seksi</b></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="<?= BASEURL; ?>/Jabatan/tambahjabatan" method="post">
                <div class="modal-body">
                    <div class="col-md-12">
                        <div class="row" style="padding: 10px 0px;">
                            <div class="col-md-4">
                                <label for="unit">Kode Jabatan</label>
                            </div>
                            <div class="col-md-8">
                                <input type="text" class="form-control" name="kd_jabatan" placeholder="Kode Jabatan">
                            </div>
                        </div>
                        <div class="row" style="padding: 10px 0px;">
                            <div class="col-md-4">
                                <label for="unit">Jabatan</label>
                            </div>
                            <div class="col-md-8">
                                <input type="text" class="form-control" name="jabatan" placeholder="Jabatan">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal Edit Jabatan -->
<div class="modal fade" id="edit-jabatan">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><b>Edit Jabatan</b></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="<?= BASEURL; ?>/Jabatan/updateJabatan" method="post">
                <div class="modal-body">
                    <div class="col-md-12">
                        <input type="text" class="form-control" name="id_jabatan" id="editjabatan-id" hidden>
                        <div class="row" style="padding: 10px 0px;">
                            <div class="col-md-4">
                                <label for="unit">Kode Jabatan</label>
                            </div>
                            <div class="col-md-8">
                                <input type="text" class="form-control" name="kd_jabatan" id="editjabatan-kode">
                            </div>
                        </div>
                        <div class="row" style="padding: 10px 0px;">
                            <div class="col-md-4">
                                <label for="unit">Jabatan</label>
                            </div>
                            <div class="col-md-8">
                                <input type="text" class="form-control" name="jabatan" id="editjabatan-jabatan">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>