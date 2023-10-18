
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <form action="{{ route('orders.store') }}" method="post">
                @csrf
                <!-- Your order information -->
                <div class="form-group">
                    <label for="orderNo">Order Number</label>
                    <input type="text" name="orderNo" id="orderNo" class="form-control" value="{{ $order->orderNo ?? '' }}">
                </div>
                <div class="form-group">
                    <label for="orderDate">Order Date</label>
                    <input type="date" name="orderDate" id="orderDate" class="form-control" value="{{ $order->orderDate ?? '' }}">
                </div>

               <!-- Include the Livewire component in your Blade view -->
                <livewire:grid-view :orderId="$orderId"/>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
