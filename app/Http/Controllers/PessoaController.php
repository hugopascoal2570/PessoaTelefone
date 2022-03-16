<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePessoa;
use App\Models\Pessoa;
use App\Models\Telefone;
use Illuminate\Http\Request;

class PessoaController extends Controller
{
    private $repository;

    public function __construct(Pessoa $pessoas, Telefone $telefones)
    {
        $this->middleware('auth', ['except' => [
            'login',
            'loginAction',
            'registerAction',
            'register'
        ]]);
        $this->repository = $pessoas;
    }
    public function index()
    {
        $pessoas = Pessoa::paginate(15);
        return view('admin.pessoa.home', [
            'pessoas' => $pessoas
        ]);
    }


    public function create()
    {

        return view('admin.pessoa.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePessoa $request)
    {
        $pessoas = $request->only(['nome', 'cpf', 'data_nasc', 'nacionalidade']);

        $pessoas = $this->repository->create($pessoas);

        return redirect()->route('pessoas.index');
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
