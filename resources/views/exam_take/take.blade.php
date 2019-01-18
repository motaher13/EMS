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
                    <div class="portlet dark ">
                        <div class="portlet-body">
                            <div class="tab-content">
                                <div class="tab-pane active" >
                                    <div id="progressBar">
                                        <div class="bar"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END PROFILE CONTENT -->
    </div>
    <div class="row" style="width: 95%;margin:auto;">
        <!-- END BEGIN PROFILE SIDEBAR -->
        <!-- BEGIN PROFILE CONTENT -->
        <div class="profile-content">
            <div class="row">
                <div class="col-md-12">
                    <div class="portlet light ">
                        <div class="portlet-title tabbable-line">
                            {{--<div class="caption caption-md">--}}
                            {{--<i class="icon-globe theme-font hide"></i>--}}
                            {{--<span class="caption-subject font-blue-madison bold uppercase">Provide MCQ Data</span>--}}
                            {{--</div>--}}
                            <div class="table-toolbar">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="caption caption-md">
                                            <i class="icon-globe theme-font hide"></i>
                                            <span class="caption-subject font-blue-madison bold uppercase">{{$exam->title}}</span>
                                        </div>
                                    </div>

                                    {{--<div class="col-md-6">--}}
                                        {{--<div class="btn-group pull-right" style="margin-left: 5px;">--}}
                                            {{--<a class="btn sbold green" id="sample_editable_1_new" href="{{ route('course.questions',$exam->course->course_code) }}" >Question List </a>--}}
                                        {{--</div>--}}

                                    {{--</div>--}}
                                </div>
                            </div>

                        </div>
                        <div class="portlet-body">
                            <div class="tab-content">
                                <!-- PERSONAL INFO TAB -->
                                <div class="tab-pane active" >
                                    <form method="POST" id="updateProfile" action="{{route('exam.answer',$exam->id)}}"accept-charset="UTF-8" class="cmxform form-horizontal tasi-form" enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                        <h3 style="margin-top: 0px;margin-bottom: 30px;">MCQ Part</h3>
                                        <div style="margin-left: 20px;">
                                            <?php $i=0 ?>
                                            @foreach($mcqqs as $mcqq)
                                                <?php $i++ ?>
                                                <div >
                                                    <p class="pull-right" style="margin-right: 30px;">marks:{{$mcqq->marks}}</p>
                                                    <p style="margin-bottom: 0px;">{{$i}}. {{$mcqq->question}}</p>
                                                    <div class="radio">
                                                        <label><input type="radio" value="a" name="m{{$mcqq->id}}" >Option A</label>
                                                    </div>
                                                    <div class="radio">
                                                        <label><input type="radio" value="b" name="m{{$mcqq->id}}" >Option B</label>
                                                    </div>
                                                    <div class="radio disabled">
                                                        <label><input type="radio" value="c" name="m{{$mcqq->id}}" >Option C</label>
                                                    </div>
                                                    <div class="radio disabled" style="margin-bottom: 30px;">
                                                        <label><input type="radio" value="d" name="m{{$mcqq->id}}" >Option D</label>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                        <hr>
                                        <h3 style="margin-top: 0px;margin-bottom: 30px;">Written Part</h3>
                                        <div style="margin-left: 20px;">
                                            <?php $i=0 ?>
                                            @foreach($writtenqs as $writtenq)
                                                <?php $i++ ?>
                                                <div style="margin-bottom: 40px;">
                                                    <p class="pull-right" style="margin-right: 30px;">marks:{{$writtenq->marks}}</p>
                                                    <p style="margin-bottom: 0px;">{{$i}}. {{$writtenq->question}}</p>
                                                    <div style="margin:20px 10px;">
                                                        <img src="{{asset($writtenq->picture)}}" style="width: 40%;" class="img-thumbnail">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="answer" class="control-label">Answer</label>
                                                        <div >
                                                            <textarea class="ckeditor" name="w{{$writtenq->id}}"></textarea>
                                                        </div>
                                                    </div>

                                                </div>
                                            @endforeach
                                        </div>
                                        <hr>
                                        <div class="form-group">
                                            <div class="col-sm-offset-2 col-sm-8">
                                                <input class="btn btn-success" type="submit" value="submit">
                                            </div>
                                        </div>
                                    </form>
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
    <style>
        #progressBar {
            width: 90%;
            margin: 10px auto;
            height: 22px;
            background-color: #0A5F44;
        }

        #progressBar div {
            height: 100%;
            text-align: right;
            padding: 0 10px;
            line-height: 22px; /* same as #progressBar height if we want text middle aligned */
            width: 0;
            background-color: #CBEA00;
            box-sizing: border-box;
        }

    </style>

@section('scripts')
    <script src="https://cdn.ckeditor.com/4.11.1/full/ckeditor.js"></script>

    <script>
        function progress(timeleft, timetotal, $element) {
            var progressBarWidth = timeleft * $element.width() / timetotal;
            $element.find('div').animate({ width: progressBarWidth }, 500).html(Math.floor(timeleft/60) + ":"+ timeleft%60);
            if(timeleft > 0) {
                setTimeout(function() {
                    progress(timeleft - 1, timetotal, $element);
                }, 1000);
            }
        };

        progress( {!! $left !!}, {!! $duration !!}, $('#progressBar'));
    </script>
@endsection

