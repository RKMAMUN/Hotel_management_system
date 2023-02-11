<?php $__env->startSection('content'); ?>

        <div class="row">






        <div class="row">
            <div class="col-lg-2"></div>
            <div class="col-lg-8">
                <form role="form" id="booking">
                    <div class="response"></div>
                    <div class="col-lg-12">




                        <div class="panel panel-default">
                            <div class="panel-heading">Room Information:

                            </div>
                            <div class="panel-body">
                                <div class="form-group col-lg-6">
                                    <label>Room Type</label>
                                    <select class="form-control" id="room_type"  required data-error="Select Room Type">
                                        <option class="room_disabled" value="">Select Room Type</option>
                                        <?php $__currentLoopData = $room1; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $room1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                            <option id="room_type"  data-id="123"><?php echo e($room1['room_type']); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>


                                </div>

                                <div class="form-group col-lg-6">
                                    <label>Room Number</label>

                                    
                                    
                                    
                                    
                                    
                                    
                                    

                                    <select id="room_no" class="form-control" >
                                        <option  value="">Please Select Your Room Type!</option>
                                    </select>

                                </div>




                                <h2 class="kl"></h2>

                                <div class="form-group col-lg-6">
                                    <label>Check In Date</label>
                                    <input type="text" class="form-control" placeholder="dd/mm/yyyy"  id="check_in_date" data-error="Select Check In Date" required>
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group col-lg-6">
                                    <label>Check Out Date</label>
                                    <input type="text" class="form-control" placeholder="dd/mm/yyyy" id="check_out_date" data-error="Select Check Out Date" required>
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="col-lg-12">
                                    <h4 style="font-weight: bold">Total Days : <span id="staying_day"></span> Days</h4>
                                    <h4 style="font-weight: bold">Total Amount : <span id="total_price"></span> /-</h4>
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading">Customer Detail:</div>
                            <div class="panel-body">
                                <div class="form-group col-lg-6">
                                    <label>First Name</label>
                                    <input class="form-control" name="first_name" placeholder="First Name" id="first_name" data-error="Enter First Name">
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group col-lg-6">
                                    <label>Last Name</label>
                                    <input class="form-control" name="last_name" placeholder="Last Name" id="last_name">
                                </div>

                                <div class="form-group col-lg-6">
                                    <label>Contact Number</label>
                                    <input type="number" class="form-control" name="contact_no" data-error="Enter Min 10 Digit" data-minlength="10" placeholder="Contact No" id="contact_no">
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group col-lg-6">
                                    <label>Email Address</label>
                                    <input type="email" class="form-control" name="email" placeholder="Email Address" id="email" data-error="Enter Valid Email Address">
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group col-lg-6">
                                    <label>ID Card Type</label>
                                    

                                    <select class="form-control" id="id_card_id"  required data-error="Select Room Type">
                                        <option class="room_disabled" value="">Select Card Type</option>
                                        <?php $__currentLoopData = $card_type; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $card_type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                            <option id="id_card_id"  data-id="123"><?php echo e($card_type['card_name']); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>

                                </div>

                                <div class="form-group col-lg-6">
                                    <label>Selected ID Card Number</label>
                                    <input type="number" class="form-control" placeholder="ID Card Number" name="id_card_no" id="id_card_no" data-error="Enter Valid ID Card No" >
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group col-lg-12">
                                    <label>Residential Address</label>
                                    <input type="text" class="form-control" placeholder="Full Address" id="address" name="address">
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group col-lg-12">
                                    <h3 class=" p-3" style="color: rgb(255, 0, 0)">If you want to stay at our hotel, you need to make some payment in advance</h3>
                                    <h4 class=""><span style="color: rgb(255, 0, 0)"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></span> <span style="color: rgb(0, 0, 0)"> The rest of the money should be paid at the time of leaving the hotel</span> <span style="color: rgb(255, 0, 0)"><i class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i></span></h4>
                                    <h5>Advance Payment</h5>
                                    <label>Total TK</label>
                                    <input type="number" class="form-control" name="payment" placeholder="Total Tk" id="payment">
                                    <div class="help-block with-errors"></div>

                                    <label>Enter Transaction Number</label>
                                    <input type="number" class="form-control" placeholder="Transaction Number" name="transaction" id="transaction">
                                    <div class="help-block with-errors"></div>
                                </div>
                                <button type="button" class="reservation btn btn-lg btn-success pull-right" style="border-radius:0%">Submit</button>
                            </div>
                        </div>

                    </div>
                </form>
            </div>
        </div>
            <div class="col-lg-2"></div>
        <div class="row">
            <div class="col-sm-12">
                <p style="color:#ffffff;text-align:center;font-size:20px;font-family: 'Montserrat SemiBold'" class="">Developed By Shanzid Shihab</p>
            </div>
        </div>

    </div>    <!--/.main-->


    <!-- Booking Confirmation-->
    <div id="bookingConfirm" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title text-center"><b>Room Booking</b></h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="alert bg-success alert-dismissable" role="alert"><em class="fa fa-lg fa-check-circle">&nbsp;</em>Room Successfully Booked</div>
                            <table class="table table-striped table-bordered table-responsive">
                                <!-- <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Detail</th>
                                </tr>
                                </thead> -->
                                <tbody>
                                <tr>
                                    <td><b>Customer Name</b></td>
                                    <td id="getCustomerName"></td>
                                </tr>
                                <tr>
                                    <td><b>Room Type</b></td>
                                    <td id="getRoomType"></td>
                                </tr>
                                <tr>
                                    <td><b>Room No</b></td>
                                    <td id="getRoomNo"></td>
                                </tr>
                                <tr>
                                    <td><b>Check In</b></td>
                                    <td id="getCheckIn"></td>
                                </tr>
                                <tr>
                                    <td><b>Check Out</b></td>
                                    <td id="getCheckOut"></td>
                                </tr>
                                <tr>
                                    <td><b>Total Amount</b></td>
                                    <td id="getTotalPrice"></td>
                                </tr>
                                <tr>
                                    <td><b>Payment Status</b></td>
                                    <td id="getPaymentStaus"></td>
                                </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <a class="btn btn-primary" style="border-radius:60px;" href="index.php?reservation"><i class="fa fa-check-circle"></i></a>
                </div>
            </div>

        </div>
    </div>


