@extends("layouts.app")

@section('content')
    {{--<div class="container" style="text-align: center;margin-top: 30px;">--}}
    {{--<div class="container" style="text-align: left;">--}}
    {{--<h2>Create Course</h2>--}}
    {{--</div>--}}
    {{--</div>--}}
    <div class="row" style="width: 95%;margin:auto;">
        <!-- END BEGIN PROFILE SIDEBAR -->
        <!-- BEGIN PROFILE CONTENT -->
        <div class="profile-content">
            <div class="row">
                <div class="col-md-12">
                    <div class="portlet light ">
                        {{--<div class="portlet-title tabbable-line">--}}
                        {{--<div class="caption caption-md">--}}
                        {{--<i class="icon-globe theme-font hide"></i>--}}
                        {{--<span class="caption-subject font-blue-madison bold uppercase">Provide MCQ Data</span>--}}
                        {{--</div>--}}
                        <div class="table-toolbar">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="caption caption-md">
                                        <i class="icon-globe theme-font hide"></i>
                                        <span class="caption-subject font-blue-madison bold uppercase">Rank List</span>
                                    </div>
                                </div>
                                {{--<div class="col-md-6">--}}
                                {{--<div class="btn-group pull-right" style="margin-left: 5px;">--}}
                                {{--<a class="btn sbold green" id="sample_editable_1_new" href="{{ route('course.list') }}" >old Questions </a>--}}
                                {{--</div>--}}

                                {{--</div>--}}
                            </div>
                        </div>

                        {{--</div>--}}
                        <div class="portlet-body">
                            <div class="tab-content">
                                <!-- PERSONAL INFO TAB -->
                                <div class="tab-pane active" >
                                    <div class="table-responsive">
                                        <table class="table table-striped table-hover">
                                            <thead>
                                            <tr>
                                                <th >Rank</th>
                                                <th >Name</th>
                                                <th >Registration No</th>
                                                <th >Marks</th>
                                            </tr>
                                            </thead>
                                            <tbody >
                                            <?php $i=0;?>
                                            @foreach($answers as $answer)
                                                <?php $i++?>
                                                <tr class='clickable-row' data-href='{{route('exam.sheetMarks',$answer->id)}}'>
                                                    <td><h4>{{$i}}</h4></td>
                                                    <td><h4>{{$answer->student->username}}</h4></td>
                                                    <td><h4>{{$answer->student->userinfo->reg_no}}</h4></td>
                                                    <td><h4>{{$answer->marks}}</h4></td>
                                                    {{--<td>--}}
                                                        {{--<div class="media">--}}
                                                            {{--<div class="media-body">--}}
                                                                {{--<span class="media-meta pull-right">{{$answer->exam->course->course_code}}</span>--}}
                                                                {{--<h4 class="title">--}}
                                                                    {{--. {{$answer->student->userinfo->reg_no}}--}}
                                                                    {{--<span class="pull-right pagado">{{$answer->exam->course->title}}</span>--}}
                                                                {{--</h4>--}}
                                                                {{--<span class="media-meta pull-right">{{$answer->end}}</span>--}}
                                                                {{--<p class="summary">Marks: {{$answer->marks}}</p>--}}
                                                            {{--</div>--}}
                                                        {{--</div>--}}
                                                    {{--</td>--}}
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
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

@endsection

        @section('scripts')
            <script>
                $( document ).ready(function() {
                    $(".clickable-row").click(function() {
                        window.location = $(this).data("href");
                    });
                });

            </script>
        @endsection

@section('styles')
    <style>
        .media-meta {
            font-size: 11px;
            color: #999;
        }
        h4 {

            font-size: 18px;
            font-weight: bold;
            line-height: normal;
            margin-bottom: 5px;
        }
        .media .title span {
            font-size: .8em;
            margin-right: 20px;
        }
        .media .title span.pagado {
            color: #5cb85c;
        }
        .media .summary {
            font-size: 16px;
            font-weight: bold;
        }
        p{
            margin: 0px;
        }
    </style>

@endsection