@extends('layouts.main')

@section('title', 'Dashboard')

@section('content')

<div class="m-5" >
    <h1 class="mb-4">Adicione uma Transação</h1>
    <form action="/add-transaction" method="POST" enctype="multipart/form-data" class="h-100 position relative">
        @csrf
        <div class="form-group mb-3">
            <label for="description form-label">Descrição</label>
            <input type="text" name="description" id="description" class="form-control">
        </div>
        <div class="row mb-3 g-3">
            <div class="form-group col-sm-4 col-md-3 col-xl-2">
                <label for="date" class="form-label">Data do Pagamento</label>
                <input type="date" name="date" id="date" class="form-control">
            </div>
            <div class="form-group col-sm-4 col-md-3 col-xl-2">
                <label for="value" class="form-label">Valor</label>
                <input type="number" name="value" id="value" class="form-control">
            </div>
            <div class="form-group col-sm-4 col-md-3 col-xl-2">
                <label for="type" class="form-label">Tipo</label>
                <select name="type" id="type" class="form-select">
                    <option selected>Tipo de Transação</option>
                    <option value="despesa">Despesa</option>
                    <option value="receita">Receita</option>
                    <option value="investimento">Investimento</option>
                </select>
            </div>
            <div class="form-group col-sm-4 col-md-3 col-xl-2">
                <label for="status" class="form-label">Status</label>
                <select name="status" id="status" class="form-select">
                    <option selected>Informe o Status</option>
                    <option value="pago">Pago</option>
                    <option value="pagar">A pagar</option>
                </select>
            </div>
            <div class="form-group col-sm-4 col-md-3 col-xl-4">
                <label for="payment" class="form-label">Método de Pagamento</label>
                <input type="text" name="payment" id="payment" class="form-control">
            </div>
            <div class="form-group col-sm-12 col-md-9 col-xl-6">
                <label for="category" class="form-label">Categoria</label>
                <input type="text" name="category" id="category" class="form-control">
            </div>
            <div class="form-group col-sm-12 col-xl-6">
                <label for="proof" class="form-label">Comprovante</label>
                <input type="file" name="proof" id="proof" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label for="note" class="form-label">Notas</label>
            <input type="text" name="note" id="note" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary mt-4">Adicionar</button>
    </form>
</div>

@endsection
