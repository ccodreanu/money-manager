@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="page-title">
              Dashboard
            </h1>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Transaction</th>
                    <th>Date</th>
                    <th>Amount</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($transactions as $transaction)
                <tr>
                    <th scope="row">{{ $transaction->counter }}</th>
                    <td>{{ $transaction->name }}</td>
                    <td>{{ $transaction->date }}</td>
                    <td>{{ $transaction->amount }}</td>
                </tr>
                @endforeach
                <tr>
                    <th scope="row">2</th>
                    <td>Cigarettes</td>
                    <td>2017-06-09</td>
                    <td>- 7.32€</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Kidney</td>
                    <td>2017-06-03</td>
                    <td>+ 10.09€</td>
                </tr>
            </table>
        </div>
    </div>
</div>
@endsection
