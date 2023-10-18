<!-- resources/views/livewire/grid-view.blade.php -->

<div>
    <table class="table" border="1">
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
                    <td>
                        <select name="itemName">
                            @foreach ($dropdownValues as $dropdown)
                                @if ($item->dropDownId == $dropdown->droupDownId)
                                    <option value="{{ $dropdown->droupDownId }}" selected>{{ $dropdown->name }}</option>
                                @else
                                    <option value="{{ $dropdown->droupDownId }}">{{ $dropdown->name }}</option>
                                @endif
                            @endforeach
                        </select>
                    </td>
                    <td>{{ $item['itemQty'] }}</td>
                    <td>{{ $item['itemRate'] }}</td>
                    <td>{{ $item['tax'] }}</td>
                    <td>{{ $item['total'] }}</td>
                </tr>
            @endforeach
        </tbody> 
    </table>
</div>
