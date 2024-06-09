@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2>List Transaksi</h2>
            <a href="{{ route('transaksi.create') }}" class="btn btn-primary">Tambah Transaksi</a>
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Tanggal Transaksi</th>
                        <th>Total Amount</th>
                        <th>Payment Status</th>

                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($transaksi as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->transaction_date }}</td>
                        <td>{{ $item->total_amount }}</td>
                        <td>{{ $item->payment_status }}</td>

                        <td>
                            <a href="{{ route('transaksi.show', $item->id) }}" class="btn btn-info">Lihat</a>
                            <a href="{{ route('transaksi.edit', $item->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('transaksi.destroy', $item->id) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
