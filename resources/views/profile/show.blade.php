@extends('layouts.main')

@section('title', 'Perfil')

@section('content')

<div class="usuário">
    {{ $user->name }}
</div>

@endsection
