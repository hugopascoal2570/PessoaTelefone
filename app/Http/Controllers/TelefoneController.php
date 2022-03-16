<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTelefone;
use App\Models\Pessoa;
use App\Models\PessoaTelefone;
use App\Models\Telefone;
use Illuminate\Http\Request;

class TelefoneController extends Controller
{
    private $repository;

    public function __construct(Telefone $telefones)
    {
        $this->middleware('auth', ['except' => [
            'login',
            'loginAction',
            'registerAction',
            'register'
        ]]);
        $this->repository = $telefones;
    }

    public function index()
    {
        $pessoas = Pessoa::with('telefones')->paginate(15);

        return view('admin.telefone.home', [
            'pessoas' => $pessoas
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pessoas = Pessoa::all();
        return view('admin.telefone.add', [
            'pessoas' => $pessoas
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTelefone $request)
    {
        $data = $request->only(['pessoa_id', 'telefone']);
        $students = $this->repository->create($data);


        return redirect()->route('telefones.index');
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
