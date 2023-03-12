<?php

namespace App\Http\Controllers\admin;

use App\Models\blog;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class blogController extends Controller
{
    public function createBlog()
    {
        $blogs = blog::where('created_by', '=', Auth::user()->id)->orderBy('sort')->get();
        return view('admin.blog.create-blog', compact('blogs'));
    }

    public function createblogSubmit(Request $req)
    {
        $this->validate(
            $req,
            [
                "blog_name" => "required|string",
                "blog_image" => "required|mimes:jpg,png,jpeg",
                "blog_body" => "required|string",
                "sort" => "required|numeric",
            ],
            [
                'blog_image.required' => 'Please select a picture!',
                'blog_image.mimes' => 'The profile pic must be a jpg, png or jpeg!',
            ]
        );

        $extension = $req->file('blog_image')->getClientOriginalExtension();
        $image_name = Auth::user()->id . time() . "." . $extension;

        echo $image_name;

        $req->file('blog_image')->storeAs('public/blog/', $image_name);

        $blog = new blog();
        $blog->blog_name = $req->blog_name;
        $blog->name_slug = Str::slug($req->blog_name);
        $blog->blog_image = $image_name;
        $blog->blog_body = $req->blog_body;
        $blog->sort = $req->sort;
        $blog->status = $req->status;
        $blog->created_by = Auth::user()->id;
        $blog->save();

        return Redirect::back()->with('msg', 'Blog has been created successfully!');
    }

    public function editBlog($blog_id)
    {
        $blogs = blog::where('created_by', '=', Auth::user()->id)->orderBy('sort')->get();
        $blog = blog::where('id', '=', $blog_id)->first();
        return view('admin.blog.edit-blog', compact('blogs', 'blog'));
    }

    public function editBlogSubmit(Request $req)
    {
        $this->validate(
            $req,
            [
                "blog_name" => "required|string",
                "blog_image" => "nullable|mimes:jpg,png,jpeg",
                "blog_body" => "required|string",
                "sort" => "required|numeric",
            ],
            [
                'blog_image.mimes' => 'The profile pic must be a jpg, png or jpeg!',
            ]
        );
        $blog = blog::where('id', '=', $req->blog_id)->first();

        if ($req->blog_image) {
            $extension = $req->file('blog_image')->getClientOriginalExtension();
            $image_name = Auth::user()->id . time() . "." . $extension;
            $destination = 'storage/blog/' . $blog->blog_image;

            if (file_exists(public_path($destination))) {
                unlink($destination);
                $req->file('blog_image')->storeAs('public/blog/', $image_name);
            } else {
                $req->file('blog_image')->storeAs('public/blog/', $image_name);
            }
        }

        $blog->blog_name = $req->blog_name;
        if ($req->blog_image) {
            $blog->blog_image = $image_name;
        }
        $blog->name_slug = Str::slug($req->blog_name);
        $blog->blog_body = $req->blog_body;
        $blog->sort = $req->sort;
        $blog->status = $req->status;
        $blog->update();

        return Redirect::back()->with('msg', 'Blog has been updated successfully!');
    }

    public function deleteBlog($blog_id)
    {
        $blog = blog::where('id', '=', $blog_id)->first();
        $destination = 'storage/blog/' . $blog->blog_image;

        if (file_exists(public_path($destination))) {
            unlink($destination);
        }

        $blog->delete();
        return Redirect::back()->with('msg', 'Blog has been deleted successfully!');
    }
}
