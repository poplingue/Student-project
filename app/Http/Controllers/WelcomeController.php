<?php namespace App\Http\Controllers;

class WelcomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Welcome Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the "marketing page" for the application and
	| is configured to only allow guests. Like most of the other sample
	| controllers, you are free to modify or remove it as you desire.
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('guest');
	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('front.index');
	}
        
        public function age($age)
	{
                return "J'ai $age ans, je suis ?";
	}
        
        public function name($name)
	{
                return view ('student',['name' => $name]);
	}
        
        public function promo()
	{       
                $students = [
                    
                    [
                        'name' => 'Tony'
                    ],
                    [
                        'name' => 'Popo'
                    ]
                ];
                return view ('promo', compact('students'));
	}

}
