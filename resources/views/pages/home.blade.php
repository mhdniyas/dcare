@extends('layouts.app')

@section('title', 'D Care Pharmaceuticals - Your Trusted Healthcare Partner')

@section('content')
@include('partials.home.top-categories')
@include('partials.home.brands')
@include('partials.home.featured-products')
@include('partials.home.features')
@include('partials.home.testimonials')
@include('partials.home.cta')
@endsection
