<?php

namespace App\Http\Controllers;


use App\Http\Requests\InscricaoRequest;
use App\Models\Models\ModelCursos;
use App\Models\Models\ModelInscricao;

class InscricaoController extends Controller
{

    private $objCurso;
    private $objInscricao;

    public function __construct(){
        $this->objCurso = new ModelCursos();
        $this->objInscricao = new ModelInscricao();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $insc = $this->objInscricao->all();
        return view('index', compact('insc'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cursos=$this->objCurso->all();
        return view('inscricao',compact('cursos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(InscricaoRequest $request)
    {
       $cad=$this->objInscricao->create([
       'nomeAluno'=>$request->nome,
       'email'=>$request->email,
       'cpf'=>$request->cpf,
       'endereco'=>$request->endereco,
       'empresa'=>$request->empresa,
       'endereco'=>$request->endereco,
       'telefone'=>$request->telefone,
       'celular'=>$request->celular,
       'tipo'=>$request->tipo,
       'cursoId'=>$request->id_curso
    ]);
    if($cad){
        return redirect('/inscricao');
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
        $insc=$this->objInscricao->find($id);
        $cursos=$this->objCurso->all();
        return view('inscricao',compact('insc','cursos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(InscricaoRequest $request, $id)
    {
        $this->objInscricao->where(['id'=>$id])->update([
            'nomeAluno'=>$request->nome,
            'email'=>$request->email,
            'cpf'=>$request->cpf,
            'endereco'=>$request->endereco,
            'empresa'=>$request->empresa,
            'endereco'=>$request->endereco,
            'telefone'=>$request->telefone,
            'celular'=>$request->celular,
            'tipo'=>$request->tipo,
            'cursoId'=>$request->id_curso
        ]);
        return redirect('inscricao');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $del=$this->objInscricao->destroy($id);
        return($del)?"sim":"não";
    }
}
