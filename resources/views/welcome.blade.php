@extends('layout.app')

@section('title', 'Home')

@section('content')
    <section class="home">
        <div class="layout">
            <div class="title-div text-center">
                <h1>Transfer money from customer to another</h1>
              
                <a href="{{route('customer.index')}}"><button class="btn mr-1">Customers list</button></a>
                <a href="{{route('transaction.index')}}"><button class="btn ml-1">Transactions history</button></a>
            </div>
        </div>
    </section>
@endsection
