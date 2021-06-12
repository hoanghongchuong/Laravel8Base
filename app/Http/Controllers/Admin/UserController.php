<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use PHPUnit\Exception;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    private $user;
    private $role;
    public function __construct(User $user, Role $role)
    {
        $this->user = $user;
        $this->role = $role;
    }

    public function index() {
        $users = $this->user->with(['roles'])->paginate(10);
        $users->map(function ($user) {
            $roleArray = [];
            foreach($user->roles as $item) {
                array_push($roleArray, $item->display_name);
            }
            $user->roleArray = implode(', ', $roleArray);
            return $user;
        });
        return view('admin.user.index', compact('users'));
    }

    public function create() {
        $roles = $this->role->all();
        return view('admin.user.add', compact('roles'));
    }
    public function store(Request $request) {
        DB::beginTransaction();
        try {
            $user = $this->user->create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password)
            ]);
            $user->roles()->attach($request->role_id);
            DB::commit();
        } catch (ModelNotFoundException  $exception) {
            DB::rollBack();
            return back()->withError($exception->getMessage())->withInput();
        }
        return redirect()->route('user.index')->with('success', 'Thêm thành công');
    }

    public function edit($id) {
        $user = $this->user->findOrFail($id);
        $roles = $this->role->all();
        $roleUser = $user->roles;
        return view('admin.user.edit', compact('user', 'roles', 'roleUser'));
    }

    public function update(Request $request, $id) {
//        dd($request->password);
        DB::beginTransaction();
        try {
            $user = $this->user->findOrFail($id);
            $dataUpdate = [
                'name' => $request->name,
                'email' => $request->email,
            ];
            if($request->password) {
                $dataUpdate['password'] = Hash::make($request->password);
            }
            $user->update($dataUpdate);
            $user = $this->user->find($id);
            $user->roles()->sync($request->role_id);
            DB::commit();
        } catch (ModelNotFoundException  $exception) {
            DB::rollBack();
            return back()->withError($exception->getMessage())->withInput();
        }
        return redirect()->back()->with('success', 'Cập nhật thành công');

    }
    public function delete($id) {
        $user = $this->user->findOrFail($id);
        dd($user);
    }


}
