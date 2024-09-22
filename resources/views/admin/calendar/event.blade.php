<!DOCTYPE html>
<html>

<head>
    <title>Calendar</title>
    <!-- FullCalendar CSS -->
    {{-- <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css"> --}}
    {{-- <link href="{{ assets('fullcalendar/dist/fullcalendar.min.css') }}" rel="stylesheet"> --}}
     <link href="public/admin-panel/assets/libs/fullcalendar/dist/fullcalendar.min.css">

</head>

<body>


    <!-- FullCalendar JS -->
    {{-- <script src="{{ asset('path/to/fullcalendar.js') }}"></script> --}}
    <script src="public/admin-panel/assets/libs/fullcalendar/dist/fullcalendar.min.js"></script>
    {{-- <script src="{{ assets('path/to/moment.js') }}"></script> --}}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');
            var calendar = new FullCalendar.Calendar(calendarEl, {
                plugins: ['dayGrid'],
                initialView: 'dayGridMonth',
                events: @json($calendar)
            });

            calendar.render();
        });
    </script>

</body>

</html>


@extends('admin.layout.master')

@section('content')
    <div id="main-wrapper">

        @include('admin.includes.sidebar')
        <div class="page-wrapper">
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">

                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page"><a href="#">Calendar</a>
                                    </li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>


            <div class="container-fluid">
                <h4 class="page-title">Calendar</h4>
                <div class="jumbotron">
                    <div class="row">
                        @can('isAdmin')
                            <a href="{{ url('calendar/add') }}" class="btn btn-success">Add events</a>
                        @endcan
                        {{-- <a href="{{url('calendar/edit')}}" class="btn btn-warning">Edit events</a> --}}
                        {{-- <a href="#" class="btn btn-danger">Delete events</a> --}}
                    </div><br>
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <div class="panel panel-default">
                                <div class="panel-heading" style="background: #2e642e; color: white">
                                    Full calendar
                                </div>
                                <div class="panel-body">
                                    <!-- FullCalendar will be rendered by JavaScript -->
                                    <div id='calendar' style="max-width: 400px; margin: 0 auto;"></div>
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
    </div>
@endsection
