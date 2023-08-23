<?php

namespace App\Http\Controllers;

use App\Models\Furniture;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\Product\UpdateRequest;
use Illuminate\Support\Facades\Log;

class furnitureController extends Controller
{
    /**
     * Display a listing of the resource.
     *  @return \Illuminate\View\View
     * @throws \Exception
     */
    public function index()
    {
        // Retrieve all furniture items from the database and pass them to the view.
        $furniture = Furniture::all();

        //Return the view with the data.
        return view('dashboard', compact('furniture'));
    }

    /**
     * Show the form for creating a new resource.
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function create(Request $request)
    {
        // Store a new furniture item with the provided data.
        try {
            // Store the furniture item in the database.
            $furniture = Furniture::store($request->all());

             // Check if the furniture item was created successfully.
            if(!$furniture){

                // Return an error response if the furniture item was not created.
                return response()->json([
                    'message' => 'No se pudo realizar correctamentee'
                ], 500);
            }

            // Return a success response.
            return redirect()->back()->with('success', 'Creado Exitosamente');

        } catch (\Exception $e) {
            // Log error and return redirect with error message.
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
     * 
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
     * @param \App\Http\Requests\Product\UpdateRequest $request
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(UpdateRequest $request, $id)
    {
        try {
            //Update the specified Product by id from the database.
            DB::beginTransaction();

            // Find the furniture item by id and update its details.
            Furniture::find($id)->update($request->all());

            // Commit the transaction.
            DB::commit();

            // Redirect back with success message.
            return redirect()->back()->with('success', 'Producto Atualizado con exito');

        } catch (\Exception $exception) {
            //Rollback the transaction and return redirect with error message.
            DB::rollBack();

            //Log error and return redirect with error message.
            Log::error('Error al actualizar el producto' . $exception->getMessage());

            // Redirect back with error message.
            return redirect()->back()->with('error', 'Error al actualizar el producto');
        }
    }

    /**
     * Remove the specified resource from storage.
      * @param int $id
      * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        //
        try {
             // Delete the specified furniture item by id.
            Furniture::findOrFail($id)->delete();

            // Redirect back with success message.
            return redirect()->back()->with('success', 'Producto eliminado correctamente');

        } catch (\Exception $exception) {
            //Log error and return redirectback with error message.
            Log::error('Error al eliminar el producto' . $exception->getMessage());

            return redirect()->back()->with('error', 'Error al eliminar el producto');
        }
    }
}
