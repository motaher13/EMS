@extends("layouts.app")

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
                                <span class="caption-subject font-blue-madison bold uppercase">Update Post</span>
                            </div>

                        </div>
                        <div class="portlet-body">
                            <div class="tab-content">
                                <!-- PERSONAL INFO TAB -->
                                <div class="tab-pane active">

                                    <div class="container" style="margin-top: 20px; display: inline;">
                                        <form method="POST" id="updateProfile" action="{{route('post.update',$post->id)}}"accept-charset="UTF-8" class="cmxform form-horizontal tasi-form" enctype="multipart/form-data">
                                            {{ csrf_field() }}


                                            <div class="form-group">
                                                <label for="course_code" class="control-label col-sm-2">Course Code</label>
                                                <div class="col-sm-8">
                                                    <select name="course_id" id="course"  class=" form-control">
                                                        {{--<option selected disabled hidden>Choose Course</option>--}}
                                                        @foreach($courses as $course)
                                                            <option value="{{$course->id}}" {{($post->course_id==$course->id)? "selected":"" }}>{{$course->course_code}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="title" class="control-label col-sm-2">Type</label>
                                                <div class="col-sm-8">
                                                    <input class="form-control" value="{{$post->type}}" name="type" type="text"  id="type">
                                                </div>
                                            </div>



                                            <div class="form-group">
                                                <label for="post" class="control-label col-sm-2">Post</label>
                                                <div class="col-sm-8" >
                                                    <textarea class="ckeditor"  name="post">{{$post->post}}</textarea>
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
    <script src="https://cdn.ckeditor.com/4.11.1/full/ckeditor.js"></script>

@endsection