<div class="container mt-5">
    <div class="row">
        <div class="col-6">
            <h3>List Employee</h3>
            <?php foreach( $data['dataemp'] as $dataemp ) : ?>
                <ul>
                    <li><?= $dataemp['id']; ?></li>
                    <li><?= $dataemp['nama']; ?></li>
                    <li><?= $dataemp['email']; ?></li>
                    <li><?= $dataemp['jabatan']; ?></li>

                </ul>
            <?php endforeach; ?>
        </div>
    </div>
</div>