@extends('templete.html')

@section('conten')
<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-md-8">
            <h2 class="mb-4">Detail Pesanan</h2>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <!-- Informasi Pesanan -->
            <div class="card mb-4">
                <div class="card-body">
                
                    
                    <!-- Tampilkan informasi barang yang dibeli -->
                    <h5 class="card-title mt-3">Barang yang Dibeli</h5>
                    
                    
                    <ul>
                        <li>
                            <strong>Nama Barang:</strong> {{ $order[0]->name }} <br>
                            <strong>Harga:</strong> Rp {{  number_format($order[0]->harga, 0, ',', '.')  }} <br>
                            <strong>Quantity:</strong> {{ $order[0]->quantity }} <br>
                            <strong>Total:</strong> Rp {{ number_format($order[0]->quantity * $order[0]->harga, 0, ',', '.')}} <br>
                            <!-- Tampilkan gambar order[0] jika ada -->
                            @if($order[0]->image)
                                <img src="{{ asset('img/barang/' . $order[0]->image.'.png') }}" alt="Gambar Barang" width="100">
                            @endif
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Formulir Pembayaran -->
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Pembayaran</h5>

                    <!-- Formulir Pembayaran -->
                    <form action="{{ route('order.done') }}" method="post">
                        @csrf
                        <input type="hidden" name="order_id" value="{{$order[0]->order_id}}">

                        <!-- Input Alamat -->
                        <div class="mb-3">
                            <label for="alamat" class="form-label">Alamat Tujuan</label>
                            <textarea class="form-control" id="alamat" name="alamat" rows="3" required></textarea>
                        </div>

                        <!-- Pilihan Kartu Kredit (Contoh menggunakan Bootstrap Select) -->
                        @if ($jumlah == 0)
                            <div class="mb-3">
                                <label for="card_number" class="form-label">Kartu kredit anda tidak ada</label>
                                <a href="{{route('kartu.kredit')}}" class="btn btn-primary">Add bank</a>
                            </div>
                        @else
                            <div class="mb-3">
                                <label for="metode" class="form-label">Pilih Kartu Kredit</label>
                                <select class="form-select" id="metode" name="metode" required>
                                    @foreach ($bank as $banks )
                                        <option value="{{$banks->id}}">{{$banks->metode}}</option>
                                    @endforeach
                                    <!-- Tambahkan opsi kartu kredit lainnya sesuai kebutuhan -->
                                </select>
                            </div>
                            
                        @endif
                        

                        <div class="mb-5">
                            <label for="pengantar_paket" class="form-label">Pilih Pengantar Paket</label>
                            <select class="form-select" id="pengantar_paket" name="pengantar_paket" required>
                                <option value="jne">JNE</option>
                                <option value="cod">COD</option>
                                <option value="jne_express">JNE Express</option>
                                <!-- Tambahkan opsi pengantar paket lainnya sesuai kebutuhan -->
                            </select>
                        </div>

                        <!-- Informasi Kartu Kredit (Contoh menggunakan Bootstrap Input) -->
                        

                        <!-- Tombol Bayar -->
                        @if ($bank== NULL)
                            <button type="submit" class="btn btn-primary" disabled>Bayar</button>
                        @else
                            <button type="submit" class="btn btn-primary" >Bayar</button>
                        @endif
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
