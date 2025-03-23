<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreBrickRequest;
use App\Http\Requests\UpdateBrickRequest;
use App\Http\Resources\BrickResource;
use App\Models\Brick;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class BrickController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): JsonResource
    {
        $bricks = Brick::all();
        return BrickResource::collection($bricks);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBrickRequest $request)
    {
        //dd($request->validated());
        $brick = Brick::create($request->validated());
        return (new BrickResource($brick))->additional(['message' => 'Ladrillo creado'])->response()->setStatusCode(201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Brick $brick)
    {
        return new BrickResource($brick);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBrickRequest $request, Brick $brick)
    {
        $brick->update($request->validated());
        return (new BrickResource($brick))->additional(['message' => 'Ladrillo actualizado'])->response()->setStatusCode(200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Brick $brick)
    {
        $brick->delete();
        return response()->json(['message' => 'Ladrillo eliminado'], 204);
    }
}
