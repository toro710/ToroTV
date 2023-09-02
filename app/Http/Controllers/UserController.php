<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.-obtener todos los elementos y retornar la vista para visualizar
     */
    public function index()
    {
        //
        $users = user::all();
        dd($users);
    }

    /**
     * Show the form for creating a new resource.
     * retornar la vista con el formulario  para la creacion del elemento 
     */
    public function create()
    {
        $roles = Role::all();
        dd($roles);
        //
    }

    /**
     * Store a newly created resource in storage.
     * recibir solicitud del formulario de creacion del elemento y creacion de el formulario
     * POST
     */
    public function store(Request $request)
    {
        $user = new User;
        $user -> fullname = $request -> fullname;
        $user->email = $request->email;
        $user->phone = $request->phone;
        // codigo para subir foto
        $user->password = bcrypt($request->password);
        $user->rode_id = $request->role_id;

        if($user -> save()){
            //redireccionar a la vista index

        }
    }

    /**
     * Display the specified resource.
     * retornar la vista para visualizar un elemento 
     * GET
     */
    public function show(string $id)
    {
        $user = User::find($id);
        dd($user);
        //
    }

    /**
     * Show the form for editing the specified resource.
     * retornar la vista para editar UN ELEMENTO EN ESPECIFICO
     * GET
     */
    public function edit(string $id)
    {
        $user = User::find($id);
        dd($user);
        //
    }

    /**
     * Update the specified resource in storage.
     * recibe la solicitud de actuaizacion de un elemento y actualiza al registro
     * PUT
     */
    public function update(Request $request, string $id)
    {
        $user = User::find($id);
        $user -> fullname = $request -> fullname;
        $user->email = $request->email;
        $user->phone = $request->phone;
        // codigo para subir foto
        $user->password = bcrypt($request->password);
        $user->rode_id = $request->role_id;

        if($user -> save()){
            //redireccionar a la vista index

        }
        //
    }

    /**
     * Remove the specified resource from storage.
     * eliminar un registro
     * delete
     */
    public function destroy(string $id)
    {
        $user = User::find($id);
        $user->delete();
        //
    }
}
