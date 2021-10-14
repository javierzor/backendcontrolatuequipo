@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Registrate para continuar') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('refered') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nombre') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control ('name') is-invalid " name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>



                                    <span class="invalid-feedback" role="alert">
                                        <strong></strong>
                                    </span>

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="last_name" class="col-md-4 col-form-label text-md-right">{{ __('Apellido') }}</label>

                            <div class="col-md-6">
                                <input id="last_name" type="text" class="form-control ('last_name') is-invalid " name="last_name" value="{{ old('last_name') }}" required autocomplete="last_name" autofocus>

                                    <span class="invalid-feedback" role="alert">
                                        <strong></strong>
                                    </span>

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control ('email') is-invalid " name="email" value="{{ old('email') }}" required autocomplete="email">


                                    <span class="invalid-feedback" role="alert">
                                        <strong></strong>
                                    </span>

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Contraseña') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control ('password') is-invalid " name="password" required autocomplete="new-password">


                                    <span class="invalid-feedback" role="alert">
                                        <strong></strong>
                                    </span>

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirme su contraseña') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('Telefono') }}</label>

                            <div class="col-md-6">
                                <input id="phone" type="text" class="form-control ('phone') is-invalid " name="phone" value="{{ old('phone') }}" required autocomplete="number" autofocus>


                                    <span class="invalid-feedback" role="alert">
                                        <strong></strong>
                                    </span>

                            </div>



                        </div>

                        <div class="form-group row mb-0">
                            <div style="display: flex; align-items: center; justify-content: center;" class="col-md-6 offset-md-4">
                                    <input id="data" type="hidden"  name="data" value="{{($data)}}">
                                    <input id="qr" type="hidden"  name="qr" value="Qr Invitation">
                                <button  type="submit" class="btn btn-primary">
                                    {{ __('Registrarse') }}
                                    <br>
                                     {{ __('y') }}
                                    <br>
                                    {{ __('descargar') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
