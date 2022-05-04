<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;
use Spatie\Permission\Models\Permission;

class PermissionsController extends Controller
{
    /**
     * List all the permissions
     *
     * @return Response
     */
    public function index()
    {
        $permissions = Permission::paginate(6);
        return view('admin.permissions.index', ['permissions'=> $permissions]);
    }

    /**
     * search permissions
     *
     * @return Response
     */
    public function search(Request $request)
    {
        $searchData = $request->get('search');
        $permissions = DB::table("permissions")
            ->where('name', 'like', '%' .$searchData. '%')->paginate(6);
        return view('admin.permissions.index', ['permissions'=> $permissions]);
    }

    /**
     * Load the form to create a new permission
     *
     * @return
     */
    public function create()
    {
        return view('admin.permissions.create');
    }

    /**
     * Store the newly created permission in database
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required|alpha_underscores|between:3,30|unique:permissions',
        ]);

        Permission::create($request->all());

        return redirect()->route('permissions.index')->with('success', 'Permission is successfully saved');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Permission $permission
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(Permission $permission)
    {
        return view('admin.permissions.edit',  compact('permission'));
    }

    /**
     * Update existing record of permission
     *
     * @param Request $request
     * @param Permission $permission
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function update(Request $request, Permission $permission)
    {
        $request->validate([
            'name' => [

                'required',
                'alpha_underscores',
                'between:3,30',
                Rule::unique('permissions', 'name')->ignore($permission->id),
            ],

        ]);

        $permission->update($request->all());

        return redirect('/permissions')->with('success', 'Permission is successfully updated.');

    }

    /**
     * Delete selected record of permission
     *
     * @param Permission $permission
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     * @throws \Exception
     */
    public function destroy(Permission $permission)
    {
        $permission->delete();

        return redirect('/permissions')->with('success', 'Permission is successfully deleted.');
    }

}
