<!-- resources/views/livewire/grid-view.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <!-- Add Bootstrap CSS link -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div>
      <!-- resources/views/livewire/grid-view.blade.php -->
<div>
    <table class="table table-striped" border="1">
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
                        <select name="itemName" class="form-control">
                            @foreach ($dropdownValues as $dropdown)
                                @if ($item['droupDownId'] == $dropdown->droupDownId)
                                    <option value="{{ $dropdown->droupDownId }}" selected>{{ $dropdown->name }}</option>
                                @else
                                    <option value="{{ $dropdown->droupDownId }}">{{ $dropdown->name }}</option>
                                @endif
                            @endforeach
                        </select>
                    </td>
                    <td>{{ $item['itemQty'] }}</td>
                    <td>{{ $item['itemRate'] }}</td>
                    <td>
                        <button class="btn btn-primary" wire:click="openPopup({{ $item->itemId }})">View Tax</button>
                    </td>
                    <td>{{ $item['total'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

    @foreach ($items as $item)
    @php
        $taxId = item->taxId;     
    @endphp
    <!-- Include the tax-popup component outside the loop -->
    <livewire:tax-popup :taxId="$taxId" />
    @endforeach

    </div>
    
    <!-- Add Bootstrap JS and jQuery scripts at the end of the body for better performance -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-pzjw8f+ua6L5h2G0nuR5FroqDO6F7fvtLLqfF5ECxOJ3S4c2ck0bKbr9E3A/Pmyk" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

