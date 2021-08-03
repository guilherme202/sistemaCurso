<?php

namespace App\Http\Controllers;

use App\Http\Requests\CursoRequest;
use App\Models\Models\ModelCursos;


class CursoController extends Controller
{
    private $objCurso;
 
    public function __construct(){
        $this->objCurso = new ModelCursos();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $curso = $this->objCurso->all();
        return view('curso', compact('curso'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('insereCurso');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CursoRequest $request)
    {
        $cad=$this->objCurso->create([
            'nome'=>$request->nome,
            'descricao'=>$request->descricao,
            'valor'=>$request->valor,
            'dataInicio'=>$request->dataInicio,
            'dataFim'=>$request->dataFim,
            'qtdInscritos'=>$request->qtdInscritos,
            'material'=>$request->material,
        
         ]);
         if($cad){
             return redirect('/curso');
         }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $curso=$this->objCurso->find($id);
        return view('insereCurso',compact('curso'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CursoRequest $request, $id)
    {
        $this->objCurso->where(['id'=>$id])->update([
            'nome'=>$request->nome,
            'descricao'=>$request->descricao,
            'valor'=>$request->valor,
            'dataInicio'=>$request->dataInicio,
            'dataFim'=>$request->dataFim,
            'qtdInscritos'=>$request->qtdInscritos,
            'material'=>$request->material,
        ]);
        return redirect('curso');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $del=$this->objCurso->destroy($id);
        return($del)?"sim":"não";
    }
}
