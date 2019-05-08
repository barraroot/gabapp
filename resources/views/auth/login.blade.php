@extends('layouts.login')

@section('content')


<div class="account-bg">
        <div class="card-box mb-0">
            <div class="text-center m-t-20">
                <a href="index.html" class="logo">
                    <h1>PPPOKER</h1>
                </a>
            </div>
            <div class="m-t-10 p-20">
                <div class="row">
                    <div class="col-12 text-center">
                        <h6 class="text-muted text-uppercase m-b-0 m-t-0"> Área Restrita </h6>
                    </div>
                </div>
                <form class="m-t-20" method="POST" action="{{ route('login') }}">
                        @csrf

                    <div class="form-group row">
                        <div class="col-12">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="E-mail" name="email"
                                    value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-12">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Senha" name="password"
                                    required autocomplete="current-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                                <input type="hidden" name="remember" id="remember" value="checked">
                        </div>
                    </div>

                    <div class="form-group text-center row m-t-10">
                        <div class="col-12">
                            <button class="btn btn-success btn-block waves-effect waves-light" type="submit">Entrar</button>
                        </div>
                    </div>

                    <div class="form-group row m-t-30 mb-0">
                        <div class="col-12">
                            <a href="{{ route('password.request') }}" class="text-muted"><i class="fa fa-lock m-r-5"></i>
                                Esqueci minha senha!</a>
                        </div>
                    </div>

                </form>

            </div>

            <div class="clearfix"></div>
        </div>
    </div>
    <!-- end card-box-->
@endsection
