@extends('layouts.main')

@section('title', 'Dashboard')

@section('content')

<div class="usuário">
    {{ $user->name }}
</div>

@endsection
