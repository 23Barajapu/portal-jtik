@extends('layouts.landing')
@section('content')
    <h1>Program</h1>
    <p>Silakan pilih program:</p>
    <ul>
        <li><a href="{{ route('program.polsub') }}">Polsub</a></li>
        <li><a href="{{ route('program.elearning') }}">Elearning</a></li>
        <li><a href="{{ route('program.berita') }}">Berita</a></li>
        <li><a href="{{ route('program.siakad') }}">Siakad</a></li>
    </ul>
@endsection
@section('title', 'Program')
