<?php


namespace App\Http\Controllers\Admin;


use App\Components\Recursive;
use App\Http\Controllers\Controller;
use App\Http\Requests\UploadRequest;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class PostController extends Controller
{
    private $category;
    private $post;

    public function __construct(Category $category, Post $post)
    {
        $this->post = $post;
        $this->category = $category;
    }

    public function index(Request $request)
    {
        $type = $request->type;
        $posts = $this->post->getPostPaginate($type);
        $posts->map(function ($item) {
            $item->img_url = $item->image;
            return $item;
        });
//        dd($posts);
        return view('admin.post.index', compact('posts'));
    }

    public function create(Request $request)
    {
        $htmlOption = $this->getCategory($parent_id = '');
        $type = $request->type;
        return view('admin.post.add', compact('htmlOption', 'type'));
    }

    public function store(UploadRequest $request)
    {
        $input = $request->all();
        if($request->has('image_vi')) {
            $file = $request->file('image_vi');
            $filePath = $file->store('public/image');
            $input['image_vi'] = $filePath;

        }
        $input['slug_vi'] = isset($input['name_vi']) ? Str::slug($input['name_vi']) : '';
        $input['slug_en'] = isset($input['name_en']) ? Str::slug($input['name_en']) : '';
        $input['status_vi'] = isset($input['status_vi']) ? true : false;
        $input['status_en'] = isset($input['status_en']) ? true : false;
        $this->post->create($input);
        return redirect("admin/post?type=".$request->type)->with('success', 'Updated successfully');
    }

    public function edit($id, Request $request)
    {
        $post = $this->post->findOrFail($id);
        $post->image_vi = $post->image;
        $htmlOption = $this->getCategory($post->category_id);
        $type = $request->type;
        return view('admin.post.edit', compact('post', 'htmlOption', 'type'));
    }

    public function update(UploadRequest $request, $id)
    {
        $post = $this->post->findOrFail($id);
        $input = $request->all();
        $oldImage = $post->image_vi;
        if($request->has('image_vi')) {
            $file = $request->file('image_vi');
            $filePath = $file->store('public/image');
            $input['image_vi'] = $filePath;
        }

        $input['slug_vi'] = isset($input['name_vi']) ? Str::slug($input['name_vi']) : '';
        $input['slug_en'] = isset($input['name_en']) ? Str::slug($input['name_en']) : '';
        $input['status_vi'] = isset($input['status_vi']) ? true : false;
        $input['status_en'] = isset($input['status_en']) ? true : false;
        $post->update($input);
        if($request->has('image_vi')) {
            Storage::disk()->delete($oldImage);
        }
        return back()->with('success', 'Updated successfully');
    }

    public function delete($id)
    {
        $post = $this->post->findOrFail($id);
        $post->delete();
        return back()->with('success', 'Delete successfully');
    }

    public function getCategory($parent_id)
    {
        $listCategory = $this->category->getAllCategory();
        $recursive = new Recursive($listCategory);
        $htmlOption = $recursive->recursive($parent_id);
        return $htmlOption;
    }
}
