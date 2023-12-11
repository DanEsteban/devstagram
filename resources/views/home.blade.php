@extends('layouts.app')

@section('titulo')
    Pagina Principal
@endsection

@section('contenido')

    {{-- Para pasar valores al component, voy al ListarPost.php y pongo 
        la variable en el constructor     --}}
    <x-listar-post :posts="$posts" />

@endsection

