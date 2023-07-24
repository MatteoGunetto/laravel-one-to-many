@extends('layouts.app')
@section('content')
    <div class="container my-2 bg-info text-dark ">
        <h1 class="text-center fw-bold ">Titolo Progetto:</h1>
        <h2 class="text-center text-light my-2">{{ ($projects->name) }}</h2>
        <div class="container d-flex justify-content-center   fs-5">
            <span><strong>Descrizione: </strong></span>
            <span class="fw-bold text-light "> {{ $projects->description }}</span>
        </div>
        <div class="container d-flex justify-content-start align-items-center  fs-5">
            <span><strong>Numero commit: </strong> </span>
            <span class="fw-bold text-light ">{{ $projects->commit }}</span>
        </div>
        <div class="container d-flex justify-content-start align-items-center  fs-5">
            <span><strong>accessible: </strong> </span>
            <span class="fw-bold text-light ">{{ $projects->accessible ? 'Privato' : 'Pubblico' }}</span>
        </div>
    </div>
@endsection




