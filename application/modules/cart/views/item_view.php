<?php
if(isset($cart)){
for ($i = 0; $i < count($cart['cart']['cart_item']); $i++) {
?>
  <!-- PRODUCT -->
  <div class="row">
    <!-- 1ST SECTION START -->
    <input type="hidden" id="itemid<?php echo $i ?>" value="<?php echo isset($cart['cart']['cart_item']) != null ? $cart['cart']['cart_item'][$i]['cart_item_id'] : null?>">
    <!-- PRODUCT IMAGE -->
    <div class="col-12 col-sm-12 col-md-2 text-center">
      <img class="img-responsive w-100" alt="preview" src="<?php echo isset($cart['cart']['cart_item'][$i]['product_id']) != null ? $cart['cart']['cart_item'][$i]['product_id']['product_image'] : null ?>" >
    </div>
    <!-- PRODUCT IMAGE -->
    <!-- 1ST SECTION END -->

    <!-- 2ND SECTION START -->
    <!-- PRODUCT NAME -->
    <div class="col-12 col-sm-12 col-md-6 text-center text-sm-center text-md-left">
      <h4 class="product-name"><strong><?php echo isset($cart['cart']['cart_item'][$i]['product_id']) != null ? $cart['cart']['cart_item'][$i]['product_id']['product_name'] : null ?></strong></h4>
      <h4>
        <small><?php echo isset($cart['cart']['cart_item'][$i]['product_id']) != null ? $cart['cart']['cart_item'][$i]['product_id']['product_number'] : null?></small>
      </h4>
    </div>
    <!-- PRODUCT NAME -->
    <!-- 2ND SECTION END -->

    <!-- 3RD SECTION START -->
    <div class="col-12 col-sm-12 col-md-4 row">
      <!-- PRICE-->
      <div class="col-12 col-sm-3 col-md-5 text-center text-sm-center text-md-right" style="padding: 10px; margin: 0px;">
        <h6 style="margin: 0px;"><strong>$<?php echo isset($cart['cart']['cart_item']) != null ? $cart['cart']['cart_item'][$i]['cart_item_price'] : null ?><span class="text-muted"> x</span></strong></h6>
      </div>
      <!-- PRICE -->
      <!-- QTY -->
      <div class="col-10 col-sm-8 col-md-5">
        <div class="quantity">
          <input
            type="number"
            class="form-control qty"
            id="qty<?php echo $i ?>"
            placeholder="$0"
            step=1
            min=1
            max= <?php echo isset($cart['cart']['cart_item'][$i]['product_id']) != null ? $cart['cart']['cart_item'][$i]['product_id']['product_qty'] : null ?>
            title="Quantity of the Product"
            value="<?php echo isset($cart['cart']['cart_item']) != null ? $cart['cart']['cart_item'][$i]['cart_item_quantity'] : null?>"
          >
        </div>
      </div>
      <!-- QTY -->
      <!-- BUTTONS -->
      <div class="col-2 col-sm-1 col-md-2 text-center text-sm-center">
        <!-- SAVE -->
        <button type="button" class="btn btn-success my-1" id="btnsave<?php echo $i ?>">
          <i class="fa fa-save" aria-hidden="true"></i>
        </button>
        <script>
          $(document).on('click', '#btnsave<?php echo $i ?>', function() {
            var maxqty = <?php echo $cart['cart']['cart_item'][$i]['product_id']['product_qty']?>;
            var currentCartItemId = $('#itemid<?php echo $i ?>').val();
            var currentQtyValue = $('#qty<?php echo $i ?>').val();
            console.log(currentQtyValue);
            console.log(maxqty);
            if(0<currentQtyValue && currentQtyValue<=maxqty){
              if(currentCartItemId !== "" && currentQtyValue !== ""){
                update_qty(currentCartItemId, currentQtyValue);
              }
            }
          });
        </script>
        <!-- SAVE -->
        <!-- DELETE -->
          <button type="button" class="btn btn-danger my-1" id="btndelete<?php echo $i ?>">
            <i class="fa fa-trash" aria-hidden="true"></i>
          </button>
          <script>
            $(document).on('click', '#btndelete<?php echo $i ?>', function() {
              var currentCartItemId = $('#itemid<?php echo $i ?>').val();
              delete_cart_item(currentCartItemId);
            });
          </script>
        <!-- DELETE -->
      </div>
      <!-- BUTTONS-->
    </div>
    <!-- 3RD SECTION END-->
  </div>
  <!-- PRODUCT -->
  <hr>
<?php
  }
}
?>
