
<?php $__env->startSection('content'); ?>
    <a type="button" class="btn btn-success" href="/aset/create">+Tambah Data</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Aset</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php  foreach ($aset as $key => $value):
             ?>
            <tr>
                <th><?= $key + 1 ?></th>
                <td><?= $value->nama_aset ?> </td>
                <td>
                    <a class="btn btn-warning"
                        href="/aset/edit/<?= $value->id ?>"style="background-color: yellow;">Edit</a> |
                    <a class="btn btn-danger" onclick="return confirm('apakah anda yakin inign menghapus?')"
                        href="/aset/delete/<?= $value->id ?>"style="background-color: red;">Hapus</a>
                </td>
            </tr>
            <?php endforeach ?>
        </tbody>
    </table>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\finalprojectwebdavi\resources\views/aset/aset.blade.php ENDPATH**/ ?>