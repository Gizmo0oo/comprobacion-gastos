<?php

namespace App\Http\Controllers;

use App\Municipio;
use Illuminate\Http\Request;
use DB;

class MunicipioController extends Controller {

    public function __construct(){
        $this->middleware('auth');
    }

    public function index() {
        return view("municipios.index");
    }

    public function create()
    {

    }

    public function store(Request $request) {
        Municipio::create($request->all());
        return response()->json("Municipio creado con exito", 200);
    }


    public function show(Municipio $municipio) {
        //
    }

    public function edit(Municipio $municipio) {
        //
    }

    public function update(Request $request, Municipio $municipio) {
        $municipio->update($request->all());
        return response()->json("Se actualizo con exito el municipio", 200);
    }

    
    public function destroy(Municipio $municipio){
        $municipio->delete();
        return response()->json("Se dio de baja el municipio con exito", 200);
    }

    public function municipios(Request $request){
        $municipios = Municipio::orderBy('id', 'desc')->paginate(5);
        foreach ($municipios as $municipio) {
            $municipio->region;
        }
        $response = [
            'pagination' => [
                'total' => $municipios->total(),
                'per_page' => $municipios->perPage(),
                'current_page' => $municipios->currentPage(),
                'last_page' => $municipios->lastPage(),
                'from' => $municipios->firstItem(),
                'to' => $municipios->lastItem()
            ],
            'data' => $municipios
        ];
        return response()->json($response, 200);
    }

    public function municipios_all(){
        return response()->json(Municipio::all(),200);
    }

    public function buscar(request $request){
        return response()->json(Municipio::buscar($request['nombre']), 200);
    }
}
