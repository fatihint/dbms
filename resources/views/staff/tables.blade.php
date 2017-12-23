@extends('layouts.panel')
        @section('content')
            @if (Auth::User()->role_id<3)
                <div class="pull-right top-page-ui">
                    <a href="/tables/new" class="btn btn-primary pull-right">
                        <i class="fa fa-plus-circle fa-lg"></i> Yeni Masa Ekle
                    </a>
                </div>
            @endif
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Masa İsmi</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Masa İsmi</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        @foreach($tables as $table)
                        <tr>
                            <td>{{$table->id}}</td>
                            <td>{{$table->name}}</td>
                            <form action="/tables/{{$table->id}}" method="POST">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <td>
                                    <div class="form-group">
                                        <input type="submit" id="singlebutton" name="singlebutton" class="btn btn-danger" value="Masayi Sil">
                                    </div>
                                </td>
                            </form>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
    </div>


    @endsection
