<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{

    public function blogPage()
    {
        // get file from storage
        $blog_file = Storage::disk('local')->get('blogs.json');

        $blog_data = json_decode($blog_file, true);

        return view('blog', ['blogs' => $blog_data]);
    }
    public function blogItemInfo(int $id)
    {
        // get file from storage
        $blog_file = Storage::disk('local')->get('blogs.json');

        $blog_data = json_decode($blog_file, true);

        return $blog_data[$id - 1];
    }

    public function createBlog(Request $request): RedirectResponse
    {
        // get file from storage
        $blog_file = Storage::disk('local')->get('blogs.json');


        $blog_data = json_decode($blog_file, true);

        $request->validate([
            'imageURL' => 'required',
            'text' => 'required'
        ]);

        $data = $request->all();

        $new_blog = new Blog($data['imageURL'], $data['text']);

        $blog_data[] = $new_blog->toHashArray();

        Storage::disk('local')->put('blogs.json', json_encode($blog_data));

        return redirect('/blog');
    }
}
