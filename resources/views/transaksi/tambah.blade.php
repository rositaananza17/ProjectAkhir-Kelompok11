@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2>Tambah Transaksi</h2>
            <form action="{{ route('transaksi.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="transaction_date">Tanggal Transaksi:</label>
                    <input type="date" class="form-control" id="transaction_date" name="transaction_date" required>
                </div>
                <div class="form-group">
                    <label for="total_amount">Total Amount:</label>
                    <input type="number" class="form-control" id="total_amount" name="total_amount" required>
                </div>
                <div class="form-group">
                    <label for="payment_status">Payment Status:</label>
                    <input type="text" class="form-control" id="payment_status" name="payment_status" required>
                </div>
                <div class="form-group">
                    <label for="user_id">User ID:</label>
                    <input type="number" class="form-control" id="user_id" name="user_id" required>
                </div>
                <div class="form-group">
                    <label for="tikte_id">Tikte ID:</label>
                    <input type="number" class="form-control" id="tikte_id" name="tikte_id" required>
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
</div>
@endsection
