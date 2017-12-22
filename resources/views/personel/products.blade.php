@if(@isset($id))
    <p>Bura urun {{$id}}</p>

    <a href="/personel/products">Go Back</a>
    @else
    <a href="/personel/products/3">3</a>
    <br>
    <a href="/personel/products/4">4</a>
    <br>
    <a href="/personel/products/5">5</a>
    <br>

@endif
