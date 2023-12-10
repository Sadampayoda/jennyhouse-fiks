@extends('templete.html')

@section('conten')
<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-md-8">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="card">
                <div class="card-header">Edit Pembelian</div>
                <div class="card-body">
                    <form action="{{ route('order.updates') }}" method="POST">
                        @csrf
                        <input type="hidden" name="id" value="{{$id}}">
                        <div class="form-group mb-5">
                            <label for="barang">Pilih Barang</label>
                            <select name="barang" class="form-control" id="barang" required>
                                @foreach ($barang as $row)
                                    <option value="{{ $row->id }}" @if ($row->id == $purchase->barang_id) selected @endif>{{ $row->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group mb-3">
                            <label for="quantity">Jumlah Barang</label>
                            <input type="number" name="quantity" class="form-control" id="quantity" value="{{ $purchase->quantity }}" required>
                        </div>

                        <button type="submit" class="btn btn-primary">Update Pembelian</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
