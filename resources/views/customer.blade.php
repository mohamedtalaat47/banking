@extends('layout.app')

@section('title', 'Customer info')

@section('content')
    <div class="customer-card card">
        <div class="card-header">
            Customer informations
        </div>
        <div class="card-body">
            <h5 class="card-title"> Name: {{ $customer->name }}</h5>
            <h5 class="card-text"> Email: {{ $customer->email }}</h5>
            <h5 class="card-text"> Balance: {{ $customer->balance }} $</h5>
        </div>
    </div>


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
                @foreach ($reciever as $rec)
                    <tr>
                        <a href="#">
                            <th scope="row">{{ $rec->id }}</th>
                            <td>{{ $rec->name }}</td>
                            <td>{{ $rec->email }}</td>
                            <td>{{ $rec->balance }} $</td>
                            <td><a href="{{route('customer.transfer.view',['sender'=>$customer->id,'reciever'=>$rec->id])}}"><button class="btn btn-success">Transfer</button></a></td>

                    </tr>
                @endforeach


            </tbody>
        </table>
    </div>

    {{-- <script>
        $(document).ready(function() {
            $(".btn").click(function() {
                $(".modal").modal('show');
            });
        });
    </script>

    <!-- Modal HTML -->
    <div class="modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Transfer to : {{$rec->name}}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="" method="post">
                        @csrf
                        <p>Current balace : {{$rec->balance}}</p>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success">Transfer</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div> --}}
@endsection
