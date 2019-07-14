<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    
    public function index(){
        $title = 'Welcome with variable';
        return view('pages.index') -> with('title',$title);
    }

    public function about(){
        return view('pages.about');
    } 

    public function service(){
        return view('pages.service');
    } 


    public function insert_news(){
        $add = new news ;
        $add -> title = request('title');
        $add -> desc = request('desc');
        $add -> content = request('content');
        $add -> add_by = request('add_by');
        $add -> status = request('status');
        $add -> save();
        return redirect('all/news');
    }
}
