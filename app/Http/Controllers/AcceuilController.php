<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Glisseur;
use App\Models\Nouvelle;
use App\Models\Blog;
use App\Models\Gallerie;
use App\Models\Document;
use Illuminate\Support\Facades\Storage;

class AcceuilController extends Controller
{
    public function index(){
        $sliders = Glisseur::orderBy('created_at','asc')->take(4)->get();
        $nouvelles = Nouvelle::orderBy('created_at','desc')->take(3)->get();
        $documents = Document::get();
        $galleries = Gallerie::orderBy('created_at','asc')->take(6)->get();;
        $blogs = Blog::orderBy('created_at','asc')->take(3)->get();


        return view('frontend.index')->with('sliders',$sliders)->with('nouvelles',$nouvelles)->with('blogs',$blogs)->with('documents',$documents)->with('galleries',$galleries);
        // print($nouvelles);
    }
    public function nouvelles(){
        $nouvelles = Nouvelle::orderBy('created_at','asc')->take(12)->get();
        return view('frontend.nouvelles')->with('nouvelles',$nouvelles);

    }
    public function nouvelle($slug){
        $nouvelle = Nouvelle::where('title',$slug)->first();
        return view('frontend.nouvelle')->with('nouvelle',$nouvelle);

    }
    public function actualites(){
        $blogs = Blog::orderBy('created_at','asc')->take(12)->get();
        return view('frontend.actualites')->with('blogs',$blogs);

    }
    public function actualite($slug){
        $blog = Blog::where('title',$slug)->first();
        return view('frontend.blog')->with('blog',$blog);

    }
    public function galleries(){
        $galleries = Gallerie::get();

        return view('frontend.galleries')->with('galleries',$galleries);

    }
    public function contact(){
        return view('frontend.contact');
    }
    public function about(){
        return view('frontend.about');
    }
    
}
