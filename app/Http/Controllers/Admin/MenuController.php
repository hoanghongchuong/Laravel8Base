<?php

namespace App\Http\Controllers\Admin;

use App\Components\Recursive;
use App\Models\Menu;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class MenuController extends Controller
{
    public $menu;
    public function __construct(Menu $menu)
    {
        $this->menu = $menu;
    }

    public function index() {
        $menus = $this->menu->with('parent')->get();
        return view('admin.menu.index', compact('menus'));
    }

    public function create() {
        $htmlOption = $this->getCategory($parent_id = '');
        $maxOrder = $this->menu->max('order') + 1;
        return view('admin.menu.add', compact('htmlOption', 'maxOrder'));
    }

    public function store(Request $request) {
        $input = $request->all();
        $input['status'] = isset($input['status']) ? true : false;
        $this->menu->create($input);
        return redirect()->route('menu.index')->with('success', 'Thêm mới thành công');
    }

    public function edit($id) {
        $item = $this->menu->findOrFail($id);
        $htmlOption = $this->getCategory($item->parent_id);

        return view('admin.menu.edit', compact('item', 'htmlOption'));
    }

    public function update(Request $request, $id) {
        $item = $this->menu->findOrFail($id);
        $input = $request->all();
        $input['status'] = isset($input['status']) ? true : false;
        $item->update($input);
        return redirect()->route('menu.index')->with('success', 'Cập nhật thành công');
    }

    public function delete($id) {
        $item = $this->menu->findOrFail($id);
        $item->delete();
        return back()->with('message','Deleted successfully');
    }

    public function getCategory($parent_id) {
        $listMenu = $this->menu->getAllMenu();
        $recursive = new Recursive($listMenu);
        $htmlOption = $recursive->recursive($parent_id);
        return $htmlOption;
    }
}
