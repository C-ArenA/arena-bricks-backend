<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
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
        $bricks = Brick::where('is_produced', true)->get();
        return BrickResource::collection($bricks);
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
    public function show(Brick $brick)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Brick $brick)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Brick $brick)
    {
        //
    }
}
