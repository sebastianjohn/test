<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Blog;

class BlogController extends Controller
{
    public function index()
    {
    	//insert normal
    	//$blog = new Blog;
    	//$blog->title = 'SelfTitled';
    	//$blog->description = 'SelfTitleTour';
    	//$blog->save();

    	//insert mass assignment
    	//Blog::create([
           //'title' => '10 years in the black',
           //'description' => 'tour 10 years in the black'
    	//]);

        //update
        //$blog = Blog::where('title','EvolveEP')->first();
    	//$blog->title = 'Reckless And Relentless';
    	//$blog->save();

    	//update mass assignment
    	//Blog::find(1)->update([
    		//'title'       => 'Stand Up And Scream',
    		//'description' => 'Just Stand Up And Scream'

    	//]);
       //Delete
       // $blog = Blog::find(1);
        //$blog->delete(); 
        
    	//delete Kedua
        //Blog::destroy([4,5]);
    	
    	//soft deletes
    	//$blog = Blog::find(4);
        //$blog->delete(); 

    	

        //all with trashed files
    	//$blogs = Blog::withTrashed()->get();
    	
        //return sofe deleted
    	//Blog::withTrashed()->restore();
    	
    	$blogs = Blog::all();
    	return view('blog/home', ['blogs' => $blogs]);
    }

    public function show($id)
    {
        $blog = Blog::find($id);
          if(!$blog)
          	 abort(404);


    


    	return view('blog/single', ['blog' => $blog]);
    }
    
    public function create()
    {
       
    	return view('blog/create');
    }

    public function store(Request $request)
    {
        
    	$this->validate($request, [
           'title'        => 'required|min:5',
           'description'  => 'required|min:5'


    	]);

    	$blog = new Blog;
    	$blog->title = $request->title;
    	$blog->description = $request->description;
    	$blog->save();

    	return redirect('blog');
    }

    public function edit($id)
    {
    	  $blog = Blog::find($id);
          if(!$blog)
          	 abort(404);


    


    	return view('blog/edit', ['blog' => $blog]);
    }
    public function update(Request $request, $id)
    {
        //update
        $blog = Blog::find($id);
    	$blog->title = $request->title;
    	$blog->description = $request->description; 
    	$blog->save();
    	
    	return redirect('blog/' . $id);
    }

    public function destroy($id)
    {
    	$blog = Blog::find($id);
        $blog->delete(); 
        return redirect('blog');
    }
    
}
