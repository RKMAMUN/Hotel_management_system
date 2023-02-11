<?php $__env->startSection('content'); ?>
    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="">
                        <em class="fa fa-home"></em>
                    </a></li>
                <li class="active">Manage Rooms</li>
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
                    <div class="panel-heading">Manage Rooms
                        <button id="addRoomButton"   class="btn btn-secondary pull-right" style="border-radius:0%">Add
                            Rooms</button>


                    </div>
                    <div class="panel-body">

                        <table id="dataTable" class="table table-striped table-bordered scroll">
                            <thead>
                                <tr>
                                    <th>Room No</th>
                                    <th>Room Type</th>
                                    <th>Room Free</th>
                                    <th>Booking Status</th>
                                    <th>Check Out</th>
                                    <th>Action</th>

                                </tr>
                            </thead>
                            <tbody class="room_table">




                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>

        <!-- Add Room Modal -->

        <div class="modal fade Room_confirmation"  tabindex="-1" role="dialog"  aria-hidden="true">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Add New Room</h4>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <form id="addRoom" data-toggle="validator" role="form">
                                    <div class="response"></div>
                                    <div class="form-group">
                                        <label>Room Type</label>
                                        <input class="form-control" placeholder="Enter Write Your Room Type" id="room_type"
                                            data-error="Enter Room Type" required>
                                        <div class="help-block with-errors"></div>
                                    </div>

                                    <div class="form-group">
                                        <label>Room No</label>
                                        <input class="form-control" placeholder="Enter Write Your Room No" id="room_no"
                                            data-error="Enter Room No" required>
                                        <div id="room_no1" style="color: red" class="help-block with-errors"></div>
                                    </div>

                                    <div class="form-group">
                                        <label>Room Free</label>
                                        <input class="form-control" placeholder="Enter Write Your Room Free" id="room_free"
                                            data-error="Enter Room Free" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <button type="submit" id="addRoomBtn" class="btn btn-success">Add Room</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!--Edit Room Modal -->
        <div id="editRoom" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Edit Room</h4>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <form id="roomEditFrom" data-toggle="validator" role="form">
                                    <div class="edit_response"></div>
                                    <div class="form-group">
                                        <label>Room Type</label>
                                        <select class="form-control" id="edit_room_type" required
                                            data-error="Select Room Type">
                                            <option selected disabled>Select Room Type</option>

                                        </select>
                                        <div class="help-block with-errors"></div>
                                    </div>

                                    <div class="form-group">
                                        <label>Room No</label>
                                        <input class="form-control" placeholder="Room No" id="edit_room_no" required
                                            data-error="Enter Room No">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <input type="hidden" id="edit_room_id">
                                    <button class="btn btn-success pull-right">Edit Room</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!---customer details-->
        <div  id="cutomerDetailsModal" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content" style="border: 2px solid red">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title text-center"><b>Customer's Detail</b></h4>
                    </div>
                    <div class="modal-body" >
                        <h3 id="CustomerViewID"></h3>
                        <div class="row">
                            <div class="col-lg-12">
                                <table class="table table-responsive table-bordered">
                                    <!-- <thead>
                                    <tr>
                                        <th>Title</th>
                                        <th>Detail</th>
                                    </tr>
                                    </thead> -->


                                    <tbody>
                                        <tr>
                                            <td><b>Customer Name</b></td>
                                            <td><span id="customer_name1"></span> <span id="customer_name2"></span></td>
                                        </tr>
                                        <tr>
                                            <td><b>Room Type</b></td>
                                            <td id="room_type1"></td>
                                        </tr>
                                        <tr>
                                            <td><b>Room Number</b></td>
                                            <td id="room_no12"></td>
                                        </tr>
                                        <tr>
                                            <td><b>Room Fee</b></td>
                                            <td id="room_fee"></td>
                                        </tr>



                                        <tr>
                                            <td><b>Contact Number</b></td>
                                            <td id="customer_contact_no"></td>
                                        </tr>
                                        <tr>
                                            <td><b>Email</b></td>
                                            <td id="customer_email"></td>
                                        </tr>
                                        <tr>
                                            <td><b>ID Card Type</b></td>
                                            <td id="customer_id_card_type"></td>
                                        </tr>
                                        <tr>
                                            <td><b>ID Card Number</b></td>
                                            <td id="customer_id_card_number"></td>
                                        </tr>
                                        <tr>
                                            <td><b>Total Day</b></td>
                                            <td id="booking_date"></td>
                                        </tr>
                                        <tr>
                                            <td><b>Check In Date</b></td>
                                            <td id="check_in_date"></td>
                                        </tr>
                                        <tr>
                                            <td><b>Check Out Date</b></td>
                                            <td id="check_out_date"></td>
                                        </tr>

                                        <tr>
                                            <td><b>Address</b></td>
                                            <td id="customer_address"></td>
                                        </tr>



                                    </tbody>

                                </table>
                                <h4 style="color: red; text-align: center"><b>We Will Get <span id="advance_price"></span> TK From You!</b></h4>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!---customer details ends here-->

        <!-- Check In Modal -->
        <div id="checkIn" class="modal fade" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title text-center"><b>Room - Check In</b></h4>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <table class="table table-responsive table-bordered">

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
                                            <td><b>Room Number</b></td>
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
                                            <td><b>Total Price</b></td>
                                            <td id="getTotalPrice"></td>
                                        </tr>
                                    </tbody>
                                </table>
                                <form role="form" id="advancePayment">
                                    <div class="payment-response"></div>
                                    <div class="form-group col-lg-12">
                                        <label>Advance Payment</label>
                                        <input type="number" class="form-control" id="advance_payment"
                                            placeholder="Please Enter Amounts Here..">
                                    </div>
                                    <input type="hidden" id="getBookingID" value="">
                                    <button type="submit" class="btn btn-primary pull-right">Payment & Check In</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- Check Out Modal-->
        <div id="checkOut" class="modal fade" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title text-center"><b>Room- Check Out</b></h4>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-12">



                                <table class="table table-responsive table-bordered">
                                    <!-- <thead>
                                    <tr>
                                        <th>Title</th>
                                        <th>Detail</th>
                                    </tr>
                                    </thead> -->


                                    <tbody>
                                    <tr>
                                        <td><b>Customer Name</b></td>
                                        <td><span id="customer_name11"></span> <span id="customer_name21"></span></td>
                                    </tr>
                                    <tr>
                                        <td><b>Room Type</b></td>
                                        <td id="room_type11"></td>
                                    </tr>
                                    <tr>
                                        <td><b>Room Number</b></td>
                                        <td id="room_no121"></td>
                                    </tr>
                                    <tr>
                                        <td><b>Room Fee</b></td>
                                        <td id="room_fee1"></td>
                                    </tr>



                                    <tr>
                                        <td><b>Contact Number</b></td>
                                        <td id="customer_contact_no1"></td>
                                    </tr>
                                    <tr>
                                        <td><b>Email</b></td>
                                        <td id="customer_email1"></td>
                                    </tr>
                                    <tr>
                                        <td><b>ID Card Type</b></td>
                                        <td id="customer_id_card_type1"></td>
                                    </tr>
                                    <tr>
                                        <td><b>ID Card Number</b></td>
                                        <td id="customer_id_card_number1"></td>
                                    </tr>
                                    <tr>
                                        <td><b>Total Day</b></td>
                                        <td id="booking_date1"></td>
                                    </tr>
                                    <tr>
                                        <td><b>Check In Date</b></td>
                                        <td id="check_in_date1"></td>
                                    </tr>
                                    <tr>
                                        <td><b>Check Out Date</b></td>
                                        <td id="check_out_date1"></td>
                                    </tr>

                                    <tr>
                                        <td><b>Address</b></td>
                                        <td id="customer_address1"></td>
                                    </tr>

                                    

                                    </tbody>

                                </table>

                                <div class="form-group">
                                    <h4>You have to do the total money council</h4>
                                    <input disabled class="form-control" placeholder="Room No" id="advance_price1" required
                                           data-error="advance_price1">
                                    <div class="help-block with-errors"></div>
                                </div>


                             <button style="background-color: red;color: white" type="button" class="check_out_clear  btn-lg p-5">Payment Clear</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>


        <div class="row">
            <div class="col-sm-12">
                <p class="back-link"  >Developed By Shanzid Shihab</p>
            </div>
        </div>

    </div>
    <!--/.main-->
