<?php

namespace App\Http\Controllers;

use App\Admin;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public $users;

    public function __construct()
    {
        $this->users = User::getAllUsers();
    }
    public function index()
    {
        $datas= User::all();
        return view('admins.index', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admins.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //create user
        $user = new User();
        // $user->creator_id = Auth::user()->id;
        $user->name = $request->name ;
        $user->role = $request->role;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();
        
        return redirect()->route('admins.index')
            ->with('success', 'User created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param User $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        $id=$user->id;
        return view('admins.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admins.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        $id->update($request->all());
        // notify()->success ("la todo <span class='badge badge-dark'>#$todo->id</span> vient d'etre mise à jour");
        return redirect()->route('admins.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $id->delete();
         return redirect()->route('admins.index')->with('success','User deleted successfully');
    }
}
