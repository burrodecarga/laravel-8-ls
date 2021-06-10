{{-- @extends('errors::minimal')

@section('title', __('Forbidden'))
@section('code', '403')
@section('message', __($exception->getMessage() ?: 'Forbidden')) --}}

@extends('errors::illustrated-layout')

@section('code', '403')
@section('title', __('Página no encontrada'))

@section('image')
<style>
    #apartado-derecho{
        text-align:center;
    }
    ul{
        text-decoration: none !important;
        list-style: none;
        color: black;
        font-weight: bold;
    }
</style>
<div id="apartado-derecho" style="background-color: #F5716C;" class="absolute pin bg-cover bg-no-repeat md:bg-left lg:bg-center">
    <h2>{{__($exception->getMessage() ?: 'Forbidden')}}:</h2>
    <ul>
        <li><a href="/">Home</a></li>
    </ul>
</div>
@endsection

