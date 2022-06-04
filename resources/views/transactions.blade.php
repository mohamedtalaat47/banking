@extends('layout.app')

@section('title', 'transactions history')

@section('content')
    <div class="customers-table">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Sender email</th>
                    <th scope="col">Reciever email</th>
                    <th scope="col">Transfered amount</th>
                    <th scope="col">Transfer date</th>
                    <th scope="col">Transfer time</th>
                    <th scope="col">Transaction maker</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($transactions as $transaction)

                    <?php $datetime = $transaction->created_at;
                        $date_arr = explode(' ', $datetime);
                        $date = $date_arr[0];
                        $time = $date_arr[1]
                    ?>

                    <tr>
                        <a href="#">
                            <th scope="row">{{ $transaction->id }}</th>
                            <td>{{ $transaction->sender_email }}</td>
                            <td>{{ $transaction->reciever_email }}</td>
                            <td>{{ $transaction->transfered_amount }} $</td>
                            <td>{{ $date }}</td>
                            <td>{{ $time }} GMT</td>
                            <td>{{ $transaction->transaction_maker }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>


    </div>
@endsection
