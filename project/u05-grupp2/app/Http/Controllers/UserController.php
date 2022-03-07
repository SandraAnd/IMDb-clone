<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
//added for the form request
use App\Http\Requests\StoreUser;
use Illuminate\Support\Str;
use App\Models\Role;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    //RESTful method structure: index(), create(), store(), show(), edit(), update(), or destroy(). The routes should follow this structure also.

    public function __construct(){
        $roles = Role::all();
        // {{dd($roles);}}            
        return view('users.edit', compact('roles'));
    }

    public function index(){
        $this->authorize('isAdmin');        
        $users = User::orderBy('id', 'desc')->paginate(); //without dollar goes in compact
        return view('users.index', compact('users'));
    }

    public function create()
    {
        $this->authorize('isAdmin');
        return view('users.create');
    }

    public function store(StoreUser $request)
    {
        $this->authorize('isAdmin');
        $user = User::create($request->all());
        $slug = Str::slug($user->username, '-');
        $user->slug = $slug;
        return redirect()->route('users.show', $user);//laravel does not need $user->id, Laravel understands that only $user passes the id
    }

    public function show(User $user){ //shows the selected user
        $this->authorize('isAdmin');
        return view('users.show', compact('user'));
    }

    public function edit(User $user){       
        // $this->authorize('isAdmin');
        $this->authorize('update', $user);
        // {{dd($roles);}}
        // return view('welcome', compact('datos', 'etiqueta'));//passing multiple parameters to a view
        
        $roles = Role::all();
        return view('users.edit', compact('user', 'roles')); //passing multiple parameters to a view
    }

    public function update(User $user, Request $request)//rescue what in the URL is
    { 
        $this->authorize('update', $user);

        /* VALIDACION */
        $request->validate([
            //validation rules
            'username' => 'required', //attribute name of input name="username"
            'email' => 'required', //attribute name of input name="email"
            'password' => 'required', //attribute name of input name="password"
            'role_id' => 'required' //attribute name of input name="role_id"
        ]);
    
        //assigning registers by mass assignment(mass assignment)
        $user->update($request->all()); //This method updates the registers and executes the method save      

        $slug = Str::slug($user->username, '-');
        $user->slug = $slug;
        
        $hashedpassword = Hash::make($user->password);        
        $user->password = $hashedpassword;

        // {{dd($user);}}
        $user->update($request->all($user->password = $hashedpassword)); //This method updates the registers and executes the method save
        // {{dd($user);}}

        // return redirect()->route('users.show', $user);//laravel does not need $user->id, Laravel understands that only $user passes the id
        return redirect()->route('users.index', $user);//laravel does not need $user->id, Laravel understands that only $user passes the id
    }

    public function destroy(User $user){
        $this->authorize('isAdmin');
        $user->delete();
        return redirect()->route('users.index');
    }
    
}
