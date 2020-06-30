<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Area;
use App\Localizacao;
use App\Mail\SendMail;
use App\Trabalho;
use Illuminate\Support\Facades\Mail;

class TrabalhoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $posts=Trabalho::paginate(10);
        return view('trabalhos.index')->with(compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $areas = Area::all();
        $localizacaos = Localizacao::all();
        return view('trabalhos.create')->with(compact('areas', 'localizacaos'));
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
        $data=$request->all();
        $post = new Trabalho($this->val_post_add());        
        $post->titulo = $data['titulo'];
        $post->corpo = $data['corpo'];        
        $post->user_id = auth()->id();
        $post->save();

        $post->area()->attach(request('area'));

        return redirect('/trabalhos');
    }

    protected function val_post_add()
    {
        return request()->validate([
            'titulo' => 'required|max:100|unique:posts',            
            'corpo' => 'required',            
            'area' => 'exists:area,id'
        ]);
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
        $post= Trabalho::findOrFail($id);
        return view('trabalhos.show')->with(compact('post'));
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
        $post = Trabalho::findOrFail(['id'=>$id])->first();
        return view('trabalhos.edit')->with(compact('post'));
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
        $data = $request->all();

        Trabalho::where(['id'=>$id])->update([  
            'titulo' =>$data['titulo'],          
            'corpo' =>$data['corpo']
            //falta dar update localização e area

        ]);
        return redirect('/trabalhos');
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
        Trabalho::where(['id'=>$id])->delete();
        return redirect("/trabalhos");
    }

    public function sendemail(Request $request)
    {
        $data = array('message' => $request->message);
        /*email que vai receber o email*/
        Mail::to($request->email)->send(new SendMail($data));
        return back();
    }
    
}
