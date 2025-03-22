<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreBrickRequest;
use App\Http\Requests\UpdateBrickRequest;
use App\Http\Resources\BrickResource;
use App\Models\Brick;
use Illuminate\Http\Request;

class ProducedBrickController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bricks = Brick::where('is_produced', true)->get();
        return BrickResource::collection($bricks);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // validate request
        $validated = $request->validate([
            'id' => 'required',
        ]);

        $brick = Brick::find($request->id);
        // Si el ladrillo no existe envía error de validación
        if (!$brick) {
            return response()->json(['message' => 'Ladrillo inexistente'], 422);
        }
        if($brick->is_produced){
            return response()->json(['message' => 'Este ladrillo ya está marcado como producido'], 422);
        }
        $brick->is_produced = true;
        $brick->save();
        return new BrickResource($brick);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Brick $brick)
    {
        if ($brick->is_produced) {
            $brick->is_produced = false;
            $brick->save();
            return (new BrickResource($brick))->additional(['message' => 'Ladrillo marcado como no producido'])->response()->setStatusCode(200);
        }
        return response()->json(['message' => 'Ladrillo en estado producido inexistente'], 404);
    }
}
