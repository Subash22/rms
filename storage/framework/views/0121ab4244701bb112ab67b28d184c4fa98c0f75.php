<?php $__env->startSection('content'); ?>
<div class="breadcrumbs">
   <div class="col-sm-4">
      <div class="page-header float-left">
         <div class="page-title">
            <h1><?php echo e(__('messages.send_notfi')); ?></h1>
         </div>
      </div>
   </div>
   <div class="col-sm-8">
      <div class="page-header float-right">
         <div class="page-title">
            <ol class="breadcrumb text-right">
               <li class="active"><?php echo e(__('messages.send_notfi')); ?></li>
            </ol>
         </div>
      </div>
   </div>
</div>
<div class="content mt-3">
   <div class="row">
      <div class="col-12">
         <div class="card">
            <div class="card-body">
               <?php if(Session::has('message')): ?>
               <div class="col-sm-12">
                  <div class="alert  <?php echo e(Session::get('alert-class', 'alert-info')); ?> alert-dismissible fade show" role="alert"><?php echo e(Session::get('message')); ?>

                     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                     </button>
                  </div>
               </div>
               <?php endif; ?>
               <button  class="btn btn-primary btn-flat m-b-30 m-t-30" data-toggle="modal" data-target="#myModal"><?php echo e(__('messages.add_new_notfic')); ?></button>
               <div class="table-responsive dtdiv" >
                  <table id="notifi_tb" class="table table-striped dttablewidth">
                     <thead>
                        <tr>
                           <th><?php echo e(__('messages.id')); ?></th>
                           <th><?php echo e(__('messages.msg')); ?></th>
                        </tr>
                     </thead>
                  </table>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<div class="modal fade" id="myModal" role="dialog">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title"><?php echo e(__('messages.add')); ?> <?php echo e(__('messages.notification')); ?>

               </h5>
               <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
               <form name="menu_form_category" action="<?php echo e(url('add_notification')); ?>" method="post" enctype="multipart/form-data">
                  <?php echo e(csrf_field()); ?>

                  <div class="form-group">
                     <label><?php echo e(__('messages.msg')); ?></label>
                     <textarea class="form-control desche" name="message" required>
                     </textarea>
                  </div>
                  <div class="col-md-12">
                     <div class="col-md-6">
                        <?php if(Session::get("demo")==0): ?>
                               <input id="payment-button" type="button" class="btn btn-primary btn-md form-control" onclick="disablebtn()" value="<?php echo e(__('messages.add')); ?>">
                           
                           </button>
                           <?php else: ?>
                             <input id="payment-button" type="submit" class="btn btn-primary btn-md form-control" value="<?php echo e(__('messages.add')); ?>">
                           
                           <?php endif; ?>
                     </div>
                     <div class="col-md-6">
                        <input type="button" class="btn btn-secondary btn-md form-control" data-dismiss="modal" value="<?php echo e(__('messages.close')); ?>">
                     </div>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\RestaurantWebsite\resources\views/admin/notification/default.blade.php ENDPATH**/ ?>