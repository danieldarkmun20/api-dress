<?php

namespace App\Http\Controllers;

use App\Models\Dress;
use App\Http\Requests\StoreDressRequest;
use App\Http\Requests\UpdateDressRequest;
use App\Http\Resources\DressRources;
use Illuminate\Http\Request;

class DressController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $status = $request->get('status');
        $code = $request->get('code');
        $dresses = Dress::orderBy('id', 'DESC')->status($status)->code($code)->with('user')->get();
        return DressRources::collection($dresses);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreDressRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDressRequest $request)
    {
        $dress = Dress::create($request->all());
        return response()->json([
            'message' => 'El item ha sido registrado existosamente!',
            'dress' => $dress
        ], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Dress  $dress
     * @return \Illuminate\Http\Response
     */
    public function show(Dress $dress)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Dress  $dress
     * @return \Illuminate\Http\Response
     */
    public function get($id)
    {
        $dress = Dress::where('id', $id)->with('user')->first();
        if (isset($dress->id)) {
            return new DressRources($dress);
        }
        return response()->json([
            'message' => 'El item no esta registrado!',
        ], 404);
        return new DressRources($dress);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDressRequest  $request
     * @param  \App\Models\Dress  $dress
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $dress = Dress::find($request->id);
        if (isset($dress->id)) {
            $dress->update($request->all());
            return response()->json([
                'message' => 'El item ha sido Actualizado existosamente!',
                'dress' => $dress
            ], 201);
        }
        return response()->json([
            'message' => 'El item no esta registrado!',
        ], 404);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dress  $dress
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dress = Dress::find($id);
        if (isset($dress->id)) {
            $dress->delete();
            return response()->json([
                'message' => 'El item ha sido eliminado existosamente!',
            ], 201);
        }
        return response()->json([
            'message' => 'El item no esta registrado!',
        ], 404);
    }
}
