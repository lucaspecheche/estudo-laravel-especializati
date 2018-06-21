<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Balance;
use App\Http\Requests\MoneyValidationFormRequest;

class BalanceController extends Controller
{
    public function __contruct()
    {

    }

    public function index()
    {
        $balance = auth()->user()->balance;
        $amount = $balance ? $balance->amount : 0;

        return view('admin.balance.index', compact('amount'));
    }

    public function deposit()
    {
    	return view('admin.balance.deposit');
    }

    public function depositStore(MoneyValidationFormRequest $request)
    {
        $balance = auth()->user()->balance()->firstOrCreate([]); //Cria um registro se não existir nenhum
        $response = $balance->deposit($request->value);

        if ($response['success'])
            return redirect()
                ->route('admin.balance')
                ->with('success', $response['message']);

        return redirect()
            ->back()
            ->with('error', $response['message']);
    }
    
    public function withdraw(){
        return view('admin.balance.withdrawn');
    }

    public function withdrawStore(MoneyValidationFormRequest $request)
    {
        $balance = auth()->user()->balance()->firstOrCreate([]); //Cria um registro se não existir nenhum
        $response = $balance->withdraw($request->value);

        if ($response['success'])
            return redirect()
                ->route('admin.balance')
                ->with('success', $response['message']);

        return redirect()
            ->back()
            ->with('error', $response['message']);
    }
}
