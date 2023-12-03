@extends('templete.html')

@section('conten')
    <div class="container">
        <h1>Edit Product</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        
        <form action="{{ route('admin.update.product',['id' => $product[0]->id]) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('put') <!-- Gunakan metode PUT untuk update -->
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $product[0]->name }}" required>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Image</label>
                <input type="file" class="form-control" id="image" name="image">
            </div>
            <div class="mb-3">
                <label for="harga" class="form-label">harga</label>
                <input type="number" class="form-control" id="harga" name="harga" value="{{ $product[0]->harga }}" required>
            </div>
            <div class="mb-3">
                <label for="category" class="form-label">Category</label>
                <select class="form-select" id="category" name="category" required>
                    <option value="HAIR-CARE" {{ $product[0]->category == 'HAIR-CARE' ? 'selected' : '' }}>Hair Care</option>
                    <option value="COSMETICS" {{ $product[0]->category == 'COSMETICS' ? 'selected' : '' }}>Cosmetics</option>
                    <option value="HAIR-COLOR" {{ $product[0]->category == 'HAIR-COLOR' ? 'selected' : '' }}>Hair Color</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="rating" class="form-label">Rating</label>
                <input type="number" class="form-control" id="rating" name="rating" value="{{ $product[0]->rating }}">
            </div>
            <button type="submit" class="btn btn-primary">Update Product</button>
        </form>
    </div>
@endsection
