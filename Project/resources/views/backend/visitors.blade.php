
    @extends('backend.index')

        @section('content')
            <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
                <div class="row">
                    <ol class="breadcrumb">
                        <li><a href="">
                                <em class="fa fa-home"></em>
                            </a></li>
                        <li class="active">visitors</li>
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
                            <div class="panel-heading">Total Visitors in My Website



                            </div>
                            <div class="panel-body">

                                <table id="dataTable" class="table table-striped table-bordered scroll">
                                    <caption>This table displays a list of  visitors</caption>
                                    <thead>
                                    <tr>
                                        <th id="customer_name11">ID</th>
                                        <th id="customer_name11">Ip Address</th>



                                        <td id="room_type11">Time</td>



                                        <td id="room_no121">Date</td>


                                        <td id="room_fee1">Country</td>


                                        <td id="customer_contact_no1">City</td>




                                    </tr>
                                    </thead>
                                    <tbody class="visitor_table">


                                    @foreach ($visitors as $visitors)
                                        <tr class="">



                                            <td class="mt-5">{{ $visitors['id'] }}</td>
                                            <td class="mt-5">{{ $visitors['ip'] }}</td>
                                            <td class="mt-5">{{ $visitors['time'] }}</td>
                                            <td class="mt-5">{{ $visitors['date'] }}</td>
                                            <td class="mt-5">{{ $visitors['country'] }}</td>
                                            <td class="mt-5">{{ $visitors['city'] }}</td>



                                        </tr>
                                    @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>
                </div>


            @endsection


                @section('script')
                    <script type="text/javascript">
                        $(document).ready(function() {
                            $('#dataTable').DataTable();
                            $('.dataTables_length').addClass('bs-select');
                        });
                    </script>
        @endsection
