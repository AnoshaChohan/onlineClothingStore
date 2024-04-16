@include('header')

<!-- resources/views/profile.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #e2e8f0;
            color: #1a202c;
            text-align: left;
            margin-top: 20px;
        }

        .main-body {
            padding: 15px;
        }

        .card {
            box-shadow: 0 1px 3px 0 rgba(0,0,0,.1), 0 1px 2px 0 rgba(0,0,0,.06);
        }

        .card-body {
            padding: 1rem;
        }

        .gutters-sm {
            margin-right: -8px;
            margin-left: -8px;
        }

        .mb-3,
        .my-3 {
            margin-bottom: 1rem!important;
        }

        .bg-gray-300 {
            background-color: #e2e8f0;
        }

        .h-100 {
            height: 100%!important;
        }

        .shadow-none {
            box-shadow: none!important;
        }
        .orders-table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
}

.orders-table th,
.orders-table td {
    border: 1px solid #dee2e6;
    padding: 8px;
    text-align: center;
}

.orders-table th {
    background-color: #f8f9fa;
}

.orders-table tbody tr:nth-child(even) {
    background-color: #f2f2f2;
}

.orders-table tbody tr:hover {
    background-color: #e2e8f0;
}

.orders-table img {
    max-width: 100px;
    max-height: 100px;
}
h6{
    padding-left:12px;
    font-weight: bold;
}

    </style>
</head>
<body>

<div class="container main-body">
    <!-- Breadcrumb -->
    <nav aria-label="breadcrumb" class="main-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"> <a href="{{ url('/welcome') }}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">User Profile</li>
        </ol>
    </nav>
    <!-- /Breadcrumb -->

    <div class="row gutters-sm">
        <div class="col-md-4 mb-3">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex flex-column align-items-center text-center">
                        <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150">
                        <div class="mt-3">
                            <h4>{{ $user->name }}</h4>
                            <p class="text-secondary mb-1"><b>User ID:</b> {{ $user->id }}</p>
                            <p class="text-muted font-size-sm">{{ $user->email }}</p>
                            <p class="text-muted font-size-sm"><b>Joined Date: </b>{{ $user->created_at->format('F j, Y') }}</p>
                            @auth('user')
    @if(Auth::guard('user')->id() == 3)
        <a href="{{ route('admin') }}" style="font-weight: bold; color: black;">Manage Desk</a>
    @endif
@endauth

                        </div>
                    </div>
                </div>
            </div>
            <div class="card mt-3">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <a href="{{ route('logout') }}" style="font-weight: bold; color: black;">Sign Out</a>
                    </li>
                    <!-- Other list items -->
                </ul>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card mb-3">
                <div class="card-body">
                    <!-- Profile details -->
                    <div class="row">
                    <h6> MY ORDERS</h6>
                    </div>
                    <table class="table orders-table">
        <thead> 
            <tr>
                <th>Image</th>
                <th>Order ID</th>
                <th>Product ID</th>
                <th>Quantity</th>
                <th>Size</th>
                <th>Order Date</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($orderItems as $order)
            <tr>
                <td>
                    <img src="{{ asset('images/products/' . $order->product_id . '.jpg') }}" alt="{{ $order->product->name }}">
                </td>
                <td>{{ $order->order_id }}</td>
                <td>{{ $order->product_id }}</td>
                <td>{{ $order->quantity }}</td>
                <td>{{ $order->size }}</td>
                <td>{{ $order->created_at->format('F j, Y') }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

                    <!-- Other profile details -->
                </div>
            </div>
            <!-- Other cards and content -->
        </div>
    </div>
</div>

</body>
</html>

@include('footer')
