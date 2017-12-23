@extends('layouts.customer-home')


@section('content')


<div id="customer-order">
    <div class="container">
        <div class="row">
            <div id="left-bar" class=" col-md-3"style="background-color:  aliceblue;margin-top: 76px;font-size: 25px;">
                <nav class="col-sm-3 col-md-2 d-none d-sm-block bg-light sidebar">
                    <ul class="nav nav-pills flex-column">

                        <li class="nav-item">
                            <a class="nav-link" href="/customer/orders">Menü</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/customer/orders-history">Verilen Siparişler</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/customer/profile">Profil</a>
                        </li>
                    </ul>


                </nav>
            </div>
            <div class="col-md-9">
                <h1 id="customer-order-title">MENÜ</h1>
                <div id="customer-order">
                    <div class="row" style="padding: 4px;">
                        <div class="col-md-3 col-sm-3 col-xs-12 image-main-section">
                            <div class="row img-part">
                                <div class="col-md-12 col-sm-12 colxs-12 img-section">
                                    <img src="https://igx.4sqi.net/img/general/200x200/151698261__TpCCoh9T3_8pdrOqxlkOzdbl5JwLHeFLFLeLGQyn2M.jpg">
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12 image-title">
                                    <h3>Ürün İsmi</h3>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12 image-description">
                                    <p>Fiyatı: 3.50</p>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <input id="Order-amount" type="number" value="8880">
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <input id="Order-amount" class="btn btn-success add-cart-btn" type="submit" onclick="myFunction()"  value=" ÜRÜNÜ EKLE   ">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-12 image-main-section">
                            <div class="row img-part">
                                <div class="col-md-12 col-sm-12 colxs-12 img-section">
                                    <img src="https://igx.4sqi.net/img/general/200x200/151698261__TpCCoh9T3_8pdrOqxlkOzdbl5JwLHeFLFLeLGQyn2M.jpg">
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12 image-title">
                                    <h3>Ürün İsmi</h3>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12 image-description">
                                    <p>Fiyatı: 3.50</p>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <input id="Order-amount" type="number" value="8880">
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <input id="Order-amount" class="btn btn-success add-cart-btn" type="submit" onclick="myFunction()"  value=" ÜRÜNÜ EKLE   ">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-12 image-main-section">
                            <div class="row img-part">
                                <div class="col-md-12 col-sm-12 colxs-12 img-section">
                                    <img src="https://igx.4sqi.net/img/general/200x200/151698261__TpCCoh9T3_8pdrOqxlkOzdbl5JwLHeFLFLeLGQyn2M.jpg">
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12 image-title">
                                    <h3>Ürün İsmi</h3>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12 image-description">
                                    <p>Fiyatı: 3.50</p>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <input id="Order-amount" type="number" value="8880">
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <input id="Order-amount" class="btn btn-success add-cart-btn" type="submit" onclick="myFunction()"  value=" ÜRÜNÜ EKLE   ">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-12 image-main-section">
                            <div class="row img-part">
                                <div class="col-md-12 col-sm-12 colxs-12 img-section">
                                    <img src="https://igx.4sqi.net/img/general/200x200/151698261__TpCCoh9T3_8pdrOqxlkOzdbl5JwLHeFLFLeLGQyn2M.jpg">
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12 image-title">
                                    <h3>Ürün İsmi</h3>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12 image-description">
                                    <p>Fiyatı: 3.50</p>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <input id="Order-amount" type="number" value="8880">
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <input id="Order-amount" class="btn btn-success add-cart-btn" type="submit" onclick="myFunction()"  value=" ÜRÜNÜ EKLE   ">
                                </div>
                            </div>
                        </div>
                    <div class="row">
                        <div class="col-md-3 col-sm-3 col-xs-12 image-main-section">
                            <div class="row img-part">
                                <div class="col-md-12 col-sm-12 colxs-12 img-section">
                                    <img src="https://igx.4sqi.net/img/general/200x200/151698261__TpCCoh9T3_8pdrOqxlkOzdbl5JwLHeFLFLeLGQyn2M.jpg">
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12 image-title">
                                    <h3>Ürün İsmi</h3>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12 image-description">
                                    <p>Fiyatı: 3.50</p>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <input id="Order-amount" type="number" value="8880">
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <input id="Order-amount" class="btn btn-success add-cart-btn" type="submit" onclick="myFunction()"  value=" ÜRÜNÜ EKLE   ">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-12 image-main-section">
                            <div class="row img-part">
                                <div class="col-md-12 col-sm-12 colxs-12 img-section">
                                    <img src="https://igx.4sqi.net/img/general/200x200/151698261__TpCCoh9T3_8pdrOqxlkOzdbl5JwLHeFLFLeLGQyn2M.jpg">
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12 image-title">
                                    <h3>Ürün İsmi</h3>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12 image-description">
                                    <p>Fiyatı: 3.50</p>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <input id="Order-amount" type="number" value="8880">
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <input id="Order-amount" class="btn btn-success add-cart-btn" type="submit" onclick="myFunction()"  value=" ÜRÜNÜ EKLE   ">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-12 image-main-section">
                            <div class="row img-part">
                                <div class="col-md-12 col-sm-12 colxs-12 img-section">
                                    <img src="https://igx.4sqi.net/img/general/200x200/151698261__TpCCoh9T3_8pdrOqxlkOzdbl5JwLHeFLFLeLGQyn2M.jpg">
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12 image-title">
                                    <h3>Ürün İsmi</h3>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12 image-description">
                                    <p>Fiyatı: 3.50</p>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <input id="Order-amount" type="number" value="8880">
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <input id="Order-amount" class="btn btn-success add-cart-btn" type="submit" onclick="myFunction()"  value=" ÜRÜNÜ EKLE   ">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-12 image-main-section">
                            <div class="row img-part">
                                <div class="col-md-12 col-sm-12 colxs-12 img-section">
                                    <img src="https://igx.4sqi.net/img/general/200x200/151698261__TpCCoh9T3_8pdrOqxlkOzdbl5JwLHeFLFLeLGQyn2M.jpg">
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12 image-title">
                                    <h3>Ürün İsmi</h3>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12 image-description">
                                    <p>Fiyatı: 3.50</p>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <input id="Order-amount" type="number" value="8880">
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <input id="Order-amount" class="btn btn-success add-cart-btn" type="submit" onclick="myFunction()"  value=" ÜRÜNÜ EKLE   ">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <input id="siparis-onay" class="btn btn-primary pull-right" type="submit"value=" SİPARİSi VER">
        </div>
        <br><br>
</div>
</div>
    <br><br>
<script>
    function myFunction() {
        alert("Seçtiğiniz Ürün Siparişe Eklendi");
    }
</script>
@endsection