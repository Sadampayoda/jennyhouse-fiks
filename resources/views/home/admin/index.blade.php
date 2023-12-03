@extends('templete.html')



@section('conten')
    <div class="container">
        <h1>User Management</h1>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <a href="{{ route('admin.product') }}" class="btn btn-primary mb-2">Show Product</a>
        <a href="{{ route('admin.log') }}" class="btn btn-primary mb-2">Show log</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                            <form action="{{route('admin.delete')}}" method="post">
                                @csrf
                                @method('delete')
                                <input type="hidden" name="id" value="{{$user->id}}">
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $users->links() }}
    </div>


    

    
@endsection

