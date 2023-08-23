<?php

namespace App\Models;

use App\Http\Requests\Product\UpdateRequest;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Furniture extends Model
{
    use HasFactory;
    protected $table = 'furniture';
    protected $fillable = [
        'name',
        'material',
        'color',
        'size',
        'price',
    ];

    static function store(array $data)
    {

        try {
            DB::beginTransaction();
            $furniture = new Furniture();
            $furniture = $furniture->create($data);
            DB::commit();
            return $furniture;
        } catch (\Exception $e) {
            $data = [];
            DB::rollBack();
        }
    }

    static function updateFurniture(UpdateRequest $request, $id)
    {
        try {
            DB::beginTransaction();
            Furniture::where('id', $id)->update($request->all());
            DB::commit();
            return redirect()->back()->with('success', 'Furniture updated successfully');
        } catch (\Exception $e) {
            $data = [];
            DB::rollBack();
        }
    }
}
