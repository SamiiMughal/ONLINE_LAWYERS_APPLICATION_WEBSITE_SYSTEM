<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Lawyer;
use App\Models\users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class HomeController extends Controller
{
    function index(){
        return view('website.Home');
    }
    function register(){

        return view('website.register');
    
    }
    function registerstore(Request $req){

        $req->validate([
            'name' => 'required | max:50 | min:3',
        	'email' => 'required | max:40',
        	'pass' => 'required | max:8',
        	'address' => 'required ',
        	'document' => 'required ',
        	'QUALIFICATION' => 'required '
        	
        ]);

        if($req->input('checks') == 1){

            // DB::insert('INSERT INTO `users` (`user_name`,`email`,`password`,`img`,`address`,`role`) values (?,?,?,?,?,?)',
            //  [$req->name,$req->email,md5($req->pass),$req->img,$req->address,0]);
            $user = new users;
            $user->user_name = $req->name;
            $user->email = $req->email;
            $user->password = md5($req->pass);
            $user->address = $req->address;
            $user->save();

            $lastUserId = $user->user_id;

            $lawyer = new Lawyer;
            $lawyer->userid = $lastUserId;
            $lawyer->document = "pdffile.pdf";
            $lawyer->satisfaction = false;
        }
        else{
            $user = new users;
            $user->user_name = $req->name;
            $user->email = $req->email;
            $user->password = md5($req->pass);
            $user->address = $req->address;
            $user->save();

        }
    
    
        return redirect('/');
    
    }

    function login(){
        return view('website.login');
    }
    function loginstore(Request $req){
        
        $row = DB::select('select * from users where user_name = ? or email = ? and password = ?',[$req->name,$req->email,md5($req->pass)]); 
        
        if($row ){

            session()->put('id',$row[0]->user_id);
            session()->put('name',$row[0]->user_name);
            session()->put('email',$row[0]->email);
            session()->put('role',$row[0]->role);

            return redirect('/');
        }
            return redirect('/login'); 
    }
    function logout(){
        session()->forget('id');
        session()->forget('name');
        session()->forget('email');
        session()->forget('role');

        return redirect('/login');
    }

    function Home(){
        return view('website.Home');

    }
    function about(){
        return view('website.about');

    }
    function blog(){
        return view('website.blog');

    }
    function contact(){
        return view('website.contact');
    }
    function portfolio(){
        return view('website.portfolio');

    }
    function service(){
        return view('website.service');

    }
    function single(){
        return view('website.single');

    }
    function team(){
        return view('website.team');

    }
}
