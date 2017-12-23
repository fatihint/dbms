@extends('layouts.panel')

@section('content')


    <form class="form-horizontal" method="POST" action="/tables">

        {{ csrf_field() }}

        <fieldset>
            <legend>Yeni Masa Ekle</legend>

            <div class="form-group">
                <label class="col-md-4 control-label" for="product_name">Masa Adı</label>
                <div class="col-md-4">
                    <input id="product_name" name="name" placeholder="Ad" class="form-control input-md" required="" type="text">
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
