<!-- resources/views/livewire/grid-view.blade.php -->

<div>
    <table class="table">
        <thead>
            <tr>
                <th>Item Name</th>
                <th>Item Qty</th>
                <th>Item Rate</th>
                <th>Tax</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($items as $item)
                <tr>
                    <td>{{ $item['itemName'] }}</td>
                    <td>{{ $item['itemQty'] }}</td>
                    <td>{{ $item['itemRate'] }}</td>
                    <td>{{ $item['tax'] }}</td>
                    <td>{{ $item['total'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
