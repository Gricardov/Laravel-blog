@extends('layouts.plantilla')

@section('title', 'Curso ' . $curso);

@section('content')
    <h1>Show cursos {{ $curso }}</h1>
@endsection
