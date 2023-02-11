
@extends('backend.index')
@section('content')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#">
                    <em class="fa fa-home"></em>
                </a></li>
            <li class="active">Dashboard</li>
        </ol>
    </div><!--/.row-->


    <div class="panel panel-container">
        <div class="row">
            <div class="col-xs-6 col-md-3 col-lg-3 no-padding">
                <div class="panel panel-teal panel-widget border-right">
                    <div class="row no-padding"><em class="fa fa-xl fa-bed color-blue"></em>
                        <div class="large">{{ $room_count }}</div>
                        <div class="text-muted">Total Rooms</div>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-md-3 col-lg-3 no-padding">
                <div class="panel panel-blue panel-widget border-right">
                    <div class="row no-padding"><em class="fa fa-xl fa-bookmark color-orange"></em>
                        <div class="large">{{$coustomerCount}}</div>
                        <div class="text-muted">Total Customer</div>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-md-3 col-lg-3 no-padding">
                <div class="panel panel-orange panel-widget border-right">
                    <div class="row no-padding"><em class="fa fa-xl fa-users color-teal"></em>

                        <div class="large">{{$staff}}</div>
                        <div class="text-muted">Staffs</div>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-md-3 col-lg-3 no-padding">
                <div class="panel panel-red panel-widget ">
                    <div class="row no-padding"><em class="fa fa-xl fa-comments color-red"></em>
                        <div class="large">{{$complain}}</div>
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
                        <div class="large">{{$booking_room}}</div>
                        <div class="text-muted">Booked Rooms</div>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-md-3 col-lg-3 no-padding">
                <div class="panel panel-blue panel-widget border-right">
                    <div class="row no-padding"><em class="fa fa-xl fa-check-circle color-green"></em>
                        <div class="large">{{$room_available}}</div>
                        <div class="text-muted">Available Rooms</div>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-md-3 col-lg-3 no-padding">
                <div class="panel panel-orange panel-widget border-right">
                    <div class="row no-padding"><em class="fa-xl fa fa-cart-shopping"></em>
                        <div class="large">{{$payment}}</div>
                        <div class="text-muted">Payment Complete</div>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-md-3 col-lg-3 no-padding">
                <div class="panel panel-orange panel-widget border-right">
                    <div class="row no-padding"><em class="fa-solid fa-xl fa-glasses"></em>
                        <div class="large">{{$visitors}}</div>
                        <div class="text-muted">Total Visitors</div>
                    </div>
                </div>
            </div>

        </div><!--/.row-->

        <hr>

        <div class="row">
            <div class="col-xs-6 col-md-2 col-lg-2 no-padding">

            </div>



            <div class="col-xs-6 col-md-2 col-lg-2 no-padding">

            </div>
        </div><!--/.row-->
    </div>

</div>	<!--/.main-->


@endsection
