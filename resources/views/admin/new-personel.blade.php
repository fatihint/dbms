@extends('layouts.panel')

@section('content')

    <div class="container py-3">
        <div class="row">
            <div class="mx-auto col-sm-6">
                <!-- form user info -->
                <div class="card">
                    <div class="card-header">
                        <h4 class="mb-0">Yeni Personel Ekle</h4>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="/admin/personels/" class="form" role="form" autocomplete="off">
                            {{ csrf_field() }}
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label form-control-label">First name</label>
                                <div class="col-lg-9">
                                    <input required name="name" class="form-control" type="text" placeholder="Ad">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label form-control-label">Last name</label>
                                <div class="col-lg-9">
                                    <input required name="lastname" class="form-control" type="text" placeholder="Soyad">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label form-control-label">Email</label>
                                <div class="col-lg-9">
                                    <input required name="email" class="form-control" type="email" placeholder="email@gmail.com">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label form-control-label">Parola</label>
                                <div class="col-lg-9">
                                    <input required name="password" class="form-control" type="password" value="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label form-control-label">Parola Tekrar</label>
                                <div class="col-lg-9">
                                    <input required name="password_again" class="form-control" type="password" value="">
                                </div>
                            </div>
                            {{--<div class="form-group">--}}
                                {{--<label class="col-md-4 control-label" for="filebutton">Resim Yükle</label>--}}
                                {{--<div class="col-md-4">--}}
                                    {{--<input id="filebutton" name="filebutton" class="input-file" type="file">--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            @if(session('message'))
                                <div class="alert alert-danger" role="alert">
                                    {{ session('message') }}
                                </div>
                            @endif
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label form-control-label"></label>
                                <div class="col-lg-9">
                                    <input type="submit" class="btn btn-primary" value="Save Changes">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- /form user info -->
            </div>
        </div>
    </div>
@endsection