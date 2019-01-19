@extends("layouts.app")

@section('content')

    <div class="row" style="width: 95%;margin:auto;">
        <div class="profile-content">
            <div class="row">
                <div class="col-md-12">
                    <div class="portlet light ">
                        <div class="table-toolbar">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="caption caption-md">
                                        <i class="icon-globe theme-font hide"></i>
                                        <span class="caption-subject font-blue-madison bold uppercase">Running Exams</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{--</div>--}}
                        <div class="portlet-body">
                            <div class="tab-content">
                                <div class="tab-pane active" >
                                    <div class="table-responsive">
                                        <table class="table table-striped table-hover">
                                            <tbody >
                                            @foreach($runningexams as $exam)
                                                <tr class='clickable-row' data-href='{{route('exam.take',$exam->id)}}'>
                                                    <td>
                                                        <div class="media">
                                                            <div class="media-body">
                                                                <span class="media-meta pull-right">{{$exam->start}}</span>
                                                                <h4 class="title">
                                                                    {{$exam->title}}
                                                                    <span class="pull-right pagado">{{$exam->course->course_code}}</span>
                                                                </h4>
                                                                <span class="media-meta pull-right">{{$exam->end}}</span>
                                                                <p class="summary">{{$exam->course->title}}</p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="row" style="width: 95%;margin:auto;">
        <div class="profile-content">
            <div class="row">
                <div class="col-md-12">
                    <div class="portlet light ">
                        <div class="table-toolbar">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="caption caption-md">
                                        <i class="icon-globe theme-font hide"></i>
                                        <span class="caption-subject font-blue-madison bold uppercase">Upcoming Exams</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{--</div>--}}
                        <div class="portlet-body">
                            <div class="tab-content">
                                <div class="tab-pane active" >
                                    <div class="table-responsive">
                                        <table class="table table-striped table-hover">
                                            <tbody >
                                            @foreach($upcomingexams as $exam)
                                                <tr>
                                                    <td>
                                                        <div class="media">
                                                            <div class="media-body">
                                                                <span class="media-meta pull-right">{{$exam->start}}</span>
                                                                <h4 class="title">
                                                                    {{$exam->title}}
                                                                    <span class="pull-right pagado">{{$exam->course->course_code}}</span>
                                                                </h4>
                                                                <span class="media-meta pull-right">{{$exam->end}}</span>
                                                                <p class="summary">{{$exam->course->title}}</p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


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
        .media .title {
            color: #2BBCDE;
            font-size: 18px;
            font-weight: bold;
            line-height: normal;
            margin: 0;
        }
        .media .title span {
            font-size: .8em;
            margin-right: 20px;
        }
        .media .title span.pagado {
            color: #5cb85c;
        }
        .media .summary {
            font-size: 14px;
        }
        p{
            margin: 0px;
        }
    </style>

@endsection