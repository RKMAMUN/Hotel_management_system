
<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span></button>
            <a class="navbar-brand"><span>Hotel </span>Management System</a>
            <ul class="nav navbar-top-links navbar-right">
                <li>

                    </a>
                    <div>
                        <a class="" href="<?php echo e(route('logout')); ?>"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">

                           <button style="color: red; margin-top: 10px;padding: 10px">logout</button>
                        </a>

                        <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                            <?php echo csrf_field(); ?>
                        </form>
                    </div>
                </li>
            </ul>
        </div>
    </div><!-- /.container-fluid -->
</nav>
<?php /**PATH D:\Laravel Project\sanzid_shihab\resources\views/backend/common/header.blade.php ENDPATH**/ ?>