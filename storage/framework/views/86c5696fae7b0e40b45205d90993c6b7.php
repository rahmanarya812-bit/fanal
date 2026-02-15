
<?php $__env->startSection('content'); ?>
    <!-- START DATA -->
    <div class="my-3 p-3 bg-body rounded shadow-sm">
        <!-- TOMBOL TAMBAH DATA -->
        <div class="pb-3">
            <a type="button" class="btn btn-success" href="/pembeli/create">Tambah Data</a>
        </div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th class="col-md-1">No</th>
                    <th class="col-md-3">Nama</th>
                    <th class="col-md-4">Kode Pembeli</th>
                    <th class="col-md-2">Aset</th>
                    <th class="col-md-2">Jenis Kelamin</th>
                    <th class="col-md-2">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($pembeli as $key=> $value) : ?>
                <tr>
                    <th><?= $key + 1 ?></th>
                    <td><?= $value->kode_pembeli?></td>
                    <td><?= $value->nama ?></td>
                    <td><?= $value->aset ?></td>
                    <td><?= $value->jenis_kelamin ?></td>
                    <td>
                        <a class="btn btn-warning" href="/pembeli/edit/<?= $value->id ?>"style="background-color: yellow;">Edit</a> |
                        <a class="btn btn-danger" onclick="return confirm('apakah anda yakin ingin menghapus?')" href="/pembeli/delete/<?= $value->id ?>" style="background-color: red;">Hapus</a>

                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <!-- AKHIR DATA -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\finalprojectwebdavi\resources\views/pembeli/pembeli.blade.php ENDPATH**/ ?>