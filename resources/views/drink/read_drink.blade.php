@include('inc.header')
<div class="container">
    <legend>Read Drink</legend>
    <div class="row">
        <p class="lead">Drink name : {{$drink->drink_name}}</p>
    </div>
    <div class="row">
        <p>Price : {{$drink->drink_price}}$</p>
    </div>
    <div class="row">
        <p>Description : {{$drink->description}}</p>
    </div>
</div>
@include('inc.footer')
