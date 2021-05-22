<?php


namespace App\Http\Controllers\Admin;


use App\Components\Recursive;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
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

    public function index() {
        $posts = $this->post->getPostPaginate();
        return view('admin.post.index', compact('posts'));
    }
    public function create() {
        $htmlOption = $this->getCategory($parent_id = '');
        return view('admin.post.add', compact('htmlOption'));
    }

    public function store(Request $request) {
        $input = $request->all();
        $input['slug_vi'] = isset($input['name_vi']) ? Str::slug($input['name_vi']) : '';
        $input['slug_en'] = isset($input['name_en']) ? Str::slug($input['name_en']) : '';
        $input['status_vi'] = isset($input['status_vi']) ? true : false;
        $input['status_en'] = isset($input['status_en']) ? true : false;
        $this->post->create($input);
        return redirect()->route('post.index');
    }

    public function edit($id) {
        $post = $this->post->findOrFail($id);
        $htmlOption = $this->getCategory($post->category_id);

        return view('admin.post.edit', compact('post', 'htmlOption'));
    }

    public function update(Request $request, $id) {
        $post = $this->post->findOrFail($id);
        $input = $request->all();
        $input['slug_vi'] = isset($input['name_vi']) ? Str::slug($input['name_vi']) : '';
        $input['slug_en'] = isset($input['name_en']) ? Str::slug($input['name_en']) : '';
        $input['status_vi'] = isset($input['status_vi']) ? true : false;
        $input['status_en'] = isset($input['status_en']) ? true : false;
        $post->update($input);
        return back()->with('success', 'Updated successfully');
    }

    public function delete($id) {
        $post = $this->category->findOrFail($id);
        $post->delete();
        return back()->with('success', 'Delete successfully');
    }
    public function getCategory($parent_id) {
        $listCategory = $this->category->getAllCategory();
        $recursive = new Recursive($listCategory);
        $htmlOption = $recursive->recursive($parent_id);
        return $htmlOption;
    }
}
