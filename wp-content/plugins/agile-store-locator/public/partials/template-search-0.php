<?php

$geo_btn_class      = ($all_configs['geo_button'] == '1')?'asl-geo icon-direction-outline':'icon-search';
$search_type_class  = ($all_configs['search_type'] == '1')?'asl-search-name':'asl-search-address';

$with_categories    = true;
?>
<div id="asl-search" class="asl-p-cont">
  <div class="container-fluid">
  <div class="row">
      <div class="col-sm-3 search_filter">
          <p><?php echo __( 'Search Location', 'asl_locator') ?></p>
          <p>
            <input type="text" class="form-control" data-submit="disable" data-provide="typeahead" tabindex="2" id="auto-complete-search" placeholder="<?php echo __( 'Enter a Location', 'asl_locator') ?>"  class="<?php echo $search_type_class ?> form-control typeahead isp_ignore">
            <span class="err-spn"><?php echo __( 'Destination Missing or Invalid', 'asl_locator') ?></span>
          </p>
      </div>
      <?php if($with_categories): ?>
      <div class="col-sm-2">
        <div class="drop_box_filter">
            <p><span><?php echo __( 'Category', 'asl_locator') ?></span></p>
            <div class="categories_filter">
            </div>
        </div>
      </div>
      <?php endif; ?>
      <div class="col-sm-2">
        <div class="btn-wrapper">
          <p>&nbsp;</p>
          <a id="asl-btn-search" class="btn btn-block btn-primary"><?php echo __( 'Find', 'asl_locator') ?></a>
        </div>
      </div>
  </div>
  </div>
</div>