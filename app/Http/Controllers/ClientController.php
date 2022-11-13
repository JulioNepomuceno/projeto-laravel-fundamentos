<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class ClientController extends Controller
{
    public function index(): View{

        $clients = Client::get();

        return view('clients.index',[
        'clients' => $clients
        ]);
    }

    public function show(int $id){

       // $client = Client::find($id);
        $client = Client::findOrFail($id);
        return view('clients.show',[
            'client' => $client
        ]);
    }

    public function create(){
        return view('clients.create');
    }

    //insert cadastro
    public function store(Request $request): RedirectResponse{

        $dados = $request->except('_token');

        Client::create($dados);

        return redirect('/clients');
    }

    //visualizar edicacao do cliente
    public function edit(int $id){

        //$client = Client::find($id);
        $client = Client::findOrFail($id);
        return view('clients.edit',[
            'client' => $client
        ]);
    }

    public function update(int $id, Request $request){

       //$client = Client::find($id);
       $client = Client::findOrFail($id);

       $client->update([
           'nome' => $request->nome,
           'endereco' => $request->endereco,
           'observacao' => $request->observacao
       ]);

       return redirect('/clients');
    }

    public function destroy(int $id){
        
        //$client = Client::find($id);
        $client = Client::findOrFail($id);

        $client->delete();

        return redirect('clients');
    }
}
