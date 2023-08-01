<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{

    function dashboard(){
        return view('dashboard.Admindashboard');
    }

    function index(){
        $service = Service::all();

        return view('dashboard.Services_index',compact('service'));
    }
    function insert(){

        return view('dashboard.Service_insert');
    }

    function Store(Request $req){

    $req->validate([
        'name' => 'required | max:50 | min:3',
        'img' => 'required | image | mimes:png,jpg'
        
    ]);

    $img = $req->img;
    $imgname = $img->getClientOriginalName();
    $imgname = time() . "__" . $imgname;
    $img->move("images/Categoryimages/",$imgname);

    $st = new Service;
    $st->name = $req->name;
    $st->img = "images/Categoryimages/$imgname";
    $st->save();

    return redirect('dashboard/Services_index');

    }
    function edit($id){
        $st = Service::find($id);
        if($st){
            return view('dashboard.edit', compact('st'));
        }
        return redirect('/dashboard/Services_index');

    }
    function update(Request $req,$id){
        $st = Service::find($id);

        if($req->img){
            $img = $req->img;
            $imgname = $img->getClientOriginalName();
            $imgname = time() . "__" . $imgname;
            $img->move("images/Categoryimages/",$imgname);
            // unlink($req->oldimg);
        }
        else{
            $imgname = $req->oldimg;
        }

        if($st){
             $st->name = $req->name;
             $st->img = $imgname;

             $st->save();

             return redirect('/dashboard/Services_index');
        }
    }

    function delete($id){
        $st = Service::find($id);
        if($st){
            $st->delete();
            return redirect('/dashboard/Services_index');
        }
            return redirect('/dashboard/Services_index');
    }

}
