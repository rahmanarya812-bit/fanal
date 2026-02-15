
<?php $__env->startSection('content'); ?>
    <h3>Tambah Data Pembeli</h3>
    <form method="POST" action="/pembeli/store" class="row g-3 needs-validation" novalidate>
        <?php echo csrf_field(); ?>
        <div class="mb-3">
            <label for="kode_pembeli" class="form-label">Kode Pembeli</label>
            <input type="text" class="form-control" id="kode_pembeli" name="kode_pembeli" value="<?php echo e(old('kode_pembeli')); ?>" required>
        </div>
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" value="<?php echo e(old('nama')); ?>" required>
        </div>
        <div class="mb-3">
            <label for="aset" class="form-label">aset</label>
            <select class="form-select" id="aset" name="aset" required>
                <option value="">-- Pilih aset --</option>
                <?php $__currentLoopData = $aset; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $j): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($j->nama_aset); ?>" <?php echo e(old('aset') == $j->id ? 'selected' : ''); ?>>
                        <?php echo e($j->nama_aset); ?>

                    </option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>
        <div class="mb-3">
            <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
            <select class="form-select" id="jenis_kelamin" name="jenis_kelamin" required>
                <option value="Laki-laki">Laki-laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\finalprojectwebdavi\resources\views/pembeli/pembeli_create.blade.php ENDPATH**/ ?>