@extends('layouts.panel')

@section('content')
    <div id="statistic">
        <div class="col-xs-12">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link active" href="#">Haftalık/Günlük Ciro</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/statistics">Ürünler istatistik</a>
                </li>

            </ul>
        </div>

        <table id="example" class="table table-striped table-bordered nowrap" cellspacing="0" width="100%">
            <thead>
            <tr>
                <th>Haftanın Günleri</th>
                <th>Ciro</th>
                <th>Durum</th>
                <th>Masa</th>

            </thead>
            <tfoot>
            <tr>
                <th>Haftanın Günleri</th>
                <th>Ciro</th>
                <th>Durum</th>
                <th>Masa</th>
            </tr>
            </tfoot>
            <tbody>
            <tr>
                <td><a href="">Pazartesi</a></td>
                <td>5000</td>
                <td>System Architect</td>
                <td>Edinburgh</td>
            </tr>
            <tr>
                <td><a href="">Salı</a></td>
                <td>3500</td>
                <td>System Architect</td>
                <td>Edinburgh</td>
            </tr>
            <tr>
                <td><a href="">Çarşamba</a></td>
                <td>2500</td>
                <td>System Architect</td>
                <td>Edinburgh</td>

            </tr>
            <tr>
                <td><a href="">Perşembe</a></td>
                <td>6000</td>
                <td>System Architect</td>
                <td>Edinburgh</td>

            </tr>

            </tbody>
        </table>
    </div>

    <script>
        $('#myTab a').click(function (e) {
            e.preventDefault()
            $(this).tab('show')
        })
    </script>
@endsection