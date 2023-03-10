<?php $__env->startSection('content'); ?>
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#">
                    <em class="fa fa-home"></em>
                </a></li>
            <li class="active">Dashboard</li>
        </ol>
    </div><!--/.row-->

    <!-- <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Dashboard</h1>
        </div>
    </div>/.row -->

    <div class="panel panel-container">
        <div class="row">
            <div class="col-xs-6 col-md-3 col-lg-3 no-padding">
                <div class="panel panel-teal panel-widget border-right">
                    <div class="row no-padding"><em class="fa fa-xl fa-bed color-blue"></em>
                        <div class="large">5</div>
                        <div class="text-muted">Total Rooms</div>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-md-3 col-lg-3 no-padding">
                <div class="panel panel-blue panel-widget border-right">
                    <div class="row no-padding"><em class="fa fa-xl fa-bookmark color-orange"></em>
                        <div class="large">3</div>
                        <div class="text-muted">Reservations</div>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-md-3 col-lg-3 no-padding">
                <div class="panel panel-orange panel-widget border-right">
                    <div class="row no-padding"><em class="fa fa-xl fa-users color-teal"></em>
                        <div class="large">1</div>
                        <div class="text-muted">Staffs</div>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-md-3 col-lg-3 no-padding">
                <div class="panel panel-red panel-widget ">
                    <div class="row no-padding"><em class="fa fa-xl fa-comments color-red"></em>
                        <div class="large">4</div>
                        <div class="text-muted">Complaints</div>
                    </div>
                </div>
            </div>
        </div><!--/.row-->

        <hr>

        <div class="row">
            <div class="col-xs-6 col-md-3 col-lg-3 no-padding">
                <div class="panel panel-teal panel-widget border-right">
                    <div class="row no-padding"><em class="fa fa-xl fa-reorder color-red"></em>
                        <div class="large">2</div>
                        <div class="text-muted">Booked Rooms</div>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-md-3 col-lg-3 no-padding">
                <div class="panel panel-blue panel-widget border-right">
                    <div class="row no-padding"><em class="fa fa-xl fa-check-circle color-green"></em>
                        <div class="large">1</div>
                        <div class="text-muted">Available Rooms</div>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-md-3 col-lg-3 no-padding">
                <div class="panel panel-orange panel-widget border-right">
                    <div class="row no-padding"><em class="fa fa-xl fa-check-square-o color-magg"></em>
                        <div class="large">1</div>
                        <div class="text-muted">Checked In</div>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-md-3 col-lg-3 no-padding">
                <div class="panel panel-red panel-widget ">
                    <div class="row no-padding"><em class="fa fa-xl fa-spinner color-blue"></em>
                        <div class="large"></div>
                        <div class="text-muted">Total Pending Payments</div>
                    </div>
                </div>
            </div>
        </div><!--/.row-->

        <hr>

        <div class="row">
            <div class="col-xs-6 col-md-2 col-lg-2 no-padding">

            </div>

            <div class="col-xs-6 col-md-4 col-lg-4 no-padding">
                <div class="panel panel-red panel-widget border-right">
                    <div class="row no-padding"><em class="fa fa-xl fa-money color-red"></em>
                        <div class="large">Rs.4</div>
                        <div class="text-muted">Total Earnings</div>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-md-4 col-lg-4 no-padding">
                <div class="panel panel-orange panel-widget ">
                    <div class="row no-padding"><em class="fa fa-xl fa-credit-card color-purp"></em>
                        <div class="large">Rs.4</div>
                        <div class="text-muted">Pending Payment</div>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-md-2 col-lg-2 no-padding">

            </div>
        </div><!--/.row-->
    </div>

</div>	<!--/.main-->


<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Laravel Project\sanzid_shihab\resources\views/backend/dashboard.blade.php ENDPATH**/ ?>