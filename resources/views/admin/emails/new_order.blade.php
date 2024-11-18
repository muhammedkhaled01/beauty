<p>A new order has been placed:</p>
<ul>
    <li>User: {{ $order->user->name }}</li>
    <li>Package: {{ $order->package->name }}</li>
    <li>Status: {{ $order->status }}</li>
</ul>
