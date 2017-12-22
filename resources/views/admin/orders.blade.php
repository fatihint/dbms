@extends('layouts.panel')
@section('content')
<div class="card-body">
<div class="table-responsive">
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
        <tr>
            <th>Masa No</th>
            <th>Siparis içeriği</th>
            <th>Fiyatı</th>
            <th>Verildiği zaman</th>
            <th>Durum</th>
            <th>Islem</th>

        </tr>
        </thead>
        <tfoot>
        <tr>
            <th>Masa No</th>
            <th>Sipariş içeriği</th>
            <th>Fiyatı</th>
            <th>Verildiği zaman</th>
            <th>Durum</th>
            <th>Islem</th>
        </tr>
        </tfoot>
        <tbody>
        <tr>
            <td>Michael Bruce</td>
            <td>Javascript Developer</td>
            <td>Singapore</td>
            <td>29</td>
            <td>2011/06/27</td>
            <td><a  href="/admin/orders/1" class="btn btn-success ">Detay</a></td>
        </tr>
        <tr>
            <td>Donna Snider</td>
            <td>Customer Support</td>
            <td>New York</td>
            <td>27</td>
            <td>2011/01/25</td>
            <td><a  href="/admin/orders/1" class="btn btn-success ">Detay</a></td>
        </tr>
        </tbody>
    </table>
</div>
</div>
<div class="container" align="right">
    <button type="button" class="btn btn-success btn-lg">Sipariş Onaylandı</button>
    <button type="button" class="btn btn-success btn-lg">Sipariş Ulaştı</button>
</div>


@endsection
