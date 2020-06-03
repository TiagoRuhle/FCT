<?php

namespace App\Http\Controllers;

use App\Aluno;
use App\Localizacao;
use App\Area;
use App\EstadoAluno;
use App\Hobbie;
use App\TipoTrabalho;
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
        $aluno = Aluno::findOrFail('user_id', auth()->user()->id)->first();
        return view('users.alunos.index')->with(compact('localizacaos', 'aluno'));
    }

    public function hobbies()
    {
        //    
        return view('users.alunos.hobbies');
    }

    public function savehobbie(Request $request)
    {
        $data = $request->all();
        $hobbie= new Hobbie();
        $hobbie->hobbies = $data['hobbies'];
        $hobbie->save();
        return view('users.alunos.hobbies');
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

    public function perfilprocura()
    {
        $localizacaos = Localizacao::all();
        $areas = Area::all();
        return view('users.alunos.perfilprocura')->with(compact('localizacaos','areas'));
    }

    public function saveperfilprocura(Request $request)
    {
        $data = $request->all();

        $localizacao = new Localizacao();
        $localizacao->$localizacao = $data['localizacao'];
        $localizacao->save();

        $area = new Area();
        $area-> $area= $data['area'];
        $area->save();

        $tipotrabalho = new TipoTrabalho();
        $tipotrabalho-> $tipotrabalho = $data['tipotrabalho'];
        $tipotrabalho->save();

        $estado = new EstadoAluno();
        $estado-> $estado = $data['estado'];
        $estado->save();

        return view('users.alunos.perfilprocura');
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
        $aluno = Aluno::findOrFail(['id'=>$id])->first();
        return view('users.alunos.show')->with(compact('aluno'));
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
        $aluno = Aluno::findOrFail(['id'=>$id])->first();
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
                'contato' =>$data['contato'],
                //------------------
                'dtnascimento' =>$data['dtnascimento'],
                'localizacao' =>$data['localizacao'],
                'tipotrabalho' =>$data['tipotrabalho'],
                'imagem' =>$imgname
        ]);          
        }else{    
        Aluno::where(['id'=>$id])->update([
            'nome' =>$data['nome'],
            'dtnascimento' =>$data['dtnascimento'],
            'contato' =>$data['contato'],
            //---------------
            'localizacao' =>$data['localizacao'],
            'tipotrabalho' =>$data['tipotrabalho'],
            'estado' =>$data['estado']         
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
        Aluno::where(['id'=>$id])->delete();
        return redirect("/aluno");
    }
}
