   @extends('layouts.panel')
        @if(isset($order))
        @section('content')
        <div class="container" align="right">
            <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Ürün</th>
                        <th>Fiyatı</th>
                        <th>Adet</th>
                        <th>Tutar</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>Toplam</th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                    </tfoot>
                    <tbody>
                        @foreach($order->products as $product)
                            <tr>
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->price }}</td>
                                <td>{{ $product->pivot->amount }}</td>
                                <td>{{ $product->pivot->amount * $product->price }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            </div>
                @endsection
                @else
            @section('content')
                <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>Masa No</th>
                            <th>Siparis içeriği</th>
                            <th>Fiyatı</th>id
                            <th>Verildiği Tarih</th>
                            <th>Durum</th>
                            <th>İşlem</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>Masa No</th>
                            <th>Sipariş içeriği</th>
                            <th>Fiyatı</th>
                            <th>Verildiği Tarih</th>
                            <th>Durum</th>
                            <th>İşlem</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        @foreach($orders as $order)
                            <tr>
                                <td>{{ $order->table_id }}</td>
                                <td>
                                    @foreach($order->products as $product)
                                        {{ $product->name . " - " . $product->pivot->amount}}
                                        <br>
                                    @endforeach
                                </td>
                                <td>{{ $order->price . " TL" }}</td>
                                <td>{{ $order->created_at }}</td>
                                <td>{{ $order->status_id }}</td>
                                <td>
                                    <a href="/admin/orders/{{$order->id}}" class="btn btn-info btn-lg">Detay</a>
                                    <input type="submit" class="btn btn-success btn-lg" value="Onayla">
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
@endsection


   @endif