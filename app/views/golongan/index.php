<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-12">
                    <div class="text">
                        <h1><b>Golongan</b></h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="row"></div>
                    <div class="row">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Golongan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($data['golongan'] as $golongan) : ?>
                                    <tr>
                                        <td><?= $no++; ?></td>
                                        <td><?= $golongan['golongan']; ?></td>
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