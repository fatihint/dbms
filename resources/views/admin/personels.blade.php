@extends('layouts.panel')
    @if(isset($personel))
    @section('content')
    <div id="personels" class="container">
        @if(session('message'))
            <div class="alert alert-success" role="alert">
                {{ session('message') }}
            </div>
        @endif
        <div class="jumbotron">
            <div class="row">
                <div class="col-md-4 col-xs-12 col-sm-6 col-lg-4">
                    <img src="https://www.svgimages.com/svg-image/s5/man-passportsize-silhouette-icon-256x256.png" alt="stack photo" class="img">
                </div>
                <div class="col-md-8 col-xs-12 col-sm-6 col-lg-8">
                    <div class="container" >
                        <h2>{{$personel->name}}</h2>
                    </div>
                    <hr>
                    <ul class="container details">
                        <li><p><span class="glyphicon glyphicon-new-window one" style="width:50px;"></span>Personel</p></li>
                        <li><p><span class="glyphicon glyphicon-envelope one" style="width:50px;"></span>{{$personel->email}}</p></li>
                    </ul>
                    <ul class="container details">
                        <form action="/admin/personels/{{$personel->id}}" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <div class="form-group">
                                <input type="submit" id="singlebutton" name="singlebutton" class="btn btn-primary" value="Kullaniciyi Sil">
                            </div>
                        </form>
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
                            @if(session('message'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('message') }}
                                </div>
                            @endif
                            <div class="pull-right top-page-ui">
                                <a href="/admin/personels/new" class="btn btn-primary pull-right">
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
                                                <th><span>Personel No</span></th>
                                                <th><span>Ad Soyad</span></th>
                                                <th><span>Giriş Tarihi</span></th>
                                                <th><span>Email</span></th>
                                                <th>Islem</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($personels as $personel)
                                            <tr>
                                                <td>{{$personel->id}}</td>
                                                <td>{{$personel->name}}</td>
                                                <td>{{$personel->created_at}}</td>
                                                <td>{{$personel->email}}</td>
                                                <td><a  href="/admin/personels/{{$personel->id}}" class="btn btn-success ">Detay</a></td>
                                            </tr>
                                            @endforeach

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

