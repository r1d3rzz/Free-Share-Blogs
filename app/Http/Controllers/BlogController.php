<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class BlogController extends Controller
{
    public function index(){
        return view('blogs.index',[
            'blogs' => Blog::latest()->filter(request(['search','user','category']))->paginate(3)->withQueryString(),
        ]);
    }

    public function show(Blog $blog)
    {
        return view('blogs.show',[
            'blog' => $blog,
            'randomBlogs' => Blog::inRandomOrder()->take(6)->get(),
        ]);
    }

    public function create()
    {
        return view('blogs.create',[
            'categories' => Category::latest()->get(),
        ]);
    }

    public function store()
    {
        $formData = request()->validate([
            'title' => ['required','min:3','max:120'],
            'slug' => ['required','min:3','max:120',Rule::unique('blogs','slug')],
            'intro' => ['required','min:3'],
            'body' => ['required','min:3'],
            'category_id' => ['required',Rule::exists('categories','id')],
        ]);

        $formData['user_id'] = Auth::user()->id;

        if(request('thumbnail') !== null){
            $formData['thumbnail'] = request()->file('thumbnail')->store('thumbnails');
        }

        Blog::create($formData);

        return redirect('/')->with('success','Your Blog '.$formData['title'].' is Successfully Uploaded');
    }
}
