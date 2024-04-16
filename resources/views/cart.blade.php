@include('header')


<section id="page-header" class="about-header">
    <h2>#let's_talk</h2>
    <p>LEAVE A MESSAGE. We love to hear from you!</p>
</section>



<section id="cart" class="section-p1">
        <table width="100%">
            <thead>
                <tr>
                    
                    <td>Remove</td>
                    <td>Image</td>
                    <td>Product</td>
                    <td>Size</td>
                    <td>Price</td>
                    <td>Quantity</td>
                    <td>Subtotal</td>
                    
                </tr>
            </thead>
            <tbody>
             

   @forelse($cartItems as $cartItem)
    <tr>
        <td><a href="#" onclick="event.preventDefault(); document.getElementById('delete-cart-item-{{ $cartItem->id }}').submit();">
                        <i class="far fa-times-circle" style="color: red;"></i>
                    </a>
                    <!-- Hidden form for deleting the cart item -->
                    <form id="delete-cart-item-{{ $cartItem->id }}" action="{{ route('cart.delete', $cartItem->id) }}" method="POST" style="display: none;">
                        @csrf
                        @method('DELETE')
                    </form></td>
        <td>
            <img src="{{ asset('images/products/' . $cartItem->product->id . '.jpg') }}" alt="{{ $cartItem->product->name }}">
        </td>
        <td>{{ $cartItem->product->name }}</td>
        <td>{{ $cartItem->size }}</td>
        <td>${{ $cartItem->product->price }}</td>
        <td>{{ $cartItem->quantity }}</td>
        <td>${{ $cartItem->product->price * $cartItem->quantity }}</td>
    </tr>
@empty
    <tr>
        <td colspan="7">No products in the cart.</td>
    </tr>
@endforelse

            </tbody>
        </table>
    </section>

 

<section id="cart-add" class="section-p1">
    <!-- <div id="coupon">
        <h3>Apply Coupon</h3>
        <div>
            <input types="text" placeholder="Enter Your Coupon">
            <button class="normal"> Apply</button>
        </div>
    </div> -->

    <div id="subtotal">
    <h3>Cart Totals</h3>
    <table>

    <?php $total = 0; ?>
    <?php $final = 0; ?> <!-- Define $final outside of the loop -->

    @forelse($cartItems as $cartItem)

        <?php
            $subtotal = $cartItem->product->price * $cartItem->quantity;
            $total += $subtotal;
            // Do not set $final here
        ?>

    @empty

        <tr>
            <td colspan="2">No items in the cart</td>
        </tr>

    @endforelse

    @if($cartItems->isNotEmpty()) <!-- Check if cart items are not empty before calculating $final -->
        <?php $final = $total + 15; ?> <!-- Calculate $final if there are items in the cart -->
    @endif

    <tr>
        <td>Cart Subtotal</td>
        <td>$ <?php echo $total; ?></td>
    </tr>
    <tr>
        <td>Shipping</td>
        <td>$15</td>
    </tr>
    <tr>
        <td><strong>Total</strong></td>
        <td><strong>$ <?php echo $final; ?></strong></td>
    </tr>
</table>

<form action="{{ route('checkout') }}" method="GET">
    <button type="submit" class="normal">Proceed to checkout</button>
</form>
</div>




@include('footer')


<link href="{{ asset('components/sxript.js') }}" rel="stylesheet">    <!-- Assuming your CSS file is in public/css/style.css -->


</body>
</html>