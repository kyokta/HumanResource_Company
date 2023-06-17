<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-center">
                        <h1 style="margin-top: 50px;"><b>Seksi</b></h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambah-seksi">
                        Tambah Seksi
                    </button>
                    <br>
                    <br>
                    <table class="table">
                        <thead class="table-dark">
                            <tr>
                                <th style="text-align: center;"><b>No</b></th>
                                <th style="text-align: center;"><b>Seksi</b></th>
                                <th style="text-align: center;"><b>Unit</b></th>
                                <th style="text-align: center;"><b>Departemen</b></th>
                                <th style="text-align: center;"><b>Action</b></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($data['seksi'] as $row) : ?>
                                <tr>
                                    <td style="text-align: center;"><?= $no++; ?></td>
                                    <td class="seksi" style="text-align: center;"><?= $row['seksi']; ?></td>
                                    <td class="unit" style="text-align: center;"><?= $row['unit']; ?></td>
                                    <td style="text-align: center;"><?= $row['departemen']; ?></td>
                                    <td class="departemen" hidden><?= $row['id_dep']; ?></td>
                                    <td style="text-align: center;">
                                        <button type="button" class="btn btn-primary seksi-edit-btn" data-bs-toggle="modal" data-bs-target="#edit-seksi" value="<?= $row['id_seksi']; ?>" onclick="toogleModal(this)">
                                            Edit
                                        </button>
                                        <button type="button" class="btn btn-danger seksi-delete-btn" value="<?= $row['id_seksi']; ?>">Hapus</button>
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

<!-- Modal Tambah Seksi -->
<div class="modal fade" id="tambah-seksi" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><b>Tambah Seksi</b></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="<?= BASEURL; ?>/Seksi/tambahSeksi" method="post">
                <div class="modal-body">
                    <div class="col-md-12">
                        <div class="row" style="padding: 10px 0px;">
                            <div class="col-md-4">
                                <label for="departemen">Departemen</label>
                            </div>
                            <div class="col-md-8">
                                <select name="departemen" class="form-control">
                                    <option value=""></option>
                                    <?php foreach ($data['departemen'] as $departemen) : ?>
                                        <option value="<?= $departemen['id']; ?>"><?= $departemen['departemen']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <div class="row" style="padding: 10px 0px;">
                            <div class="col-md-4">
                                <label for="unit">Unit</label>
                            </div>
                            <div class="col-md-8">
                                <input type="text" class="form-control" name="unit" placeholder="Unit">
                            </div>
                        </div>
                        <div class="row" style="padding: 10px 0px;">
                            <div class="col-md-4">
                                <label for="seksi">Seksi</label>
                            </div>
                            <div class="col-md-8">
                                <input type="text" class="form-control" name="seksi" placeholder="Seksi">
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

<!-- Modal Edit Seksi -->
<div class="modal fade" id="edit-seksi" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><b>Edit Seksi</b></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="<?= BASEURL; ?>/Seksi/updateSeksi" method="post">
                <div class="modal-body">
                    <div class="col-md-12">
                        <div class="row" style="padding: 10px 0px;">
                            <div class="col-md-4">
                                <label for="departemen">Departemen</label>
                            </div>
                            <div class="col-md-8">
                                <input type="text" id="editseksi-id" name="id" hidden>
                                <select name="departemen" id="editseksi-selectdepartemen" class="form-control">
                                    <option value=""></option>
                                    <?php foreach ($data['departemen'] as $departemen) : ?>
                                        <option value="<?= $departemen['id']; ?>"><?= $departemen['departemen']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <div class="row" style="padding: 10px 0px;">
                            <div class="col-md-4">
                                <label for="unit">Unit</label>
                            </div>
                            <div class="col-md-8">
                                <input type="text" class="form-control" name="unit" id="editseksi-unit" placeholder="Unit">
                            </div>
                        </div>
                        <div class="row" style="padding: 10px 0px;">
                            <div class="col-md-4">
                                <label for="seksi">Seksi</label>
                            </div>
                            <div class="col-md-8">
                                <input type="text" class="form-control" name="seksi" id="editseksi-seksi" placeholder="Seksi">
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

<script>
    let tableRowElement;

    function toogleModal(element) {
        var dep = document.getElementById('editseksi-selectdepartemen').options;

        tableRowElement = element.parentElement.parentElement;
        const departemen = tableRowElement.getElementsByClassName('departemen')[0].innerHTML;

        for (var i = 0; i < dep.length; i++) {
            var optionElement = dep[i];
            if (optionElement.value === departemen.toString()) {
                optionElement.selected = true;
                break;
            }
        }
    }
</script>