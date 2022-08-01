<?php

namespace App\Http\Controllers;

use App\Models\DressModel;
use App\Http\Requests\StoreDressModelRequest;
use App\Http\Requests\UpdateDressModelRequest;
use App\Http\Resources\DressModelResource;
use Illuminate\Http\Request;

class DressModelController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:api');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $name = $request->get('name');
        $brand = $request->get('brand');
        $dressModels = DressModel::orderBy('id', 'DESC')->name($name)->brand($brand)->with('user')->with('dress')->get();
        return DressModelResource::collection($dressModels);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreDressModelRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDressModelRequest $request)
    {
        $dressModel = DressModel::create($request->all());
        return response()->json([
            'message' => 'Modelo de vestido registrado existosamente!',
            'dressModel' => $dressModel
        ], 201);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DressModel  $dressModel
     * @return \Illuminate\Http\Response
     */
    public function get($id)
    {
        $dressModel =  DressModel::where('id', $id)->with('user')->with('dress')->first();
        if (isset($dressModel->id)) {
            return new DressModelResource($dressModel);
        }
        return response()->json([
            'message' => 'El Modelo de vestido no esta registrado!',
        ], 404);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDressModelRequest  $request
     * @param  \App\Models\DressModel  $dressModel
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDressModelRequest $request)
    {
        $dressModel = DressModel::find($request->id);
        if (isset($dressModel->id)) {
            $dressModel->update($request->all());
            return response()->json([
                'message' => 'El Modelo de vestido ha sido Actualizado existosamente!',
                'dressModel' => $dressModel
            ], 201);
        }
        return response()->json([
            'message' => 'El Modelo de vestido no esta registrado!',
        ], 404);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DressModel  $dressModel
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dressModel = DressModel::find($id);
        if (isset($dressModel->id)) {
            $dressModel->delete();
            return response()->json([
                'message' => 'El modelo del vestido ha sido eliminado existosamente!',
            ], 201);
        }
        return response()->json([
            'message' => 'El modelo del vestido no esta registrado!',
        ], 404);;
    }
}
