<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Utilisateur;
use App\Models\Nouvelle;
use App\Models\Blog;
use App\Models\Gallerie;
use App\Models\Document;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Mail;
use Session;
use App\Mail\SendMail;


class AdminController extends Controller
{
    //
    public function index(){
        $nouvelles = Nouvelle::count();
        $blogs = Blog::count();
        $documents = Document::count();
        $galleries = Gallerie::count();


        $data = array();
        if(Session::has('utiliseur')){
            $data = Utilisateur::where('id','=',Session::get('utiliseur'))->first();
        }
        return view('backend.index',compact('data'))
        ->with('nouvelles',$nouvelles)
        ->with('blogs',$blogs)
        ->with('documents',$documents)
        ->with('galleries',$galleries);
    }
    public function login(){
        return view('backend.login');
    }
    public function register(){
        return view('backend.register');
    }
    public function createaccount(Request $request){
        // print($request);
        $this->validate($request,[
                                'email' =>'email|required|unique:utilisateurs',
                                'name'=>'required',
                                'password'=>'required|min:4']);
         $utiliseur = new Utilisateur();
         $utiliseur->name = $request->input('name');
         $utiliseur->email = $request->input('email');
         $utiliseur->password = bcrypt($request->input('password'));
         $utiliseur->status = 1;

         $utiliseur->save();
         return back()->with('status','Votre Compte a ete creer avec success');

    }
    public function accedercompte(Request $request){
        $this->validate($request,['email' =>'email|required','password'=>'required']);
        $utiliseur = Utilisateur::where('email',$request->input('email'))->first();
        if($utiliseur){
            if(Hash::check($request->input('password'), $utiliseur->password)){
                Session::put('utiliseur',$utiliseur->id); 
                return redirect('/dashboard');
            }else{
                return back()->with('error','Vous n est pas authentifier Veillez essayer');

            }
        }else{
            return back()->with('error','Vous navez pas un compte');
        }


    }
    
    public function deconnecter(){
        if(Session::has('utiliseur')){
            Session::pull('utiliseur');
            return redirect('/connecter');

        }

    }
}
