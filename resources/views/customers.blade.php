@extends('layout.app')

@section('title', 'Customers list')

@section('content')
    <div class="customers-table">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Balance</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($customers as $customer)
                
                <tr>
                    <a href="#">
                    <th scope="row">{{$customer->id}}</th>
                    <td>{{$customer->name}}</td>
                    <td>{{$customer->email}}</td>
                    <td>{{$customer->balance}} $</td>
                    <td><a href="{{route('customer.show',$customer->id)}}"><button class="btn btn-success">Visit</button></a></td>
                </tr>
                
                @endforeach
                
                
            </tbody>
        </table>


    </div>
@endsection
