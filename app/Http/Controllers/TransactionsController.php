<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;

class TransactionsController extends Controller
{
    public function store(Request $request){

        $validatedData = $request->validate([
            'description' => 'required|string|max:255',
            'date' => 'required|date',
            'value' => 'required|numeric',
            'type' => 'required|string',
            'status' => 'required|string',
            'payment' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'proof' => 'nullable|file|mimes:jpeg,png,pdf|max:2048',
            'note' => 'nullable|string',
        ]);

        /*
        $transactions = new Transaction();
        
        $transactions->description = $request->description;
        $transactions->date = $request->date;
        $transactions->value = $request->value;
        $transactions->type = $request->type;
        $transactions->status = $request->status;
        $transactions->payment = $request->payment;
        $transactions->category = $request->category;
        $transactions->note = $request->note;
        */

        $validatedData['category'] = json_encode([$validatedData['category']]);

        if($request->hasFile('proof') && $request->file('proof')->isValid()){

            $requestProof = $request->proof;

            $extension = $requestProof->extension();

            $proofName = md5($requestProof->getClientOriginalName() . strtotime('now') . '.' . $extension);

            $requestProof->move(public_path('proof'), $proofName);

            $validatedData['proof'] = $proofName;

        }

        Transaction::create($validatedData);

        return redirect('/transactions')->with('success', 'Transação adicionada');
    }
}
