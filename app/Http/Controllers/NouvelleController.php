<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nouvelle;
use Illuminate\Support\Facades\Storage;

class NouvelleController extends Controller
{


    public function ajouternouvelle(){
        return view('backend.ajouternouvelle');
       
    }
    public function sauvernouvelle(Request $request){
        $this->validate($request,[
            'title' => 'required',
            'description'=>'required',
            'short_description'=>'required',
            'nouvelle_date'=>'required|date',
            'nouvelle_image'=>'image|nullable',
           ]);
        // print($request->input('product_category'));
        if($request->hasFile('nouvelle_image')){
            //1:get file name with ext
            $fileNameWithExt = $request->file('nouvelle_image')->getClientOriginalName();
            //2:get just file name
            $fileName = pathinfo($fileNameWithExt,PATHINFO_FILENAME);
            //GET JUST FILE EXTENSION
            $extention = $request->file('nouvelle_image')->getClientOriginalExtension();
            //file name to store
            $fileNameToStore  = $fileName.'_'.time().'.'.$extention;

            //uploader l'image
            $path = $request->file('nouvelle_image')->storeAs('public/nouvelle_images',$fileNameToStore);
        }else{
            $fileNameToStore = 'noimage.jpg';
        }
        $nouvelle = new Nouvelle();
        $nouvelle->title = $request->input('title');
        $nouvelle->description = $request->input('description');
        $nouvelle->short_description = $request->input('short_description');
        $nouvelle->nouvelle_date = $request->input('nouvelle_date');
        $nouvelle->nouvelle_image = $fileNameToStore;
        $nouvelle->save();
        return redirect('/news')->with('status',' La nouvelle a ete insere avec succes ! ');

    }
    public function nouvelles(){
        $nouvelles = Nouvelle::get();
        return view('backend.nouvelles')->with('nouvelles',$nouvelles);
    }
    public function edit_nouvelle($id){
        $nouvelle = Nouvelle::find($id);
        return view('backend.editnouvelle')->with('nouvelle',$nouvelle);

    }
    public function modifiernouvelle(Request $request){
        $this->validate($request,[
            'title' => 'required',
            'description'=>'required',
            'short_description'=>'required',
            'nouvelle_date'=>'required|date',
            'nouvelle_image'=>'image|nullable|max:1999',
           ]);
        // print($request->input('product_category'));
        $nouvelle =  Nouvelle::find($request->input('id'));
        $nouvelle->title = $request->input('title');
        $nouvelle->description = $request->input('description');
        $nouvelle->short_description = $request->input('short_description');
        $nouvelle->nouvelle_date = $request->input('nouvelle_date');

        if($request->hasFile('nouvelle_image')){
            //1:get file name with ext
            $fileNameWithExt = $request->file('nouvelle_image')->getClientOriginalName();
            //2:get just file name
            $fileName = pathinfo($fileNameWithExt,PATHINFO_FILENAME);
            //GET JUST FILE EXTENSION
            $extention = $request->file('nouvelle_image')->getClientOriginalExtension();
            //file name to store
            $fileNameToStore  = $fileName.'_'.time().'.'.$extention;

            //uploader l'image
            $path = $request->file('nouvelle_image')->storeAs('public/nouvelle_images',$fileNameToStore);
            if($nouvelle->nouvelle_image != 'noimage.jpg'){
                Storage::delete('public/nouvelle_images/'.$nouvelle->nouvelle_image);
            }
            $nouvelle->nouvelle_image = $fileNameToStore;

        }
        $nouvelle->update();
        return redirect('/news')->with('status','Le nouvelle  a ete modifie  avec succes ! ');

    }
    public function suprimernouvelle($id){
        $nouvelle = Nouvelle::find($id);
        if($nouvelle->nouvelle_image != 'noimage.jpg'){
            Storage::delete('public/nouvelle_images/'.$nouvelle->nouvelle_image);
        }
        $nouvelle->delete();
        return redirect('/news')->with('status','Le nouvelle  a ete supprime  avec succes ! ');    }



}
