<?php namespace App\Http\Controllers;

//use => alias
use App\Http\Requests;
//App\http = namespace et Requests = class
use App\Http\Controllers\Controller;
use App\Student;
use App\Category;
use App\Post;
use App\Tag;
use View;

use Illuminate\Http\Request;

class FrontController extends Controller {
        
	public function index()
	{
//            return Student::all();
//            ::all = select * from students
           $students = Student::all();
           $categories = Category::all();
           $posts = Post::all();
           return view ('front.index', compact('students','categories','posts'));
	}
        
        public function showSingle($id)
	{
           $post = Post::find($id);
           return view ('front.single',compact('post'));
	}
        
        public function showCategory($category_id)
        {
            $posts = Category::find($category_id)->posts;
            return view ('front.category',compact('posts'));
        }
        
        public function showtag($tag_id)
        {   
            $tag = Tag::find($tag_id);
            $posts = Tag::find($tag_id)->posts;
            return view ('front.tag',compact('posts','tag'));
        }

}
