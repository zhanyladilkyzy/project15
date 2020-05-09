<div class="container">

<p>Orders list</p>
@foreach ($orders as $order)
<ol>
  <li>
    <ul>
  <p>Title</p>
  <li>{{ $order->title }}</li>
  <p>Category</p>
  <li>{{ $order->category }}</li>
  <p>Description</p>
  <li>{{ $order->description }}</li>
  <p>Cost</p><li>{{ $order->cost }}</li>
  <p>Phone Number</p>
  <li>{{ $order->mobile }}</li>
  </ul>
  </li>
</ol><br>
@endforeach

</div>
