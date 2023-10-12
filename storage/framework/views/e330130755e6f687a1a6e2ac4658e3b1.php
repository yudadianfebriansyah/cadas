 

 <?php $__env->startSection('contentAdmin'); ?>
 <div class="main-panel">
     <div class="content-wrapper">
         <div class="row">

             <div class="col-md-12 grid-margin stretch-card">
                 <div class="card">
                     <div class="card-body">
                         <p class="card-title">Surat Keterangan Meninggal</p>
                         <div class="row">
                             <div class="col-12">
                                 <div class="table-responsive">
                                     <table id="example" class="display expandable-table" style="width:100%">
                                         <thead>
                                             <tr>
                                                 <th>#</th>
                                                 <th>Tanggal</th>
                                                 <th>Nama</th>
                                                 <th>NIK</th>
                                                 <th>Umur</th>
                                                 <th>Pekerjaan</th>
                                                 <th>Alamat</th>
                                                 <th>Action</th>
                                             </tr>
                                         </thead>
                                         <tbody>
                                             <?php $__currentLoopData = $dataSKM; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                             <tr>
                                                 <td><?php echo e($loop->iteration); ?></td>
                                                 <td><?php echo e(\Carbon\Carbon::parse($data->created_at)->format('d F Y')); ?></td>
                                                 <td><?php echo e($data->nama); ?></td>
                                                 <td><?php echo e($data->nik); ?></td>
                                                 <td><?php echo e($data->umur); ?></td>
                                                 <td><?php echo e($data->pekerjaan); ?></td>
                                                 <td><?php echo e($data->alamat_ktp); ?></td>
                                                 <td>
                                                     <a href="/admin/skm/<?php echo e($data->id); ?>" class="btn btn-info btn-rounded btn-fw">Detail</a>
                                                     <a href="" class="btn btn-warning btn-rounded btn-fw">Edit</a>
                                                     <a href="" class="btn btn-danger btn-rounded btn-fw">Delete</a>
                                                 </td>
                                             </tr>
                                             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                         </tbody>
                                     </table>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <!-- content-wrapper ends -->
     <!-- partial:../../partials/_footer.html -->
     <footer class="footer">
         <div class="d-sm-flex justify-content-center justify-content-sm-between">
             <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2021. Premium <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap admin template</a> from BootstrapDash. All rights reserved.</span>
             <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="ti-heart text-danger ml-1"></i></span>
         </div>
     </footer>
     <!-- partial -->
 </div>
 <?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\cadas\resources\views/admin/skm.blade.php ENDPATH**/ ?>