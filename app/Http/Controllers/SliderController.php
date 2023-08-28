<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Glisseur;
use Illuminate\Support\Facades\Storage;

class SliderController extends Controller
{
   
    public function ajouterslider(){
        return view('backend.ajouterslider');
       
    }
    public function sauverslider(Request $request){
        $this->validate($request,[
            'title' => 'required',
            'description'=>'required',
            'slider_image'=>'image|nullable',
           ]);
        // print($request->input('product_category'));
        if($request->hasFile('slider_image')){
            //1:get file name with ext
            $fileNameWithExt = $request->file('slider_image')->getClientOriginalName();
            //2:get just file name
            $fileName = pathinfo($fileNameWithExt,PATHINFO_FILENAME);
            //GET JUST FILE EXTENSION
            $extention = $request->file('slider_image')->getClientOriginalExtension();
            //file name to store
            $fileNameToStore  = $fileName.'_'.time().'.'.$extention;

            //uploader l'image
            $path = $request->file('slider_image')->storeAs('public/slider_images',$fileNameToStore);
        }else{
            $fileNameToStore = 'noimage.jpg';
        }
        $slider = new Glisseur();
        $slider->title = $request->input('title');
        $slider->description = $request->input('description');
        $slider->slider_image = $fileNameToStore;
        $slider->status = 1;
        $slider->save();
        return redirect('/sliders')->with('status',' Le glisseur a ete insere avec succes ! ');

    }
    public function sliders(){
        $sliders = Glisseur::get();
        return view('backend.sliders')->with('sliders',$sliders);
    }
    public function edit_slider($id){
        $slider = Glisseur::find($id);
        return view('backend.editslider')->with('slider',$slider);

    }
    public function modifierslider(Request $request){
        $this->validate($request,[
            'title' => 'required',
            'description'=>'required',
            'slider_image'=>'image|nullable',
           ]);
        // print($request->input('product_category'));
        $slider =  Glisseur::find($request->input('id'));
        $slider->title = $request->input('title');
        $slider->description = $request->input('description');

        if($request->hasFile('slider_image')){
            //1:get file name with ext
            $fileNameWithExt = $request->file('slider_image')->getClientOriginalName();
            //2:get just file name
            $fileName = pathinfo($fileNameWithExt,PATHINFO_FILENAME);
            //GET JUST FILE EXTENSION
            $extention = $request->file('slider_image')->getClientOriginalExtension();
            //file name to store
            $fileNameToStore  = $fileName.'_'.time().'.'.$extention;

            //uploader l'image
            $path = $request->file('slider_image')->storeAs('public/slider_images',$fileNameToStore);
            if($slider->slider_image != 'noimage.jpg'){
                Storage::delete('public/slider_images/'.$slider->slider_image);
            }
            $slider->slider_image = $fileNameToStore;

        }
        $slider->update();
        return redirect('/sliders')->with('status','Le slider  a ete modifie  avec succes ! ');

    }
    public function supprimerslider($id){
        $slider = Glisseur::find($id);
        if($slider->slider_image != 'noimage.jpg'){
            Storage::delete('public/slider_images/'.$slider->slider_image);
        }
        $slider->delete();
        return redirect('/sliders')->with('status','Le slider  a ete supprime  avec succes ! ');    }

public function activer_slider($id){
    $slider = Glisseur::find($id);
    $slider->status = 1;
    $slider->update();
    return redirect('/sliders')->with('status','Le slider  a ete activee avec succes ! ');
}
public function desactiver_slider($id){
    $slider = Glisseur::find($id);
    $slider->status = 0;
    $slider->update();
    return redirect('/sliders')->with('status','Le slider  a ete desactivee avec succes ! ');
}
}
