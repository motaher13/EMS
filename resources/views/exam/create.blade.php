@extends("layouts.app")



@section('csrf')
    <meta name="csrf-token" content="{{ csrf_token() }}">
@endsection


@section('content')

    <div class="row" style="width: 95%;margin:auto;">
        <!-- END BEGIN PROFILE SIDEBAR -->
        <!-- BEGIN PROFILE CONTENT -->
        <div class="profile-content">
            <div class="row">
                <div class="col-md-12">

                    <div class="portlet light ">
                        <div class="portlet-title tabbable-line">
                            <div class="caption caption-md">
                                <i class="icon-globe theme-font hide"></i>
                                <span class="caption-subject font-blue-madison bold uppercase">Provide Exam Data</span>
                            </div>

                        </div>
                        <div class="portlet-body">
                            <div class="tab-content">
                                <!-- PERSONAL INFO TAB -->
                                <div class="tab-pane active">

                                    <div class="container" style="margin-top: 20px; display: inline;">
                                        <form method="POST" id="updateProfile" action="{{route('exam.create')}}"accept-charset="UTF-8" class="cmxform form-horizontal tasi-form" enctype="multipart/form-data">
                                            {{ csrf_field() }}

                                            <div class="form-group">
                                                <label for="title" class="control-label col-sm-2">Title</label>
                                                <div class="col-sm-8">
                                                    <input class="form-control" placeholder="Enter title" name="title" type="text"  id="title">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="course_code" class="control-label col-sm-2">Course Code</label>
                                                <div class="col-sm-8">
                                                    <select name="course_id" id="course"  class=" form-control">
                                                        <option selected disabled hidden>Choose Course</option>
                                                        @foreach($courses as $course)
                                                            <option value={{$course->id}} >{{$course->course_code}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="session" class="control-label col-sm-2">Session</label>
                                                <div class="col-sm-8">
                                                    <input class="form-control" placeholder="Enter session" name="session" type="text"  id="session">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="password" class="control-label col-sm-2">Password</label>
                                                <div class="col-sm-8">
                                                    <input class="form-control" placeholder="Enter Password" name="password" type="text"  id="password">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="start" class="control-label col-sm-2">Start time</label>
                                                    <div class='col-sm-8'>
                                                        <div class='input-group date datetimepicker'>
                                                            <input class="form-control" placeholder="Enter start" name="start" type='text'  id="start">
                                                            <span class="input-group-addon">
                                                                <span class="glyphicon glyphicon-calendar"></span>
                                                            </span>
                                                        </div>
                                                    </div>
                                            </div>



                                            <div class="form-group">
                                                <label for="start" class="control-label col-sm-2">End time</label>
                                                <div class='col-sm-8'>
                                                    <div class='input-group date datetimepicker'>
                                                        <input class="form-control" placeholder="Enter End" name="end" type='text'  id="end">
                                                        <span class="input-group-addon">
                                                                <span class="glyphicon glyphicon-calendar"></span>
                                                            </span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-sm-offset-2 col-sm-8">
                                                    <input class="btn btn-success" type="submit" value="submit">
                                                </div>
                                            </div>

                                        </form>
                                    </div>

                                </div>
                                <!-- END PERSONAL INFO TAB -->

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END PROFILE CONTENT -->
    </div>


@endsection

@section('scripts')
    <script type="text/javascript" src="{!! asset('assets/global/plugins/moment.min.js') !!}"></script>
    <script type="text/javascript" src="{!! asset('assets/global/plugins/bootstrap/bootstrap-3.3.7/js/transition.js') !!}"></script>
    <script type="text/javascript" src="{!! asset('assets/global/plugins/bootstrap/bootstrap-3.3.7/js/collapse.js') !!}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/js/bootstrap-datetimepicker.min.js"></script>

    <script>
        $(function() {
            $('.datetimepicker').datetimepicker();
        });
    </script>
@endsection
@section('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/css/bootstrap-datetimepicker.min.css">
@endsection