<?php $__env->stopSection(); ?>


<?php $__env->startSection('script'); ?>

    <script type="text/javascript">


            getRoomData();

        //For Room Table
        function getRoomData() {


            axios.get('/RoomDetails')
                .then(function(response) {
                    //alert("Robin");

                    if (response.status === 200) {



                        //$('.room_table').DataTable().destroy();

                        $('.room_table').empty();

                        //  $('#dataTable').DataTable();

                        var dataJSON = response.data;


                         // alert(book)

                        $.each(dataJSON, function(i, item) {

                            let book, checkout, view,edit
                            if(dataJSON[i].booking_status==0){
                                 book = '<button class="btn btn-success">Book Room</button>';
                                 checkout = '';
                                 del = '<i class=""></i>';
                                edit = '<i class="btn-info fas fa-edit fa-2x ml-5 text-danger"></i>';
                                view ='';

                            }else if(dataJSON[i].booking_status==1){
                                book = '<button class="btn btn-danger">Booked</button>';
                                checkout = '<button class="btn btn-primary">Check Out</button>';
                                view = '<i class="fa-solid fa-eye fa-2x text-danger"></i>';
                                edit = '';
                            }
                            $('<tr>').html(


                                "<td>" + dataJSON[i].room_no + "</td>" +
                                "<td>" + dataJSON[i].room_type + "</td>" +
                                "<td>" + dataJSON[i].room_free + "</td>" +
                                "<td>" + book + "</td>" +
                                "<td><a class='checkoutbtn' data-id=" + dataJSON[i].room_no +">" + checkout + "</a></td>" +

                                "<td><a class='CustomerView mr-1 ' style='margin-left: 6px; border-radius: 20px'  data-id=" + dataJSON[i].room_no +
                                " >"+view+"</a>" +
                                "<a class='CustomerEdit mr-1 ' style='margin-left: 6px; border-radius: 200px' data-id=" + dataJSON[i].room_no +
                                " >"+edit+"</a>" +
                                "<a class='CustomerDelete ' style='margin-left: 6px; border-radius: 200px'   data-id=" + dataJSON[i].room_no + ">" +
                                "<i class='fa-solid fa-trash fa-2x text-danger'></i></a></td>"


                            ).appendTo('.room_table');
                        });

                        $('.check_out_clear').click(function (){
                           const customer_name11= $('#customer_name11').html();
                            const customer_name21=$('#customer_name21').html();
                            const room_type11=$('#room_type11').html();
                            const room_no121=$('#room_no121').html();
                            const room_fee1=$('#room_fee1').html();
                            const day=$('#booking_date1').html();
                            const customer_contact_no1= $('#customer_contact_no1').html();
                            const customer_email1=$('#customer_email1').html();
                            const customer_id_card_type1=$('#customer_id_card_type1').html();
                            const customer_id_card_number1=$('#customer_id_card_number1').html();
                            const customer_address1=$('#customer_address1').html();
                            const payment= room_fee1 * day;
                            const check_in_date1=$('#check_in_date1').html();
                            const check_out_date1=$('#check_out_date1').html();



                            axios.post('/payment_Ok', {
                                RoomType: room_type11,
                                RoomNo: room_no121,
                                check_in_date: check_in_date1,
                                check_out_date: check_out_date1,
                                email: customer_email1,
                                first_name: customer_name11,
                                last_name: customer_name21,
                                contact_no: customer_contact_no1,
                                id_card_id: customer_id_card_type1,
                                address: customer_address1,
                                id_card_no: customer_id_card_number1,
                                payment: payment,
                                day:day,
                                room_fee1:room_fee1



                            })


                                .then(function(response) {
                                    if (response.status == 200) {
                                        if (response.data == 1) {


                                            showToast('Successfully Payment OK!', {
                                                duration: 5000, // The time interval after notification disappear
                                                background: '#20b2aa', // Background color for toast notification
                                                color: '#f1f1f1', //Text color
                                                borderRadius: '15px', //Border Radius,
                                                marginTop: '89px'
                                            });

                                            getRoomData();
                                            $('#checkOut').modal('hide');
                                        } else {

                                            showToast('Payment Failed!', {
                                                duration: 5000, // The time interval after notification disappear
                                                background: '#20b2aa', // Background color for toast notification
                                                color: '#f1f1f1', //Text color
                                                borderRadius: '15px', //Border Radius,
                                                marginTop: '89px'
                                            });

                                            getRoomData();
                                            $('#checkOut').modal('hide');
                                        }


                                    } else {




                                        showToast('Payment Failed!', {
                                            duration: 5000, // The time interval after notification disappear
                                            background: '#20b2aa', // Background color for toast notification
                                            color: '#f1f1f1', //Text color
                                            borderRadius: '15px', //Border Radius,
                                            marginTop: '89px'
                                        });
                                        getRoomData();
                                        $('#checkOut').modal('hide');
                                    }
                                }).catch(function(error) {



                                showToast('Payment Failed!', {
                                    duration: 5000, // The time interval after notification disappear
                                    background: '#ff2323', // Background color for toast notification
                                    color: '#000000', //Text color
                                    borderRadius: '7px', //Border Radius,
                                    marginTop: '89px'
                                });
                                getRoomData();
                                $('#checkOut').modal('hide');
                            })

                        })
                        $('.checkoutbtn').click(function (){
                            $('#checkOut').modal('show');

                            const id = $(this).data('id');

                            axios.post('/checkout', {
                                id: id
                            })
                                .then(function(response) {


                                    if (response.status == 200) {

                                        const jsonData = response.data;
                                        console.log(jsonData[1][0].room_no)

                                        $('#customer_name11').html(jsonData[1][0].first_name);
                                        $('#customer_name21').html(jsonData[1][0].last_name);
                                        $('#room_type11').html(jsonData[0][0].room_type);
                                        $('#room_no121').html(jsonData[0][0].room_no);
                                        $('#room_fee1').html(jsonData[0][0].room_free);
                                        $('#booking_date1').html(jsonData[1][0].booking_date);
                                        $('#customer_contact_no1').html(jsonData[1][0].customer_number);
                                        $('#customer_email1').html(jsonData[1][0].email);
                                        $('#customer_id_card_type1').html(jsonData[1][0].id_card_type);
                                        $('#customer_id_card_number1').html(jsonData[1][0].id_card_number);
                                        $('#customer_address1').html(jsonData[1][0].address);
                                        $('#advance_price1').val('You have to pay a total of '+jsonData[1][0].advance_payment+" TK");
                                        $('#check_in_date1').html(jsonData[1][0].check_in);
                                        $('#check_out_date1').html(jsonData[1][0].check_out);



                                    } else {

                                    }

                                })
                                .catch(function(error) {




                                });
                        })

                        $('.CustomerView').click(function (){
                            $('#cutomerDetailsModal').modal('show');

                            const id = $(this).data('id');
                            //alert(id)
                           // $('#CustomerViewID').html(id);



                            axios.post('/CustomerShow', {
                                id: id
                            })
                                .then(function(response) {


                                    if (response.status == 200) {

                                        const jsonData = response.data;
                                        console.log(jsonData[1][0].room_no)

                                         $('#customer_name1').html(jsonData[1][0].first_name);
                                         $('#customer_name2').html(jsonData[1][0].last_name);
                                         $('#room_type1').html(jsonData[0][0].room_type);
                                         $('#room_no12').html(jsonData[0][0].room_no);
                                         $('#room_fee').html(jsonData[0][0].room_free);
                                         $('#booking_date').html(jsonData[1][0].booking_date);
                                         $('#customer_contact_no').html(jsonData[1][0].customer_number);
                                         $('#customer_email').html(jsonData[1][0].email);
                                         $('#customer_id_card_type').html(jsonData[1][0].id_card_type);
                                         $('#customer_id_card_number').html(jsonData[1][0].id_card_number);
                                         $('#customer_address').html(jsonData[1][0].address);
                                         $('#advance_price').html(jsonData[1][0].advance_payment);
                                         $('#check_in_date').html(jsonData[1][0].check_in);
                                         $('#check_out_date').html(jsonData[1][0].check_out);

                                        // alert(jsonData[0].room_no);

                                    } else {

                                    }

                                })
                                .catch(function(error) {




                                });

                        });
                        $(document).ready(function(){

                            $('#dataTable').DataTable({
                                "order": false,
                                "bDestroy":true
                            });
                            $('.dataTables_length').addClass('bs-select');
                        });


                    } else {

                    }


                })
                .catch(function(error) {

                    // alert(1)

                });


        }






