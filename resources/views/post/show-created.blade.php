@extends("layouts.app")

@section('content')

    <div class="row" style="width: 95%;margin:auto;">
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
                                        <span class="caption-subject font-blue-madison bold uppercase">Recent Posts</span>
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
                                    <div class="table-responsive" style="margin: 10px 20px;">
                                        <table class="table table-striped">
                                            <tbody >
                                            @foreach($posts as $post)
                                            <tr class='clickable-row' data-href='#'>
                                                <td>
                                                    <div class="media">
                                                        <div class="media-body">
                                                            <div class="btn-group pull-right" style="margin-left: 5px;">
                                                                <a class="btn sbold green btn-xs" href="{{ route('post.delete',$post->id) }}" >Delete </a>
                                                            </div>
                                                            <div class="btn-group pull-right" style="margin-left: 5px;">
                                                                <a class="btn sbold green btn-xs" href="{{ route('post.edit',$post->id) }}" >Edit </a>
                                                            </div>
                                                            <h4 class="title">
                                                                {{$post->user->username}}
                                                                <span class="pull-right pagado">{{$post->course->course_code}}</span>
                                                            </h4>
                                                            <p class="summary">{{$post->type}}</p>
                                                            <div style="width: 800px;">
                                                                {!! $post->post !!}
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
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
    </div>


@endsection

@section('scripts')
    <script>
        // $( document ).ready(function() {
        //     $(".clickable-row").click(function() {
        //         window.location = $(this).data("href");
        //     });
        // });

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