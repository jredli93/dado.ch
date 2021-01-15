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

@section('service')
    @include('pages.homepage.service')
@endsection

@section('contact')
    @include('pages.homepage.contact')
@endsection

@section('footer')
    @include('pages.homepage.footer')
@endsection
