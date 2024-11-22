@extends('layouts.main')

@section('title', 'Transações')

@section('content')

<div class="transactions-content">

    <h1>Transações</h1>

    <table>
        <thead>
            <tr>
                <th class="column-date">Pagamento</th>
                <th class="column-description">Descrição</th>
                <th class="column-value">Valor</th>
                <th class="column-category">Categoria</th>
                <th class="column-type">Tipo</th>
                <th class="column-payment">Metodo de Pagamento</th>
                <th class="column-status">Status</th>
                <th class="column-proof">Comprovante</th>
                <th class="column-obs">Observações</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>29/08/2002</td>
                <td>Aniversário do João</td>
                <td>R$ 100.000,00</td>
                <td>Aniversário, Festas, Presentes</td>
                <td>Despesa</td>
                <td>Cartão Inter</td>
                <td>Pagando (2/10)</td>
                <td>arquivo.jpg</td>
                <td>Uma festa legal</td>
            </tr>

        </tbody>
    </table>

    <a href="/add-transaction" class="">Adicionar Transação</a>

</div>

@endsection
