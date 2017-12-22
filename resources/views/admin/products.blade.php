@if(@isset($id))
    <p>Bura urun {{$id}}</p>
    <a href="/admin/products">Go Back</a>
    @else
    <a href="/admin/products/3">3</a>
    <br>
    <a href="/admin/products/4">4</a>
    <br>
    <a href="/admin/products/5">5</a>
    <br>

@endif
