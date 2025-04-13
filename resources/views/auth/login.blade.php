@extends('adminlte::auth.login')

@section('css')
    <style>
        .login-page, .register-page {
            -ms-flex-align: center;
            align-items: center;
            background-color: #171819;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-direction: column;
            flex-direction: column;
            height: 100vh;
            -ms-flex-pack: center;
            justify-content: center;
        }

        .card-primary.card-outline {
            border-top: 3px solid #DF8129;
        }

        .form-control:focus {
            color: #495057;
            background-color: #fff;
            border-color:#DF8129;
            border-right-color: #DF8129;
            outline:0;
            box-shadow: inset 0 0 0 transparent;
        }
        .btn-primary {
            color: #fff;
            background-color: #DF8129;
            border-color:#DF8129;
            box-shadow: none;
        }
        .btn-primary:hover {
            color: #fff;
            background-color: #91541b;
            border-color: #8f4d0f;
        }

        .icheck-primary > input:first-child:not(:checked):not(:disabled):hover + input[type="hidden"] + label::before, .icheck-primary > input:first-child:not(:checked):not(:disabled):hover + label::before {
            border-color:#DF8129;
        }

        .login-card-body .input-group .input-group-text, .register-card-body .input-group .input-group-text {
            color: #DF8129;
        }

        .login-logo a b, .register-logo a b{
            color: #495057;
            display: none;
        }

        img {
            width: 229px;
            height: 92px;
            border-radius:4px;
        }

        .login-logo, .register-logo {
            font-size: 2.1rem;
            font-weight: 300;
            margin-bottom: 5px;
            text-align: center;
        }

        img {

        }
        

    </style>
@stop