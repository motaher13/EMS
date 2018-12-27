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
                                            <span class="caption-subject font-blue-madison bold uppercase">Provide Question Data</span>
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
                                <div class="tab-pane active">

                                    <div class="container" style="margin-top: 20px; display: inline;">
                                        <form method="POST" id="updateProfile" action="{{route('exam.edit-writtenq',$writtenq->id)}}"accept-charset="UTF-8" class="cmxform form-horizontal tasi-form" enctype="multipart/form-data">
                                            {{ csrf_field() }}

                                            <div class="form-group">
                                                <label for="question" class="control-label col-sm-2">Question</label>
                                                <div class="col-sm-8">
                                                    <input class="form-control" value={{$writtenq->question}} name="question" type="text"  id="question">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="marks" class="control-label col-sm-2">Marks</label>
                                                <div class="col-sm-8">
                                                    <input class="form-control" value={{$writtenq->marks}} name="marks" type="number"  id="marks">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="picture" class="control-label col-sm-2">Picture</label>
                                                <div class="col-sm-8">
                                                    <input class="form-control" placeholder="Enter picture" name="picture" type="file"  id="picture">
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

{{--@section('styles')--}}
{{--<link rel="stylesheet" href="{!! asset('assets/global/plugins/mdb/css/mdb.min.css') !!}">--}}
{{--@endsection--}}

{{--@section('scripts')--}}
{{--<script type="text/javascript" src="{!! asset('assets/global/plugins/mdb/js/popper.min.js') !!}"></script>--}}
{{--@endsection--}}