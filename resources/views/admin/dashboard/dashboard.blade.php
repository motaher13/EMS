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
                                        <span class="caption-subject font-blue-madison bold uppercase">Exams</span>
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
                                            <tbody >
                                            {{--@foreach($exams as $exam)--}}
                                                <tr class='clickable-row' data-href='#'>
                                                    <td>
                                                        <div class="media">
                                                            <div class="media-body">
                                                                <span class="media-meta pull-right">asdfdasf</span>
                                                                <h4 class="title">
                                                                    asdfasf
                                                                    <span class="pull-right pagado">afdasfsd</span>
                                                                </h4>
                                                                <span class="media-meta pull-right">asdfasfsa</span>
                                                                <p class="summary">a1111111</p>
                                                                <div class="container">
                                                                    <h1><img alt="Saturn V carrying Apollo 11" class="right" src="http://localhost:8000/uploads/naturebeau_findzmol.jpg" /> Apollo 11</h1>

                                                                    <p><strong>Apollo 11</strong> was the spaceflight that landed the first humans, Americans <a href="http://en.wikipedia.org/wiki/Neil_Armstrong">Neil Armstrong</a> and <a href="http://en.wikipedia.org/wiki/Buzz_Aldrin">Buzz Aldrin</a>, on the Moon on July 20, 1969, at 20:18 UTC. Armstrong became the first to step onto the lunar surface 6 hours later on July 21 at 02:56 UTC.</p>

                                                                    <p>Armstrong spent about <s>three and a half</s> two and a half hours outside the spacecraft, Aldrin slightly less; and together they collected 47.5 pounds (21.5&nbsp;kg) of lunar material for return to Earth. A third member of the mission, <a href="http://en.wikipedia.org/wiki/Michael_Collins_(astronaut)">Michael Collins</a>, piloted the <a href="http://en.wikipedia.org/wiki/Apollo_Command/Service_Module">command</a> spacecraft alone in lunar orbit until Armstrong and Aldrin returned to it for the trip back to Earth.</p>

                                                                    <h2>Broadcasting and <em>quotes</em> <a id="quotes" name="quotes"></a></h2>

                                                                    <p>Broadcast on live TV to a world-wide audience, Armstrong stepped onto the lunar surface and described the event as:</p>

                                                                    <blockquote>
                                                                        <p>One small step for [a] man, one giant leap for mankind.</p>
                                                                    </blockquote>

                                                                    <p>Apollo 11 effectively ended the <a href="http://en.wikipedia.org/wiki/Space_Race">Space Race</a> and fulfilled a national goal proposed in 1961 by the late U.S. President <a href="http://en.wikipedia.org/wiki/John_F._Kennedy">John F. Kennedy</a> in a speech before the United States Congress:</p>

                                                                    <blockquote>
                                                                        <p>[...] before this decade is out, of landing a man on the Moon and returning him safely to the Earth.</p>
                                                                    </blockquote>

                                                                    <h2>Technical details <a id="tech-details" name="tech-details"></a></h2>

                                                                    <table align="right" border="1" bordercolor="#ccc" cellpadding="5" cellspacing="0" style="border-collapse:collapse">
                                                                        <caption><strong>Mission crew</strong></caption>
                                                                        <thead>
                                                                        <tr>
                                                                            <th scope="col">Position</th>
                                                                            <th scope="col">Astronaut</th>
                                                                        </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                        <tr>
                                                                            <td>Commander</td>
                                                                            <td>Neil A. Armstrong</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Command Module Pilot</td>
                                                                            <td>Michael Collins</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Lunar Module Pilot</td>
                                                                            <td>Edwin &quot;Buzz&quot; E. Aldrin, Jr.</td>
                                                                        </tr>
                                                                        </tbody>
                                                                    </table>

                                                                    <p>Launched by a <strong>Saturn V</strong> rocket from <a href="http://en.wikipedia.org/wiki/Kennedy_Space_Center">Kennedy Space Center</a> in Merritt Island, Florida on July 16, Apollo 11 was the fifth manned mission of <a href="http://en.wikipedia.org/wiki/NASA">NASA</a>&#39;s Apollo program. The Apollo spacecraft had three parts:</p>

                                                                    <ol>
                                                                        <li><strong>Command Module</strong> with a cabin for the three astronauts which was the only part which landed back on Earth</li>
                                                                        <li><strong>Service Module</strong> which supported the Command Module with propulsion, electrical power, oxygen and water</li>
                                                                        <li><strong>Lunar Module</strong> for landing on the Moon.</li>
                                                                    </ol>

                                                                    <p>After being sent to the Moon by the Saturn V&#39;s upper stage, the astronauts separated the spacecraft from it and travelled for three days until they entered into lunar orbit. Armstrong and Aldrin then moved into the Lunar Module and landed in the <a href="http://en.wikipedia.org/wiki/Mare_Tranquillitatis">Sea of Tranquility</a>. They stayed a total of about 21 and a half hours on the lunar surface. After lifting off in the upper part of the Lunar Module and rejoining Collins in the Command Module, they returned to Earth and landed in the <a href="http://en.wikipedia.org/wiki/Pacific_Ocean">Pacific Ocean</a> on July 24.</p>

                                                                    <hr />
                                                                    <p><small>Source: <a href="http://en.wikipedia.org/wiki/Apollo_11">Wikipedia.org</a></small></p>


                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            {{--@endforeach--}}
                                            <tr class='clickable-row' data-href='#'>
                                                <td>
                                                    <div class="media">
                                                        <div class="media-body">
                                                            <span class="media-meta pull-right">asdfdasf</span>
                                                            <h4 class="title">
                                                                asdfas
                                                                <span class="pull-right pagado">afdasfsd</span>
                                                            </h4>
                                                            <span class="media-meta pull-right">asdfasfsa</span>
                                                            <p class="summary">111111</p>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
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