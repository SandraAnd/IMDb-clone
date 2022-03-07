<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;
use Illuminate\Support\Str;
use App\Http\Requests\StoreRole;

class RoleController extends Controller
{
        //RESTful method structure: index(), create(), store(), show(), edit(), update(), or destroy(). The routes should follow this structure also.
        public function index()
        {
            return view('roles.index')->with([
                'roles' => Role::all(), //'roles' is a variable!!!!!!!!!!!!!!!
            ]);            
        }

        public function create()
        {        
            return view('roles.create');
        }

        public function show($role){
            return view('roles.show')->with([ //"with always receives arrays!
                'role' => Role::findOrFail($role)
            ]);
        }

        public function store(StoreRole $role)
        { 
            /* VALIDACION */ // lo pegué en el form request->Http/Requests/Storerole.php
            
            // $role = Role::create($role->all());
            $role = Role::firstOrCreate([
              'role' => $role->role
            ]);

            return view('roles.index');//laravel no necesita $role->id, laravel entiende que se le está pasando el id
        }

        public function edit(Role $role)
        {
            return view('roles.edit', compact('role'));
        }    
        

        public function update(Role $role, Request $request)
        { //rescato lo que hay en la URL
            /* VALIDACION */
            $request->validate([
                //validation rules
                'role' => 'required', //atributo name del input name="rolename"
            ]);
    
            //asignando registros por asignacion masiva (mass assignment)
            $role->update($request->all()); //This method updates the registers and executes the method save
            
            // return redirect()->route('roles.show', $role);//laravel no necesita $role->id, laravel entiende que se le está pasando el id
            return redirect()->route('roles.index', $role);//laravel no necesita $role->id, laravel entiende que se le está pasando el id
        }
    
        public function destroy(role $role){
            $role->delete();
            return redirect()->route('roles.index');
        }
}
