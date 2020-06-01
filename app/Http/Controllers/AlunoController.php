<?php

namespace App\Http\Controllers;

use App\Aluno;
use App\Localizacao;
use App\Area;
use Illuminate\Http\Request;

class AlunoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $localizacaos = Localizacao::all();
        return view('users.alunos.index')->with(compact('localizacaos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $localizacaos = Localizacao::all();
        $areas = Area::all();
        return view('users.alunos.create')->with(compact('localizacaos','areas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
            
        $data= $request->all();
        $aluno= new Aluno;
        $aluno->contato = $data['contato'];
        $aluno->localizacao = $data['localizacao'];
        $aluno->dtnascimento = $data['dtnascimento'];
        $aluno->estado = $data['estado'];
        $aluno->tipotrabalho=['tipotrabalho'];
        $aluno->user_id = auth()->user()->id;
        if($request->has('imagem')){
            $img = $request->file('imagem');
            $imgname = time() . "." . $img->getClientOriginalExtension();
            $path = public_path("/imagens/");
            $img->move($path, $imgname);
            $aluno->imagem = $imgname;
        }
        $aluno->save();
        return redirect('/alunos');
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
        //
        return view('users.alunos.edit')->with(compact('aluno'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $data =$request->all();

        if($request->has('imagem')){
            $img = $request->file('imagem');
            $imgname = time() . "." . $img->getClientOriginalExtension();
            $path = public_path("/imagens/");
            $img->move($path, $imgname);  
            Aluno::where(['id'=>$id])->update([
                'nome' =>$data['nome'],
                'dtnascimento' =>$data['dtnascimento'],
                'localizacao' =>$data['localizacao'],
                'imagem' =>$imgname,
        ]);          
        }else{    
        Aluno::where(['id'=>$id])->update([
            'nome' =>$data['nome'],
            'dtnascimento' =>$data['dtnascimento'],
            'localizacao' =>$data['localizacao'],
            'tipotrabalho' =>$data['tipotrabalho'],
            'estado' =>$data['estado'],
            'contato' =>$data['contato'],
        ]);
        }
        return redirect('/alunos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
