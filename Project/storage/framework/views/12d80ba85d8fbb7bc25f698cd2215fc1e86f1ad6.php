<?php $__env->startSection('content'); ?>
    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="#">
                        <em class="fa fa-home"></em>
                    </a></li>
                <li class="active">Manage Staffs</li>
            </ol>
        </div>
        <!--/.row-->



        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Employee Details:
                        <button id="employeeModalID" href="" class="btn btn-secondary pull-right"
                            style="border-radius:0%">Add Employee</button>
                    </div>
                    <div class="panel-body">

                        <table class="table table-striped table-bordered table-responsive"
                            id="dataTable">
                            <thead>
                                <tr>
                                    <th>Sr. No</th>
                                    <th>Employee Name</th>
                                    <th>Staff</th>
                                    <th>Shift</th>
                                    <th>Contact Number</th>
                                    <th>Address</th>
                                    <th>salary</th>

                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody class="staff_table">



                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <p class="back-link">Developed By Shanzid Shihab</p>
            </div>
        </div>

    </div>
    <!--/.main-->



    <!-- Employee Detail-->
    <div id="empDetail" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Employee Detail</h4>
                </div>
                <div class="modal-body">

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">Employee Detail:</div>
                                <div class="panel-body">
                                    <form data-toggle="validator" role="form" action="functionmis.php" method="post" aria-label="">
                                        <div class="row">
                                            <div class="form-group col-lg-6">
                                                <label>Staff</label>


                                                <select class="form-control" id="staff_type" required
                                                    data-error="Select Staff Type">
                                                    <option selected disabled>Select Staff Type</option>
                                                    <?php $__currentLoopData = $staff_type; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $staff_type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option id="staff_type" data-id="123">
                                                            <?php echo e($staff_type['staff_name']); ?></option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </select>
                                            </div>

                                            <div class="form-group col-lg-6">
                                                <label>Shift</label>


                                                <select class="form-control" id="shift_type" required
                                                    data-error="Select Shift Type">
                                                    <option selected disabled>Select Shift Type</option>
                                                    <?php $__currentLoopData = $shift_type; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $shift_type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option id="shift_type" data-id="123">
                                                            <?php echo e($shift_type['shift_name']); ?></option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </select>
                                            </div>

                                            <div class="form-group col-lg-6">
                                                <select style="visibility: hidden;" class="form-control" id="shift"
                                                    name="shift_id" required>
                                                    <option selected disabled>Select Staff Type</option>

                                                </select>
                                            </div>
                                            <input type="hidden" value="" id="emp_id" name="emp_id">

                                            <div class="form-group col-lg-6">
                                                <label>First Name</label>
                                                <input type="text" value="" class="form-control"
                                                    placeholder="First Name" id="first_name" name="first_name" required>
                                            </div>

                                            <div class="form-group col-lg-6">
                                                <label>Last Name</label>
                                                <input type="text" value="" class="form-control"
                                                    placeholder="Last Name" id="last_name" name="last_name" required>
                                            </div>

                                            <div class="form-group col-lg-6">
                                                <label>ID Card Type</label>
                                                <select class="form-control" id="card_type" required
                                                    data-error="Select Card Type">
                                                    <option selected disabled>Select Card Type</option>
                                                    <?php $__currentLoopData = $card_type; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $card_type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option id="card_type" data-id="123"><?php echo e($card_type['card_name']); ?>

                                                        </option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </select>
                                            </div>

                                            <div class="form-group col-lg-6">
                                                <label>ID Card No</label>
                                                <input type="text" class="form-control" placeholder="ID Card No"
                                                    id="id_card_no" value="" name="id_card_no" required>
                                            </div>
                                            <div class="form-group col-lg-6">
                                                <label>Contact Number</label>
                                                <input type="number" class="form-control" placeholder="Contact Number"
                                                    id="contact_no" value="" name="contact_no" required>
                                            </div>

                                            <div class="form-group col-lg-6">
                                                <label>Address</label>
                                                <input type="text" class="form-control" placeholder="address"
                                                    id="address" value="" name="address">
                                            </div>

                                            <div class="form-group col-lg-6">
                                                <label>Salary</label>
                                                <input type="number" class="form-control" placeholder="Salary"
                                                    id="salary" value="" name="salary" required>
                                            </div>

                                        </div>

                                        <button id="add_staff" type="button" class="btn btn-lg btn-primary"
                                            name="submit">Submit
                                        </button>
                                        <button id="reset_btn" type="button"
                                            class="btn btn-lg btn-danger">Reset</button>
                                    </form>
                                </div>
                            </div>
                        </div>


                    </div>

                </div>
            </div>

        </div>
    </div>


    <div id="staffView" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title text-center"><b>Staff Details</b></h4>
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
                                    <td><b>Employee Name</b></td>
                                    <td><span id="first_name2"></span> <span id="last_name2"></span></td>
                                </tr>
                                <tr>
                                    <td><b>Staff</b></td>
                                    <td id="staff_type2"></td>
                                </tr>
                                <tr>
                                    <td><b>Shift</b></td>
                                    <td id="shift_type2"></td>
                                </tr>
                                <tr>
                                    <td><b>Card Type</b></td>
                                    <td id="card_type2"></td>
                                </tr>



                                <tr>
                                    <td><b>Card Number</b></td>
                                    <td id="id_card_no2"></td>
                                </tr>
                                <tr>
                                    <td><b>Contact Number</b></td>
                                    <td id="contact_no2"></td>
                                </tr>
                                <tr>
                                    <td><b>Address</b></td>
                                    <td id="address2"></td>
                                </tr>
                                <tr>
                                    <td><b>Salary</b></td>
                                    <td id="salary2"></td>
                                </tr>


                                </tbody>

                            </table>


                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- Employee Detail-->
    <div id="empDetailEdit" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Employee Detail</h4>
                    <h4 id="id11"></h4>
                </div>
                <div class="modal-body">

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">Employee Detail:</div>
                                <div class="panel-body">
                                    <form data-toggle="validator" role="form" action="functionmis.php"
                                        method="post">
                                        <div class="row">
                                            <div class="form-group col-lg-6">
                                                <label>Staff</label>


                                                <select class="form-control" id="staff_type1" required
                                                    data-error="Select Staff Type">
                                                    <option selected disabled>Select Staff Type</option>
                                                    <?php $__currentLoopData = $staff_type1; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $staff_type1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option id="staff_type1" data-id="123">
                                                            <?php echo e($staff_type1['staff_name']); ?></option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </select>
                                            </div>

                                            <div class="form-group col-lg-6">
                                                <label>Shift</label>


                                                <select class="form-control" id="shift_type1" required
                                                    data-error="Select Shift Type">
                                                    <option selected disabled>Select Shift Type</option>
                                                    <?php $__currentLoopData = $shift_type1; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $shift_type1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option id="shift_type1" data-id="123">
                                                            <?php echo e($shift_type1['shift_name']); ?></option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </select>
                                            </div>

                                            <div class="form-group col-lg-6">
                                                <select style="visibility: hidden;" class="form-control" id="shift"
                                                    name="shift_id" required>
                                                    <option selected disabled>Select Staff Type</option>

                                                </select>
                                            </div>
                                            <input type="hidden" value="" id="emp_id" name="emp_id">

                                            <div class="form-group col-lg-6">
                                                <label>First Name</label>
                                                <input type="text" value="" class="form-control"
                                                    placeholder="First Name" id="first_name1" name="first_name" required>
                                            </div>

                                            <div class="form-group col-lg-6">
                                                <label>Last Name</label>
                                                <input type="text" value="" class="form-control"
                                                    placeholder="Last Name" id="last_name1" name="last_name" required>
                                            </div>

                                            <div class="form-group col-lg-6">
                                                <label>ID Card Type</label>
                                                <select class="form-control" id="card_type1" required
                                                    data-error="Select Card Type">
                                                    <option selected disabled>Select Card Type</option>
                                                    <?php $__currentLoopData = $card_type1; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $card_type1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option id="card_type1" data-id="123">
                                                            <?php echo e($card_type1['card_name']); ?></option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </select>
                                            </div>

                                            <div class="form-group col-lg-6">
                                                <label>ID Card No</label>
                                                <input type="text" class="form-control" placeholder="ID Card No"
                                                    id="id_card_no1" value="" name="id_card_no" required>
                                            </div>
                                            <div class="form-group col-lg-6">
                                                <label>Contact Number</label>
                                                <input type="number" class="form-control" placeholder="Contact Number"
                                                    id="contact_no1" value="" name="contact_no" required>
                                            </div>

                                            <div class="form-group col-lg-6">
                                                <label>Address</label>
                                                <input type="text" class="form-control" placeholder="address"
                                                    id="address1" value="" name="address">
                                            </div>

                                            <div class="form-group col-lg-6">
                                                <label>Salary</label>
                                                <input type="number" class="form-control" placeholder="Salary"
                                                    id="salary1" value="" name="salary" required>
                                            </div>

                                        </div>

                                        <button id="edit_staff1" type="button" class="btn btn-lg btn-primary"
                                            name="submit">Submit
                                        </button>
                                        <button id="reset_btn1" type="button"
                                            class="btn btn-lg btn-danger">Reset</button>
                                    </form>
                                </div>
                            </div>
                        </div>


                    </div>

                </div>
            </div>

        </div>
    </div>


