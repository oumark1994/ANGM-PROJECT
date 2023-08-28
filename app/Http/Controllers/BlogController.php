<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use Illuminate\Support\Facades\Storage;


class BlogController extends Controller
{
    //
    public function ajouterblog(){
        return view('backend.ajouterblog');
       
    }
    public function sauverblog(Request $request){
        $this->validate($request,[
            'title' => 'required',
            'description'=>'required',
            'short_description'=>'required',
            'blog_date'=>'required|date',
            'author'=>'required',
            'blog_image'=>'image|nullable',
           ]);
        // print($request->input('product_category'));
        if($request->hasFile('blog_image')){
            //1:get file name with ext
            $fileNameWithExt = $request->file('blog_image')->getClientOriginalName();
            //2:get just file name
            $fileName = pathinfo($fileNameWithExt,PATHINFO_FILENAME);
            //GET JUST FILE EXTENSION
            $extention = $request->file('blog_image')->getClientOriginalExtension();
            //file name to store
            $fileNameToStore  = $fileName.'_'.time().'.'.$extention;

            //uploader l'image
            $path = $request->file('blog_image')->storeAs('public/blog_images',$fileNameToStore);
        }else{
            $fileNameToStore = 'noimage.jpg';
        }
        $blog = new Blog();
        $blog->title = $request->input('title');
        $blog->description = $request->input('description');
        $blog->short_description = $request->input('short_description');
        $blog->blog_date = $request->input('blog_date');
        $blog->author = $request->input('author');
        $blog->blog_image = $fileNameToStore;
        $blog->save();
        return redirect('/blogs')->with("status","L'actualite a ete insere avec succes ! ");

    }
    public function blogs(){
        $blogs = Blog::get();
        return view('backend.blogs')->with('blogs',$blogs);
    }
    public function edit_blog($id){
        $blog = Blog::find($id);
        return view('backend.editblog')->with('blog',$blog);

    }
    public function modifierblog(Request $request){
        $this->validate($request,[
            'title' => 'required',
            'description'=>'required',
            'short_description'=>'required',
            'blog_date'=>'required|date',
            'author'=>'required',
            'blog_image'=>'image|nullable|max:1999',
           ]);
        // print($request->input('product_category'));
        $blog =  Blog::find($request->input('id'));
        $blog->title = $request->input('title');
        $blog->description = $request->input('description');
        $blog->short_description = $request->input('short_description');
        $blog->blog_date = $request->input('blog_date');
        $blog->author = $request->input('author');

        if($request->hasFile('blog_image')){
            //1:get file name with ext
            $fileNameWithExt = $request->file('blog_image')->getClientOriginalName();
            //2:get just file name
            $fileName = pathinfo($fileNameWithExt,PATHINFO_FILENAME);
            //GET JUST FILE EXTENSION
            $extention = $request->file('blog_image')->getClientOriginalExtension();
            //file name to store
            $fileNameToStore  = $fileName.'_'.time().'.'.$extention;

            //uploader l'image
            $path = $request->file('blog_image')->storeAs('public/blog_images',$fileNameToStore);
            if($blog->blog_image != 'noimage.jpg'){
                Storage::delete('public/blog_images/'.$blog->blog_image);
            }
            $blog->blog_image = $fileNameToStore;

        }
        $blog->update();
        return redirect('/blogs')->with('status','Le blog  a ete modifie  avec succes ! ');

    }
    public function suprimerblog($id){
        $blog = Blog::find($id);
        if($blog->blog_image != 'noimage.jpg'){
            Storage::delete('public/blog_images/'.$blog->blog_image);
        }
        $blog->delete();
        return redirect('/blogs')->with('status','Le blog  a ete supprime  avec succes ! ');    }


}
