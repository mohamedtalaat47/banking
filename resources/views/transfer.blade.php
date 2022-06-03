@extends('layout.app')

@section('title', 'Transfer')

@section('content')

    <div class="customer-card card">
        <div class="card-header">
            Transfer window
        </div>
        <div class="d-flex">
            <div class="card-body col-6">
                <h3 class="card-title"> Sender</h3>
                <hr>
                <h5 class="card-title"> Name: {{ $sender->name }}</h5>
                <h5 class="card-text"> Email: {{ $sender->email }}</h5>
                <h5 class="card-text"> Balance: {{ $sender->balance }} $</h5>
            </div>
            <div class="card-body col-6">
                <h3 class="card-title"> Reciever</h3>
                <hr>
                <h5 class="card-title"> Name: {{ $reciever->name }}</h5>
                <h5 class="card-text"> Email: {{ $reciever->email }}</h5>
                <h5 class="card-text"> Balance: {{ $reciever->balance }} $</h5>
            </div>
        </div>
    </div>

    <div class="customer-card card text-center w-50 m-auto">
        <div class="card-header">
            Transfer window
        </div>
        <div class="card-body">
            <form action="" method="POST">
                @csrf
                <div class="form-group">
                    <label for="balance">Enter the amount you want to transfer</label>

                    <input class="form-control w-25 m-auto" type="integer" name="balance">

                    @if ($errors->any())
                                @foreach ($errors->all() as $error)
                                    <p style="color: red">{{ $error }}</p>
                                @endforeach
                    @endif

                    <button class="btn btn-success mt-3" type="submit" name="submit">Transfer</button>

                </div>
            </form>
        </div>

    </div>


@endsection
