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
                        <button class="btn btn-primary" data-toggle="modal" data-target="#taxDialog">View Tax</button>
                    </td>
                    <td>{{ $item['total'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<div class="modal fade" id="taxDialog" tabindex="-1" role="dialog" aria-labelledby="taxDialogTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
    </div>
    
    <!-- Add Bootstrap JS and jQuery scripts at the end of the body for better performance -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-pzjw8f+ua6L5h2G0nuR5FroqDO6F7fvtLLqfF5ECxOJ3S4c2ck0bKbr9E3A/Pmyk" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

