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

    <form class="row income-form">
        <div class="col-3">
            <input type="text" class="form-control" id="inputPassword3" placeholder="Transaction">
        </div>
        <div class="col-3">
            <input type="text" class="form-control" id="inputPassword3" placeholder="Date">
        </div>
        <div class="col-3">
            <input type="text" class="form-control" id="inputPassword3" placeholder="Amount">
        </div>
        <div class="col-3">
            <button type="submit" class="btn btn-primary income-button">Add transaction</button>
        </div>
    </form>

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
                <tr>
                    <th scope="row">1</th>
                    <td>Milk and cookies</td>
                    <td>2017-06-11</td>
                    <td>- 3.57€</td>
                </tr>
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
