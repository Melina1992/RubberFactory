<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
class RolesController extends Controller
{
    /**
     * Show all roles
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $roles = Role::paginate(5);
        return view('admin.roles.index', ['roles' => $roles]);
    }
    /**
     * search roles
     *
     * @return Response
     */
    public function search(Request $request)
    {
        $searchData = $request->get('search');
        $roles = DB::table("roles")
            ->where('name', 'like', '%' .$searchData. '%')->paginate(6);
        return view('admin.roles.index', ['roles'=> $roles]);
    }

    /**
     * load the form to create roles
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        $permissions = Permission::all();
        return view('admin.roles.create', compact('permissions'));
    }


    /**
     * Store newly created role in the database
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|alpha_spaces|between:3,30|unique:roles',
        ]);

        $role = Role::create($request->except('permissions'));
        $permissions = $request->input('permissions') ? $request->input('permissions') : [];
        $role->givePermissionTo($permissions);

        return redirect()->route('roles.index')->with('success', 'Role is successfully saved');
    }

    /**
     * Load form to edit the selected role
     *
     * @param Role $role
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(Role $role)
    {
        $permissions = Permission::all();
        $rolePermissions = $role->getAllPermissions()->pluck('id')->toArray();

        return view('admin.roles.edit', compact(['role', 'permissions', 'rolePermissions']));
    }

    /**
     * Update edited role in the database
     *
     * @param Request $request
     * @param Role $role
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, Role $role)
    {
        $request->validate([
            'name' => [
                'required',
                'alpha_spaces',
                'between:3,30',
                Rule::unique('roles', 'name')->ignore($role->id),
            ],
        ]);

        $role->update(request()->except('permissions'));
        $permissions = request()->input('permissions') ?? [];
        $role->syncPermissions($permissions);

        return redirect('/roles')->with('success', 'Role is successfully updated.');
    }

    /**
     * Show all permissions
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show(Role $role)
    {
        $permissions = Permission::all();
        $rolePermissions = $role->getAllPermissions();

        return view('admin.roles.show', compact(['role', 'permissions', 'rolePermissions']));
    }

    /**
     * Delete selected role from the database
     *
     * @param Role $role
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     * @throws \Exception
     */
    Public function destroy(Role $role)
    {
        $role->delete();
        return redirect('/roles')->with('success','Role is successfully deleted.');

    }


}
