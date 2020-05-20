<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TCG\Voyager\Models\Post;
use App\AskingQuery;
use DB;
use Redirect;
use Auth;
use View;
class LoginController extends Controller {

    public function show()
    {
    return View::make('admin.login');
    }

    public function login()
    {
	$input = Input::all();

    $rules = ['email'=>'required|email',
              'password'=>'required'
              ];

    $validator = Validator::make($input, $rules);

    if ($validator->passes()) {
        $attempt = Auth::attempt([
            'email' => $input['email'],
            'password' => $input['password']
        ]);

        if ($attempt) {
            return Redirect::intended('post');
        }

        return Redirect::to('login')
                ->withErrors(['fail'=>'Email or password is wrong!']);
    }

    //fails
    return Redirect::to('login')
                ->withErrors($validator)
                ->withInput(Input::except('password'));
    }

    public function logout()
    {
	Auth::logout();
    return Redirect::to('home');
    }

}