<!--PAYMENT PANEL-->
<div class="card Payment-Side my-2">
  <div class="card-header">
      <span class="far fa-money-bill-alt" aria-hidden="true"></span>
      <span>Payment</span>
  </div>

  <div class="card-body">
    <div class="row">
      <div class="col text-center">
        <?php
        if(isset($_SESSION['user_id']))
        {
          $grand_total = 0;
          if(isset($cart)){
            for ($index = 0; $index < count($cart['cart']['cart_item']); $index++)
            {
              $qty = $cart['cart']['cart_item'][$index]['cart_item_quantity'];
              $price = $cart['cart']['cart_item'][$index]['cart_item_price'];
              $total = $qty * $price;
              $grand_total = $grand_total + $total;
            }
          }
        }
        ?>
        <p><b>Sub Total : </b>$<?php echo isset($grand_total) ? $grand_total : null ?></p>
        <p><b>Total : </b>$<?php echo isset($grand_total) ? $grand_total : null ?></p>
      </div>
    </div>

  </div>
  <div class="card-footer">
    <div class="row">
      <div class="col-12 col-sm-12 col-md-12 text-center text-sm-center text-md-center">
        <a href="<?php echo base_url();?>checkout" class="btn btn-success pull-right">Checkout</a>
      </div>
    </div>
  </div>
</div>
<!--PAYMENT PANEL END-->
