<form action="{{ route('orders.store') }}" method="post">
    @csrf
    <div class="mb-4">
        <label for="orderNo">Order Number</label>
        <input type="text" name="orderNo" id="orderNo" class="border rounded w-full">
    </div>
    <div class="mb-4">
        <label for="orderDate">Order Date</label>
        <input type="date" name="orderDate" id="orderDate" class="border rounded">
    </div>
    <div class="mb-4">
        <button type="submit" class="bg-blue-500 text-white rounded py-2 px-4">Save</button>
    </div>
</form>

