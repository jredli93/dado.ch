@extends('layouts.app')

@section('header')
    @include('pages.homepage.header')
@endsection

@section('showcase')
    @include('pages.homepage.showcase')
@endsection

@section('cta')
    @include('pages.homepage.cta')
@endsection

@section('artists')
    @include('pages.homepage.artists')
@endsection
