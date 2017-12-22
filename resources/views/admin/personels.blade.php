@extends('layouts.panel')
@if(isset($id))

@section('content')

    <div id="personels" class="container">
        <div class="jumbotron">
            <div class="row">
                <div class="col-md-4 col-xs-12 col-sm-6 col-lg-4">
                    <img src="https://www.svgimages.com/svg-image/s5/man-passportsize-silhouette-icon-256x256.png" alt="stack photo" class="img">
                </div>
                <div class="col-md-8 col-xs-12 col-sm-6 col-lg-8">
                    <div class="container" style="border-bottom:1px solid black">
                        <h2>John Doe</h2>
                    </div>
                    <hr>
                    <ul class="container details">
                        <li><p><span class="glyphicon glyphicon-earphone one" style="width:50px;"></span>+90 553 65 22</p></li>
                        <li><p><span class="glyphicon glyphicon-envelope one" style="width:50px;"></span>somerandom@email.com</p></li>
                        <li><p><span class="glyphicon glyphicon-map-marker one" style="width:50px;"></span>Hyderabad</p></li>
                        <li><p><span class="glyphicon glyphicon-new-window one" style="width:50px;"></span>Personel</p></li>
                    </ul>
                </div>
            </div>
        </div>
        @endsection
        <a href="/admin/personels">Go Back</a>
        @else

        @section('content')
            <div id="personels" class="col-md-10" id="content-wrapper">
                <div class="row">
                    <div class="col-lg-12">

                        <div class="clearfix">
                            <h1 class="pull-left">Users</h1>

                            <div class="pull-right top-page-ui">
                                <a href="new-personel" class="btn btn-primary pull-right">
                                    <i class="fa fa-plus-circle fa-lg"></i> Add user
                                </a>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="main-box clearfix">
                                    <div class="table-responsive">
                                        <table class="table user-list">
                                            <thead>
                                            <tr>
                                                <th><span>Personel İsim</span></th>
                                                <th><span>Giriş Tarihi</span></th>
                                                <th class="text-center"><span>Durum</span></th>
                                                <th><span>Email</span></th>
                                                <th>Kullanıcı Detay</th>
                                            </tr>
                                            </thead>
                                            <tbody>


                                            <tr>
                                                <td>
                                                    <img src="img/samples/ryan.png" alt=""/>
                                                    <a href="#" class="user-link">Ryan Gossling</a>

                                                </td>
                                                <td>
                                                    2013/03/03
                                                </td>
                                                <td class="text-center">
                                                    <span class="label label-danger">Banned</span>
                                                </td>
                                                <td>
                                                    <a href="#">jack@nicholson</a>
                                                </td>
                                                <td><a  href="/personels/1" class="btn btn-success">User Profile</a></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <img src="img/samples/emma.png" alt=""/>
                                                    <a href="#" class="user-link">Emma Watson</a>

                                                </td>
                                                <td>
                                                    2004/01/24
                                                </td>
                                                <td class="text-center">
                                                    <span class="label label-warning">Pending</span>
                                                </td>
                                                <td>
                                                    <a href="#">humphrey@bogart.com</a>
                                                </td>
                                                <td><a  href="personels/1" class="btn btn-success">User Profile</a></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <img src="img/samples/robert.png" alt=""/>
                                                    <a href="#" class="user-link">Robert Downey Jr.</a>

                                                </td>
                                                <td>
                                                    2013/12/31
                                                </td>
                                                <td class="text-center">
                                                    <span class="label label-success">Active</span>
                                                </td>
                                                <td>
                                                    <a href="#">spencer@tracy</a>
                                                </td>
                                                <td><a  href="personels/1" class="btn btn-success">User Profile</a></td>

                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
    </div>


@endsection


@endif

