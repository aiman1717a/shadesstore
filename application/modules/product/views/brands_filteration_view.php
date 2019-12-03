<div class="card">
  <!-- card-group-item.// -->
  <article class="card-group-item">
    <header class="card-header">
      <h6 class="title">Brands</h6>
    </header>
    <div class="filter-content">
      <div class="card-body">
        <div class="form-row">
          <div class="form-group" style="width: 100%">
            <select id="brandoptions" class="form-control" name="pbrand">
              <?php
              if(isset($brands) && $brands!=null)
              {
                for($i = 0; $i < count($brands['data']); $i++){
                  ?>
                    <option value="<?php echo $brands['data'][$i]['brand_id'] ?>"> <?php echo $brands['data'][$i]['brand_name'] ?> </option>
                  <?php
                }
              }
              ?>
            </select>
          </div>

          <a href="#" class="btn btn-default btn-block" id="link" onclick="search_brands()">
            <button type="button" Id="demo" class="btn btn-primary btn-block">Search</button>
          </a>

        </div>
      </div>
    </div>
  </article>
</div>
