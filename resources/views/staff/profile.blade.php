@extends('layouts.panel')
@section('content')

    <html>
    <head>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>

    <form>
        <div id="profile" class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12 lead">
                                 PROFILE
                                    <hr>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 text-center">
                                    <div id="img-preview-block" class="img-circle avatar avatar-original center-block" style="background-size:cover;
                background-image:url(http://robohash.org/sitsequiquia.png?size=120x120)"></div>
                                    <br>
                                    <span class="btn btn-link btn-file">Resim Değiştir<input type="file" id="upload-img"></span>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label for="user_last_name">Name</label>
                                        <input type="text" class="form-control" id="user_last_name">
                                    </div>
                                    <div class="form-group">
                                        <label for="user_first_name">Email</label>
                                        <input type="text" class="form-control" id="user_first_name">
                                    </div>
                                    <div class="form-group">
                                        <label for="user_middle_name">Username</label>
                                        <input type="text" class="form-control" id="user_middle_name">
                                    </div>
                                    <div class="form-group">
                                        <label for="user_middle_name">Password</label>
                                        <input type="text" class="form-control" id="user_middle_name">
                                    </div>


                                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete-user-modal">
                                        Delete user
                                    </button>

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <hr>
                                    <button class="btn btn-primary pull-right"><i class="glyphicon glyphicon-floppy-disk"></i> Save</button>
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
