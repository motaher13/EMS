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
                                            <span class="caption-subject font-blue-madison bold">Registration No: {{$answer->student->userinfo->reg_no}}</span>
                                        </div>
                                    </div>
                                    {{--<div class="col-md-6">--}}
                                        {{--<div class="btn-group pull-right" style="margin-left: 5px;">--}}
                                            {{--<a class="btn sbold green" id="sample_editable_1_new" href="{{ route('exam.created') }}" >Q Index </a>--}}
                                        {{--</div>--}}

                                    {{--</div>--}}
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
                                        @foreach($mcqas as $mcqa)
                                            <?php $i++ ?>
                                            <div >

                                                <p style="font-size: 18px;font-weight: bold;line-height: normal;margin: 0;">{{$i}}. {{$mcqa->mcqq->question}}</p>
                                                <div class="radio">
                                                    <label><input type="radio" value="a" {{($mcqa->answer=='a')? "checked":"" }}>{{$mcqa->mcqq->option_a}}</label>
                                                </div>
                                                <div class="radio">
                                                    <label><input type="radio" value="b" {{($mcqa->answer=='b')? "checked":"" }}>{{$mcqa->mcqq->option_b}}</label>
                                                </div>
                                                <div class="radio disabled">
                                                    <label><input type="radio" value="c" {{($mcqa->answer=='c')? "checked":"" }}>{{$mcqa->mcqq->option_c}}</label>
                                                </div>
                                                <div class="radio disabled" style="margin-bottom: 30px;">
                                                    <label><input type="radio" value="d" {{($mcqa->answer=='d')? "checked":"" }}>{{$mcqa->mcqq->option_d}}</label>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                    <hr>
                                    <h3 style="margin-top: 0px;margin-bottom: 30px;">Written Part</h3>
                                    <div style="margin-left: 20px;">
                                        <form method="POST" action="{{route('exam.examine',$answer->id)}}"accept-charset="UTF-8" class="cmxform form-horizontal tasi-form" enctype="multipart/form-data">
                                            {{ csrf_field() }}
                                            <?php $i=0 ?>
                                            @foreach($writtenas as $writtena)
                                                <?php $i++ ?>
                                                <div style="margin-bottom: 40px;">
                                                    <p class="pull-right" style="margin-right: 30px;">marks:{{$writtena->writtenq->marks}}</p>
                                                    <p style="font-size: 18px;font-weight: bold;line-height: normal;margin: 0;">{{$i}}. {{$writtena->writtenq->question}}</p>
                                                    <div style="margin:20px 10px;">
                                                        <img src="{{asset($writtena->writtenq->picture)}}" style="width: 40%;" class="img-thumbnail">
                                                    </div>
                                                    <div style="width: 800px">
                                                        <h1 style="font-size: 18px;font-weight: bold;line-height: normal;margin: 0;">Answer: </h1>
                                                        {!!  $writtena->answer!!}
                                                    </div>

                                                </div>
                                                <hr>
                                                <div>
                                                    <p style="color: #2BBCDE;">Marks:  <input placeholder="Enter marks" name="{{$writtena->id}}" type="text"></p>
                                                </div>
                                                <hr>
                                            @endforeach
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