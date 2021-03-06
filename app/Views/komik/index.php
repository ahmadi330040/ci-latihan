<?= $this->extend('layout/template') ?>
 
<?php $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <h1>Daftar Komik</h1>
            <table class="table">
                
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Sampul</th>
                    <th scope="col">Judul</th>
                    <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach ($komik as $k) : ?>
                    <tr>
                    <th scope="row">1</th>
                    <td><img src="<?= $k['imgpath']; ?>" alt="" class="sampul"></td>
                    <td><?= $k['judul']; ?></td>
                    <td><a href="" class="btn btn-success">Detail</a></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php $this->endSection(); ?>