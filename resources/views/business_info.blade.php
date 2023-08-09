@extends('theme.app')

@section('title', "Información de la empresa")

@section('content')
    <h3>
        Información de la empresa
    </h3>
    <div class="row">
        @if ($business_data)
            <div class="col-sm-4">
                <label for="" class="form-label"><b>Tipo ID:</b> {{ $business_data->idType() }}</label>
            </div>
            <div class="col-sm-4">
                <label for="" class="form-label"><b>ID número:</b> {{ $business_data->id_number }}</label>
            </div>
            <div class="col-sm-4">
                <label for="" class="form-label"><b>Dígito de verificación:</b> {{ $business_data->check_digit }}</label>
            </div>
            <div class="col-sm-12">
                <label for="" class="form-label"><b>Razón social:</b> {{ $business_data->business_name }}</label>
            </div>
            <div class="col-sm-6">
                <label for="" class="form-label"><b>Dirección:</b> {{ $business_data->address }} ({{ $business_data->city }}, {{ $business_data->country }})</label>
            </div>
            <div class="col-sm-3">
                <label for="" class="form-label"><b>Teléfono 1:</b> {{ $business_data->main_phone_number }}</label>
            </div>
            <div class="col-sm-3">
                <label for="" class="form-label"><b>Teléfono 2:</b> {{ $business_data->second_phone_number }}</label>
            </div>
            <div class="col-sm-3">
                <label for="" class="form-label"><b>Correo:</b> {{ $business_data->email }}</label>
            </div>
            <div class="col-sm-12 text-end my-2">
                <a href="{{ route('business.edit', $business_data) }}" class="btn btn-primary">Modificar</a>
                <a href="/" class="btn btn-primary">Regresar</a>
            </div>
        @else
            <div class="col-sm-12">
                <label for="" class="form-label" style="color:brown"><b>Aún no ha agregado la información de la empresa.</b></label>
            </div>
            <div class="col-sm-4">
                <label for="" class="form-label"><b>Tipo ID:</b></label>
            </div>
            <div class="col-sm-4">
                <label for="" class="form-label"><b>ID número:</b></label>
            </div>
            <div class="col-sm-4">
                <label for="" class="form-label"><b>Dígito de verificación:</b></label>
            </div>
            <div class="col-sm-12">
                <label for="" class="form-label"><b>Razón social:</b></label>
            </div>
            <div class="col-sm-6">
                <label for="" class="form-label"><b>Dirección:</b></label>
            </div>
            <div class="col-sm-3">
                <label for="" class="form-label"><b>Teléfono 1:</b></label>
            </div>
            <div class="col-sm-3">
                <label for="" class="form-label"><b>Teléfono 2:</b></label>
            </div>
            <div class="col-sm-3">
                <label for="" class="form-label"><b>Correo:</b></label>
            </div>
            <div class="col-sm-12 text-end my-2">
                <a href="{{ route('business.first') }}" class="btn btn-primary">Modificar</a>
                <a href="/" class="btn btn-primary">Regresar</a>
            </div>
        @endif
    </div>
@endsection