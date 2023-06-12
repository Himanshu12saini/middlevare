@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h2>{{ __('welcome to dashboard') }}</h2></div>

                <div class="card-body">
                 <table class="table">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>{{$data->name}}</th>
                            <th>{{$data->email}}</th>
                        </tr>
                    </tbody>

                 </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
