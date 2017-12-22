@if(@isset($id))
    <p>Bura urun {{$id}}</p>
    <form class="" action="/personel/orders/{{$id}}" method="post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="submit" name="" value="gonder">
    </form>
    <a href="/personel/orders">Go Back</a>
    @else
    <a href="/personel/orders/3">3</a>
    <br>
    <a href="/personel/orders/4">4</a>
    <br>
    <a href="/personel/orders/5">5</a>
    <br>

@endif
