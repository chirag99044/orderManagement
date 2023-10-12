<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
 crossorigin="anonymous"
></script>
<script
src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"
integrity="sha384-pzjw8f+ua6L5h2G0nuR5FroqDO6F7fvtLLqfF5ECxOJ3S4c2ck0bKbr9E3A/Pmyk"
crossorigin="anonymous"
></script>
<script
src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
></script>

</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <form action="{{ route('orders.store') }}" method="post">
                    @csrf
                    <!-- Your order information -->
                    <div class="form-group">
                        <label for="orderNo">Order Number</label>
                        <input type="text" name="orderNo" id="orderNo" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="orderDate">Order Date</label>
                        <input type="date" name="orderDate" id="orderDate" class="form-control">
                    </div>

                    <!-- Grid for displaying items -->
                    <div class="form-group">
                        <h2 class="row justify-content-center">Items</h2>
                        <div class="row">
                            <div class="col">
                              <input type="text" class="form-control" placeholder="First name" aria-label="First name">
                            </div>
                            <div class="col">
                              <input type="text" class="form-control" placeholder="Last name" aria-label="Last name">
                            </div>
                          </div>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>   
</body>
</html>

