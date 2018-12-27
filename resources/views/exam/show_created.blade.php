@extends('layouts.app')
@section('content')


    {{--{{ Breadcrumbs::render(Route::currentRouteName()) }}--}}

    <!-- BEGIN PAGE TITLE-->

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
                                <span class="caption-subject font-blue-madison bold uppercase">Created Exams</span>
                            </div>

                        </div>
                        <div class="portlet-body">
                            <div class="tab-content">
                                <!-- PERSONAL INFO TAB -->
                                <div class="tab-pane active">

                                    <table class="table table-striped table-bordered table-hover table-checkable order-column"
                                           id="dataTable">


                                        <thead>
                                        <tr>
                                            <th> ID</th>
                                            <th> Title</th>
                                            <th> Course Code</th>
                                            <th> Start Time</th>
                                            <th> End Time</th>
                                            <th> Actions</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @if(count($exams))
                                        @foreach($exams as $exam)
                                            <tr class="odd gradeX">
                                                <td> {{ $exam->id }} </td>
                                                <td> {{ $exam->title }} </td>
                                                <td> {{ $exam->course->course_code }} </td>
                                                <td> {{ $exam->start }}</td>
                                                <td> {{ $exam->end }}</td>
                                                <td>
                                                    <div class="btn-group">
                                                        <button class="btn btn-xs green dropdown-toggle" type="button"
                                                                data-toggle="dropdown" aria-expanded="false"> Actions
                                                            <i class="fa fa-angle-down"></i>
                                                        </button>
                                                        <ul class="dropdown-menu pull-left" role="menu">
                                                            @if(auth()->user()->id==$exam->course->teacher_id)
                                                            <li>
                                                                <a href="{!! route('exam.edit', $exam->id) !!}">
                                                                    <i class="icon-docs"></i>Edit </a>
                                                            </li>
                                                            <li>
                                                                <a href="{!! route('exam.show', $exam->id) !!}">
                                                                    <i class="icon-docs"></i>Show </a>
                                                            </li>

                                                            <li>
                                                                <a href="{!! route('exam.add-mcqq', $exam->id) !!}">
                                                                    <i class="icon-docs"></i>Add MCQ </a>
                                                            </li>
                                                            <li>
                                                                <a href="{!! route('exam.add-writtenq', $exam->id) !!}">
                                                                    <i class="icon-docs"></i>Add WrittenQ </a>
                                                            </li>
                                                            @endif


                                                            {{--<li>--}}
                                                                {{--<a class="deleteBtn" href="#" data-toggle="modal"--}}
                                                                   {{--data-target="#deleteConfirm"--}}
                                                                   {{--deleteUrl="{{ route('exam.delete', $exam->id) }}">--}}
                                                                    {{--<i class="icon-tag"></i> Delete </a>--}}
                                                            {{--</li>--}}

                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                        @endif

                                        </tbody>
                                    </table>

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

@section('styles')
    <link rel="stylesheet" href="{!! asset('assets/global/plugins/datatables/datatables.min.css') !!}">
    <link rel="stylesheet"
          href="{!! asset('assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css') !!}">

@endsection

@section('scripts')
    <script type="text/javascript" src="{!! asset('assets/global/plugins/datatables/datatables.min.js') !!}"></script>
    <script type="text/javascript"
            src="{!! asset('assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js') !!}"></script>
    <!-- for Datatable -->
    <script type="text/javascript">
        $(document).ready(function () {
            $('#dataTable').dataTable({
                "order": [[0, "asc"]]
            });
            $(document).on("click", ".deleteBtn", function () {
                var deleteUrl = $(this).attr('deleteUrl');
                $(".deleteForm").attr("action", deleteUrl);
            });
        });
    </script>

@endsection