<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Role;
use Illuminate\Support\Facades\Auth;


class appController extends Controller {
    /**
     * appController constructor.
     */
    public function index()
    {

    }

    public function login(){
        return view('login');
    }

    public function signup(){
        return view('signup');
    }

    public function postSignUp(Request $request)
    {
        $user = new User();
        $user->first_name=$request['first_name'];
        $user->last_name=$request['last_name'];
        $user->email=$request['email'];
        $user->password=bcrypt($request['password']);
        $user->save();
        $user->roles()->attach(Role::where('name', 'User')->first());
        Auth::login($user);
        return redirect()->route('/login');

    }

    public function postSignIn(Request $request)
    {
        if(Auth::attempt(['email' => $request['email'],'password' => $request['password']])){
            return redirect()->route('main');
        }
        return redirect()->back();

    }

    public function getAuthor(){
        return view('author');
    }

    public function getAdmin(){
        $users = User::all();
        return view('admin',compact('users'));
    }

    public function getGenerateArticle(){
        return response('Article generated', 200);
    }

    public function postAdminAssignRoles(Request $request){
        //echo 'ok';exit;
        $user = User::where('email',$request['email'])->first();
        $user->roles()->detach();
        if($request['role_user']){
            $user->roles()->attach(Role::where('name', 'User')->first());
        }
        if($request['role_author']){
            $user->roles()->attach(Role::where('name', 'Author')->first());
        }
        if($request['role_admin']){
            $user->roles()->attach(Role::where('name', 'Admin')->first());
        }
        return redirect()->back();
    }

    public function getLogout()
    {
        Auth::logout();
        return redirect()->route('main');
    }
}

