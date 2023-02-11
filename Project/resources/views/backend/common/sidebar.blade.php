
<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
    <div class="profile-sidebar">
        <div class="profile-userpic">
            <img src="img/user.png" class="img-responsive" alt="">
        </div>
        <div class="profile-usertitle">
            <div class="profile-usertitle-name"> {{ Auth::user()->name }}</div>
            <div class="profile-usertitle-status"><span class="indicator label-success"></span>Manager</div>
        </div>
        <div class="clear"></div>
    </div>
    <div class="divider"></div>

    <ul class="nav menu ">

            <li>
                <a class="d" href="{{url('/admin')}}"><em class="fa fa-dashboard">&nbsp;</em>
                    Dashboard
                </a>
            </li>




            <li>
                <a class="d" href="{{url('/Reservation')}}"><em class="fa fa-calendar">&nbsp;</em>
                    Reservation
                </a>
            </li>




            <li>
                <a class="d" href="{{url('/manage_room')}}"><em class="fa fa-bed">&nbsp;</em>
                    Manage Rooms
                </a>
            </li>




            <li>
                <a class="d" href="{{url('/staff_section')}}"><em class="fa fa-users">&nbsp;</em>
                    Staff Section
                </a>
            </li>




            <li >
                <a class="d" href="{{url('/complain')}}"><em class="fa fa-comments">&nbsp;</em>
                    Manage Complaints
                </a>
            </li>

        <li >
            <a class="d" href="{{url('/payment_Ok1')}}"><em class="fa fa-cart-shopping">&nbsp;</em>
                Payment
            </a>
        </li>
        <li>
            <a class="d" href="{{url('/customer')}}"><em class="fa-solid fa-person">&nbsp;</em>
                Customer List
            </a>
        </li>
       <li class="">
            <a class="d" href="{{url('/visitors')}}"><em class="fa-solid fa-glasses">&nbsp;</em>
                Visitor List
            </a>
        </li>










    </ul>
</div>

<!--/.sidebar-->