<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    <script>
        $('#add_staff').click(function() {

            const staff = $("#staff_type option:selected").text();
            const firstName = $('#first_name').val();
            const lastName = $('#last_name').val();
            const card_type = $("#card_type option:selected").text();
            const shift_type = $("#shift_type option:selected").text();
            const id_card_no = $('#id_card_no').val();
            const contact_no = $('#contact_no').val();
            const address = $('#address').val();
            const salary = $('#salary').val();

            //console.log(RoomType+RoomNo+check_in_date+check_out_date+email+first_name+last_name+contact_no+id_card_id+address+transaction+id_card_no);

            //alert(RoomNo)
            axios.post('/staffAdd', {
                    staff: staff,
                    firstName: firstName,
                    lastName: lastName,
                    card_type: card_type,
                    id_card_no: id_card_no,
                    contact_no: contact_no,
                    address: address,
                    salary: salary,
                    shift_type: shift_type



                })


                .then(function(response) {
                    if (response.status == 200) {
                        if (response.data == 1) {


                            showToast('Successfully Staff Data Added!', {
                                duration: 5000, // The time interval after notification disappear
                                background: '#20b2aa', // Background color for toast notification
                                color: '#f1f1f1', //Text color
                                borderRadius: '15px', //Border Radius,
                                marginTop: '89px'
                            });
                            $('#empDetail').modal('hide');
                            getStaffData();
                        } else if (response.data == -1) {

                            showToast('Staff Data Already Added!', {
                                duration: 5000, // The time interval after notification disappear
                                background: '#20b2aa', // Background color for toast notification
                                color: '#f1f1f1', //Text color
                                borderRadius: '15px', //Border Radius,
                                marginTop: '89px'
                            });

                            getStaffData();
                        }


                    } else {




                        showToast('Staff Data Added Failed!', {
                            duration: 5000, // The time interval after notification disappear
                            background: '#20b2aa', // Background color for toast notification
                            color: '#f1f1f1', //Text color
                            borderRadius: '15px', //Border Radius,
                            marginTop: '89px'
                        });

                        $('#empDetail').modal('hide');
                        getStaffData();
                    }
                }).catch(function(error) {



                    showToast('Staff Data Added Failed!', {
                        duration: 5000, // The time interval after notification disappear
                        background: '#ff2323', // Background color for toast notification
                        color: '#000000', //Text color
                        borderRadius: '7px', //Border Radius,
                        marginTop: '89px'
                    });

                    $('#empDetail').modal('hide');
                    getStaffData();
                })



        });

        $('#reset_btn').click(function() {

            const staff = $("#staff_type option:selected").text('');
            const firstName = $('#first_name').val('');
            const lastName = $('#last_name').val('');
            const card_type = $("#card_type option:selected").text('');
            const id_card_no = $('#id_card_no').val('');
            const contact_no = $('#contact_no').val('');
            const address = $('#address').val('');
            const salary = $('#salary').val('');


            // alert(staff+firstName+lastName+card_type+id_card_no+contact_no+address+salary)

        })
        $('#employeeModalID').click(function() {

            $('#empDetail').modal('show');
        })


        getStaffData();

        //For Room Table
        function getStaffData() {


            axios.get('/staffData')
                .then(function(response) {
                    //alert("Robin");

                    if (response.status === 200) {


                        $('.staff_table').empty();

                        var dataJSON = response.data;


                        // alert(book)

                        $.each(dataJSON, function(i, item) {


                            $('<tr>').html(

                                "<td>" + dataJSON[i].id + "</td>" +
                                "<td>" + dataJSON[i].first_name + ' ' + dataJSON[i].last_name + "</td>" +
                                "<td>" + dataJSON[i].staff_name + "</td>" +
                                "<td>" + dataJSON[i].shift + "</td>" +
                                "<td>" + dataJSON[i].contact_number + "</td>" +
                                "<td>" + dataJSON[i].address + "</td>" +
                                "<td>" + dataJSON[i].salary + "</td>" +

                                "<td><a class='CustomerView mr-1 ' style='margin-left: 6px; border-radius: 20px'  data-id=" +
                                dataJSON[i].id +
                                " >" + '<i class="fa fa-eye"></i>' + "</a>" +
                                "<a class='staffEdit mr-1 ' style='margin-left: 6px; border-radius: 200px' data-id=" +
                                dataJSON[i].id +
                                " >" + '<i class="fa fa-pencil"></i>' + "</a>" +
                                "<a class='staffDelete ' style='margin-left: 6px; border-radius: 200px'   data-id=" +
                                dataJSON[i].id + ">" +
                                "<i class='fa fa-trash text-danger'></i></a></td>"


                            ).appendTo('.staff_table');
                        });

                        $('.staffDelete').click(function (){
                            const id = $(this).data('id');
                            axios.post('/staffdel', {
                                id: id

                            })
                                .then(function (response) {
                                    if (response.data == 1) {


                                        showToast('Successfully Staff Data Delete!', {
                                            duration: 5000, // The time interval after notification disappear
                                            background: '#20b2aa', // Background color for toast notification
                                            color: '#f1f1f1', //Text color
                                            borderRadius: '15px', //Border Radius,
                                            marginTop: '89px'
                                        });

                                        getStaffData();
                                    } else{
                                        showToast('Successfully Staff Data Delete Failed!', {
                                            duration: 5000, // The time interval after notification disappear
                                            background: '#20b2aa', // Background color for toast notification
                                            color: '#f1f1f1', //Text color
                                            borderRadius: '15px', //Border Radius,
                                            marginTop: '89px'
                                        });
                                        getStaffData();
                                    }


                                })
                                .catch(function (error) {
                                    showToast('Successfully Staff Data Delete Failed!', {
                                        duration: 5000, // The time interval after notification disappear
                                        background: '#20b2aa', // Background color for toast notification
                                        color: '#f1f1f1', //Text color
                                        borderRadius: '15px', //Border Radius,
                                        marginTop: '89px'
                                    });
                                    getStaffData();
                                });
                        })


                        $('.CustomerView').click(function (){
                            $('#staffView').modal('show');

                            const id = $(this).data('id');

                            //alert(id)
                            axios.post('/staffview', {
                                id: id,

                            })
                                .then(function(response) {

                                    if (response.status == 200) {

                                        const jsonData = response.data;


                                        $("#staff_type2").html(jsonData[0].staff_name);
                                        $('#first_name2').html(jsonData[0].first_name);
                                        $('#last_name2').html(jsonData[0].last_name);
                                        $("#shift_type2").html(jsonData[0].shift);
                                        $("#card_type2").html(jsonData[0].card_type);
                                        $('#id_card_no2').html(jsonData[0].card_no);
                                        $('#contact_no2').html(jsonData[0].contact_number);
                                        $('#address2').html(jsonData[0].address);
                                        $('#salary2').html(jsonData[0].salary);
                                        //$('#id12').html(jsonData[0].id);





                                    } else {

                                    }
                                    console.log(response);
                                })
                                .catch(function(error) {
                                    console.log(error);
                                });
                        })

                        $('.staffEdit').click(function() {


                            $('#empDetailEdit').modal('show');

                            // const staff = $("#staff_type option:selected").text();
                            // const firstName =  $('#first_name').val();
                            // const lastName =  $('#last_name').val('');
                            // const card_type =  $("#card_type option:selected").text();
                            // const id_card_no =  $('#id_card_no').val();
                            // const contact_no =  $('#contact_no').val();
                            // const address =  $('#address').val();
                            // const salary =  $('#salary').val();
                            const id = $(this).data('id');

                            //alert(id)
                            axios.post('/editstaffd', {
                                    id: id,

                                })
                                .then(function(response) {

                                    if (response.status == 200) {

                                        const jsonData = response.data;


                             $("#staff_type1 option:selected").text(jsonData[0].staff_name);
                             $('#first_name1').val(jsonData[0].first_name);
                             $('#last_name1').val(jsonData[0].last_name);
                             $("#shift_type1 option:selected").text(jsonData[0].shift);
                             $("#card_type1 option:selected").text(jsonData[0].card_type);
                             $('#id_card_no1').val(jsonData[0].card_no);
                             $('#contact_no1').val(jsonData[0].contact_number);
                             $('#address1').val(jsonData[0].address);
                             $('#salary1').val(jsonData[0].salary);
                             $('#id11').html(jsonData[0].id);





                                    } else {

                                    }
                                    console.log(response);
                                })
                                .catch(function(error) {
                                    console.log(error);
                                });

                        })

                        $('#reset_btn1').click(function() {

                        const staff = $("#staff_type1 option:selected").text('');
                        const firstName = $('#first_name1').val('');
                        const lastName = $('#last_name1').val('');
                        const card_type = $("#card_type1 option:selected").text('');
                        const id_card_no = $('#id_card_no1').val('');
                        const contact_no = $('#contact_no1').val('');
                        const address = $('#address1').val('');
                        const salary = $('#salary1').val('');


                        // alert(staff+firstName+lastName+card_type+id_card_no+contact_no+address+salary)

                        })
                        $(document).ready(function() {

                            $('#dataTable').DataTable();
                            $('.dataTables_length').addClass('bs-select');
                        });


                    } else {

                    }


                })
                .catch(function(error) {

                    // alert(1)

                });


        }

        $('#edit_staff1').click(function(){

            const staff = $("#staff_type1 option:selected").text();
            const firstName =  $('#first_name1').val();
            const lastName =  $('#last_name1').val();
            const shift_type =  $("#shift_type1 option:selected").text();
            const card_type =  $("#card_type1 option:selected").text();
            const id_card_no =  $('#id_card_no1').val();
            const contact_no =  $('#contact_no1').val();
            const address =  $('#address1').val();
            const salary =  $('#salary1').val();
            const id = $('#id11').html();
            axios.post('/staffedit', {
                staff: staff,
                firstName: firstName,
                lastName: lastName,
                card_type: card_type,
                id_card_no: id_card_no,
                contact_no: contact_no,
                address: address,
                salary: salary,
                shift_type: shift_type,
                id:id



            })


                .then(function(response) {
                    if (response.status == 200) {
                        if (response.data == 1) {


                            showToast('Successfully Staff Data Updated!', {
                                duration: 5000, // The time interval after notification disappear
                                background: '#20b2aa', // Background color for toast notification
                                color: '#f1f1f1', //Text color
                                borderRadius: '15px', //Border Radius,
                                marginTop: '89px'
                            });
                            $('#empDetailEdit').modal('hide');
                            getStaffData();
                        } else if (response.data == -1) {

                            showToast('Staff Update Already Added!', {
                                duration: 5000, // The time interval after notification disappear
                                background: '#20b2aa', // Background color for toast notification
                                color: '#f1f1f1', //Text color
                                borderRadius: '15px', //Border Radius,
                                marginTop: '89px'
                            });

                            $('#empDetailEdit').modal('hide');
                        }


                    } else {




                        showToast('Staff Data Update Failed!', {
                            duration: 5000, // The time interval after notification disappear
                            background: '#20b2aa', // Background color for toast notification
                            color: '#f1f1f1', //Text color
                            borderRadius: '15px', //Border Radius,
                            marginTop: '89px'
                        });

                        $('#empDetailEdit').modal('hide');
                        getStaffData();
                    }
                }).catch(function(error) {



                showToast('Staff Data Update Failed!', {
                    duration: 5000, // The time interval after notification disappear
                    background: '#ff2323', // Background color for toast notification
                    color: '#000000', //Text color
                    borderRadius: '7px', //Border Radius,
                    marginTop: '89px'
                });

                $('#empDetailEdit').modal('hide');
                getStaffData();
            })





        })
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Laravel Project\Hotel_Management_System_Client_Project\sanzid_shihab\resources\views/backend/staff_section.blade.php ENDPATH**/ ?>
