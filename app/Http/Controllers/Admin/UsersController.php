<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class UsersController extends Controller
{
    public function index()
    {
        $users = User::paginate(5);
        return view('admin.user.index', ['users' => $users]);
    }
    /**
     * search USER by Email
     */
    public function search(User $user)
    {
        $searchData = $user->get('search');
        $users = DB::table("user")
            ->where('email', 'like', '%' .$searchData. '%');
        return view('admin.user.index', ['user'=> $user]);
    }
    public function create()
    {
        $roles = Role::all();
        return view('admin.user.create', compact('roles'));
    }
    /**
     * Store new user in to the database
    */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|between:3,50|unique:users' ,
            'email' => 'required|email:rfc,dns|unique:users',
            'password' => 'required|between:6,20|confirmed',
            ]);

        $user = User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);

        $role= $request->input('role', []);

        $user->assignRole($role);
        return redirect('users')->with('success', 'User is successfully saved');
    }

    /**
     * Show the form for editing

     */
    public function edit(User $user)
    {

        $roles = Role::all();
        return view('admin.user.edit',  compact(['user', 'roles']));
    }

    /**
     * Update existing record of User

     */
//    public function update(Request $request, User $user)
//    {
//        $user->validate([
//            'name' => ['required', 'unique:users', 'between:3,50',
//             'email'=>['required','unique
//             ']
//                Rule::unique('users', 'name')->ignore($User->id),
//            ],
//
//        ]);
//
//        $user->update($user->all());
//
//        return redirect('/Users')->with('success', 'User is successfully updated.');}



    /**
     * Delete selected User

     */
    public function destroy(User $user)
    {
        $user->delete();

        return redirect('/users')->with('success', 'User is successfully deleted.');
    }

}
