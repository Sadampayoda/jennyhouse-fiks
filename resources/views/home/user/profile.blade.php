@extends('templete.html')

@section('conten')
<div class="container">
    <h2>Edit Profile</h2>

    <form method="POST" action="{{ route('profile.update',['profile' => $user[0]->id]) }}" class="col-md-6">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="name" class="form-label">Name:</label>
            <input type="text" name="name" value="{{ $user[0]->name }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email:</label>
            <input type="email" name="email" value="{{ $user[0]->email }}" class="form-control" required>
        </div>


        <button type="submit" class="btn btn-primary">Update Profile</button>
        
    </form>
</div>
@endsection