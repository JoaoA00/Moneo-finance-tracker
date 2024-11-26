@extends('layouts.main')

@section('title', 'Transações')

@section('content')

<div class="container-fluid p-5">

    <h1 class="mb-4">Transações</h1>

    <table class="table table-hover">
        <thead>
            <tr class="table-secondary">
                <th scope="col" class="col-lg-1">Data</th>
                <th scope="col" class="col-lg-3 d-table-cell">Descrição</th>
                <th scope="col" class="col-lg-1">Valor</th>
                <th scope="col" class="col d-none d-md-table-cell">Categoria</th>
                <th scope="col" class="col d-none d-sm-table-cell">Tipo</th>
                <th scope="col" class="col d-none d-lg-table-cell">Pagamento</th>
                <th scope="col" class="col-lg-1">Status</th>
                <th scope="col" class="col-lg-1"><i class="bi bi-receipt text-dark d-lg-none"></i><span class="d-none d-lg-table-cell">Comprovante</span></th>
                <th scope="col" class="col d-none d-lg-table-cell">Observações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($transactions as $transaction)
                <tr>
                    <td>{{ date( 'd/m/y' , strtotime($transaction->date)) }}</td>
                    <td>{{ $transaction->description }}</td>
                    <td>{{ $transaction->value }}</td>
                    <td class="d-none d-md-table-cell">{{ $transaction->category }}</td>
                    <td class="d-none d-sm-table-cell">{{ $transaction->type }}</td>
                    <td class="d-none d-lg-table-cell">{{ $transaction->payment }}</td>
                    <td>{{ $transaction->status }}</td>
                    <td><a href="/proof/{{ $transaction->proof }}"><i class="bi bi-receipt"></i></a></td>
                    <td class="d-none d-lg-table-cell">{{ $transaction->note }}</td>
                </tr>
            @endforeach
            

        </tbody>
    </table>

    

    <a href="/add-transaction" class="btn btn-primary">Adicionar Transação</a>

</div>

@endsection
