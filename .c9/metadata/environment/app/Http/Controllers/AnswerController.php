{"filter":false,"title":"AnswerController.php","tooltip":"/app/Http/Controllers/AnswerController.php","undoManager":{"mark":3,"position":3,"stack":[[{"start":{"row":0,"column":0},"end":{"row":84,"column":0},"action":"remove","lines":["<?php","","namespace App\\Http\\Controllers;","","use Illuminate\\Http\\Request;","","class AnswerController extends Controller","{","    /**","     * Display a listing of the resource.","     *","     * @return \\Illuminate\\Http\\Response","     */","    public function index()","    {","        //","    }","","    /**","     * Show the form for creating a new resource.","     *","     * @return \\Illuminate\\Http\\Response","     */","    public function create()","    {","        //","    }","","    /**","     * Store a newly created resource in storage.","     *","     * @param  \\Illuminate\\Http\\Request  $request","     * @return \\Illuminate\\Http\\Response","     */","    public function store(Request $request)","    {","        //","    }","","    /**","     * Display the specified resource.","     *","     * @param  int  $id","     * @return \\Illuminate\\Http\\Response","     */","    public function show($id)","    {","        //","    }","","    /**","     * Show the form for editing the specified resource.","     *","     * @param  int  $id","     * @return \\Illuminate\\Http\\Response","     */","    public function edit($id)","    {","        //","    }","","    /**","     * Update the specified resource in storage.","     *","     * @param  \\Illuminate\\Http\\Request  $request","     * @param  int  $id","     * @return \\Illuminate\\Http\\Response","     */","    public function update(Request $request, $id)","    {","        //","    }","","    /**","     * Remove the specified resource from storage.","     *","     * @param  int  $id","     * @return \\Illuminate\\Http\\Response","     */","    public function destroy($id)","    {","        //","    }","}",""],"id":2},{"start":{"row":0,"column":0},"end":{"row":105,"column":1},"action":"insert","lines":["<?php","namespace App\\Http\\Controllers;","use App\\Answer;","use App\\Question;","use Illuminate\\Support\\Facades\\Auth;","use Illuminate\\Http\\Request;","class AnswerController extends Controller","{","    public function __construct()","    {","        $this->middleware('auth');","    }","    /**","     * Display a listing of the resource.","     *","     * @return \\Illuminate\\Http\\Response","     */","    /**","     * Show the form for creating a new resource.","     *","     * @return \\Illuminate\\Http\\Response","     */","    public function create($question)","    {","        $answer = new Answer;","        $edit = FALSE;","        return view('answerForm', ['answer' => $answer,'edit' => $edit, 'question' =>$question  ]);","    }","    /**","     * Store a newly created resource in storage.","     *","     * @param  \\Illuminate\\Http\\Request  $request","     * @return \\Illuminate\\Http\\Response","     */","    public function store(Request $request, $question)","    {","        $input = $request->validate([","            'body' => 'required|min:5',","        ], [","            'body.required' => 'Body is required',","            'body.min' => 'Body must be at least 5 characters',","        ]);","        $input = request()->all();","        $question = Question::find($question);","        $Answer = new Answer($input);","        $Answer->user()->associate(Auth::user());","        $Answer->question()->associate($question);","        $Answer->save();","        return redirect()->route('questions.show',['question_id' => $question->id])->with('message', 'Saved');","    }","    /**","     * Display the specified resource.","     *","     * @param  int  $id","     * @return \\Illuminate\\Http\\Response","     */","    public function show($question,  $answer)","    {","        $answer = Answer::find($answer);","        return view('answer')->with(['answer' => $answer, 'question' => $question]);","    }","    /**","     * Show the form for editing the specified resource.","     *","     * @param  int  $id","     * @return \\Illuminate\\Http\\Response","     */","    public function edit($question,  $answer)","    {","        $answer = Answer::find($answer);","        $edit = TRUE;","        return view('answerForm', ['answer' => $answer, 'edit' => $edit, 'question'=>$question ]);","    }","    /**","     * Update the specified resource in storage.","     *","     * @param  \\Illuminate\\Http\\Request  $request","     * @param  int  $id","     * @return \\Illuminate\\Http\\Response","     */","    public function update(Request $request, $question, $answer)","    {","        $input = $request->validate([","            'body' => 'required|min:5',","        ], [","            'body.required' => 'Body is required',","            'body.min' => 'Body must be at least 5 characters',","        ]);","        $answer = Answer::find($answer);","        $answer->body = $request->body;","        $answer->save();","        return redirect()->route('answers.show',['question_id' => $question, 'answer_id' => $answer])->with('message', 'Updated');","    }","    /**","     * Remove the specified resource from storage.","     *","     * @param  int  $id","     * @return \\Illuminate\\Http\\Response","     */","    public function destroy($question, $answer)","    {","        $answer = Answer::find($answer);","        $answer->delete();","        return redirect()->route('questions.show',['question_id' => $question])->with('message', 'Deleted');","    }","}"]}],[{"start":{"row":0,"column":0},"end":{"row":105,"column":1},"action":"remove","lines":["<?php","namespace App\\Http\\Controllers;","use App\\Answer;","use App\\Question;","use Illuminate\\Support\\Facades\\Auth;","use Illuminate\\Http\\Request;","class AnswerController extends Controller","{","    public function __construct()","    {","        $this->middleware('auth');","    }","    /**","     * Display a listing of the resource.","     *","     * @return \\Illuminate\\Http\\Response","     */","    /**","     * Show the form for creating a new resource.","     *","     * @return \\Illuminate\\Http\\Response","     */","    public function create($question)","    {","        $answer = new Answer;","        $edit = FALSE;","        return view('answerForm', ['answer' => $answer,'edit' => $edit, 'question' =>$question  ]);","    }","    /**","     * Store a newly created resource in storage.","     *","     * @param  \\Illuminate\\Http\\Request  $request","     * @return \\Illuminate\\Http\\Response","     */","    public function store(Request $request, $question)","    {","        $input = $request->validate([","            'body' => 'required|min:5',","        ], [","            'body.required' => 'Body is required',","            'body.min' => 'Body must be at least 5 characters',","        ]);","        $input = request()->all();","        $question = Question::find($question);","        $Answer = new Answer($input);","        $Answer->user()->associate(Auth::user());","        $Answer->question()->associate($question);","        $Answer->save();","        return redirect()->route('questions.show',['question_id' => $question->id])->with('message', 'Saved');","    }","    /**","     * Display the specified resource.","     *","     * @param  int  $id","     * @return \\Illuminate\\Http\\Response","     */","    public function show($question,  $answer)","    {","        $answer = Answer::find($answer);","        return view('answer')->with(['answer' => $answer, 'question' => $question]);","    }","    /**","     * Show the form for editing the specified resource.","     *","     * @param  int  $id","     * @return \\Illuminate\\Http\\Response","     */","    public function edit($question,  $answer)","    {","        $answer = Answer::find($answer);","        $edit = TRUE;","        return view('answerForm', ['answer' => $answer, 'edit' => $edit, 'question'=>$question ]);","    }","    /**","     * Update the specified resource in storage.","     *","     * @param  \\Illuminate\\Http\\Request  $request","     * @param  int  $id","     * @return \\Illuminate\\Http\\Response","     */","    public function update(Request $request, $question, $answer)","    {","        $input = $request->validate([","            'body' => 'required|min:5',","        ], [","            'body.required' => 'Body is required',","            'body.min' => 'Body must be at least 5 characters',","        ]);","        $answer = Answer::find($answer);","        $answer->body = $request->body;","        $answer->save();","        return redirect()->route('answers.show',['question_id' => $question, 'answer_id' => $answer])->with('message', 'Updated');","    }","    /**","     * Remove the specified resource from storage.","     *","     * @param  int  $id","     * @return \\Illuminate\\Http\\Response","     */","    public function destroy($question, $answer)","    {","        $answer = Answer::find($answer);","        $answer->delete();","        return redirect()->route('questions.show',['question_id' => $question])->with('message', 'Deleted');","    }","}"],"id":3},{"start":{"row":0,"column":0},"end":{"row":106,"column":1},"action":"insert","lines":["<?php","namespace App\\Http\\Controllers;","use App\\Answer;","use App\\Question;","use Illuminate\\Support\\Facades\\Auth;","use Illuminate\\Http\\Request;","class AnswerController extends Controller","{","    public function __construct()","    {","        $this->middleware('auth');","    }","    /**","     * Display a listing of the resource.","     *","     * @return \\Illuminate\\Http\\Response","     */","    /**","     * Show the form for creating a new resource.","     *","     * @return \\Illuminate\\Http\\Response","     */","    public function create($question)","    {","        $answer = new Answer;","        $edit = FALSE;","        return view('answerForm', ['answer' => $answer,'edit' => $edit, 'question' =>$question  ]);","    }","    /**","     * Store a newly created resource in storage.","     *","     * @param  \\Illuminate\\Http\\Request  $request","     * @return \\Illuminate\\Http\\Response","     */","    public function store(Request $request, $question)","    {","        $input = $request->validate([","            'body' => 'required|min:5',","        ], [","            'body.required' => 'Body is required',","            'body.min' => 'Body must be at least 5 characters',","        ]);","        $input = request()->all();","        $question = Question::find($question);","        $Answer = new Answer($input);","        $Answer->user()->associate(Auth::user());","        $Answer->question()->associate($question);","        $Answer->save();","        return redirect()->route('questions.show',['question_id' => $question->id])->with('message', 'Saved');","    }","    /**","     * Display the specified resource.","     *","     * @param  int  $id","     * @return \\Illuminate\\Http\\Response","     */","    public function show($question,  $answer)","    {","        $answer = Answer::find($answer);","        return view('answer')->with(['answer' => $answer, 'question' => $question]);","    }","    /**","     * Show the form for editing the specified resource.","     *","     * @param  int  $id","     * @return \\Illuminate\\Http\\Response","     */","    public function edit($question,  $answer)","    {","        $answer = Answer::find($answer);","        $edit = TRUE;","        return view('answerForm', ['answer' => $answer, 'edit' => $edit, 'question'=>$question ]);","    }","    /**","     * Update the specified resource in storage.","     *","     * @param  \\Illuminate\\Http\\Request  $request","     * @param  int  $id","     * @return \\Illuminate\\Http\\Response","     */","    public function update(Request $request, $question, $answer)","    {","        $input = $request->validate([","            'body' => 'required|min:5',","        ], [","            'body.required' => 'Body is required',","            'body.min' => 'Body must be at least 5 characters',","        ]);","        ","        $answer = Answer::find($answer);","        $answer->body = $request->body;","        $answer->save();","        return redirect()->route('answers.show',['question_id' => $question, 'answer_id' => $answer])->with('message', 'Updated');","    }","    /**","     * Remove the specified resource from storage.","     *","     * @param  int  $id","     * @return \\Illuminate\\Http\\Response","     */","    public function destroy($question, $answer)","    {","        $answer = Answer::find($answer);","        $answer->delete();","        return redirect()->route('questions.show',['question_id' => $question])->with('message', 'Delete');","    }","}"]}],[{"start":{"row":88,"column":0},"end":{"row":89,"column":0},"action":"remove","lines":["        ",""],"id":4,"ignore":true},{"start":{"row":103,"column":104},"end":{"row":103,"column":105},"action":"insert","lines":["d"]}],[{"start":{"row":88,"column":0},"end":{"row":89,"column":0},"action":"insert","lines":["        ",""],"id":5,"ignore":true},{"start":{"row":104,"column":104},"end":{"row":104,"column":105},"action":"remove","lines":["d"]}]]},"ace":{"folds":[],"scrolltop":1309.5625,"scrollleft":0,"selection":{"start":{"row":106,"column":1},"end":{"row":106,"column":1},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":95,"state":"php-doc-start","mode":"ace/mode/php"}},"timestamp":1557725805167,"hash":"0aaf69b9afedb581dbb893a341514bc71ab8b9c5"}