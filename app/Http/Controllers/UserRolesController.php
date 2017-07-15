<?php

namespace App\Http\Controllers;

use App\Models\UserRole;
use Illuminate\Http\Request;

class UserRolesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userRoles = UserRole::all();

        return view('admin.users.user_roles.index', compact('userRoles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(UserRole $userRole)
    {
        return view('admin.users.user_roles.create', compact('userRole'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param \App\Models\UserRole $userRole
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, UserRole $userRole)
    {
        $this->validate(request(), [
            'name'        => 'required|unique:user_roles',
            ]);

        UserRole::create(request([
            'name', 
            ]));

        session()->flash(
            'message', 'User Role Created!'
        );

        return redirect('/admin/users/user_roles');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UserRole  $userRole
     * @return \Illuminate\Http\Response
     */
    public function show(UserRole $userRole)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UserRole  $userRole
     * @return \Illuminate\Http\Response
     */
    public function edit(UserRole $userRole)
    {
        return view('/admin/users/user_roles.edit', compact('userRole'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\UserRole  $userRole
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UserRole $userRole)
    {
        $userRole->update($request->all());

        session()->flash(
            'message', 'User Role Updated!'
        );

        return redirect('/admin/users/user_roles');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserRole  $userRole
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserRole $userRole)
    { 

        $userRole->delete();

        session()->flash(
            'message', 'The User Role Has Been Deleted'
        );

        return redirect('/admin/users/user_roles');
    }
}
