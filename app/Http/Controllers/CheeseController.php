<?php
namespace App\Http\Controllers;

use App\Cheese;
use App\Http\Resources\CheeseResource;
use App\Http\Resources\CheesesResource;
use Illuminate\Http\Request;

class CheeseController
{
    /**
    * Display a listing of the resource.
    *
    * @return CheesesResource
    */

    public function index()
    {
      return new CheesesResource(Cheese::all());

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cheese $Cheese
     *
     * @return CheeseResource
     */
    public function show(Cheese $Cheese)
    {
        CheeseResource::withoutWrapping();

        return new CheeseResource($Cheese);
    }
}
