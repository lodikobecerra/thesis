@extends('layouts.app')
@include('navbar.css')
@include('navbar.js')

@section('content')

<div class="main-content" style="min-height: 636px;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"style="background-color:#e2e6ea;">{{ __('Confirmation for Admin') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{route("admin_confirmed")}}">
                            @csrf

                            <div class="form-group row mb-3">
                                <label for="adminPass" class="col-md-4 col-form-label text-md-right">{{ __('Confirm as Admin') }}</label>

                                <div class="col-md-6">
                                    <input id=" " type="number" class="form-control @error('adminPass') is-invalid @enderror" name="adminPass" required autocomplete="name" autofocus>

                                    @error('adminPass')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mb-3">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Confirm') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
