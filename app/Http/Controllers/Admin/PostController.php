<?php


namespace App\Http\Controllers\Admin;


use App\Components\Recursive;
use App\Http\Controllers\Controller;
use App\Http\Requests\UploadRequest;
use App\Models\Category;
use App\Models\Post;
use App\Traits\StorageImageTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class PostController extends Controller
{
    use StorageImageTrait;
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
        return view('admin.post.index', compact('posts', 'type'));
    }

    public function create(Request $request)
    {
        $type = $request->type;
        $htmlOption = $this->getCategory($parent_id = '', $type);
        return view('admin.post.add', compact('htmlOption', 'type'));
    }

    public function store(UploadRequest $request)
    {
        $input = $request->all();
        $path_img='upload/images';
//        $dataUpload = $this->storageTraitUpload($request, 'image_vi', 'public/image');
        if($request->has('icon_home')) {
            $file = $request->file('icon_home');
            $file_name = time().'_'.$file->getClientOriginalName();
            $filePathIcon = $path_img.'/'.$file_name;
            $file->move($path_img, $file_name);
            $input['icon'] = $filePathIcon;
        }
        if($request->has('image_vi')) {
            $fileImage = $request->file('image_vi');
            $fileNameImage = time().'_'.$fileImage->getClientOriginalName();
            $filePathImage = $path_img.'/'.$fileNameImage;
            $fileImage->move($path_img, $fileNameImage);
            $input['image_vi'] = $filePathImage;
//            $filePath = $file->store('public/image');
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
        $type = $request->type;
        $post = $this->post->findOrFail($id);
        $htmlOption = $this->getCategory($post->category_id, $type);

        return view('admin.post.edit', compact('post', 'htmlOption', 'type'));
    }

    public function update(UploadRequest $request, $id)
    {
        $post = $this->post->findOrFail($id);
        $input = $request->all();
        $oldImage = $post->image_vi;
        $path_img='upload/images';
        if($request->has('icon_home')) {
            $file = $request->file('icon_home');
            $file_name = time().'_'.$file->getClientOriginalName();
            $filePathIcon = $path_img.'/'.$file_name;
            $file->move($path_img, $file_name);
            $input['icon'] = $filePathIcon;
        }
        if($request->has('image_vi')) {
            $fileImage = $request->file('image_vi');
            $fileNameImage = time().'_'.$fileImage->getClientOriginalName();
            $filePathImage = $path_img.'/'.$fileNameImage;
            $fileImage->move($path_img, $fileNameImage);
            $input['image_vi'] = $filePathImage;
//            $filePath = $file->store('public/image');
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

        return response()->json([
           'code' => 200,
           'message' => 'success'
        ], 200);
    }

    public function getCategory($parent_id, $type)
    {
        $listCategory = $this->category->getAllCategory($type);
        $recursive = new Recursive($listCategory);
        $htmlOption = $recursive->recursive($parent_id);
        return $htmlOption;
    }
}
