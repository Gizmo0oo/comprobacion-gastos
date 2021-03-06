<?php

namespace App\Http\Controllers;

use App\Ur;
use Illuminate\Http\Request;
use App\Http\Requests\URRequestStore;
use App\Http\Requests\URRequestUpdate;

class URController extends Controller {
    
    public function __construct(){
        $this->middleware('auth');
    }
    
    public function index() {
        return view('ur.index');
    }

    public function create()
    {
        //
    }

    public function store(URRequestStore $request) {
        UR::create($request->all());
        return response()->json("Unidad Responsable creada con exito", 200);
    }

    
    public function show(Ur $ur)
    {
        //
    }

    
    public function edit(Ur $ur)
    {
        //
    }

    
    public function update(URRequestUpdate $request, Ur $ur) {
        $ur->update($request->all());
        return response()->json("Unidad Responsable actualizada con exito", 200);
    }

    
    public function destroy(Ur $ur) {
        $ur->estatus = 0;
        $ur->save();
        return response()->json("Unidad Responsable dada de baja con exito", 200);
    }

    public function urs(){
        $urs = UR::activos();
        foreach ($urs as $ur) {
            $ur->up;
        }
        $response = [
            'pagination' => [
                'total' => $urs->total(),
                'per_page' => $urs->perPage(),
                'current_page' => $urs->currentPage(),
                'last_page' => $urs->lastPage(),
                'from' => $urs->firstItem(),
                'to' => $urs->lastItem()
            ],
            'data' => $urs
        ];
        return response()->json($response, 200);
    }

    public function urs_all(){
        $urs = UR::where('estatus', 1)->get();
        return response()->json($urs, 200);
    }

    public function buscar(request $request){
        return response()->json(Credito::buscar($request['folio']), 200);
    }
}
