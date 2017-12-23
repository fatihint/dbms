@extends('layouts.panel')
@section('content')

    <html>
    <head>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>

    <form action="/profile" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div id="profile" class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12 lead">
                                 PROFIL
                                    <hr>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 text-center">
                                    @if(isset($path))
                                        <img src="{{ $path }}" alt="">
                                    @else
                                        @if(is_null($user->image))
                                            <img src="https://www.svgimages.com/svg-image/s5/man-passportsize-silhouette-icon-256x256.png" alt="stack photo" class="img">
                                        @else
                                            <img src="{{ $user->image }}" alt="">
                                        @endif
                                    @endif
                                    <br>
                                    <div class="form-group">
                                        <label class="col-md-12 control-label" for="filebutton">Resim Guncelle</label>
                                        <div class="col-md-12">
                                            <input id="filebutton" name="image" class="input-file" type="file">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label for="user_last_name">Ad Soyad</label>
                                        <p>{{ $user->name }}</p>
                                    </div>
                                        <div class="form-group">
                                            <label for="user_first_name">Email</label>
                                            <input value="{{$user->email}}" name="email" type="email" class="form-control" id="user_first_name">
                                        </div>
                                        <div class="form-group">
                                            <label for="user_middle_name">Parola</label>
                                            <input name="password" type="password" class="form-control" id="user_middle_name">
                                        </div>
                                        <div class="form-group">
                                            <label for="user_middle_name">Parola Tekrar</label>
                                            <input name="password_again" type="password" class="form-control" id="user_middle_name">
                                        </div>

                                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete-user-modal">
                                            Delete user
                                        </button>

                                        <div class="form-group">
                                            <input type="submit" class="btn btn-primary" value="Kaydet">
                                        </div>

                                    @if(session('message'))
                                        <div class="alert alert-info" role="alert">
                                            {{ session('message') }}
                                        </div>
                                    @endif

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="delete-user-modal" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <p>Are you sure you want to delete account?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-danger">Delete</button>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
    </form>
@endsection
