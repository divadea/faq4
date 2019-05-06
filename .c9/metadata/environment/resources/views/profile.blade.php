{"filter":false,"title":"profile.blade.php","tooltip":"/resources/views/profile.blade.php","undoManager":{"mark":0,"position":0,"stack":[[{"start":{"row":0,"column":0},"end":{"row":68,"column":11},"action":"remove","lines":["@extends('layouts.app')","","@section('content')","    {{--@if (Auth::user()->VIP === '0')--}}","        {{--<div class=\"container\">--}}","            {{--<centering>--}}","                {{--<h1 style=\"color:#38c172\">     </h1>--}}","    {{--</centering>--}}","        {{--</div>--}}","    {{--@else--}}","        {{--<centering>--}}","            {{--<h1 style=\"color:#38c172\">VIP</h1>--}}","        {{--</centering>--}}","    {{--@endif--}}","","    <div class=\"container\">","        <div class=\"row justify-content-center\">","            <div class=\"col-md-12\">","                <div class=\"card\">","                    <div class=\"card-header\">Questions","                        <a class=\"btn btn-primary float-right\" href=\"{{ route('questions.create') }}\">","                            Create a Question","                        </a>","","                        <div class=\"card-body\">","","                            <div class=\"card-deck\">","                                @forelse($questions as $question)","                                    <div class=\"col-sm-4 d-flex align-items-stretch\">","                                        <div class=\"card mb-3 \">","                                            <div class=\"card-header\">","                                                <small class=\"text-muted\">","                                                    Updated: {{ $question->created_at->diffForHumans() }}","                                                    Answers: {{ $question->answers()->count() }}","","                                                </small>","                                            </div>","                                            <div class=\"card-body\">","                                                <p class=\"card-text\">{{$question->body}}</p>","                                            </div>","                                            <div class=\"card-footer\">","                                                <p class=\"card-text\">","","                                                    <a class=\"btn btn-primary float-right\" href=\"{{ route('questions.show', ['id' => $question->id]) }}\">","                                                        View","                                                    </a>","                                                </p>","                                            </div>","                                        </div>","                                    </div>","                                @empty","                                    There are no questions to view, you can  create a question.","                                @endforelse","","","                            </div>","","                        </div>","                        <div class=\"card-footer\">","                            <div class=\"float-right\">","                                {{ $questions->links() }}","                            </div>","                        </div>","","                    </div>","                </div>","            </div>","        </div>","@endsection"],"id":2},{"start":{"row":0,"column":0},"end":{"row":24,"column":11},"action":"insert","lines":["@extends('layouts.app')","","@section('content')","    <div class=\"container\">","        <div class=\"row \">","            <div class=\"col-md-12\">","                <div class=\"card\">","                    <div class=\"card-header\">My Profile</div>","","                    <div class=\"card-body \">","                        <span class=\"font-weight-bold\">First Name:</span> {{$profile->fname}}</br>","                        <span class=\"font-weight-bold\">Last Name: </span>{{$profile->lname}}</br>","                        <span class=\"font-weight-bold\">Body: </span>{{$profile->body}}</br>","                    </div>","                    <div class=\"card-footer\">","                        <a class=\"btn btn-success float-right\" href=\"{{ route('profile.edit', ['profile_id' => $profile->id,'user_id' => $profile->user->id]) }}\">","                            Edit","                        </a>","                    </div>","","                </div>","            </div>","        </div>","    </div>","@endsection"]}]]},"ace":{"folds":[],"scrolltop":233.3125,"scrollleft":0,"selection":{"start":{"row":24,"column":11},"end":{"row":24,"column":11},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":22,"state":"start","mode":"ace/mode/php"}},"timestamp":1557104844502,"hash":"76cc346c80f92d07982e050fb153e6568d206832"}