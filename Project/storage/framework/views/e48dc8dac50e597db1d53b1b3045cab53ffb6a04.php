<!DOCTYPE html>
<html>
<head>
    <title>Rafiul Islam</title>

    <style>
        table, th, td {
            border: 1px solid red;
            border-collapse: collapse;
            padding:10px;

        }

        h4{

            font-size:20px;

        }
        h5{

            font-size:15px;
            margin-left:36px;
        }

        img {

            width:95%;
            height: 130px;

        }


        @media screen and (max-width: 1200px) {

            img {

                width:95%;
                height: 130px;

            }
        }

        @media screen and (max-width: 991px) {
            img {

                width:95%;
                height: 130px;

            }
        }
        @media screen and (max-width: 768px) {
            img {

                width:95%;
                height: 130px;

            }
        }
        @media screen and (max-width: 480px) {

            img {

                width:95%;
                height: 80px;

            }
        }
    </style>
</head>
<body>
<h4>Your application has been successfully submitted to us</h4>
    <p>Assalamualikum <?php echo e($mailData['name']); ?>! How are You? I hope you are well . Your application has been successfully submitted to us. You can walk to our hotel.</p>
   <img src="<?php echo e($message->embed(public_path().'/img/r.jpg')); ?>" alt="">
<h5>Your Room Details</h5>
<ul>
    <li>Room Number : <?php echo e($mailData['room_no']); ?> </li>
    <li>Room Type : <?php echo e($mailData['room_type']); ?> </li>
    <li>Room Fee : <?php echo e($mailData['room_free']); ?> </li>
    <li>Booking Date : <?php echo e($mailData['booking_date']); ?> </li>
    <li>Advance Payment : <?php echo e($mailData['payment']); ?> </li>
</ul>
<br>
<br>
<br>
    <span><h5>You can contact us for any problem</h5></span>
    <table style="width:100%">


        <tr>

            <th>Company Owner</th>
            <th>Email</th>
            <th>Phone</th>
        </tr>
        <tr>
            <td>Rafiul Islam</td>
            <td>rafiul15-2265@diu.edu.bd</td>
            <td>+88 01701729512</td>
        </tr>
        <tr>
            <td>Rakibul Islam</td>
            <td>rakibul15-2264@diu.edu.bd</td>
            <td>+88 01729542809</td>
        </tr>

    </table>


</body>
</html>
<?php /**PATH D:\Laravel Project\Hotel_Management_System_Client_Project\sanzid_shihab\resources\views/email/sendMail.blade.php ENDPATH**/ ?>