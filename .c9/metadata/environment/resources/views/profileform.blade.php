{"filter":false,"title":"profileform.blade.php","tooltip":"/resources/views/profileform.blade.php","undoManager":{"mark":0,"position":0,"stack":[[{"start":{"row":0,"column":0},"end":{"row":105,"column":1},"action":"remove","lines":["<?php","namespace App\\Http\\Controllers;","use App\\Answer;","use App\\Question;","use Illuminate\\Support\\Facades\\Auth;","use Illuminate\\Http\\Request;","class AnswerController extends Controller","{","    public function __construct()","    {","        $this->middleware('auth');","    }","    /**","     * Display a listing of the resource.","     *","     * @return \\Illuminate\\Http\\Response","     */","    /**","     * Show the form for creating a new resource.","     *","     * @return \\Illuminate\\Http\\Response","     */","    public function create($question)","    {","        $answer = new Answer;","        $edit = FALSE;","        return view('answerForm', ['answer' => $answer,'edit' => $edit, 'question' =>$question  ]);","    }","    /**","     * Store a newly created resource in storage.","     *","     * @param  \\Illuminate\\Http\\Request  $request","     * @return \\Illuminate\\Http\\Response","     */","    public function store(Request $request, $question)","    {","        $input = $request->validate([","            'body' => 'required|min:5',","        ], [","            'body.required' => 'Body is required',","            'body.min' => 'Body must be at least 5 characters',","        ]);","        $input = request()->all();","        $question = Question::find($question);","        $Answer = new Answer($input);","        $Answer->user()->associate(Auth::user());","        $Answer->question()->associate($question);","        $Answer->save();","        return redirect()->route('questions.show',['question_id' => $question->id])->with('message', 'Saved');","    }","    /**","     * Display the specified resource.","     *","     * @param  int  $id","     * @return \\Illuminate\\Http\\Response","     */","    public function show($question,  $answer)","    {","        $answer = Answer::find($answer);","        return view('answer')->with(['answer' => $answer, 'question' => $question]);","    }","    /**","     * Show the form for editing the specified resource.","     *","     * @param  int  $id","     * @return \\Illuminate\\Http\\Response","     */","    public function edit($question,  $answer)","    {","        $answer = Answer::find($answer);","        $edit = TRUE;","        return view('answerForm', ['answer' => $answer, 'edit' => $edit, 'question'=>$question ]);","    }","    /**","     * Update the specified resource in storage.","     *","     * @param  \\Illuminate\\Http\\Request  $request","     * @param  int  $id","     * @return \\Illuminate\\Http\\Response","     */","    public function update(Request $request, $question, $answer)","    {","        $input = $request->validate([","            'body' => 'required|min:5',","        ], [","            'body.required' => 'Body is required',","            'body.min' => 'Body must be at least 5 characters',","        ]);","        $answer = Answer::find($answer);","        $answer->body = $request->body;","        $answer->save();","        return redirect()->route('answers.show',['question_id' => $question, 'answer_id' => $answer])->with('message', 'Updated');","    }","    /**","     * Remove the specified resource from storage.","     *","     * @param  int  $id","     * @return \\Illuminate\\Http\\Response","     */","    public function destroy($question, $answer)","    {","        $answer = Answer::find($answer);","        $answer->delete();","        return redirect()->route('questions.show',['question_id' => $question])->with('message', 'Deleted');","    }","}"],"id":2},{"start":{"row":0,"column":0},"end":{"row":35,"column":11},"action":"insert","lines":["@extends('layouts.app')","","@section('content')","    <div class=\"container\">","        <div class=\"row justify-content-center\">","            <div class=\"col-md-12\">","                <div class=\"card\">","                    <div class=\"card-header\">My Profile</div>","                    <div class=\"card-body\">","                        @if($edit === FALSE)","                            {!! Form::model($profile, ['route' => ['profile.store', Auth::user()->id], 'method' => 'post']) !!}","                        @else()","                            {!! Form::model($profile, ['route' => ['profile.update', Auth::user()->id, $profile->id], 'method' => 'patch']) !!}","                        @endif","                        <div class=\"form-group\">","                            {!! Form::label('fname', 'First Name') !!}","                            {!! Form::text('fname', $profile->fname, ['class' => 'form-control','required' => 'required']) !!}","                        </div>","                        <div class=\"form-group\">","                            {!! Form::label('lname', 'Last Name') !!}","                            {!! Form::text('lname', $profile->lname, ['class' => 'form-control','required' => 'required']) !!}","                        </div>","                        <div class=\"form-group\">","                            {!! Form::label('body', 'Body') !!}","                            {!! Form::text('body', $profile->body, ['class' => 'form-control','required' => 'required']) !!}","                        </div>","                        <button class=\"btn btn-success float-right\" value=\"submit\" type=\"submit\" id=\"submit\">Save","                        </button>","                        {!! Form::close() !!}","                    </div>","","                </div>","            </div>","        </div>","    </div>","@endsection"]}]]},"ace":{"folds":[],"scrolltop":28.6875,"scrollleft":0,"selection":{"start":{"row":35,"column":11},"end":{"row":35,"column":11},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":18,"state":"start","mode":"ace/mode/php"}},"timestamp":1557106077001,"hash":"b453fea28b66ca4af554aef6bc9865a165accbf3"}