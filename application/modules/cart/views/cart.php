<div class="container-fluid my-4">
  <div class="row">
      <!-- LEFT SIDE -->
      <div class="col-12 col-sm-12 col-md-12 col-lg-10 my-2">
        <div class="card cart-side">
          <!-- CARD HEADER -->
          <div class="card-header">
            <div class="row">
              <div class="col-12 col-sm-12 col-md-4 text-center text-sm-center text-md-left">
                <span class="fa fa-shopping-cart" aria-hidden="true"></span>
                <span>Shopping Cart</span>
              </div>
              <?php
              if(isset($_SESSION['user_id'])){
                ?>
                <div class="col-12 col-sm-12 col-md-8 text-center text-sm-center text-md-right ">
                  <a href="product" class="p-0">Continue Shopping</a>
 								</div>
 								<?php
              }
              ?>
            </div>
          </div>
          <!-- CARD HEADER -->
          <!-- CARD BODY -->
          <div class="card-body">
            <?php
            if(isset($_SESSION['user_id']))
            {
              if(isset($item_view)){
                echo $item_view;
              } else {
                echo $empty_cart;
              }
            } else {
              if(isset($not_logged)){
                echo $not_logged;
              }
            }
            ?>
          </div>
          <!-- CARD BODY -->
          <!-- CARD END -->
          <?php
          if(isset($_SESSION['user_id'])){
            if(isset($cart_delete_all_view)){
              echo $cart_delete_all_view;
            }
          }
          ?>
          <!-- CARD END -->
        </div>
      </div>
      <!-- LEFT SIDE -->
      <!-- RIGHT SIDE -->
      <div class="col-12 col-sm-12 col-md-12 col-lg-2">
        <div class="row">
          <div class="col-12 col-sm-6 col-md-6 col-lg-12">
            <?php
            if(isset($payment_view)){
              echo $payment_view;
            }
            ?>
          </div>
          <div class="col-12 col-sm-6 col-md-6 col-lg-12">
            <?php
            if(isset($shipping_view)){
              echo $shipping_view;
            }
            ?>
  				</div>
  			</div>
  		</div>
        <!-- RIGHT SIDE -->
  </div>
</div>
<script>

var url_update = "<?php echo base_url()?>cart/updateCartItem/";
var url_delete = "<?php echo base_url()?>cart/deleteCartItem/";

</script>
<script src="<?php echo base_url();?>js/custom/notify_script.js"></script>
<script src="<?php echo base_url();?>js/custom/cart_item_qty_update_script.js"></script>
<script src="<?php echo base_url();?>js/custom/cart_item_delete_script.js"></script>
