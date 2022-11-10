<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Categories;
use RealRashid\SweetAlert\Facades\Alert;

class AdminController extends Controller
{
    public function categories(){
        return view('admin.categories');
    }

    public function add_category(Request $request){
        if(Auth::id()){
            $data=new Categories;
            $data->name=$request->category_name;
            $data->parrent=$request->category_parent;
            $data->long_description=$request->category_longdescript;
            $data->short_description=$request->category_shortdescript;
            $data->createdby=Auth::user()->name;
            $data->lastmodifiedby=Auth::user()->name;
            $data->save();
            Alert::success('New Category added Successfully');
            return redirect()->back();
    }
        else{
            return redirect('login');
        }


    }
}