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
                                            <a class="btn sbold green" id="sample_editable_1_new" href="{{ route('exam.created') }}" >Q Index </a>
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
                                                <div class="btn-group pull-right" style="margin-left: 5px;">
                                                    <a class="btn sbold green" href="{{ route('exam.edit-mcqq',$mcqq->id) }}" >Edit </a>
                                                </div>
                                                <div class="btn-group pull-right" style="margin-left: 5px;">
                                                    <a class="btn sbold green" href="{{ route('exam.delete-mcqq',$mcqq->id) }}" >Delete </a>
                                                </div>
                                                <p class="pull-right" style="margin-right: 30px;">marks:{{$mcqq->marks}}</p>
                                                <p style="margin-bottom: 0px;">{{$i}}. {{$mcqq->question}}</p>
                                                <div class="radio">
                                                    <label><input type="radio" value="a" name="{{$mcqq->id}}" {{($mcqq->answer=='a')? "checked":"" }}>{{$mcqq->option_a}}</label>
                                                </div>
                                                <div class="radio">
                                                    <label><input type="radio" value="b" name="{{$mcqq->id}}" {{($mcqq->answer=='b')? "checked":"" }}>{{$mcqq->option_b}}</label>
                                                </div>
                                                <div class="radio disabled">
                                                    <label><input type="radio" value="c" name="{{$mcqq->id}}" {{($mcqq->answer=='c')? "checked":"" }}>{{$mcqq->option_c}}</label>
                                                </div>
                                                <div class="radio disabled" style="margin-bottom: 30px;">
                                                    <label><input type="radio" value="d" name="{{$mcqq->id}}" {{($mcqq->answer=='d')? "checked":"" }}>{{$mcqq->option_d}}</label>
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
                                                <div class="btn-group pull-right" style="margin-left: 5px;">
                                                    <a class="btn sbold green" href="{{ route('exam.edit-writtenq',$writtenq->id) }}" >Edit </a>
                                                </div>
                                                <div class="btn-group pull-right" style="margin-left: 5px;">
                                                    <a class="btn sbold green" href="{{ route('exam.delete-writtenq',$writtenq->id) }}" >Delete </a>
                                                </div>
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