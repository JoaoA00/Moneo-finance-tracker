@extends('layouts.main')

@section('title', 'Dashboard')

@section('content')

<div class="add-transaction-content">
    <h1>Adicione uma Transação</h1>
    <form action="/add-transaction" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="date">Data do Pagamento:</label>
            <input type="datetime" name="date" id="date">
        </div>
        <div class="form-group">
            <label for="description">Descrição:</label>
            <input type="text" name="description" id="description" placeholder="Ex: Compras no mercado">
        </div>
        <div class="form-group">
            <label for="value">Valor:</label>
            <input type="number" name="valor" id="valor">
        </div>
        <div class="form-group">
            <label for="category">Categoria:</label>
            <input type="text" name="category" id="category">
        </div>
        <div class="form-group">
            <label for="type">Tipo:</label>
            <select name="type" id="type">
                <option value="DESPESA">Despesa</option>
                <option value="RECEITA">Receita</option>
                <option value="INVESTIMENTO">Investimento</option>
            </select>
        </div>
        <div class="form-group">
            <label for="payment">Método de Pagamento:</label>
            <select name="payment" id="payment">
                <option value=""></option>
            </select>
        </div>
        <div class="form-group">
            <label for="proof">Comprovante (PNG ou PDF):</label>
            <input type="file" name="proof" id="proof" accept=".png, .pdf" required>
        </div>
        <div class="form-group">
            <label for="notes">Observações</label>
            <input type="text" name="notes" id="notes">
        </div>
        <input type="submit" value="Criar Evento">
    </form>
</div>

@endsection
