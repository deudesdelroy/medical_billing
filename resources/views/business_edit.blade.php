@extends('theme.app')

@section('title', "Editar información")

@section('content')
    <h3>
        Modifique la información
    </h3>
    <form action="{{ route('business.store') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-sm-6">
                <label for="id_type" class="form-label">Tipo</label>
                <select name="id_type" id="id_type" class="form select">
                    <option value="">Seleccione</option>
                    <option value="0">Natural</option>
                    <option value="1">Juridica</option>
                </select>
                
                {{-- <input type="select" name="id_type" id="id_type" class="form-control"> --}}
            </div>
            {{-- @if ($business_data) --}}
                <script>
                    document.getElementById('id_type').value = "{{ old('id_type', $business_data->id_type) }}"
                </script>
                {{-- <div class="col-sm-6">
                    <label for="id_number" class="form-label">Número</label>
                    <input type="number" name="id_number" id="id_number" class="form-control" value="{{ old('id_number', $business_data->id_number) }}">
                </div>
                <div class="col-sm-6">
                    <label for="check_digit" class="form-label">Dígito de Verificación</label>
                    <input type="number" name="check_digit" id="check_digit" class="form-control" value="{{ $business_data->check_digit }}">
                </div>
                <div class="col-sm-6">
                    <label for="business_name" class="form-label">Razón social</label>
                    <input type="text" name="business_name" class="form-control" id="business_name" value="{{ $business_data->business_name }}">
                </div>
                <div class="col-sm-6">
                    <label for="address" class="form-label">Dirección</label>
                    <input type="text" name="address" class="form-control" id="address" value="{{ $business_data->address }}">
                </div>
                <div class="col-sm-6">
                    <label for="country" class="form-label">País</label>
                    <input type="text" name="country" class="form-control" id="country" value="{{ $business_data->country }}">
                </div>
                <div class="col-sm-6">
                    <label for="city" class="form-label">Ciudad</label>
                    <input type="text" name="city" class="form-control" id="city" value="{{ $business_data->city }}">
                </div>
                <div class="col-sm-6">
                    <label for="main_phone_number" class="form-label">Teléfono</label>
                    <input type="text" name="main_phone_number" class="form-control" id="main_phone_number" value="{{ $business_data->main_phone_number }}">
                </div>
                <div class="col-sm-6">
                    <label for="second_phone_number" class="form-label">Teléfono 2</label>
                    <input type="text" name="second_phone_number" class="form-control" id="second_phone_number" value="{{ $business_data->second_phone_number }}">
                </div>
                <div class="col-sm-6">
                    <label for="email" class="form-label">Correo electrónico</label>
                    <input type="text" name="email" class="form-control" id="email" value="{{ $business_data->email }}">
                    <input type="hidden" name="id" id="id" value="{{ old('id', $business_data->id) }}">
                </div> --}}

            {{-- @else --}}
                <div class="col-sm-6">
                    <label for="id_number" class="form-label">Número</label>
                    <input type="number" name="id_number" id="id_number" class="form-control" value="{{ old('id_number', $business_data->id_number) }}">
                </div>
                <div class="col-sm-6">
                    <label for="check_digit" class="form-label">Dígito de Verificación</label>
                    <input type="number" name="check_digit" id="check_digit" class="form-control" value="{{ old('check_digit', $business_data->check_digit) }}">
                </div>
                <div class="col-sm-6">
                    <label for="business_name" class="form-label">Razón social</label>
                    <input type="text" name="business_name" class="form-control" id="business_name" value="{{ old('business_name', $business_data->business_name) }}">
                </div>
                <div class="col-sm-6">
                    <label for="address" class="form-label">Dirección</label>
                    <input type="text" name="address" class="form-control" id="address" value="{{ old('address', $business_data->address) }}">
                </div>
                <div class="col-sm-6">
                    <label for="country" class="form-label">País</label>
                    <input type="text" name="country" class="form-control" id="country" value="{{ old('country', $business_data->country) }}">
                </div>
                <div class="col-sm-6">
                    <label for="city" class="form-label">Ciudad</label>
                    <input type="text" name="city" class="form-control" id="city" value="{{ old('city', $business_data->city) }}">
                </div>
                <div class="col-sm-6">
                    <label for="main_phone_number" class="form-label">Teléfono</label>
                    <input type="text" name="main_phone_number" class="form-control" id="main_phone_number" value="{{ old('main_phone_number', $business_data->main_phone_number) }}">
                </div>
                <div class="col-sm-6">
                    <label for="second_phone_number" class="form-label">Teléfono 2</label>
                    <input type="text" name="second_phone_number" class="form-control" id="second_phone_number" value="{{ old('second_phone_number', $business_data->second_phone_number) }}">
                </div>
                <div class="col-sm-6">
                    <label for="email" class="form-label">Correo electrónico</label>
                    <input type="text" name="email" class="form-control" id="email" value="{{ old('email', $business_data->email) }}">
                    <input type="hidden" name="id" id="id" value="{{ old('id', $business_data->id) }}">
                </div>
            {{-- @endif --}}
            <div class="col-sm-12 text-end my-2">
                <button type="submit" class="btn btn-primary">Guardar</button>
                <a href="{{ route('business.index') }}" class="btn btn-primary">Regresar</a>
            </div>
        </div>
    </form>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@endsection