$('#addRoomButton').click(function(){

     $('.Room_confirmation').modal('show');
    // $('.Room_confirmation').show('modal')
     //$('.Room_confirmation').show()
})


        $('#addRoomBtn').click(function() {
            let RoomType = $('#room_type').val();
            let RoomNo = $('#room_no').val();
            let RoomFree = $('#room_free').val();

           // alert(RoomType+RoomNo+RoomFree);

            RoomAdd(RoomType, RoomNo, RoomFree);
        });

        function RoomAdd(RoomType, RoomNo, RoomFree) {


            axios.post('/roomAdd', {
                    RoomNo: RoomNo,
                    RoomType: RoomType,
                    RoomFree: RoomFree

                })


                .then(function(response) {
                    if (response.status == 200) {
                        if (response.data == 1) {


                            $('#room_no1').html('');
                            $('#room_no').val('');
                            $('#room_type').val('');
                            $('#room_free').val('');
                            showToast('Successfully Room Data Added!', {
                                duration: 5000, // The time interval after notification disappear
                                background: '#20b2aa', // Background color for toast notification
                                color: '#f1f1f1', //Text color
                                borderRadius: '15px', //Border Radius,
                                marginTop: '89px'
                            });
                            getRoomData();
                            $('.Room_confirmation').modal('hide');

                        } else if(response.data == -1) {
                            $('#room_no1').html('Room Number Already Added!');
                            showToast('Room Number Already Added!', {
                                duration: 5000, // The time interval after notification disappear
                                background: '#20b2aa', // Background color for toast notification
                                color: '#f1f1f1', //Text color
                                borderRadius: '15px', //Border Radius,
                                marginTop: '89px'
                            });
                            //$('.Room_confirmation').modal('hide');
                            getRoomData();
                        }


                    } else {




                        showToast('Room Data Added Failed!', {
                            duration: 5000, // The time interval after notification disappear
                            background: '#20b2aa', // Background color for toast notification
                            color: '#f1f1f1', //Text color
                            borderRadius: '15px', //Border Radius,
                            marginTop: '89px'
                        });
                        $('.Room_confirmation').modal('hide');
                        getRoomData();
                    }
                }).catch(function(error) {


                   // $('#addRoom').modal('hide');
                //     showToast('Room Data Added Failed!', {
                //         duration: 5000, // The time interval after notification disappear
                //         background: '#ff2323', // Background color for toast notification
                //         color: '#000000', //Text color
                //         borderRadius: '7px', //Border Radius,
                //         marginTop: '89px'
                //     });
                 $('#addRoom').modal('hide');
                })

            getRoomData();
        }


    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Laravel Project\sanzid_shihab\resources\views/backend/manage_room.blade.php ENDPATH**/ ?>