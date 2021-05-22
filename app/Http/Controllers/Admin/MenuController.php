<?php

namespace App\Http\Controllers\Admin;

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
        $menus = $this->menu->get();
        return view('admin.menu.index', compact('menus'));
    }

    public function create() {

        return view('admin.menu.add');
    }

    public function store(Request $request) {

    }

    public function edit($id) {
        $item = $this->menu->findOrFail($id);
        return view('admin.menu.edit', compact('item'));
    }

    public function update(Request $request, $id) {

    }

    public function delete($id) {
        $item = $this->menu->findOrFail($id);
        $item->delete();
        return back()->with('message','Deleted successfully');
    }
}
