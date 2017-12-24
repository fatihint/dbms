@extends('layouts.panel')
@if(isset($customer))
@section('content')
    <div id="customer-profile" class="container">
    @if(session('message'))
        <div class="alert alert-success" role="alert">
            {{ session('message') }}
        </div>
    @endif
    <div class="jumbotron">
        <div class="row">
            <div class="col-md-4 col-xs-12 col-sm-6 col-lg-4">
                @if($path))
                    <img src="{{ $path }}" alt="" width="100%">
                @else
                    <img src="https://www.svgimages.com/svg-image/s5/man-passportsize-silhouette-icon-256x256.png" alt="stack photo" class="img">
                @endif
            </div>
            <div class="col-md-8 col-xs-12 col-sm-6 col-lg-8">
                <div class="container">
                    <h2>{{$customer->name}}</h2>
                </div>
                <hr>
                <ul class="container details">
                    <li><p><span class="glyphicon glyphicon-new-window one" style="width:50px;"></span>Musteri</p></li>
                    <li><p><span class="glyphicon glyphicon-envelope one" style="width:50px;"></span>{{$customer->email}}</p></li>
                </ul>
            </div>
        </div>
    </div>
@endsection
<a href="/admin/products">Go Back</a>
@else
@section('content')
    @if (Auth::User()->role_id==1)
    @endif
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Ad Soyad</th>
                    <th>Mail</th>
                    <th>Kayit Tarihi</th>
                    <th>İşlem</th>
                </tr>
                </thead>
                <tfoot>
                <tr>
                    <th>ID</th>
                    <th>Ürün İsmi</th>
                    <th>Fiyat</th>
                    <th>Eklenme Tarihi</th>
                    <th>İşlem</th>
                </tr>
                </tfoot>
                <tbody>
                @foreach($customers as $customer)
                    <tr>
                        <td>{{$customer->id}}</td>
                        <td>{{$customer->name}}</td>
                        <td>{{$customer->email}}</td>
                        <td>{{$customer->created_at}}</td>
                        <td><a  href="/admin/customers/{{$customer->id}}" class="btn btn-success ">Detay</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
    </div>

@endsection
@endif
