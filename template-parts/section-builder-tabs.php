<!-- #product-specifications -->
<div id="product-specifications" class="wow fadeInUp">
    
    
        <div id="tabs" class="container product-specifications-container">
            <div class="row">
    
    <!-- div -->
    <div>
    
        <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist">
          <li role="presentation" class="active"><a href="#overview" aria-controls="overview" role="tab" data-toggle="tab">Overview</a></li>
          <li role="presentation"><a href="#specs" aria-controls="specs" role="tab" data-toggle="tab">Specs</a></li>
          <li role="presentation"><a href="#colours" aria-controls="colours" role="tab" data-toggle="tab">Colours</a></li>
          <li role="presentation"><a href="#rental" aria-controls="rental" role="tab" data-toggle="tab">Rental</a></li>
          <li role="presentation"><a href="#downloads" aria-controls="downloads" role="tab" data-toggle="tab">Downloads</a></li>
        </ul>
        <!-- End: Nav Tabs -->
        
        <!-- Tab panes -->
        <div class="tab-content">
            <!-- Overview Tab Content -->
            <div role="tabpanel" class="tab-pane active" id="overview">
                <div class="row">
                  <?php the_sub_field('overview_tab_content'); ?>
                </div>
            </div>
            <!-- End: Overview Tab Content -->
            
            <!-- Specifications Tab Content -->
            <div role="tabpanel" class="tab-pane product-specs" id="specs">
                <!-- Specs Row -->
                <div class="row">
              		
              		<?php the_sub_field('specifications_tab_content'); ?>
                    
          		</div>
          		<!-- End: Specs Row -->
            </div>
            <!-- End: Specifications Tab Content -->
            
            <!-- Colours Tab Content -->
            <div role="tabpanel" class="tab-pane" id="colours">
                <!-- Colours Row -->
                <div class="row">
                    <?php the_sub_field('colours_tab_content'); ?>
                </div>
                <!-- End: Colours Row -->
            </div>
            <!-- End: Colours Tab Content -->
            
            <!-- Rental Tab Content -->
            <div role="tabpanel" class="tab-pane" id="rental">
                <!-- Rental Row -->
                <div class="row">
                    <?php the_sub_field('rental_tab_content'); ?>
                </div>
                <!-- End: Rental Row -->
            </div>
            <!-- End: Rental Tab Content -->
            
            <!-- Downloads Tab Content -->
            <div role="tabpanel" class="tab-pane" id="downloads">
                <!-- Downloads Row -->
                <div class="row">
                    <?php the_sub_field('downloads_tab_content'); ?>
                </div>
                <!-- End: Downloads Row -->
            </div>
            <!-- End: Downloads Tab Content -->
            
        </div>
    </div>
    <!-- End: div -->
    
            <div class="clearfix"></div>
        </div>
        <!-- End: Row -->
    </div>
    <!-- End: Container -->
    
</div>
<!-- End: #product-specifications -->