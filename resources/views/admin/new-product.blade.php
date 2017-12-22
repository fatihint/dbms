@extends('layouts.panel')

@section('content')


    <form class="form-horizontal">
        <fieldset>
            <legend>Yeni Ürün Ekle</legend>
            <div class="form-group">
                <label class="col-md-4 control-label" for="product_name">Ürün İsmi</label>
                <div class="col-md-4">
                    <input id="product_name" name="product_name" placeholder="PRODUCT NAME" class="form-control input-md" required="" type="text">

                </div>
            </div>

            <div class="form-group">
                <label class="col-md-4 control-label" for="product_name_fr">Fiyat</label>
                <div class="col-md-4">
                    <input id="product_name_fr" name="product_name_fr" placeholder="PRODUCT PRICE FR" class="form-control input-md" required="" type="text">

                </div>
            </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label" for="filebutton">main_image</label>
                        <div class="col-md-4">
                            <input id="filebutton" name="filebutton" class="input-file" type="file">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="singlebutton">Single Button</label>
                        <div class="col-md-4">
                            <button id="singlebutton" name="singlebutton" class="btn btn-primary">EKLE</button>
                        </div>
                    </div>
        </fieldset>
    </form>
@endsection