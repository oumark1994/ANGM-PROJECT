<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallerie;
use Illuminate\Support\Facades\Storage;

class GallerieController extends Controller
{
    //
    public function ajoutergallerie(){
        return view('backend.ajoutergallerie');
       
    }
    public function sauvergallerie(Request $request){
        $this->validate($request,[
            'title' => 'required',
            'gallerie_image'=>'image|nullable',
           ]);
        // print($request->input('product_category'));
        if($request->hasFile('gallerie_image')){
            //1:get file name with ext
            $fileNameWithExt = $request->file('gallerie_image')->getClientOriginalName();
            //2:get just file name
            $fileName = pathinfo($fileNameWithExt,PATHINFO_FILENAME);
            //GET JUST FILE EXTENSION
            $extention = $request->file('gallerie_image')->getClientOriginalExtension();
            //file name to store
            $fileNameToStore  = $fileName.'_'.time().'.'.$extention;

            //uploader l'image
            $path = $request->file('gallerie_image')->storeAs('public/gallerie_images',$fileNameToStore);
        }else{
            $fileNameToStore = 'noimage.jpg';
        }
        $gallerie = new Gallerie();
        $gallerie->title = $request->input('title');
        $gallerie->gallerie_image = $fileNameToStore;
        $gallerie->save();
        return redirect('/galleries')->with('status',' La gallerie a ete insere avec succes ! ');

    }
    public function galleries(){
        $galleries = Gallerie::get();
        return view('backend.galleries')->with('galleries',$galleries);
    }
    public function edit_gallerie($id){
        $gallerie = Gallerie::find($id);
        return view('backend.editgallerie')->with('gallerie',$gallerie);

    }
    public function modifiergallerie(Request $request){
        $this->validate($request,[
            'title' => 'required',
            'gallerie_image'=>'image|nullable|max:1999',
           ]);
        // print($request->input('product_category'));
        $gallerie =  Gallerie::find($request->input('id'));
        $gallerie->title = $request->input('title');
        if($request->hasFile('gallerie_image')){
            //1:get file name with ext
            $fileNameWithExt = $request->file('gallerie_image')->getClientOriginalName();
            //2:get just file name
            $fileName = pathinfo($fileNameWithExt,PATHINFO_FILENAME);
            //GET JUST FILE EXTENSION
            $extention = $request->file('gallerie_image')->getClientOriginalExtension();
            //file name to store
            $fileNameToStore  = $fileName.'_'.time().'.'.$extention;

            //uploader l'image
            $path = $request->file('gallerie_image')->storeAs('public/gallerie_images',$fileNameToStore);
            if($gallerie->gallerie_image != 'noimage.jpg'){
                Storage::delete('public/gallerie_images/'.$gallerie->gallerie_image);
            }
            $gallerie->gallerie_image = $fileNameToStore;

        }
        $gallerie->update();
        return redirect('/galleries')->with('status','La gallerie  a ete modifie  avec succes ! ');

    }
    public function supprimergallerie($id){
        $gallerie = Gallerie::find($id);
        if($gallerie->gallerie_image != 'noimage.jpg'){
            Storage::delete('public/gallerie_images/'.$gallerie->gallerie_image);
        }
        $gallerie->delete();
        return redirect('/galleries')->with('status','Le gallerie  a ete supprime  avec succes ! ');    }
}
