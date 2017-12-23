@extends('layouts.panel')

@section('content')


    <form class="form-horizontal" method="POST" action="/admin/products/" enctype="multipart/form-data">

        {{ csrf_field() }}

        <fieldset>
            <legend>Yeni Ürün Ekle</legend>

            @if(session('message'))
                <div class="alert alert-danger" role="alert">
                    {{ session('message') }}
                </div>
            @endif

            <div class="form-group">
                <label class="col-md-4 control-label" for="product_name">Ürün Adı</label>
                <div class="col-md-4">
                    <input id="product_name" name="name" placeholder="Ad" class="form-control input-md" required="" type="text">
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-4 control-label" for="product_name_fr">Ürün Fiyatı</label>
                <div class="col-md-4">
                    <input id="product_name_fr" name="price" placeholder="Fiyat" class="form-control input-md" required="" type="number">

                </div>
            </div>

            <div class="form-group">
                <label class="col-md-4 control-label" for="filebutton">Image</label>
                <div class="col-md-4">
                    <input id="filebutton" name="image" class="input-file" type="file">
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-4">
                    <input type="submit" id="singlebutton" name="singlebutton" class="btn btn-primary" value="Kaydet">
                </div>
            </div>
        </fieldset>
    </form>
@endsection