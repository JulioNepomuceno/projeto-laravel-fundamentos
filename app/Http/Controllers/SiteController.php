<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    /**
     * mostrar o index
     *
     * @return void
     */
    public function index()
    {
        return view('home');
    }

    /**
     * Mostra o sobre
     *
     * @return void
     */
    public function sobre()
    {
        echo "Conteudo dinamico Sobre";
    }

    /**
     * mostra o contato
     *
     * @return void
     */
    public function contato()
    {
        echo "Conteudo dinamico Contato";
    }
    /**
     * mostrar o serviços
     *
     * @return void
     */
    public function servicos()
    {
        echo "Conteudo dinamico servicos";
    }
    /**
     * mostra um servico pelo id
     *
     * @param integer $id
     * @return void
     */
    public function servico(int $id)
    {
        $servicos = [
            1 => [
                'nome' => ' Lavagem de roupa',
            ],
            2 => [
                'nome' => ' Lavagem de coberta',
            ]
        ];
        return view('servico', [
            'servico' => $servicos[$id]
        ]);
    }
}
