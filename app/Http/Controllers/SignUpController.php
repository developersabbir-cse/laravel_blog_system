<?php

namespace App\Http\Controllers;

use App\Category;
use App\Visitor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SignUpController extends Controller
{
    public function index(){
        return view('front-end.user.sign-up',[
        'categories' =>Category::where('publication_status',1)->orderBy('id')->get(),
        ]);
    }
    public function newSignUp(Request $request){
            Visitor::saveVisitorInfo($request);
            return redirect('/');
    }
    public function visitorLogout(Request $request){
        Visitor::makeVisitorLogout();
        return redirect('/');

    }
    public function visitorLogoin(){
        return view('front-end.user.sign-in',[
            'categories' =>Category::where('publication_status',1)->orderBy('id')->get(),
        ]);
    }
    public function visitorSignIn(Request $request){

        $visitor=Visitor::where('email_address',$request->email_address)->first();
        if($visitor){
            if (password_verify($request->password, $visitor->password)) {
                Session::put('visitorId', $visitor->id);
                Session::put('visitorName', $visitor->first_name.' '.$visitor->last_name);
                return redirect('/');
            }
            else {
                return redirect('/visitor-login')->with('message','Your Password is Invalid');
            }
            }
            else{
                return redirect('/visitor-login')->with('message','Your Email is Invalid');
            }
    }
    public function emailCheck($email){
        $visitor=Visitor::where('email_address', $email)->first();
        if($visitor){
            echo 'Email Address Exist';
        }
        else{
            echo "email address available";
        }
    }
}
