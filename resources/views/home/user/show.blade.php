@extends('templete.html')

@section('conten')
    <div class="container">
        <h2>Profile</h2>

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">User Information</h5>
                <p class="card-text"><strong>Name:</strong> {{ $user->name }}</p>
                <p class="card-text"><strong>Email:</strong> {{ $user->email }}</p>
                <a href="profile/{{$user->id}}/edit"   class="btn btn-dark">Edit profile</a>

            </div>
        </div>

        <h3 class="mt-4">Transaction History</h3>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name item</th>
                    <th>quantity</th>
                    <th>address</th>
                    <th>Created At</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($transactions as $transaction)
                    <tr>
                        <td>{{ $transaction->id }}</td>
                        <td>{{ $transaction->product }}</td>
                        <td>{{ $transaction->quantity }}</td>
                        <td>{{ $transaction->address }}</td>
                        <td>{{ $transaction->created_at }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
