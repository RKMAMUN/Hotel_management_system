    

        <?php $__env->startSection('content'); ?>
            <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
                <div class="row">
                    <ol class="breadcrumb">
                        <li><a href="">
                                <em class="fa fa-home"></em>
                            </a></li>
                        <li class="active">visitors</li>
                    </ol>
                </div>
                <!--/.row-->

                <br>

                <div class="row">
                    <div class="col-lg-12">
                        <div id="success"></div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">Total Visitors in My Website



                            </div>
                            <div class="panel-body">

                                <table id="dataTable" class="table table-striped table-bordered scroll">
                                    <thead>
                                    <tr>
                                        <th id="customer_name11">ID</th>
                                        <th id="customer_name11">Ip Address</th>



                                        <td id="room_type11">Time</td>



                                        <td id="room_no121">Date</td>


                                        <td id="room_fee1">Country</td>


                                        <td id="customer_contact_no1">City</td>




                                    </tr>
                                    </thead>
                                    <tbody class="visitor_table">


                                    <?php $__currentLoopData = $visitors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $visitors): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr class="">



                                            <td class="mt-5"><?php echo e($visitors['id']); ?></td>
                                            <td class="mt-5"><?php echo e($visitors['ip']); ?></td>
                                            <td class="mt-5"><?php echo e($visitors['time']); ?></td>
                                            <td class="mt-5"><?php echo e($visitors['date']); ?></td>
                                            <td class="mt-5"><?php echo e($visitors['country']); ?></td>
                                            <td class="mt-5"><?php echo e($visitors['city']); ?></td>



                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>
                </div>


            <?php $__env->stopSection(); ?>


                <?php $__env->startSection('script'); ?>
                    <script type="text/javascript">
                        $(document).ready(function() {
                            $('#dataTable').DataTable();
                            $('.dataTables_length').addClass('bs-select');
                        });
                    </script>
        <?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Laravel Project\Hotel_Management_System_Client_Project\sanzid_shihab\resources\views/backend/visitors.blade.php ENDPATH**/ ?>