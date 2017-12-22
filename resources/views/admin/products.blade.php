@extends('layouts.panel')
@if($id)
    <p>Bura urun {{$id}} </p>


    @section('content')

    <div id="product-detail">
        <div class="col-md-4 column productbox">
            <img src="http://placehold.it/460x250/e67e22/ffffff&text=HTML5" class="img-responsive">
            <div class="producttitle">{{$id}}</div>
            <div class="productprice"><div class="pull-right"></div>
                <input class="form-control " type="text" placeholder="Ürün İsmi" >
                <br>
                <input class="form-control " type="text" placeholder="Fiyat" > <br><a href="#" class="btn btn-danger btn-sm" role="button">Değiştir</a>

            </div>

        </div>
        @endsection
    <a href="/admin/products">Go Back</a>
    @else

        @section('content')
            <div class="pull-right top-page-ui">
                <a href="new-product" class="btn btn-primary pull-right">
                    <i class="fa fa-plus-circle fa-lg"></i> Yeni Ürün Ekle
                </a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Ürün İsmi</th>
                            <th>Fiyat</th>
                            <th>Eklenme Tarihi</th>
                            <th>Ürün Detayı</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Ürün İsmi</th>
                            <th>Fiyat</th>
                            <th>Eklenme Tarihi</th>
                            <th>Ürün Detayı</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        <tr>
                            <td>Tiger Nixon</td>
                            <td>System Architect</td>
                            <td>Edinburgh</td>
                            <td>61</td>
                            <td><a  href="products/1" class="btn btn-success ">Detay</a></td>
                        </tr>
                        <tr>
                            <td>Garrett Winters</td>
                            <td>Accountant</td>
                            <td>Tokyo</td>
                            <td>63</td>
                            <td>63</td>

                        </tr>
                        <tr>
                            <td>Ashton Cox</td>
                            <td>Junior Technical Author</td>
                            <td>San Francisco</td>
                            <td>66</td>

                        </tr>
                        <tr>
                            <td>Cedric Kelly</td>
                            <td>Senior Javascript Developer</td>
                            <td>Edinburgh</td>
                            <td>22</td>

                        </tr>
                        <tr>
                            <td>Airi Satou</td>
                            <td>Accountant</td>
                            <td>Tokyo</td>
                            <td>33</td>

                        </tr>
                        <tr>
                            <td>Brielle Williamson</td>
                            <td>Integration Specialist</td>
                            <td>New York</td>
                            <td>61</td>

                        </tr>
                        <tr>
                            <td>Herrod Chandler</td>
                            <td>Sales Assistant</td>
                            <td>San Francisco</td>
                            <td>59</td>

                        </tr>
                        <tr>
                            <td>Rhona Davidson</td>
                            <td>Integration Specialist</td>
                            <td>Tokyo</td>
                            <td>55</td>

                        </tr>
                        <tr>
                            <td>Colleen Hurst</td>
                            <td>Javascript Developer</td>
                            <td>San Francisco</td>
                            <td>39</td>

                        </tr>
                        <tr>
                            <td>Sonya Frost</td>
                            <td>Software Engineer</td>
                            <td>Edinburgh</td>
                            <td>23</td>

                        </tr>

                        <tr>
                            <td>Jonas Alexander</td>
                            <td>Developer</td>
                            <td>San Francisco</td>
                            <td>30</td>

                        </tr>
                        <tr>
                            <td>Shad Decker</td>
                            <td>Regional Director</td>
                            <td>Edinburgh</td>
                            <td>51</td>

                        </tr>
                        <tr>
                            <td>Michael Bruce</td>
                            <td>Javascript Developer</td>
                            <td>Singapore</td>
                            <td>29</td>

                        </tr>
                        <tr>
                            <td>eren Snider</td>
                            <td>Customer Support</td>
                            <td>New York</td>
                            <td>27</td>

                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
    </div>


    @endsection


@endif

