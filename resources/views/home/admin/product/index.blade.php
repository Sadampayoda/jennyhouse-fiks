@extends('templete.html')



@section('conten')

    <div class="container">
        <h1>Product Management</h1>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <a href="{{route('admin.create.product')}}" class="btn btn-primary mb-2">Add Product</a>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Image</th>
                    <th>Price</th>
                    <th>Category</th>
                    <th>Rating</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                    <tr>
                        <td>{{ $product->id }}</td>
                        <td>{{ $product->name }}</td>
                        <td><img src="{{asset('img/barang/'.$product->image.'.png' )}}" alt=""></td>
                        <td>{{ $product->harga }}</td>
                        <td>{{ $product->category }}</td>
                        <td>{{ $product->rating }}</td>
                        <td>
                            <a href="{{ route('admin.edit.product',['id' => $product->id]) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('admin.delete.product') }}" method="post" style="display:inline">
                                @csrf
                                @method('delete')
                                <input type="hidden" name="id" value="{{$product->id}}">
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $products->links() }}
    </div>
@endsection

