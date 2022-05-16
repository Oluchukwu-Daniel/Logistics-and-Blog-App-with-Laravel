<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\User;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index (){

        $blog = Blog::get();

        $blogs = $blog->toArray();
        
        return view('blog', [
            'blogs' => $blogs
        ]);
       
    }

    public function readmore(Blog $id = null){
        
        $blog = Blog::find($id); //find is a function that picks a row of table as an array

        return view('readmore', [
            'blogs' => $blog
        ]);
    }

    public function viewform(){
        
        return view('blogform');
    }

    public function store(Request $request){
        $this->validate($request, [
            'title' => 'required',
            'author' => 'required',
            'content1' => 'required',
            'content2' => 'required',
            'quote' => 'required',
            'file_path' => 'required|mimes:png,jpg,jpeg',
        ]);

        
        $store = $request->file('file_path')->store('uploads','public');

        // dd($store);

        Blog::create([
            'title' => $request->title,
            'author' => $request->author,
            'content1' => $request->content1,
            'content2' => $request->content2,
            'quote' => $request->quote,
            'file_path' => $store
        ]);

        $blog = Blog::get();

        $blogs = $blog->toArray();
        
        return view('blog', [
            'blogs' => $blogs
        ]);
    
    }

    public function projects(){
       $blogs  = Blog::paginate(3);
       return response()->json($blogs);
    }

    public function project_single($id){
        $blog  = Blog::find($id);
        return response()->json($blog);
    }

    public function blogs() {
        $blogs = Blog::paginate(2);
        return response()->json($blogs);

    }

    public function blogs_single($id) {
        $blog = Blog::find($id);
        return response()->json($blog);
    }    

    public function get_authors() {
        $authors = User::all();
        return response()->json($authors);
    }

    public function createBlog(Request $request) {
        if ($request->isMethod("POST")){
            $request->validate([
                "author" => "required",
                "title" => "required|max:50",
                "content1" => "required|max:400",
            ]);
        }

        $create = Blog::create($request->all());
        if ($create) {
            return response()->json(["msg" => "Blog Message successfully saved", "data"=> $create]);
        }
    }

    public function editblog(Request $request) {
        if ($request->isMethod("PUT")){
            $request->validate([
                "author"=>"required",
                "title"=>"required|max:50",
                "content1"=>"required|max:400",
                "id"=>"required"
            ]);

            $create = Blog::where('id', $request->id)->update(['author'=>$request->author, 'title'=>$request->title, 'content1'=>$request->content1]);

            if ($create){
                return response()->json(['msg'=>'Blog Updateeed successfully', "data"=>$create]);
            }
        }
         

    }

    public function deleteblog(Request $request, $id) {
        $deleted = Blog::where('id', $id)->delete();
            // $blogs = Blog::paginate(5);
            if ($deleted){
                return response()->json(["msg"=>"Blog Post deleted!"]);
            }
    }


}
