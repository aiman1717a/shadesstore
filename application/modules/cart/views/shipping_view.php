<!--SHIPPING PANEL-->
<div class="card Payment-Side my-2">
  <div class="card-header">
      <span class="fas fa-shipping-fast" aria-hidden="true"></span>
      <span>Shipping</span>
  </div>
  <div class="card-body">
      <div class="row">
        <div class="col text-center">
          <p><b>Place: </b><?php echo isset($shipping['data'][0]['shipping_place']) != null ? $shipping['data'][0]['shipping_place'] : "Empty" ?></p>
        </div>
      </div>
      <div class="row">
        <div class="col text-center">
          <p><b>Street: </b><?php echo isset($shipping['data'][0]['shipping_street']) != null ? $shipping['data'][0]['shipping_street'] : "Empty" ?></p>
        </div>
      </div>
      <div class="row">
        <div class="col text-center">
          <p><b>City: </b><?php echo isset($shipping['data'][0]['shipping_city']) != null ? $shipping['data'][0]['shipping_city'] : "Empty" ?></p>
        </div>
      </div>
      <div class="row">
        <div class="col text-center">
          <p><b>Country: </b><?php echo isset($shipping['data'][0]['shipping_country']) != null ? $shipping['data'][0]['shipping_country'] : "Empty" ?></p>
        </div>
      </div>
      <div class="row">
        <div class="col text-center">
          <p><b>Zip: </b><?php echo isset($shipping['data'][0]['shipping_zip']) != null ? $shipping['data'][0]['shipping_zip'] : "Empty" ?></p>
        </div>
      </div>
  </div>
  <div class="card-footer">
    <div class="row">
      <div class="col-12 col-sm-12 col-md-12 text-center text-sm-center text-md-center">
        <a href="shipping" class="btn btn-primary pull-right">Update</a>
      </div>
    </div>
  </div>
</div>
<!--SHIPPING PANEL END-->