<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>



    <script type="text/javascript">


        $( function() {
            $( "#check_in_date" ).datepicker({
                dateFormat: "(dd-mm-yy)"
            });


        } );


        $( function() {
            $( "#check_out_date" ).datepicker({
                dateFormat: "(dd-mm-yy)"
            });
        } );
        $('#room_type').change(function() {

            $('.room_disabled').attr('disabled', 'disabled'); //Disable
            let id = $("#room_type option:selected").text();
            //alert(id);
            axios.post('/room_type', {
                id: id
            })


                .then(function(response) {
                    if (response.status == 200) {




                        $('#room_no').empty();

                        var dataJSON = null;
                        dataJSON = response.data;
                        $.each(dataJSON, function(i, item) {

                            $('#room_no').append($('<option>', {
                                value: i,
                                text: dataJSON[i].room_no
                            }));

                        });
                        //alert(dataJSON[0].room_free);
                        // const price = dataJSON[0].room_free * dateDay;
                        // $('#room_no').val(dataJSON[0].room_no)
                        // alert(price)
                    } else {

                    }
                }).catch(function(error) {

            })

        });


        $('#check_in_date, #check_out_date').change(function() {

            const check_in =  $('#check_in_date').val().toString();
            const check_out =  $('#check_out_date').val();
            if(check_in && check_out!=0){
                const myArray = check_in.split("(");
                const myArray1 = myArray[1].toString();
                const myArray2 = myArray1.split("-");
                //console.log(myArray2[0]);

                const myArra = check_out.split("(");
                const myArra1 = myArra[1].toString();
                const myArra2 = myArra1.split("-");
                //console.log(myArra2[0]);

                if(myArray2[0] < myArra2[0]){
                    const dateDay = myArra2[0]-myArray2[0];
                    $('#staying_day').html(dateDay);

                    let id = $("#room_no option:selected").text();
                    //alert(id)

                    axios.post('/price', {
                        id: id
                    })


                        .then(function(response) {
                            if (response.status == 200) {





                                let dataJSON = response.data;

                                //alert(dataJSON[0].room_free);
                                const price = dataJSON[0].room_free * dateDay;
                                $('#total_price').html(price)
                                // alert(price)
                            } else {

                            }
                        }).catch(function(error) {

                    })
                }else{

                    showToast('Date Select Wrong!', {
                        duration: 5000, // The time interval after notification disappear
                        background: '#20b2aa', // Background color for toast notification
                        color: '#f1f1f1', //Text color
                        borderRadius: '15px', //Border Radius,
                        marginTop: '89px'
                    });

                    $('#check_out_date').val('Please Select Your Correct Date');
                }
            }





        });

        $('.reservation').click(function() {

            let RoomType = $("#room_type option:selected").text();
            let RoomNo = $("#room_no option:selected").text();
            let check_in_date = $('#check_in_date').val();
            let check_out_date = $('#check_out_date').val();
            let email = $('#email').val();
            let first_name = $('#first_name').val();
            let last_name = $('#last_name').val();
            let contact_no = $('#contact_no').val();
            const id_card_id = $("#id_card_id option:selected").text();
            let id_card_no = $('#id_card_no').val();
            let address = $('#address').val();
            let transaction = $('#transaction').val();
            let payment = $('#payment').val();
            let pr = $('#total_price').html();
            let p = pr-payment;
            let day = $('#staying_day').html();

            //console.log(RoomType+RoomNo+check_in_date+check_out_date+email+first_name+last_name+contact_no+id_card_id+address+transaction+id_card_no);

            //alert(RoomNo)
            axios.post('/ReservationAdd', {
                RoomType: RoomType,
                RoomNo: RoomNo,
                check_in_date: check_in_date,
                check_out_date: check_out_date,
                email: email,
                first_name: first_name,
                last_name: last_name,
                contact_no: contact_no,
                id_card_id: id_card_id,
                address: address,
                transaction: transaction,
                id_card_no: id_card_no,
                payment: p,
                day:day



            })


                .then(function(response) {
                    if (response.status == 200) {
                        if (response.data == 1) {


                            showToast('Successfully Reservation Data Added!', {
                                duration: 5000, // The time interval after notification disappear
                                background: '#20b2aa', // Background color for toast notification
                                color: '#f1f1f1', //Text color
                                borderRadius: '15px', //Border Radius,
                                marginTop: '89px'
                            });
                            window.location='/thank'
                        } else if(response.data == -1) {

                            showToast('Reservation Data Already Added!', {
                                duration: 5000, // The time interval after notification disappear
                                background: '#20b2aa', // Background color for toast notification
                                color: '#f1f1f1', //Text color
                                borderRadius: '15px', //Border Radius,
                                marginTop: '89px'
                            });


                        }


                    } else {




                        showToast('Reservation Data Added Failed!', {
                            duration: 5000, // The time interval after notification disappear
                            background: '#20b2aa', // Background color for toast notification
                            color: '#f1f1f1', //Text color
                            borderRadius: '15px', //Border Radius,
                            marginTop: '89px'
                        });
                    }
                }).catch(function(error) {



                showToast('Reservation Data Added Failed!', {
                    duration: 5000, // The time interval after notification disappear
                    background: '#ff2323', // Background color for toast notification
                    color: '#000000', //Text color
                    borderRadius: '7px', //Border Radius,
                    marginTop: '89px'
                });
            })



        });

    </script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js" integrity="sha512-rstIgDs0xPgmG6RX1Aba4KV5cWJbAMcvRCVmglpam9SoHZiUCyQVDdH2LPlxoHtrv17XWblE/V/PP+Tr04hbtA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>    <script>
        if ($("#booking").length > 0) {
            $("#booking").validate({
                rules: {
                    first_name: {
                        required: true,
                        minlength: 3
                    },
                    last_name: {
                        required: true,
                        minlength: 3
                    },
                    email: {
                        required: true,

                    },
                    contact_no: {
                        required: true,
                        minlength: 10
                    },
                    id_card_no: {
                        required: true,
                        minlength: 5
                    },
                    address: {
                        required: true,
                        minlength: 10
                    },
                    payment: {
                        required: true,

                    },
                    transaction: {
                        required: true,
                        minlength: 7
                    },

                },
                messages: {
                    first_name: {
                        required: "Please enter First Name",
                    },
                    last_name: {
                        required: "Please enter Last Name",
                    },
                    contact_no: {
                        required: "Please enter min 10 digit",
                    },


                },
            })
        }
    </script>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('backend.index1', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Laravel Project\Hotel_Management_System_Client_Project\sanzid_shihab\resources\views/frontend/userFrom.blade.php ENDPATH**/ ?>