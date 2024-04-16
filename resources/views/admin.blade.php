<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Popper.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <style>
        .container {
            margin-top: 50px;
        }
        .card {
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        .btn {
            padding: 6px 12px;
            text-decoration: none;
            background-color: #4CAF50;
            color: white;
            border-radius: 4px;
        }
        .btn-edit {
            background-color: #008CBA;
        }
        .btn-delete {
            background-color: #f44336;
        }
    </style>
</head>
<body>
<div class="container">
        <!-- User Management -->
        <div class="card">
            <div class="card-header">
                <h2>User Management</h2>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editUserModal">Edit User</button>                    
                                <a href="{{ route('admin.deleteUser', ['id' => $user->id]) }}" class="btn btn-primary btn-delete">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <!-- Product Management -->
        <div class="card">
            <div class="card-header">
                <h2>Product Management</h2>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Category</th>
                            <th>Price</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($products as $product)
                        <tr>
                            <td>{{ $product->id }}</td>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->description }}</td>
                            <td>{{ $product->category }}</td>
                            <td>{{ $product->price }}</td>
                            <td>
                                <button type="button" class="btn btn-primary editProductBtn" data-toggle="modal" data-target="#editProductModal" 
                                        data-id="{{ $product->id }}" data-name="{{ $product->name }}" data-description="{{ $product->description }}"
                                        data-category="{{ $product->category }}" data-price="{{ $product->price }}">
                                    Edit
                                </button>
                                <a href="{{ route('admin.deleteProduct', ['id' => $product->id]) }}" class="btn btn-primary btn-delete">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <!-- Order Item Management -->
        <div class="card">
            <div class="card-header">
                <h2>Order Item Management</h2>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Order ID</th>
                            <th>Product ID</th>
                            <th>Quantity</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($orderItems as $orderItem)
                        <tr>
                            <td>{{ $orderItem->id }}</td>
                            <td>{{ $orderItem->order_id }}</td>
                            <td>{{ $orderItem->product_id }}</td>
                            <td>{{ $orderItem->quantity }}</td>
                            <td>
                                <button type="button" class="btn btn-primary editOrderItemBtn" data-toggle="modal" data-target="#editOrderItemModal" 
                                        data-id="{{ $orderItem->id }}" data-quantity="{{ $orderItem->quantity }}">
                                    Edit
                                </button>
                                <a href="{{ route('admin.deleteOrderItem', ['id' => $orderItem->id]) }}" class="btn btn-primary btn-delete">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>



<!-- Modal -->
<div class="modal fade" id="editUserModal" tabindex="-1" role="dialog" aria-labelledby="editUserModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editUserModalLabel">Edit User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Edit User Form -->
                <form id="editUserForm" action="{{ route('admin.updateUser', ['id' => $user->id]) }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}">
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}">
                    </div>
                    <!-- Add other fields for updating user information -->
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Product Management -->
<!-- <h2>Product Management</h2>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Description</th>
            <th>Category</th>
            <th>Price</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($products as $product)
        <tr>
            <td>{{ $product->id }}</td>
            <td>{{ $product->name }}</td>
            <td>{{ $product->description }}</td>
            <td>{{ $product->category }}</td>
            <td>{{ $product->price }}</td>
            <td>
                <button type="button" class="btn btn-primary editProductBtn" data-toggle="modal" data-target="#editProductModal" 
                        data-id="{{ $product->id }}" data-name="{{ $product->name }}" data-description="{{ $product->description }}"
                        data-category="{{ $product->category }}" data-price="{{ $product->price }}">
                    Edit
                </button>
                <a href="{{ route('admin.deleteProduct', ['id' => $product->id]) }}" class="btn btn-primary btn-delete">Delete</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table> -->

<!-- Product Edit Modal -->
<div class="modal fade" id="editProductModal" tabindex="-1" role="dialog" aria-labelledby="editProductModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editProductModalLabel">Edit Product</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Edit Product Form -->
                <form id="editProductForm" action="{{ route('admin.updateProduct', ['id' => $product->id]) }}" method="POST">
                    @csrf
                    <input type="hidden" name="productId" id="productId">
                    <div class="form-group">
                        <label for="productName">Name:</label>
                        <input type="text" class="form-control" id="productName" name="productName">
                    </div>
                    <div class="form-group">
                        <label for="productDescription">Description:</label>
                        <textarea class="form-control" id="productDescription" name="productDescription"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="productCategory">Category:</label>
                        <input type="text" class="form-control" id="productCategory" name="productCategory">
                    </div>
                    <div class="form-group">
                        <label for="productPrice">Price:</label>
                        <input type="text" class="form-control" id="productPrice" name="productPrice">
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Order Item Management -->
<!-- <h2>Order Item Management</h2>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Order ID</th>
            <th>Product ID</th>
            <th>Quantity</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($orderItems as $orderItem)
        <tr>
            <td>{{ $orderItem->id }}</td>
            <td>{{ $orderItem->order_id }}</td>
            <td>{{ $orderItem->product_id }}</td>
            <td>{{ $orderItem->quantity }}</td>
            <td>
                <button type="button" class="btn btn-primary editOrderItemBtn" data-toggle="modal" data-target="#editOrderItemModal" 
                        data-id="{{ $orderItem->id }}" data-quantity="{{ $orderItem->quantity }}">
                    Edit
                </button>
                <a href="{{ route('admin.deleteOrderItem', ['id' => $orderItem->id]) }}" class="btn btn-primary btn-delete">Delete</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table> -->

<!-- Order Item Edit Modal -->
<div class="modal fade" id="editOrderItemModal" tabindex="-1" role="dialog" aria-labelledby="editOrderItemModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editOrderItemModalLabel">Edit Order Item</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Edit Order Item Form -->
                <form id="editOrderItemForm" action="{{ route('admin.updateOrderItem', ['id' => $orderItem->id]) }}" method="POST">
                    @csrf
                    <input type="hidden" name="orderItemId" id="orderItemId">
                    <div class="form-group">
                        <label for="quantity">Quantity:</label>
                        <input type="text" class="form-control" id="quantity" name="quantity">
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- JavaScript to populate form fields -->
<script>
    // Edit Product Modal
    $('.editProductBtn').on('click', function () {
        var productId = $(this).data('id');
        var name = $(this).data('name');
        var description = $(this).data('description');
        var category = $(this).data('category');
        var price = $(this).data('price');

        $('#editProductModal #productId').val(productId);
        $('#editProductModal #productName').val(name);
        $('#editProductModal #productDescription').val(description);
        $('#editProductModal #productCategory').val(category);
        $('#editProductModal #productPrice').val(price);
    });

    // Edit Order Item Modal
    $('.editOrderItemBtn').on('click', function () {
        var orderItemId = $(this).data('id');
        var quantity = $(this).data('quantity');

        $('#editOrderItemModal #orderItemId').val(orderItemId);
        $('#editOrderItemModal #quantity').val(quantity);
    });
</script>


<!-- Bootstrap JS -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<!-- JavaScript to populate form fields -->
<script>
    // Edit User Modal
    $('#editUserModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget); // Button that triggered the modal
        var name = button.data('name'); // Extract info from data-* attributes
        var email = button.data('email');
        var modal = $(this);
        modal.find('.modal-body #name').val(name); // Populate form fields
        modal.find('.modal-body #email').val(email);
    });

    
</script>

