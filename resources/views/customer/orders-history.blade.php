@extends('layouts.customer-home')
@if(isset($id))
@section('content')
    <div id="order-history-detail">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>1 Nolu Siparişinizin Detayları</h1>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead class="thead-light">
                                <tr>
                                    <th>Ürün Resmi</th>
                                    <th>Ürün</th>
                                    <th>Adet</th>
                                    <th>Tutar</th>
                                </tr>
                                </thead>
                                <tfoot>
                                <tr>
                                    <th>Ürün Resmi</th>
                                    <th>Ürün</th>
                                    <th>Adet</th>
                                    <th>Tutar</th>
                                </tr>
                                </tfoot>
                                <tbody>
                                <tr>
                                    <td><img src="https://b.zmtcdn.com/data/pictures/chains/0/5916120/8cef38c433ccf9a124ad8c074c514b2f.jpg?fit=around%7C200%3A200&crop=200%3A200%3B%2A%2C%2A" alt=""></td>
                                    <td>Tavuk Tantuni</td>
                                    <td>1</td>
                                    <td>28.35</td>
                                </tr>
                                <tr>
                                    <td><img src="https://b.zmtcdn.com/data/pictures/chains/0/5916120/8cef38c433ccf9a124ad8c074c514b2f.jpg?fit=around%7C200%3A200&crop=200%3A200%3B%2A%2C%2A" alt=""></td>
                                    <td>Tavuk Tantuni</td>
                                    <td>1</td>
                                    <td>28.35</td>
                                </tr>
                                <tr>
                                    <td><img src="https://b.zmtcdn.com/data/pictures/chains/0/5916120/8cef38c433ccf9a124ad8c074c514b2f.jpg?fit=around%7C200%3A200&crop=200%3A200%3B%2A%2C%2A" alt=""></td>
                                    <td>Tavuk Tantuni</td>
                                    <td>1</td>
                                    <td>28.35</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
@else
@section('content')
    <div id="customer-order-history">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Verdiğiniz Tüm Siparişler</h1>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead class="thead-light">
                                <tr>
                                    <th>Sipariş No</th>
                                    <th>Siparis içeriği</th>
                                    <th>Fiyatı</th>
                                    <th>Verildiği zaman</th>
                                    <th>Siparis Detay</th>
                                </tr>
                                </thead>
                                <tfoot>
                                <tr>
                                    <th>Sipariş No</th>
                                    <th>Siparis içeriği</th>
                                    <th>Fiyatı</th>
                                    <th>Verildiği zaman</th>
                                    <th>Siparis Detay</th>

                                </tr>
                                </tfoot>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>2 karışık tost,3 kola</td>
                                    <td>10.50</td>
                                    <td>2011/06/27</td>
                                    <td><a  href="/customer/orders-history/1" class="btn btn-success ">Sipariş Detay</a></td>

                                </tr>

                                <tr>
                                    <td>1</td>
                                    <td>2 karışık tost,3 kola</td>
                                    <td>10.50</td>
                                    <td>2011/06/27</td>
                                    <td><a  href="/customer/orders-history/1" class="btn btn-success ">Sipariş Detay</a></td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>2 tavuk tost,3 kola</td>
                                    <td>10.50</td>
                                    <td>2011/06/27</td>
                                    <td><a  href="/customer/orders-history/1" class="btn btn-success ">Sipariş Detay</a></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@endif