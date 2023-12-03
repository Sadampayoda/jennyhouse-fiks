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
                <div class="card-header">Input Pembelian</div>
                <div class="card-body">
                    <form action=" {{route('transaksi.store')}}" method="POST">
                        @csrf
                        <div class="form-group mb-5">
                            <label for="product">Pilih Barang</label>
                            <select name="product" class="form-control" id="product" required>
                                @foreach ($barang as $row )
                                    <option value="{{$row->id}}">{{$row->name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group mb-3">
                            <label for="quantity">Jumlah Barang</label>
                            <input type="number" name="quantity" class="form-control" id="quantity" required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="address">Alamat Pengiriman</label>
                            <textarea name="address" class="form-control" id="address" rows="3" required></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary">Mulai pembelian</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection