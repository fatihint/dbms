@extends('layouts.panel')

@section('content')


    <form class="form-horizontal" method="POST" action="/admin/products/" enctype="multipart/form-data">

        {{ csrf_field() }}

        <fieldset>

            <!-- Form Name -->
            <legend>Yeni Ürün Ekle</legend>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="product_name">Ürün İsmi</label>
                <div class="col-md-4">
                    <input id="product_name" name="name" placeholder="PRODUCT NAME" class="form-control input-md" required="" type="text">

                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="product_name_fr">Fiyat</label>
                <div class="col-md-4">
                    <input id="product_name_fr" name="price" placeholder="PRODUCT PRICE" class="form-control input-md" required="" type="text">

                </div>
            </div>



            <!-- Text input--
                    <!-- File Button -->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="filebutton">Image</label>
                        <div class="col-md-4">
                            <input id="filebutton" name="image" class="input-file" type="file">
                        </div>
                    </div>

                    <!-- Button -->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="singlebutton">Single Button</label>
                        <div class="col-md-4">
                            <input type="submit" id="singlebutton" name="singlebutton" class="btn btn-primary" value="Kaydet">
                        </div>
                    </div>

        </fieldset>
    </form>


@endsection