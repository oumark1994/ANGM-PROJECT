<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Document;
use Illuminate\Support\Facades\Storage;

class DocumentController extends Controller
{
    //
    public function ajouterdocument(){
        return view('backend.ajouterdocument');
       
    }
    public function sauverdocument(Request $request){
        $this->validate($request,[
            'title' => 'required',
            'document'=>['required','mimes:pdf,docx'],
           ]);
        // print($request->input('product_category'));
        if($request->hasFile('document')){
            //1:get file name with ext
            $fileNameWithExt = $request->file('document')->getClientOriginalName();
            //2:get just file name
            $fileName = pathinfo($fileNameWithExt,PATHINFO_FILENAME);
            //GET JUST FILE EXTENSION
            $extention = $request->file('document')->getClientOriginalExtension();
            //file name to store
            $fileNameToStore  = $fileName.'_'.time().'.'.$extention;

            //uploader l'image
            $path = $request->file('document')->storeAs('public/document_images',$fileNameToStore);
        }else{
            $fileNameToStore = 'noimage.jpg';
        }
        $document = new Document();
        $document->title = $request->input('title');
        $document->document = $fileNameToStore;
        $document->save();
        return redirect('/documents')->with('status',' Le document a ete insere avec succes !');

    }
    public function documents(){
        $documents = Document::get();
        return view('backend.documents')->with('documents',$documents);
    }
    public function edit_document($id){
        $document = Document::find($id);
        return view('backend.editdocument')->with('document',$document);

    }
    public function modifierdocument(Request $request){
        $this->validate($request,[
            'title' => 'required',
           ]);
        // print($request->input('product_category'));
        $document =  Document::find($request->input('id'));
        $document->title = $request->input('title');

        if($request->hasFile('document')){
            //1:get file name with ext
            $fileNameWithExt = $request->file('document')->getClientOriginalName();
            //2:get just file name
            $fileName = pathinfo($fileNameWithExt,PATHINFO_FILENAME);
            //GET JUST FILE EXTENSION
            $extention = $request->file('document')->getClientOriginalExtension();
            //file name to store
            $fileNameToStore  = $fileName.'_'.time().'.'.$extention;

            //uploader l'image
            $path = $request->file('document')->storeAs('public/document_images',$fileNameToStore);
            if($document->document_image != 'noimage.jpg'){
                Storage::delete('public/document_images/'.$document->document_image);
            }
            $document->document= $fileNameToStore;

        }
        $document->update();
        return redirect('/documents')->with('status','Le document  a ete modifie  avec succes ! ');

    }
    public function suprimerdocument($id){
        $document = Document::find($id);
        if($document->document != 'noimage.jpg'){
            Storage::delete('public/document_images/'.$document->document);
        }
        $document->delete();
        return redirect('/documents')->with('status','Le document  a ete supprime  avec succes ! ');  
      }
}
