@extends('layouts.main')

@section('title', 'Transações')

@section('content')

<div class="container pt-5">

    <h1 class="mb-4">Transações</h1>

    <table class="table table-hover table-bordered">
        <thead>
            <tr class="table-secondary">
                <th scope="col" class="col">Descrição</th>
                <th scope="col" class="col-lg-2">Valor</th>
                <th scope="col" class="col-lg-2">Pagamento</th>
                <th scope="col" class="col-lg-1">Status</th>
                
            </tr>
        </thead>
        <tbody>
            @foreach($transactions as $transaction)
                <tr>
                    <td>{{ $transaction->description }}</td>
                    <td class="{{ ($transaction->type === 'DESPESA') ? $tipo = 'text-danger' : $tipo = 'text-success'}}">{{'R$' . number_format($transaction->value, 2, ',', '.')}}</td>
                    <td>{{ $transaction->payment }}</td>
                    <td>{{ $transaction->status }}</td>
                </tr>
            @endforeach
            

        </tbody>
    </table>

    

    <a href="/add-transaction" class="btn btn-primary mt-md-4">Adicionar Transação</a>

</div>

@endsection
