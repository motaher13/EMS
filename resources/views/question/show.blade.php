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

                                    <div class="col-md-6">
                                        <div class="btn-group pull-right" style="margin-left: 5px;">
                                            <a class="btn sbold green" id="sample_editable_1_new" href="{{ route('course.questions',$exam->course->course_code) }}" >Question List </a>
                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="portlet-body">
                            <div class="tab-content">
                                <!-- PERSONAL INFO TAB -->
                                <div class="tab-pane active" >
                                    <h3 style="margin-top: 0px;margin-bottom: 30px;">MCQ Part</h3>
                                    <div style="margin-left: 20px;">
                                        <?php $i=0 ?>
                                        @foreach($mcqqs as $mcqq)
                                                <?php $i++ ?>
                                            <div >
                                                <p class="pull-right" style="margin-right: 30px;">marks:{{$mcqq->marks}}</p>
                                                <p style="margin-bottom: 0px;">{{$i}}. {{$mcqq->question}}</p>
                                                <div class="radio">
                                                    <label><input disabled type="radio" value="a" {{($mcqq->answer=='a')? "checked":"" }} name="{{$mcqq->id}}" >{{$mcqq->option_a}}</label>
                                                </div>
                                                <div class="radio">
                                                    <label><input disabled type="radio" value="b" {{($mcqq->answer=='b')? "checked":"" }} name="{{$mcqq->id}}" >{{$mcqq->option_b}}</label>
                                                </div>
                                                <div class="radio ">
                                                    <label><input disabled type="radio" value="c" {{($mcqq->answer=='c')? "checked":"" }} name="{{$mcqq->id}}" >{{$mcqq->option_c}}</label>
                                                </div>
                                                <div class="radio " style="margin-bottom: 30px;">
                                                    <label><input disabled type="radio" value="d" {{($mcqq->answer=='d')? "checked":"" }} name="{{$mcqq->id}}" >{{$mcqq->option_d}}</label>
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
                                                @if($writtenq->picture!=null)
                                                <div style="margin:20px 10px;">
                                                    <img src="{{asset($writtenq->picture)}}" style="width: 40%;" class="img-thumbnail">
                                                </div>
                                                @endif

                                            </div>
                                        @endforeach
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