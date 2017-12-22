@extends('layouts.panel')
    @if(isset($order))
    @section('content')
        <div id="product-detail">
            <div class="col-md-4 column productbox">
                <div class="producttitle">{{$order->id}}</div>
                <img src="http://placehold.it/460x250/e67e22/ffffff&text=HTML5" class="img-responsive">
                <div class="productprice"><div class="pull-right"></div>
                <form class="" action="/personel/orders/{{$order->id}}" method="post">

                    <input class="form-control" type="text" placeholder="Siparisin Verildigi Masa" value="{{$order->table_id}}">
                    <br>
                    <input class="form-control " type="text" placeholder="Fiyat" value="{{$order->price}}">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <br>
                    <button class="btn btn-danger btn-sm" type="submit" name="button">Onayla</button>
                </form>
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
                            <th>Masa ID</th>
                            <th>Siparis Fiyat</th>
                            <th>Durum Tarihi</th>
                            <th>İşlem</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Masa ID</th>
                            <th>Siparis Fiyat</th>
                            <th>Durum Tarihi</th>
                            <th>İşlem</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        @foreach($orders as $order)
                        <tr>
                            <td>{{$order->id}}</td>
                            <td>{{$order->table_id}}</td>
                            <td>{{$order->price}}</td>
                            <td>{{$order->created_at}}</td>
                            <td><a  href="orders/{{$order->id}}" class="btn btn-success ">Detay</a></td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>


    @endsection


@endif
