<?php

namespace App\Http\Controllers;

use App\Models\Furniture;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\Furniture\StoreRequest;
use Illuminate\Contracts\Cache\Store;
use App\Http\Requests\Product\UpdateRequest;
use Illuminate\Support\Facades\Log;


class furnitureController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $furniture = Furniture::all();
        return view('dashboard', compact('furniture'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        //
        try {
            $furniture = Furniture::store($request->all());
            if(!$furniture){
                return response()->json([
                    'message' => 'No se pudo realizar correctamentee'
                ], 500);
            }
            return redirect()->back()->with('success', 'Creado Exitosamente');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'No se pudo realizar correctamentee');
        }

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        
            
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
        try {
            //Retrieve the specified Product by id and return the view with the data.
            $furniture = Furniture::findOrFail($id);

            return view('showFurniture', compact('furniture'));

        } catch (\Exception $exception) {
            //Log error and return redirect with error message.
            Log::error('Error al obtener los productos' . $exception->getMessage());

            return redirect()->back()->with('error', 'Error al obtener los productos');
        }
        

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {
        //
        
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, $id)
    {
        try {
            DB::beginTransaction();

            Furniture::find($id)->update($request->all());

            DB::commit();

            return redirect()->back()->with('success', 'Producto Atualizado con exito');

        } catch (\Exception $exception) {
            DB::rollBack();

            Log::error('Error al actualizar el producto' . $exception->getMessage());

            return redirect()->back()->with('error', 'Error al actualizar el producto');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        try {
            //Delete the specified Product by id from the database.
            Furniture::findOrFail($id)->delete();

            return redirect()->back()->with('success', 'Producto eliminado correctamente');

        } catch (\Exception $exception) {
            //Log error and return redirect with error message.
            Log::error('Error al eliminar el producto' . $exception->getMessage());

            return redirect()->back()->with('error', 'Error al eliminar el producto');
        }
    }
}
