<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Order List</title>

    <!-- Add Bootstrap CSS link -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
        <div class="container mt-5">
            <h1 class="mb-4">Order List</h1>
                @php    
                    $rowNumber = 1;
                @endphp
                @foreach ($orders as $order)
                    <ul class="list-group-item d-flex justify-content-between align-items-center">
                        <span class="badge badge-primary badge-pill">{{ $rowNumber++ }}</span>
                        <a href="{{ route('orders.show', $order->orderId) }}">{{ nl2br($order->orderNo) }}</a>
                        <span class="badge badge-primary badge-pill">View Details</span>
                    </ul>
                @endforeach
            
        </div>

    <!-- Add Bootstrap JS and jQuery scripts at the end of the body for better performance -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-pzjw8f+ua6L5h2G0nuR5FroqDO6F7fvtLLqfF5ECxOJ3S4c2ck0bKbr9E3A/Pmyk" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
