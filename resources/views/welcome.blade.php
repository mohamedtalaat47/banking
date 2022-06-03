@extends('layout.app')

@section('title', 'Home')

@section('content')
    <section class="home">
        <div class="layout">
            <div class="title-div text-center">
                <h1>Transfer money from customer to another</h1>
                <a href="{{route('customer.index')}}"><button class="btn">Customers list</button></a>
            </div>
        </div>
    </section>
@endsection
