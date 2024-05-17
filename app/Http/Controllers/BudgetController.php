<?php

namespace App\Http\Controllers;

use App\Notifications\sendBudget;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;

class BudgetController extends Controller
{
    public function index()
    {
        return view('Budget.index');
    }

    public function send(Request $request)
    {
        try {
            $data = $request->validate([
                'assessoria_condomial' => '',
                'servicos_contabeis' => '',
                'sindico_profissional' => '',
                'qtd_unidade_condominio' => '',
                'fun_proprio_sim' => '',
                'fun_proprio_nao' => '',
                'qtd_funcionario_terceiro' => '',
                'qtd_funcionario_proprio' => '',
                'fun_terceiro_sim' => '',
                'fun_terceiro_nao' => '',
                'cond_sindico' => '',
                'cond_conselheiro' => '',
                'cond_morador' => '',
                'nome_condominio' => 'required',
                'nome_cidade' => 'required',
                'nome' => 'required',
                'email' => 'required|email',
                'telefone' => 'required',
            ]);

            Notification::route('mail', 'guilhermeieski@gmail.com')
                ->notify(new sendBudget($data));

            return redirect()->route('budget');
        
        } catch (\Throwable $th) {
            return redirect()->route('budget');
        }
    
    }
}
