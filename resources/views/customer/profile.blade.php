@extends('layouts.customer-home')

@section('content')
    <form>
        <div id="profile" class="container">
            <div class="row">
                <div class="col-md-12">
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
                background-image:url(http://www.asur.com.tr/uploads/kimnededi/kucuk/vesikalik.jpg?size=120x120)"></div>
                                    <br>
                                    <span class="btn btn-link btn-file">Resim Değiştir<input type="file" id="upload-img"></span><br><br>
                                    <label for="username">FATİH İNTEKİN</label>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control" id="email">
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        <input type="password" class="form-control" id="password">
                                    </div>
                                    <div class="form-group">
                                        <label for="confirm-password">Confirm Password</label>
                                        <input type="password" class="form-control" id="confirm-password">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <hr>
                                    <input  type="submit" class="btn btn-primary pull-right"value="Save"> </input>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection