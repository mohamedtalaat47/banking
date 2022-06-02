@extends('layout.app')

@section('title', 'Home')

@section('content')
<div class="customer-card card">
    <div class="card-header">
        Customer informations
    </div>
    <div class="card-body">
        <h5 class="card-title"> Name: {{$customer->name}}</h5>
        <h5 class="card-text"> Email: {{$customer->email}}</h5>
        <h5 class="card-text"> Balance: {{$customer->balance}} $</h5>

        <a href="#" class="btn btn-dark">Transfer Money</a>
    </div>
</div>
@endsection