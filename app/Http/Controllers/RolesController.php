<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;

class RolesController extends Controller
{
    public function create(Request $request)
    {
        //return response()->json([$request->input('test-test')]);
        Role::create($request->only('name'));

        return response()->json(true);
    }

    public function update(Request $request, Role $role)
    {

        $role->update($request->only('name'));
        return response()->json($role);
    }

    public function index()
    {
        //return Role::all();
        //return Role::find(1);
        //Role::where('id', 1)->first();
//        return Role::whereNull('created_at')->get();

        //return Role::whereNotNull('created_at')->/*or*/where('id', '>', 1)->/*get()*/toSql();

//        return Role::where('created_at', '!=', null)->get();

        //return response()->json(Role::get());
        //return Role::get()->sortBy('id');
        //dd(Role::get()->sortBy('name'));
        //return Role::orderByDesc('id')->get();

        //$role = Role::find(4);
        //$role->name = 'Manager';
        //$role->save();

        //$role = Role::find(4)->update([
        //    'name' => 'M',
        //]);

        //return Role::find(4);

        Role::find(4)->delete();
    }
    public function show(Role $role)
    {/*
        $role = Role::find($roleId);
        if (empty($role)) {
            return response([], 404);
        }*/
        return response()->json(['data' => $role]);
    }
}
