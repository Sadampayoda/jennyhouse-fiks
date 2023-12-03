@extends('templete.html')

@section('conten')
    <div class="container">
        <h1>Audit Log</h1>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Status</th>
                    <th>Nama Barang</th>
                    <th>Harga Barang</th>
                    <th>Quantity</th>
                    <th>User</th>
                    <th>Timestamps</th>
                </tr>
            </thead>
            <tbody>
                @foreach($auditLogs as $log)
                    <tr>
                        <td>{{ $log->id }}</td>
                        <td>{{ $log->status }}</td>
                        <td>{{ $log->nama_barang }}</td>
                        <td>{{ $log->harga_barang }}</td>
                        <td>{{ $log->quantity }}</td>
                        <td>{{ $log->user_id }}</td>
                        <td>{{ $log->created_at }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
