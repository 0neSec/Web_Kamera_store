@extends('layouts.main')


@section('navbar')
    @include('components.navbars')
    {{-- include untuk memanggil compomponent yang sudah ada --}}
@endsection

@section('content-1')
{{-- ini buat content halaman --}}
@include('components.slider')
@endsection

@section('content-2')
    @include('components.Home.testimoni')
    @include('components.Home.Fotokost')
@endsection