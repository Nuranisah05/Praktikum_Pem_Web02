
<?php $__env->startSection('content'); ?>
    <h1 class="mt-4">Tables</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
        <li class="breadcrumb-item active">Tables</li>
    </ol>
    <div class="card mb-4">
        <div class="card-body">
            <a target="_blank" href="https://datatables.net/">official DataTables</a>
        </div>
    </div>
    <div class="card mb-4">
        <div class="card-header">
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Kode</th>
                        <th>Nama</th>
                        <th>Harga Jual</th>
                        <th>Harga Beli</th>
                        <th>Stok</th>
                        <th>Minimal Stok</th>
                        <th>Deskripsi</th>
                        <th>Kategori Produk</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Kode</th>
                        <th>Nama</th>
                        <th>Harga Jual</th>
                        <th>Harga Beli</th>
                        <th>Stok</th>
                        <th>Minimal Stok</th>
                        <th>Deskripsi</th>
                        <th>Kategori Produk</th>
                    </tr>
                </tfoot>
                <tbody>
                    <?php $no = 1; ?>
                    <?php $__currentLoopData = $produk; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($no); ?></td>
                            <td><?php echo e($p->kode); ?></td>
                            <td><?php echo e($p->nama); ?></td>
                            <td><?php echo e($p->harga_jual); ?></td>
                            <td><?php echo e($p->harga_beli); ?></td>
                            <td><?php echo e($p->stok); ?></td>
                            <td><?php echo e($p->min_stok); ?></td>
                            <td><?php echo e($p->deskripsi); ?></td>
                            <td><?php echo e($p->nama_kategori); ?></td>
                            <!--- nama_kategori diambil dari join yang ada di controller produk yang sudah dibuatkan join -->
                        </tr>
                        <?php $no++; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.appadmin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Xampp\htdocs\Praktikum-Web02\praktikum10\resources\views/admin/produk/produk.blade.php ENDPATH**/ ?>