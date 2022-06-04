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

                    <button type="button" class="btn btnModal btn-success mt-3">Transfer</button>

                    <div class="modal" tabindex="-1" role="dialog" id="myModal">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Confirmation</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <p>You are about to make a transaction!</p>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-success" type="submit" name="submit">Confirm</button>
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </form>
        </div>

    </div>

    <script>
        $(document).ready(function() {
            $(".btnModal").click(function() {
                $("#myModal").modal('show');
            });
        });
    </script>

@endsection
