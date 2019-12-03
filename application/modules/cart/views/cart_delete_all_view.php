<div class="card-footer">
  <div class="row">
    <div class="col-12 col-sm-12 col-md-12 text-center text-sm-center text-md-right">
      <button type="button" class="btn btn-danger" id="btndeleteall">
        <i class="fa fa-trash" aria-hidden="true"></i> Remove All Products
      </button>
      <script>
      $(document).on('click', '#btndeleteall', function() {
        <?php
        for ($i=0; $i < count($cart['cart']['cart_item']); $i++) {
          ?>
          var currentCartItemId = <?php echo isset($cart['cart']['cart_item']) != null ? $cart['cart']['cart_item'][$i]['cart_item_id'] : null ?>;
          delete_cart_item(currentCartItemId);
          <?php
        }
        ?>
      });
      </script>
    </div>
  </div>
</div>
