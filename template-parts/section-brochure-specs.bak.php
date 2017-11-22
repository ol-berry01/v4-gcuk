<!-- #product-specifications -->
<div id="product-specifications" class="container wow fadeInUp">
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
                  <div class="col-sm-3">
                    <img style="max-height:195px;width:auto;margin:25px 0;text-align:center;" src="https://woo-v7-olberry01.c9users.io/wp-content/uploads/2016/08/Cushman_Hauler800-side.png"/>
                  </div>
                  <div class="col-sm-3">
                    <img style="max-height:195px;width:auto;margin:25px 0;" src="https://woo-v7-olberry01.c9users.io/wp-content/uploads/2016/08/Cushman_Hauler800-front.png"/>
                  </div>
                  <div class="col-md-6">
                    
                  </div>
                </div>
            </div>
            <!-- End: Overview Tab Content -->
            
            <!-- Specifications Tab Content -->
            <div role="tabpanel" class="tab-pane product-specs" id="specs">
                
            <!--    <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">-->
            <!--      Button with data-target-->
            <!--    </button>-->
            <!--<div class="collapse" id="collapseExample">-->
            <!--    <div class="well">-->
            <!--    ...-->
            <!--    </div>-->
            <!--</div>-->
                
                <!-- ACF Brochure Specs -->
                <?php if ( have_rows('brochure_specs') ):
          				while ( have_rows('brochure_specs') ): the_row(); ?>
                    
                    <!-- Specs Title -->
                        <a class="specs-toggle" data-target="#<?php the_sub_field('specs_id'); ?>" aria-expanded="false" aria-controls="<?php the_sub_field('specs_id'); ?>">
          					<p class="lead" data-toggle="collapse" ><?php the_sub_field('specs_title'); ?></p>hasldifhalsidfh
                        </a>
          					<!-- End: Specs Title -->
          					
          					<!-- Specs -->
          					<?php if ( have_rows('specs_item') ): ?>
          						
          						<div class="row product-specs-table" id="<?php the_sub_field('specs_id'); ?>">
          						  
          						  <div class="col-md-6">
          						    
          						    <?php while ( have_rows('specs_item') ): the_row(); ?>
          						    
          						    <div class="row specs-row">
          						      <div class="col-xs-6">
          						        <p><?php the_sub_field('spec_name'); ?></p>
          						      </div>
          						      <div class="col-xs-6">
          						        <p><?php the_sub_field('spec_value'); ?></p>
          						      </div>
          						    </div>
          
              						<?php endwhile; ?>
              						
          						  </div>
          					
          						</div>
          
          					<?php endif; ?>
          					<!-- End: Specs -->
          
          			<?php endwhile;
          			endif; ?>
          			<!-- End: ACF Brochure Specs -->
            </div>
            <!-- End: Specifications Tab Content -->
            
            <!-- Colours Tab Content -->
            <div role="tabpanel" class="tab-pane" id="colours">
                <p>Colours panel content</p>
                
                
            </div>
            <!-- End: Colours Tab Content -->
            
            <!-- Rental Tab Content -->
            <div role="tabpanel" class="tab-pane" id="rental">
                <p>Rental panel content</p>
                
                <p>Sed lobortis est a sapien pellentesque, nec aliquet arcu lacinia. Vivamus euismod ante urna, ac fringilla lorem volutpat sit amet. Sed rhoncus orci eget fermentum tincidunt. Donec quis arcu eu sapien dictum eleifend nec sit amet mi. Vestibulum sagittis nisl justo, ac vestibulum massa pretium id. Vivamus rhoncus turpis et sem feugiat sollicitudin. Aliquam in risus non mauris rutrum porttitor in nec mi. Sed consectetur in felis ut viverra. Donec elit elit, aliquet sit amet quam eu, lacinia efficitur lacus. Phasellus at commodo ex. Suspendisse pulvinar sapien non eros porttitor mattis.</p>
            </div>
            <!-- End: Rental Tab Content -->
            
            <!-- Downloads Tab Content -->
            <div role="tabpanel" class="tab-pane" id="downloads">
                <p>Downloads panel content</p>

                <p>Sed lobortis est a sapien pellentesque, nec aliquet arcu lacinia. Vivamus euismod ante urna, ac fringilla lorem volutpat sit amet. Sed rhoncus orci eget fermentum tincidunt. Donec quis arcu eu sapien dictum eleifend nec sit amet mi. Vestibulum sagittis nisl justo, ac vestibulum massa pretium id. Vivamus rhoncus turpis et sem feugiat sollicitudin. Aliquam in risus non mauris rutrum porttitor in nec mi. Sed consectetur in felis ut viverra. Donec elit elit, aliquet sit amet quam eu, lacinia efficitur lacus. Phasellus at commodo ex. Suspendisse pulvinar sapien non eros porttitor mattis.</p>
                
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer aliquet lorem nisl, sed tristique magna vestibulum auctor. Integer id porta ligula. Praesent porttitor velit sit amet nibh lobortis pulvinar. Phasellus feugiat, lorem quis commodo tempus, purus arcu semper orci, at vulputate orci magna quis libero. Nulla sed libero facilisis, posuere sem a, aliquet felis. Donec imperdiet sed ipsum id convallis. Vestibulum volutpat nisl eu quam posuere, ac sodales velit gravida. Vivamus tempor elementum magna in porttitor. Pellentesque efficitur at lacus nec interdum. Donec vulputate scelerisque ex. Maecenas congue euismod risus, ut volutpat eros fermentum id. Etiam bibendum urna ut tortor molestie convallis. Aliquam sagittis justo id nisl ultrices ullamcorper. Donec rutrum lorem eget pharetra interdum.</p>
            </div>
            <!-- End: Downloads Tab Content -->
            
        </div>
    </div>
    <!-- End: div -->
</div>
<!-- End: #product-specifications -->