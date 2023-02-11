<?php $__env->startSection('content'); ?>
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#">
                    <em class="fa fa-home"></em>
                </a></li>
            <li class="active">Complaint</li>
        </ol>
    </div><!--/.row-->



    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">Make Complaint</div>
                <div class="panel-body">

                    <form role="form"  data-toggle="validator" method="post" action="">
                        <div class="row">
                            <div class="form-group col-lg-6">
                                <label for="complain_name">Complainant Name</label>
                                <input id="complain_name" type="text" class="form-control"
                                       placeholder="Complainant Name" name="complainant_name" required>
                                <div class="help-block with-errors"></div>
                            </div>

                            <div class="form-group col-lg-6">
                                <label for="complain_type">Complaint Type</label>
                                <input id="complain_type" type="text" class="form-control"
                                       placeholder="Complaint Type" name="complaint_type" required>
                                <div class="help-block with-errors"></div>
                            </div>

                            <div class="form-group col-lg-12">
                                <label for="complain">Please Describe Your Complaints</label>
                                <textarea id="complain" class="form-control"
                                          name="complaint" placeholder="Complaint" required></textarea>
                            </div>

                        </div>

                        <button type="button" id="complain_button"
                                class="btn btn-lg btn-success"
                                name="createComplaint" >Submit</button>
                        <button type="button" id="complain_rest_button"
                                class="btn btn-lg btn-danger" >Reset</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">Complaint Management</div>
                <div class="panel-body">

                    <table class="table table-striped table-bordered table-responsive" id="dataTable">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Complainant Name</th>
                            <th>Complaint Type</th>
                            <th>Complaint</th>
                            <th>Created Date</th>
                            <th>Resolve</th>
                            <th>Budget</th>
                        </tr>
                        </thead>
                        <tbody class="complain_table">




                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>

    <!-- Add Complain Modal -->
    <div id="complaintModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Complaint Resolve</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <h3 style="display: none!important;" class="help_id d-none"></h3>
                                <div class="form-group">
                                    <label for="budget">Budget</label>

                                    <input id="budget" class="form-control"
                                           placeholder="Budget" name="budget" data-error="Enter Budget" required>
                                    <div class="help-block with-errors"></div>
                                </div>

                                <button id="complain_resolve_btn"
                                        class="btn btn-success pull-right">Resolve Complaint</button>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">
            <p class="back-link">Developed By Shanzid Shihab</p>
        </div>
    </div>

</div>    <!--/.main-->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    <script type="text/javascript">
        getComplain();



        //For Complain Table
        function getComplain() {


            axios.get('/getcomplain')
                .then(function(response) {


                    if (response.status === 200) {



                        $('.complain_table').empty();


                        //alert("R")
                        var dataJSON = response.data;
                        //alert(dataJSON)
                        $.each(dataJSON, function(i, item) {
                            let resolve, budget;
                            if(dataJSON[i].resolve_date===0){
                                resolve = '<button class="btn btn-info">Resolve</button>';
                                budget = '';


                            }else {
                                resolve = dataJSON[i].resolve_date;
                                budget =dataJSON[i].budget;
                            }
                            $('<tr>').html(



                                "<td>" + dataJSON[i].id + "</td>" +
                                "<td>" + dataJSON[i].complainant_name + "</td>" +


                                "<td>" + dataJSON[i].complaint_type + "</td>" +
                                "<td>" + dataJSON[i].complaint + "</td>" +
                                "<td>" + dataJSON[i].created_at + "</td>"+
                                "<td><a class='resolveBtn' data-id=" + dataJSON[i].id +"> " + resolve + "</a></td>"+
                                "<td>" + budget + "</td>"





                            ).appendTo('.complain_table');
                        });

                        $('.resolveBtn').click(function (){
                            const id = $(this).data('id');
                           // alert(id)
                            $('.help_id').html(id)
                            $('#complaintModal').modal('show');
                        })
                            $('#complain_resolve_btn').click(function (){

                            const budget = $('#budget').val();

                            const id = $('.help_id').html();
                            axios.post('/resolve', {
                                id: id,
                                budget:budget
                            })
                                .then(function(response) {


                                    if (response.status === 200) {

                                        const jsonData = response.data;

                                      if(response.data === 1){

                                          showToast('Complaint Successfully Resolve !', {
                                              duration: 5000, // The time interval after notification disappear
                                              background: '#7aff00', // Background color for toast notification
                                              color: '#000000', //Text color
                                              borderRadius: '7px', //Border Radius,
                                              marginTop: '89px'
                                          });
                                          $('#complaintModal').modal('hide');
                                          getComplain();
                                      }else{
                                          showToast('Complaint Successfully Not Resolve !', {
                                              duration: 5000, // The time interval after notification disappear
                                              background: '#ff0015', // Background color for toast notification
                                              color: '#000000', //Text color
                                              borderRadius: '7px', //Border Radius,
                                              marginTop: '89px'
                                          });
                                          $('#complaintModal').modal('hide');
                                          getComplain();
                                      }




                                    } else {
                                        $('#complaintModal').modal('hide');
                                        getComplain();
                                    }

                                })
                                .catch(function(error) {
                                    $('#complaintModal').modal('hide');
                                    getComplain();


                                });
                            })


                        $('#dataTable').DataTable();
                        $('#complaintModal').modal('hide');
                        $('.dataTables_length').addClass('bs-select');
                    } else {
                        getComplain();
                    }

                })
                .catch(function(error) {

                    $('#complaintModal').modal('hide');
                    getComplain();
                });
        }


        $('#complain_button').click(function(){
            const complainName = $('#complain_name').val();
            const complainType = $('#complain_type').val();
            const complain = $('#complain').val();

            //alert(complainName+complainType+complain)



                axios.post('/complainAdd', {
                    complainName: complainName,
                    complainType: complainType,
                    complain: complain

                })


                    .then(function(response) {
                        if (response.status === 200) {
                            if (response.data === 1) {


                                $('#complain_name').val('');
                                $('#complain_type').val('');
                                $('#complain').val('');

                                showToast('Successfully Complain Added!', {
                                    duration: 5000, // The time interval after notification disappear
                                    background: '#20b2aa', // Background color for toast notification
                                    color: '#f1f1f1', //Text color
                                    borderRadius: '15px', //Border Radius,
                                    marginTop: '89px'
                                });
                                getComplain()
                                $('.Room_confirmation').modal('hide');

                            } else  {

                                showToast('Complain Failed!', {
                                    duration: 5000, // The time interval after notification disappear
                                    background: '#20b2aa', // Background color for toast notification
                                    color: '#f1f1f1', //Text color
                                    borderRadius: '15px', //Border Radius,
                                    marginTop: '89px'
                                });

                                getComplain()
                            }


                        } else {




                            showToast('Complain Failed!!', {
                                duration: 5000, // The time interval after notification disappear
                                background: '#20b2aa', // Background color for toast notification
                                color: '#f1f1f1', //Text color
                                borderRadius: '15px', //Border Radius,
                                marginTop: '89px'
                            });

                            getComplain()
                        }
                    }).catch(function(error) {



                        showToast('Complain Failed!!', {
                            duration: 5000, // The time interval after notification disappear
                            background: '#ff2323', // Background color for toast notification
                            color: '#000000', //Text color
                            borderRadius: '7px', //Border Radius,
                            marginTop: '89px'
                        });

                })

            getComplain()

        })

        $('#complain_rest_button').click(function(){
            $('#complain_name').val('');
            $('#complain_type').val('');
            $('#complain').val('');


        })
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\New folder (3)\sanzid_shihab\resources\views/backend/complain.blade.php ENDPATH**/ ?>