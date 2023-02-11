
        <?php $__env->startSection('content'); ?>
            <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
                <div class="row">
                    <ol class="breadcrumb">
                        <li><a href="">
                                <em class="fa fa-home"></em>
                            </a></li>
                        <li class="active">Payment</li>
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
                            <div class="panel-heading">People who paid



                            </div>
                            <div class="panel-body">

                                <table id="dataTable" class="table table-striped table-bordered scroll">
                                    <caption>Customer details</caption>
                                    <thead>
                                    <tr>
                                        <th id="customer_name11">Customer Name</th>



                                        <td id="room_type11">Room Type</td>



                                        <td id="room_no121">Room Number</td>


                                        <td id="room_fee1">Room Fee</td>


                                        <td id="customer_contact_no1">Customer Contact Number</td>


                                        <td id="customer_email1">Email</td>



                                        <td id="customer_payment">Payment</td>


                                        <td id="booking_date1">Day</td>


                                        <td id="check_in_date1">Check IN Date</td>


                                        <td id="check_out_date1">Check OUT Date</td>




                                        <th id="customer_address1">Address</th>

                                    </tr>
                                    </thead>
                                    <tbody class="payment_table">




                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>
                </div>


            <?php $__env->stopSection(); ?>


            <?php $__env->startSection('script'); ?>
                <script type="text/javascript">
                    getPaymentClear();



                    //For Student Table
                    function getPaymentClear() {


                        axios.get('/PaymentClear')
                            .then(function(response) {
                                //alert("Robin");

                                if (response.status == 200) {

                                    $('#dataTable').DataTable().destroy();

                                    $('.payment_table').empty();


                                    //alert("R")
                                    var dataJSON = response.data;
                                    //alert(dataJSON)
                                    $.each(dataJSON, function(i, item) {
                                        $('<tr>').html(


                                            "<td>" + dataJSON[i].first_name +" "+dataJSON[i].last_name+ "</td>" +
                                            "<td>" + dataJSON[i].room_no + "</td>" +


                                            "<td>" + dataJSON[i].room_type + "</td>" +
                                            "<td>" + dataJSON[i].room_free + "</td>" +
                                            "<td>" + dataJSON[i].customer_number + "</td>"+
                                            "<td>" + dataJSON[i].email + "</td>"+
                                            "<td>" + dataJSON[i].payment + "</td>"+
                                            "<td>" + dataJSON[i].day + "</td>"+
                                            "<td>" + dataJSON[i].check_in + "</td>"+
                                            "<td>" + dataJSON[i].check_out + "</td>"+
                                            "<td>" + dataJSON[i].address + "</td>"




                                        ).appendTo('.payment_table');
                                    });
                                    $('#dataTable').DataTable({
                                        "order": false
                                    });
                                    $('.dataTables_length').addClass('bs-select');
                                } else {

                                }

                            })
                            .catch(function(error) {



                            });
                    }
                </script>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('backend.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Laravel Project\Hotel_Management_System_Client_Project\sanzid_shihab\resources\views/backend/payment_ok.blade.php ENDPATH**/ ?>
