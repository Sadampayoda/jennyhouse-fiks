@extends('templete.html')


@section('conten')
    <div class="container">
        <div class="row mt-5">
            <div class="col">
                <h1 style="color:#3B5999">Products</h1>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-5">
                <div class="row">
                    <div class="col">
                        <a class="btn {{ ($category === "all") ? 'btn-danger' : 'btn-outline-danger' }}" href="{{route('product')}}">All</a>
                    </div>
                    <div class="col">
                        <a class="btn {{ ($category === "hair-care") ? 'btn-danger' : 'btn-outline-danger' }}" href="{{route('option.product',['id' => 'hair-care'])}}">Hair care</a>
                    </div>
                    <div class="col">
                        <a class="btn {{ ($category === "hair-color") ? 'btn-danger' : 'btn-outline-danger' }}"href="{{route('option.product',['id' => 'hair-color'])}}">Hair color</a>
                    </div>
                    <div class="col">
                        <a class="btn {{ ($category === "cosmetiks") ? 'btn-danger' : 'btn-outline-danger' }}" href="{{route('option.product',['id' => 'Cosmetiks'])}}">Cosmetiks</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col">
                <p>{{$text}}</p>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-2">
                <div class="row">
                    @if ($category != 'all')

                        <form action="{{route('option.product',['id' => $category])}}" method="GET">
                            <div class="col">
                                <ul class="navbar-nav">
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle text-muted" href="{{route('product')}}" id="navbarDropdownMenuLink" role="button"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            Sort by
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                            <select name="sort" id="">
                                                <option value="murah">Termurah</option>
                                                <option value="mahal">Termahal</option>
                                            </select>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="col ms-5 ps-5">
                                <button type="submit" class="btn btn-outline-danger">Filter <i class="bi bi-funnel"></i> </button>
                            </div>
                        </form>
                    @else
                        <form action="{{route('product')}}" method="GET">
                            <div class="col">
                                <ul class="navbar-nav">
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle text-muted" href="{{route('product')}}" id="navbarDropdownMenuLink" role="button"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            Sort by
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                            <select name="sort" id="">
                                                <option value="murah">Termurah</option>
                                                <option value="mahal">Termahal</option>
                                            </select>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="col ms-5 ps-5">
                                <button type="submit" class="btn btn-outline-danger">Filter <i class="bi bi-funnel"></i> </button>
                            </div>
                        </form>
                    @endif
                </div>
            </div>            
        </div>
        </div>
    </div>

    <div class="container-fluid border-bottom pt-3"></div>

    <div class="container">
        <div class="row justify-content-center mt-4 ms-5">
            @foreach ($products as $product)
                <div class="col-4 p-3">
                    <div class="card shadow" style="width: 18rem;">
                        <img src="{{asset('img/barang/'.$product->image.'.png')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{$product->name}}</h5>
                            <p class="card-text">Rp.{{$product->harga}},00</p>
                            <p style="color: #ED537B"><i class="bi bi-star-fill"></i> {{$product->rating}}</p>
                            <a href="{{route('detail.product',[
                                'id' => $product->id
                            ])}}" class="btn btn-outline-danger">product detil</a>
                        </div>
                    </div>
                </div>
            @endforeach
            </div>
        </div>
    </div>
@endsection