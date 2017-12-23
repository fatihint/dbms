@extends('layouts.panel')
    @if(isset($product))
    @section('content')
        <div id="product-detail">
            <div class="col-md-4 column productbox">
                @if(session('message'))
                    <div class="alert alert-success" role="alert">
                        {{ session('message') }}
                    </div>
                @endif
                <img src="{{$path}}" class="img-responsive" width="100%">
                    <br>
                    <br>
                    <form class="form-horizontal" method="POST" action="/admin/products/{{$product->id}}" enctype="multipart/form-data" >
                        {{ csrf_field() }}
                        <fieldset>
                            @if (Auth::User()->role_id==1)
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="product_name">Ürün İsmi</label>
                                    <div class="col-md-12">
                                        <input value="{{$product->name}}" id="product_name" name="name" placeholder="PRODUCT NAME" class="form-control input-md" required="true" type="text">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="product_name_fr">Fiyat</label>
                                    <div class="col-md-12">
                                        <input value="{{$product->price}}" id="product_name_fr" name="price" placeholder="PRODUCT PRICE" class="form-control input-md" required="" type="number">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="filebutton">Image</label>
                                    <div class="col-md-12">
                                        <input id="filebutton" name="image" class="input-file" type="file">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <a href="/products">
                                            <input type="submit" id="singlebutton" name="singlebutton" class="btn btn-primary" value="Kaydet">
                                        </a>
                                    </div>
                                </div>
                            @endif
                            @if (Auth::User()->role_id!=1)
                                <div class="form-group">
                                    <label class="col-md-6 control-label" for="product_name"><h4>Ürün İsmi <br><b>{{$product->name}}</b></h4></label>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-6 control-label" for="product_name_fr"><h4>Ürün Fiyati <br> <b>{{$product->price}}</b></h4></label>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <a href="/products">
                                            <input type="" id="singlebutton" name="singlebutton" class="btn btn-primary" value="Geri Don">
                                        </a>
                                    </div>
                                </div>
                            @endif
                        </fieldset>
                    </form>
            </div>
        </div>
    @endsection
    <a href="/products">Go Back</a>
    @else
        @section('content')
            @if (Auth::User()->role_id==1)
                <div class="pull-right top-page-ui">
                    <a href="/admin/products/new" class="btn btn-primary pull-right">
                        <i class="fa fa-plus-circle fa-lg"></i> Yeni Ürün Ekle
                    </a>
                </div>
            @endif
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
    </div>


    @endsection


@endif
