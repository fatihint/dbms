   @extends('layouts.panel')
        @if(isset($order))
        @section('content')
        <div class="container" align="right">
            <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="" width="100%" cellspacing="0">
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
                        <th>
                            @php
                                $price = 0;
                                foreach ($order->products as $product) :
                                        $price += $product->pivot->amount * $product->price;
                                endforeach;
                                echo $price;
                            @endphp
                        </th>
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
            <div class="col-xs-12 text-left">
                <form action="/admin/orders/{{$order->id}}" method="POST">
                    {{ csrf_field() }}
                    <input type="hidden" name="status_id" value="{{ $order->status_id }}">
                @switch($order->status_id)
                    @case(2)
                        <p><strong>Durum: </strong>Onay Bekleniyor</p>
                        <input type="submit" class="btn btn-success" value="Onayla">
                        @break
                    @case(3)
                        <p><strong>Durum: </strong>Onaylandı</p>
                        <input type="submit" class="btn btn-success" value="Siparis Ulasti">
                        @break;
                    @case(4)
                        <p><strong>Durum: </strong>Siparis Ulasti</p>
                        <input type="submit" class="btn btn-success" value="Hesap Odendi">
                        @break;
                    @case(5)
                        <p><strong>Durum: </strong>Hesap Odendi</p>
                        @break
                @endswitch
                </form>
            </div>
            <div class="col-xs-12 text-left">
                @if($order->status_id != 4)
                    <form action="/admin/orders/{{$order->id}}" method="POST">
                        {{ csrf_field() }}
                        <input type="hidden" name="status_id" value="{{ $order->status_id }}">
                        @switch($order->status_id)
                            @case(1)
                            <input type="submit" class="btn btn-success" value="Onayla">
                            @break
                            @case(2)
                            <input type="submit" class="btn btn-success" value="Siparis Ulasti">
                            @break;
                            @case(3)
                            <input type="submit" class="btn btn-success" value="Hesap Odendi">
                            @break;
                        @endswitch

                    </form>
                @endif
            </div>
            @endsection
            @else
            @section('content')
                <div class="col-xs-12">
                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a class="nav-link @if($status == 2) active @endif" href="/admin/orders/status/2">Onay Bekleyenler</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link @if($status == 3) active @endif" href="/admin/orders/status/3">Onaylananlar</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link @if($status == 4) active @endif" href="/admin/orders/status/4">Müşteriye Ulaşanlar</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link @if($status == 5) active @endif" href="/admin/orders/status/5">Kapananlar</a>
                        </li>
                    </ul>
                </div>
                <div class="card-body">
                    @if(session('message'))
                        <div class="alert alert-success" role="alert">
                            {{ session('message') }}
                        </div>
                    @endif
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
                                <td>
                                    @switch($order->status_id)
                                        @case(2)
                                            Onay Bekleniyor
                                            @break
                                        @case(3)
                                            Onaylandı.
                                            @break;
                                        @case(4)
                                            Sipariş Ulaştı
                                            @break;
                                        @case(5)
                                            Hesap Ödendi
                                            @break
                                    @endswitch
                                </td>
                                <td>
                                    @if($order->status_id != 5)
                                    <form action="/admin/orders/{{$order->id}}" method="POST">
                                        {{ csrf_field() }}
                                        <input type="hidden" name="status_id" value="{{ $order->status_id }}">
                                        @switch($order->status_id)
                                            @case(2)
                                            <input type="submit" class="btn btn-success" value="Onayla">
                                            @break
                                            @case(3)
                                            <input type="submit" class="btn btn-success" value="Siparis Ulasti">
                                            @break;
                                            @case(4)
                                            <input type="submit" class="btn btn-success" value="Hesap Odendi">
                                            @break;
                                        @endswitch

                                    </form>
                                    @endif
                                    <a href="/admin/orders/{{$order->id}}" class="btn btn-info">Detay</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
@endsection


   @endif