<!-- resources/views/orders/index.blade.php -->

@extends('templete.html')

@section('conten')

{{-- @dd($orders) --}}
   <div class="container">
       <h2>List Pesanan</h2>

       @if(session('success'))
           <div class="alert alert-success">
               {{ session('success') }}
           </div>
       @endif

       <table class="table table-striped">
           <thead>
               <tr>
                   <th>Gambar</th>
                   <th>Quantity</th>
                   <th>Harga</th>
                   <th>Harga Total</th>
                   <th>Aksi</th>
               </tr>
           </thead>
           <tbody>
               @foreach($orders as $order)
                   <tr>
                       <td><img src="{{asset('img/barang/'.$order->image.'.png')}}" alt="Gambar" width="50" class="img-thumbnail"></td>
                       <td>{{ $order->quantity }}</td>
                       <td>Rp {{ number_format($order->harga, 0, ',', '.') }}</td>
                       <td>Rp {{ number_format($order->quantity * $order->harga, 0, ',', '.') }}</td>
                       <td>
                           <a href="{{ route('order.edits', $order->order_id) }}" class="btn btn-warning">Edit</a>
                           <form action="{{ route('order.delete') }}" method="POST" style="display: inline;">
                               @csrf
                               {{-- @method('DELETE') --}}
                               <input type="hidden" name="id" value="{{$order->order_id}}">
                               <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus pesanan ini?')">Hapus</button>
                           </form>
                           <a href="{{ route('order.pay',$order->order_id) }}" class="btn btn-success">Bayar</a>
                       </td>
                   </tr>
               @endforeach
           </tbody>
       </table>
   </div>
@endsection
