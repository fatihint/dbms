@extends('layouts.panelLayout')
@section('content')
    <style>.productbox {
            background-color:#ffffff;
            padding:40px;
            margin-bottom:10px;
            -webkit-box-shadow: 0 8px 6px -6px  #999;
            -moz-box-shadow: 0 8px 6px -6px  #999;
            box-shadow: 0 8px 6px -6px #999;
        }

        .producttitle {
            font-weight:bold;
            padding:5px 0 5px 0;
        }

        .productprice {
            border-top:1px solid #dadada;
            padding-top:5px;
        }

        .pricetext {
            font-weight:bold;
            font-size:1.4em;
        }</style>
    <div class="col-md-4 column productbox">
        <img src="http://placehold.it/460x250/e67e22/ffffff&text=HTML5" class="img-responsive">
        <div class="producttitle">Product 2</div>
        <div class="productprice"><div class="pull-right"></div>
            <input class="form-control " type="text" placeholder="fiyat" > <br><a href="#" class="btn btn-danger btn-sm" role="button">Değiştir</a>
            <br><br>
        <input class="form-control " type="text" placeholder="Ürün İsmi" > <br><a href="#" class="btn btn-danger btn-sm" role="button">Değiştir</a>

    </div>







@endsection
