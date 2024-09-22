@extends('admin.layout.master')

@section('content')

    <div class="page-wrapper">

        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-12 d-flex no-block align-items-center">
                    <h4 class="page-title">Dashboard</h4>
                    <div class="ml-auto text-right">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid">

            <div class="row">
                <!-- Column -->
                <div class="col-md-6 col-lg-4 col-xlg-3">
                    <div class="card card-hover">
                        <div class="box bg-success text-center">
                            <h1 class="font-light text-white"><i class="mdi mdi-account-multiple"></i></h1>
                            <h5 class="m-b-0 m-t-5 text-white">{{ $users->total() + $employees->total() }}</h5>
                            <h6 class="text-white">Total users</h6>
                        </div>
                    </div>
                </div>

                <!-- Column -->
                <div class="col-md-6 col-lg-2 col-xlg-3">
                    <div class="card card-hover">
                        <div class="box bg-dark text-center">
                            <h1 class="font-light text-white"><i class="mdi mdi-account-multiple"></i></h1>
                            <h5 class="m-b-0 m-t-5 text-white">{{$employees->total()}}</h5>
                            <h6 class="text-white">Total employees</h6>
                        </div>
                    </div>
                </div>

                <!-- Column -->
                <div class="col-md-6 col-lg-2 col-xlg-3">
                    <div class="card card-hover">
                        <div class="box bg-warning text-center">
                            <h1 class="font-light text-white"><i class="mdi mdi-collage"></i></h1>
                            <h5 class="m-b-0 m-t-5 text-white">{{$leaves->total()}}</h5>
                            <h6 class="text-white">On leave</h6>
                        </div>
                    </div>
                </div>

                <!-- Column -->
                <div class="col-md-6 col-lg-2 col-xlg-3">
                    <div class="card card-hover">
                        <div class="box bg-danger text-center">
                            <h1 class="font-light text-white"><i class="mdi mdi-border-outside"></i></h1>
                            <h5 class="m-b-0 m-t-5 text-white">{{$leaves->total()}}</h5>
                            <h6 class="text-white">Total leaves</h6>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-2 col-xlg-3">
                    <div class="card card-hover">
                        <div class="box bg-cyan text-center">
                            <h1 class="font-light text-white"><i class="mdi mdi-view-dashboard"></i></h1>
                            <h5 class="m-b-0 m-t-5 text-white">{{$designations->total()}}</h5>
                            <h6 class="text-white">Designation</h6>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-md-flex align-items-center">
                                <div>
                                    <h4 class="card-title">Events</h4>
                                </div>
                            </div>
                            <div class="row">
                                    <div class="col-lg-12">
                                        <div class="card-body b-l calender-sidebar">
                                            <div id="calendar">
                                                <table id="zero_config" class="table table-striped table-bordered">
                                                    <thead>
                                                    <tr>
                                                        <th>S.N</th>
                                                        <th>Title</th>
                                                        <th>Start_date</th>
                                                        <th>End_date</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @foreach($calendars as $calendar)
                                                        <tr>
                                                            <th>{{$loop->index+1}}</th>
                                                            <td>{{$calendar->title}}</td>
                                                            <td>{{$calendar->start_date}}</td>
                                                            <td>{{$calendar->end_date}}</td>

                                                        </tr>

                                                    @endforeach
                                                    </tbody>
                                                </table>
                                                {{ $calendars->links() }}
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <footer class="footer text-center">
            All Rights Reserved by <a href="https://github.com/nancy-abduallh">Nancy Abdullah</a>.
        </footer>

    </div>

@endsection

@section('js')

    <script src="{{asset('admin-panel/assets/libs/flot/excanvas.js')}}"></script>
    <script src="{{asset('admin-panel/assets/libs/flot/jquery.flot.js')}}"></script>
    <script src="{{asset('admin-panel/assets/libs/flot/jquery.flot.pie.js')}}"></script>
    <script src="{{asset('admin-panel/assets/libs/flot/jquery.flot.time.js')}}"></script>
    <script src="{{asset('admin-panel/assets/libs/flot/jquery.flot.stack.js')}}"></script>
    <script src="{{asset('admin-panel/assets/libs/flot/jquery.flot.crosshair.js')}}"></script>
    <script src="{{asset('admin-panel/assets/libs/flot.tooltip/js/jquery.flot.tooltip.min.js')}}"></script>
    <script src="{{asset('admin-panel/dist/js/pages/chart/chart-page-init.js')}}"></script>

    <script src="{{asset('admin-panel/assets/libs/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{asset('admin-panel/dist/js/jquery-ui.min.js')}}"></script>
    <script src="{{asset('admin-panel/assets/libs/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('admin-panel/dist/js/custom.min.js')}}"></script>
    <script src="{{asset('admin-panel/assets/libs/moment/min/moment.min.js')}}"></script>
    <script src="{{asset('admin-panel/assets/libs/fullcalendar/dist/fullcalendar.min.js')}}"></script>
    <script src="{{asset('admin-panel/dist/js/pages/calendar/cal-init.js')}}"></script>

    @endsection
