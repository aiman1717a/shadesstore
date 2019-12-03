<?php
for($i = 0; $i < count($products['data']); $i++){
  ?>
  <div class="item p-2 col-xs-4 col-lg-4">
    <div class="thumbnail card">
      <div class="img-event">
        <img class="group list-group-image img-fluid" src="<?php echo base_url(); echo $products['data'][$i]['product_image'] ?>" alt="" style="width: 100%"/>
      </div>
      <div class="caption card-body">
        <h4 class="group card-title inner list-group-item-heading">
          <?php echo $products['data'][$i]['product_name'] ?>
        </h4>
        <p class="group inner list-group-item-text">Model :
          <?php echo $products['data'][$i]['product_number'] ?>
        </p>
        <div class="row">
          <div class="col-xs-12 col-md-6">
            <p class="lead">Price :
              <?php echo $products['data'][$i]['product_price']?>$</p>
          </div>
          <div class="col-xs-12 col-md-6 text-center">
            <a class="btn btn-success" href="<?php echo base_url();?>product_details_view/<?php echo $products['data'][$i]['product_id']?>">View</a>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php
}
?>
