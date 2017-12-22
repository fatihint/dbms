@extends('layouts.panel')
    @if(isset($product))
    @section('content')
        <div id="product-detail">
            <div class="col-md-4 column productbox">
                <div class="producttitle">{{$product->id}}</div>
                <img src="http://placehold.it/460x250/e67e22/ffffff&text=HTML5" class="img-responsive">
                <div class="productprice"><div class="pull-right"></div>
                    <input class="form-control" type="text" placeholder="Ürün İsmi" value="{{$product->name}}">
                    <br>
                    <input class="form-control " type="text" placeholder="Fiyat" value="{{$product->price}}"> <br><a href="#" class="btn btn-danger btn-sm" role="button">Değiştir</a>
                </div>
            </div>
        </div>
    @endsection
    <a href="/admin/products">Go Back</a>
        @else
        @section('content')
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Ürün İsmi</th>
                            <th>Fiyat</th>
                            <th>Eklenme Tarihi</th>
                            <th>İşlem</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Ürün İsmi</th>
                            <th>Fiyat</th>
                            <th>Eklenme Tarihi</th>
                            <th>İşlem</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        @foreach($products as $product)
                        <tr>
                            <td>{{$product->id}}</td>
                            <td>{{$product->name}}</td>
                            <td>{{$product->price}}</td>
                            <td>{{$product->created_at}}</td>
                            <td><a  href="products/{{$product->id}}" class="btn btn-success ">Detay</a></td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>


    @endsection


@endif
