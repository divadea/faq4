{"filter":false,"title":"ProfileController.php","tooltip":"/app/Http/Controllers/ProfileController.php","undoManager":{"mark":0,"position":0,"stack":[[{"start":{"row":0,"column":0},"end":{"row":84,"column":0},"action":"remove","lines":["<?php","","namespace App\\Http\\Controllers;","","use Illuminate\\Http\\Request;","","class ProfileController extends Controller","{","    /**","     * Display a listing of the resource.","     *","     * @return \\Illuminate\\Http\\Response","     */","    public function index()","    {","        //","    }","","    /**","     * Show the form for creating a new resource.","     *","     * @return \\Illuminate\\Http\\Response","     */","    public function create()","    {","        //","    }","","    /**","     * Store a newly created resource in storage.","     *","     * @param  \\Illuminate\\Http\\Request  $request","     * @return \\Illuminate\\Http\\Response","     */","    public function store(Request $request)","    {","        //","    }","","    /**","     * Display the specified resource.","     *","     * @param  int  $id","     * @return \\Illuminate\\Http\\Response","     */","    public function show($id)","    {","        //","    }","","    /**","     * Show the form for editing the specified resource.","     *","     * @param  int  $id","     * @return \\Illuminate\\Http\\Response","     */","    public function edit($id)","    {","        //","    }","","    /**","     * Update the specified resource in storage.","     *","     * @param  \\Illuminate\\Http\\Request  $request","     * @param  int  $id","     * @return \\Illuminate\\Http\\Response","     */","    public function update(Request $request, $id)","    {","        //","    }","","    /**","     * Remove the specified resource from storage.","     *","     * @param  int  $id","     * @return \\Illuminate\\Http\\Response","     */","    public function destroy($id)","    {","        //","    }","}",""],"id":2},{"start":{"row":0,"column":0},"end":{"row":116,"column":1},"action":"insert","lines":["<?php","namespace App\\Http\\Controllers;","use Illuminate\\Http\\Request;","use Illuminate\\Support\\Facades\\Auth;","use App\\Profile;","use App\\User;","class ProfileController extends Controller","{","    /**","     * Display a listing of the resource.","     *","     * @return \\Illuminate\\Http\\Response","     */","//    public function index()","//    {","//        //","//    }","    /**","     * Show the form for creating a new resource.","     *","     * @return \\Illuminate\\Http\\Response","     */","    public function create()","    {","        $profile = new Profile();","        $edit = FALSE;","        return view('profileForm', ['profile' => $profile,'edit' => $edit  ]);","    }","    /**","     * Store a newly created resource in storage.","     *","     * @param  \\Illuminate\\Http\\Request  $request","     * @return \\Illuminate\\Http\\Response","     */","    public function store(Request $request)","    {","//        dd($request->all());","        $input = $request->validate([","            'fname' => 'required',","            'lname' => 'required',","            'body' => 'required',","        ], [","            'fname.required' => ' First is required',","            'lname.required' => ' Last is required',","            'body.required' => ' Body is required',","        ]);","        $input = request()->all();","        $profile = new Profile($input);","        $profile->user()->associate(Auth::user());","        $profile->save();","        return redirect()->route('profile')->with('message', 'Profile Created');","    }","    public function index()","    {","        $user = Auth::user();","        $profile = $user->profile;","        return view('profile')->with('profile', $profile);","    }","    /**","     * Display the specified resource.","     *","     * @param  int  $id","     * @return \\Illuminate\\Http\\Response","     */","    public function show($id)","    {","        $user = Auth::user();","        $profile = $user->profile;","        return view('profile')->with('profile', $profile);","    }","    /**","     * Show the form for editing the specified resource.","     *","     * @param  int  $id","     * @return \\Illuminate\\Http\\Response","     */","    public function edit($user, $profile)","    {","        $user = User::find($user);","        $profile = $user->profile;","        $edit = TRUE;","        return view('profileForm', ['profile' => $profile, 'edit' => $edit ]);","    }","    /**","     * Update the specified resource in storage.","     *","     * @param  \\Illuminate\\Http\\Request  $request","     * @param  int  $id","     * @return \\Illuminate\\Http\\Response","     */","    public function update(Request $request,  $user, $profile)","    {","        $input = $request->validate([","            'fname' => 'required',","            'lname' => 'required',","        ], [","            'fname.required' => ' First is required',","            'lname.required' => ' Last is required',","        ]);","        $profile = Profile::find($profile);","        $profile->fname = $request->lname;","        $profile->lname = $request->lname;","        $profile->body = $request->body;","        $profile->save();","        return redirect()->route('profile')->with('message', 'Updated Profile');","    }","    /**","     * Remove the specified resource from storage.","     *","     * @param  int  $id","     * @return \\Illuminate\\Http\\Response","     */","    public function destroy($id)","    {","        //","    }","}"]}]]},"ace":{"folds":[],"scrolltop":442,"scrollleft":0,"selection":{"start":{"row":116,"column":1},"end":{"row":116,"column":1},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":18,"state":"php-doc-start","mode":"ace/mode/php"}},"timestamp":1557104848649,"hash":"d0d7babf05696e71b228d0f378b3d836441f1c85"}