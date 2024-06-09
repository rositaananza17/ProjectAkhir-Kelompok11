@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2>Detail Transaksi</h2>
            <table class="table">
                <tr>
                    <th>ID</th>
                    <td>{{ $transaksi->id }}</td>
                </tr>
                <tr>
                    <th>Tanggal Transaksi</th>
                    <td>{{ $transaksi->transaction_date }}</td>
                </tr>
                <tr>
                    <th>Total Amount</th>
                    <td>{{ $transaksi->total_amount }}</td>
                </tr>
                <tr>
                    <th>Payment Status</th>
                    <td>{{ $transaksi->payment_status }}</td>
                </tr>
                <tr>
                    <th>User ID</th>
                    <td>{{ $transaksi->user_id }}</td>
                </tr>
                <tr>
                    <th>Tikte ID</th>
                    <td>{{ $transaksi->tikte_id }}</td>
                </tr>
            </table>
            <a href="{{ route('transaksi.index') }}" class="btn btn-primary">Kembali</a>
        </div>
    </div>
</div>
@endsection
