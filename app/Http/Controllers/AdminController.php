<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Blog;
use App\Models\User;
use Hash;
use Illuminate\Support\Facades\Auth;
use Session;
use Carbon\Carbon;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin/index');
    }

    public function sidebar()
    {
        return view('admin/sidebar');
    }

    public function loginpost(Request $req)
    {
        $inputs = $req->all();
        $password = $inputs['password'];
        $login = Auth::attempt(["email" => $inputs['uname'], "password" => $password]);
        if ($login) {
            return redirect('admin/blog');
        }
        return redirect()->back()->with('msg', 'Invalid credentials');
    }

    public function register()
    {
        return view('admin/register');
    }

    public function user_register(Request $req)
    {
        $inputs = $req->all();

        $email = $inputs['email'];
        $password = $inputs['password'];

        $hashedPassword = Hash::make($password);

        // Check for duplicate email
        $existingUser = User::where('email', $inputs['email'])->first();
        if ($existingUser) {
            return redirect('register')->with('msg', 'Email already exists');
        }

        // Insert new user
        User::insert([
            'name' => $inputs['name'],
            'email' => $inputs['email'],
            'mobile' => $inputs['mobile'],
            'password' => $hashedPassword,
            'created_on' => now()
        ]);
        return redirect('register')->with('msg', 'Registered successfully');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/admin');
    }

    // B L O G S
    public function admin_blog()
    {
        if (Auth::check()) {
            $user = auth()->user();
            $blogs = DB::table('blogs')->get();
            return view('admin/blog', [
                'user' => $user,
                'blogs' => $blogs
            ]);
        } else {
            return redirect('admin');
        }
    }

    public function showBlogs($category = null)
    {
        $blogs = ($category) ? Blog::where('category', $category)->get() : Blog::all();
        return view('admin/showBlogs', ['blogs' => $blogs, 'category' => $category]);
    }

    public function add_blog()
    {
        if (Auth::check()) {
            $user = auth()->user();
            return view('admin/add_blog', [
                'user' => $user,

            ]);
        } else {
            return redirect('admin');
        }
    }

    public function insert_blog(Request $request)
    {
        $existingBlog = Blog::where('title', $request['title'])->first();
        if ($existingBlog) {
            return redirect('admin_add_blogs')->with('msg', 'Title already exists');
        }

        $request->validate([
            'title' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'content' => 'required|string',
            'description' => 'required|string',
            'date' => 'required|date',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('asset/images/blogs'), $imageName);

        Blog::create([
            'title' => $request->title,
            'category' => $request->category,
            'slug' => strtolower(preg_replace('/[^A-Za-z0-9-]+/', '-', $request->title)),
            'short_description' => $request->content,
            'description' => $request->description,
            'date' => $request->date,
            'image' => $imageName,
            'created_at' => now()
        ]);

        return $this->admin_blog();
    }

    public function edit_blogs($id)
    {
        $blogs = DB::table('blogs')->where('id', $id)->first();
        return view('admin/edit_blogs', ['blogs' => $blogs]);
    }

    public function update_blogs(Request $request, $id)
    {

        $data = Blog::find($id);
        if ($data !== null) {

            // Get the input data from the request
            $input = $request->all();
            $image = $request->file('image');
            if (isset($image)) {
                // Move the uploaded image file to the desired location
                $imageName = time() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('asset/images/blogs'), $imageName);
                // Update the corresponding record in the database with the new image name
                DB::table('blogs')
                    ->where('id', $id)
                    ->update([
                        'title' => $input['title'],
                        'category' => $request->category,
                        'slug' => strtolower(preg_replace('/[^A-Za-z0-9-]+/', '-', $request->title)),
                        'short_description' => $input['short_description'],
                        'description' => $input['description'],
                        'image' => $imageName,
                        'date' => $request->date,

                    ]);
            } else {
                // Update the corresponding record in the database without changing the image
                DB::table('blogs')
                    ->where('id', $id)
                    ->update([
                        'title' => $input['title'],
                        'category' => $request->category,
                        'slug' => strtolower(preg_replace('/[^A-Za-z0-9-]+/', '-', $request->title)),
                        'short_description' => $input['short_description'],
                        'description' => $input['description'],
                        'date' => $request->date,

                    ]);
            }
        }
        return $this->admin_blog();
    }


    public function delet_blogs($id)
    {
        $dataId = $id;
        $data = Blog::find($dataId);
        if ($data !== null) {
            DB::table('blogs')
                ->where('id', $dataId)
                ->delete();
        }
        return $this->admin_blog();
    }

}