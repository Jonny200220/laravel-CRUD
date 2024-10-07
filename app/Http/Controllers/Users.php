<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class Users extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        /* items lo que hace es usando el mmodelo o instanciando la tabla user,
        normalmente se usa de all para traer todos los registros pero usaremos paginate directamente
        para mostrar los registros de 2 en 2
        */
        $items = User::paginate(3);
        // Se manda  a la vista mediante compact, sin el signo de pesos porque esta implicito que compact manda una variable
        return view('modules/users/index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('modules/users/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Se esta instanciando la tabla user
        $item = new User();
        // nos da acceso al atributo de la tabla name que es igual al rqst o post que se llama name
        $item ->name = $request -> name;
        // solo se guarda
        $item->save();
        //Se redirecciona al index
        return to_route('index');
    }

    /**
     * Display the specified resource.
     */ 
    public function show(string $id)
    {
        $item = User::find($id);
        
        return view('modules/users/show', compact('item'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $item = User::find($id);
        return view('modules/users/edit', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $item = User::find($id);
        $item->name = $request->name;
        $item->save();
        return to_route('index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Buscando el user por el de
        $item = User::find($id);
        // Una vez que lo encuentres eliminalo
        $item->delete();
        // Cuando lo hayas eliminado regresa al index
        return to_route('index');
    }
}
