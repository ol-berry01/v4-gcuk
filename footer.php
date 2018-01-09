<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package gcwoo
 */

?>
<?php if ( get_option( 'show_on_front' ) == 'posts' || !is_front_page() ) : ?>
        <div class="clearfix"></div>
    </div><!-- /row -->
            
</div><!-- /#container -->
<?php endif; ?>

<div class="clearfix"></div>

<?php get_template_part( 'template-parts/section-social', 'footer' ); ?>

<!-- Footer -->
<footer id="footer" class="wow fadeIn" role="footer">
    <div class="container">
        <div class="row">
            <!-- Footer Left Column -->
            <div class="col-sm-6 col-xs-12 footer-container">
                <!-- Footer Newsletter -->
                <section id="signup" style="margin-bottom:25px;margin-right:25px;">
                    <form>
                        <div class="input-group">
                            <input type="text" class="form-control input-md" placeholder="Sign Up To Our Newsletter">
                            <span class="input-group-btn">
                                <button class="btn btn-md btn-gcuk" type="button">Subscribe</button>
                            </span> 
                        </div>
                    </form>
                </section>
                <!-- End: Footer Newsletter -->
                <div class="row wow fadeInUp">
                    <div class="col-xs-6">
                        <img class="logo" src="<?php bloginfo('stylesheet_directory'); ?>/images/Golf-Car-UK-footer.jpg">
                        <p>Golf Car UK Ltd<br>
                        Unit 7, The Boscombe Centre<br>
                        Mills Way, Amesbury<br>
                        Wiltshire, SP4 7SD</p>
                        <p>T: 0345 8055 494</p>
                        <p>F: 01980 677 113</p>
                    </div>
                    <div class="col-xs-6">
                        
                    </div>
                </div>
            </div>
            <!-- End: Footer Left Column -->
            <!-- Footer Right Column -->
            <div class="col-sm-6 col-xs-12 footer-container">
                <div class="wow wow fadeInUp">
                    <div class="col-sm-4 footer-nav wow fadeInUp">
                        <?php dynamic_sidebar( 'footer-1' ); ?>
                    </div>
                    <div class="col-sm-4 footer-nav footer-nav-hide wow fadeInUp">
                        <?php dynamic_sidebar( 'footer-2' ); ?>
                    </div>
                    <div class="col-sm-4 footer-nav wow fadeInUp">
                        <?php dynamic_sidebar( 'footer-3' ); ?>
                    </div>
                </div>
            </div>
            <!-- End: Footer Right Column -->
        </div>
        <!-- End: Row -->
        <div class="row sub-logos-row">
            <div class="sub-logos">
                <ul>
                    <li><a href="http://ezgo.com/" target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/ezgo-footer.jpg"></a></li>
                    <li><a href="https://www.cushman.com/" target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/cushman-footer.jpg"></a></li>
                    <li><a href="http://www.textronoffroad.com/" target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/textron-offroad-footer.jpg"></a></li>
                </ul>
                <p class="sub-footer-authorised" style="font-size:16px;">Authorised UK dealers of EZGO<sup>&reg;</sup>, Cushman<sup>&reg;</sup> &amp; Textron Off Road<sup>&reg;</sup> vehicles.</p>
            </div>
        </div>
        <!-- End: Row Sub-Logos -->
    </div>
    <!-- End: Container -->
    <div class="sub-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p style="color:#a28f56;">Copyright &copy;<?php echo date("Y") ?> Golf Car UK Ltd, all rights reserved</p>
                    <p>Registered in England under Company No. 04616458 | VAT No: GB126148428 | Registered address - 13 Church Street, Helston, Cornwall, TR13 8TD</p>
            </div>
                </div>
                
            </div>
        </div>
    </div>
    <!-- End: sub-footer -->
</footer>
<!-- End: Footer -->
<div class="clearfix"></div>

<div class="stick-tab" style="margin-top: -100px;">
    <a role="button" class="sticky-tab-item usm-item-10" data-toggle="modal" data-target="#allVehicles" style="top: 0px;">
        <i class="fa fa-info sm-icon" aria-hidden="true"></i><span>All Vehicles</span>
    </a>
</div>
<div id="allVehicles"class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header" style="background:#000063;">
                <button type="button" class="close" data-dismiss="modal"><span class="" aria-hidden="true" style="color:#fff;">&times;</span><span class="sr-only">Close</span></button>
                <div style="text-align:center;"><h4 class="modal-title gc-white" id="myModalLabel" style="color:#fff;">Golf Car UK Quick Menu</p></div>
            </div>
            <div class="modal-body">
                <!-- Modal Row -->
                <div class="" style="width:98%;padding:2%;">
                
                    <div class="row" style="text-align:center;">
                        
                        <!-- Golf -->
                        <div class="col-md-12" style="text-align:center;margin-bottom:10px;">
                            <h3>Golf Cars</h3>
                        </div>
                        
                    </div>
                
                    <div class="row">
                        
                        <div class="col-md-12">
                            
                            <div class="row" style="text-align:center;border-bottom:1px solid #f4f4f4;margin-bottom:10px;">
                                
                                <div class="col-sm-2 col-xs-6">
                                    <a href="/new/golf/ezgo-rxv/">
                                        <div><img src="<?php bloginfo('stylesheet_directory'); ?>/images/quick-golf-RXV.jpg"></div>
                                        <div><p class="lead" style="font-size:1.2em;">RXV</p></div>
                                    </a>
                                </div>
                                
                                <div class="col-sm-2 col-xs-6">
                                    <a href="/new/golf/ezgo-txt/">
                                        <div><img src="<?php bloginfo('stylesheet_directory'); ?>/images/quick-golf-txt.jpg"></div>
                                        <div><p class="lead" style="font-size:1.2em;">TXT</p></div>
                                    </a>
                                </div>
                                
                                <div class="col-sm-2 col-xs-6">
									<a href="/new/golf/rxv-elite/">
                                        <div><img src="<?php bloginfo('stylesheet_directory'); ?>/images/quick-golf-RXV.jpg"></div>
                                        <div><p class="lead" style="font-size:1.2em;">ELiTE</p></div>
                                    </a>
                                </div>
                                
                                <div class="col-sm-2 col-xs-6">
                                </div>
                                
                                <div class="col-sm-2 col-xs-6">
                                    
                                </div>
                                
                                <div class="col-sm-2 col-xs-6">
                                    
                                </div>
                                
                            </div>
                            
                        </div>
                    </div>
                    <!-- End: Golf -->
                    
                    
                    <div class="row" style="text-align:center;">
                        
                        <!-- Golf -->
                        <div class="col-md-12" style="text-align:center;margin-bottom:10px;">
                            <h3>Freedom Golf Cars</h3>
                        </div>
                        
                    </div>
                
                    <div class="row">
                        
                        <div class="col-md-12">
                            
                            <div class="row" style="text-align:center;border-bottom:1px solid #f4f4f4;margin-bottom:10px;">
                                
                                <div class="col-sm-2 col-xs-6">
                                    <a href="/new/golf/freedom-rxv/">
                                        <div><img src="<?php bloginfo('stylesheet_directory'); ?>/images/quick-golf-FreedomRXV.jpg"></div>
                                        <div><p class="lead" style="font-size:1.2em;">RXV</p></div>
                                    </a>
                                </div>
                                
                                <div class="col-sm-2 col-xs-6">
                                    <a href="/new/golf/freedom-txt/">
                                        <div><img src="<?php bloginfo('stylesheet_directory'); ?>/images/quick-golf-FreedomTXT.jpg"></div>
                                        <div><p class="lead" style="font-size:1.2em;">TXT</p></div>
                                    </a>
                                </div>
                                
                                <div class="col-sm-2 col-xs-6">
                                    <a href="/new/golf/rxv-2plus2/">
                                        <div><img src="<?php bloginfo('stylesheet_directory'); ?>/images/quick-golf-RXV2plus2.jpg"></div>
                                        <div><p class="lead" style="font-size:1.2em;">RXV 2+2</p></div>
                                    </a>
                                </div>
                                
                                <div class="col-sm-2 col-xs-6">
                                    <a href="/new/golf/freedom-txt-22/">
                                        <div><img src="<?php bloginfo('stylesheet_directory'); ?>/images/quick-golf-TXT2plus2.jpg"></div>
                                        <div><p class="lead" style="font-size:1.2em;">TXT 2+2</p></div>
                                    </a>
                                </div>
                                
                                <div class="col-sm-2 col-xs-6">
                                    
                                </div>
                                
                                <div class="col-sm-2 col-xs-6">
                                    
                                </div>
                                
                            </div>
                            
                        </div>
                    </div>
                    <!-- End: Golf -->
                    
                    
                    <!-- Hauler -->
                    <div class="row">
                        <div class="col-md-12" style="text-align:center;margin-bottom:10px;">
                            <h3>Hauler</h3>
                        </div>
                    </div>
                    
                    <div class="row">
                    
                    <div class="col-md-12">
                        
                        <div class="row" style="text-align:center;border-bottom:1px solid #f4f4f4;margin-bottom:10px;">
                            
                            <div class="col-sm-2 col-xs-6">
                                <a href="/new/utility/hauler/hauler-1200/">
                                    <div><img src="<?php bloginfo('stylesheet_directory'); ?>/images/quick-hauler-1200.jpg"></div>
                                    <div><p class="lead" style="font-size:1.2em;">1200</p></div>
                                </a>
                            </div>
                            
                            <div class="col-sm-2 col-xs-6">
                                <a href="/new/utility/hauler/hauler-pro/">
                                    <div><img src="<?php bloginfo('stylesheet_directory'); ?>/images/quick-hauler-pro.jpg"></div>
                                    <div><p class="lead" style="font-size:1.2em;">Pro</p></div>
                                </a>
                            </div>
                            
                            <div class="col-sm-2 col-xs-6">
                                <a href="/new/utility/hauler/hauler-800/">
                                    <div><img src="<?php bloginfo('stylesheet_directory'); ?>/images/quick-hauler-800.jpg"></div>
                                    <div><p class="lead" style="font-size:1.2em;">800</p></div>
                                </a>
                            </div>
                            
                            <div class="col-sm-2 col-xs-6">
                                <a href="/new/utility/hauler-x/hauler-1200x/">
                                    <div><img src="<?php bloginfo('stylesheet_directory'); ?>/images/quick-hauler-1200x.jpg"></div>
                                    <div><p class="lead" style="font-size:1.2em;">1200 X</p></div>
                                </a>
                            </div>
                            
                            <div class="col-sm-2 col-xs-6">
                                <a href="/new/utility/hauler-x/hauler-pro-x/">
                                    <div><img src="<?php bloginfo('stylesheet_directory'); ?>/images/quick-hauler-pro-x.jpg"></div>
                                    <div><p class="lead" style="font-size:1.2em;">Pro X</p></div>
                                </a>
                            </div>
                            
                            <div class="col-sm-2 col-xs-6">
                                <a href="/new/utility/hauler-x/hauler-800x/">
                                    <div><img src="<?php bloginfo('stylesheet_directory'); ?>/images/quick-hauler-800x.jpg"></div>
                                    <div><p class="lead" style="font-size:1.2em;">800 X</p></div>
                                </a>
                            </div>
                            
                        </div>
                        
                    </div>
                    <!-- End: Hauler -->
                    
                    
                    <!-- Shuttle -->
                    <div class="row">
                        <div class="col-md-12" style="text-align:center;">
                            <h3>Shuttle</h3>
                        </div>
                    </div>
                    
                    <div class="row">
                    
                        <div class="col-md-12">
                            
                            <div class="row" style="text-align:center;border-bottom:1px solid #f4f4f4;margin-bottom:10px;">
                                
                                <!-- 1 -->
                                <div class="col-sm-2 col-xs-6">
                                    <a href="/new/hospitality/shuttle-2/">
                                        <div><img src="<?php bloginfo('stylesheet_directory'); ?>/images/quick-shuttle-2.jpg"></div>
                                        <div><p class="lead" style="font-size:1.2em;">2</p></div>
                                    </a>
                                </div>
                                
                                <!-- 2 -->
                                <div class="col-sm-2 col-xs-6">
                                    <a href="/new/hospitality/shuttle-2plus2/">
                                        <div><img src="<?php bloginfo('stylesheet_directory'); ?>/images/quick-shuttle-2plus2.jpg"></div>
                                        <div><p class="lead" style="font-size:1.2em;">2+2</p></div>
                                    </a>
                                </div>
                                
                                <!-- 3 -->
                                <div class="col-sm-2 col-xs-6">
                                    <a href="/new/hospitality/shuttle-4x/">
                                    <div><img src="<?php bloginfo('stylesheet_directory'); ?>/images/quick-shuttle-4X.jpg"></div>
                                    <div><p class="lead" style="font-size:1.2em;">4X</p></div>
                                </a>
                                </div>
                                
                                <!-- 4 -->
                                <div class="col-sm-2 col-xs-6">
                                    <a href="/new/hospitality/shuttle-4/">
                                        <div><img src="<?php bloginfo('stylesheet_directory'); ?>/images/quick-shuttle-4.jpg"></div>
                                        <div><p class="lead" style="font-size:1.2em;">4</p></div>
                                    </a>
                                </div>
                                
                                <!-- 5 -->
                                <div class="col-sm-2 col-xs-6">
                                    <a href="/new/hospitality/shuttle-6/">
                                        <div><img src="<?php bloginfo('stylesheet_directory'); ?>/images/quick-shuttle-6.jpg"></div>
                                        <div><p class="lead" style="font-size:1.2em;">6</p></div>
                                    </a>
                                </div>
                                
                                <!-- 6 -->
                                <div class="col-sm-2 col-xs-6">
                                    <a href="/new/hospitality/shuttle-8/">
                                        <div><img src="<?php bloginfo('stylesheet_directory'); ?>/images/quick-shuttle-8.jpg"></div>
                                        <div><p class="lead" style="font-size:1.2em;">8</p></div>
                                    </a>
                                </div>
                                
                            </div>
                        
                        </div>
                        
                    </div>
                    <!-- End: Shuttle -->
                    
                    
                    <!-- Express -->
                    <div class="row">
                        <div class="col-md-12" style="text-align:center;">
                            <h3>Express</h3>
                        </div>
                    </div>
                    
                    <div class="row">
                        
                        <div class="col-md-12">
                            
                            <div class="row" style="text-align:center;border-bottom:1px solid #f4f4f4;margin-bottom:10px;">
                                
                                <!-- 1 -->
                                <div class="col-sm-2 col-xs-6">
                                    <a href="/new/hospitality/express-s4/">
                                        <div><img src="<?php bloginfo('stylesheet_directory'); ?>/images/quick-express-S4.jpg"></div>
                                        <div><p class="lead" style="font-size:1.2em;">S4</p></div>
                                    </a>
                                </div>
                                
                                <!-- 2 -->
                                <div class="col-sm-2 col-xs-6">
                                    <a href="/new/hospitality/express-s6/">
                                        <div><img src="<?php bloginfo('stylesheet_directory'); ?>/images/quick-express-S6.jpg"></div>
                                        <div><p class="lead" style="font-size:1.2em;">S6</p></div>
                                    </a>
                                </div>
                                
                                <!-- 3 -->
                                <div class="col-sm-2 col-xs-6">
                                    <a href="/new/hospitality/express-l6/">
                                        <div><img src="<?php bloginfo('stylesheet_directory'); ?>/images/quick-express-L6.jpg"></div>
                                        <div><p class="lead" style="font-size:1.2em;">L6</p></div>
                                    </a>
                                </div>
                                
                                <!-- 4 -->
                                <div class="col-sm-2 col-xs-6">
                                    
                                </div>
                                
                                <!-- 5 -->
                                <div class="col-sm-2 col-xs-6">
                                    
                                </div>
                                
                                <!-- 6 -->
                                <div class="col-sm-2 col-xs-6">
                                    
                                </div>
                                
                            </div>
                            
                        </div>
                        
                    </div>
                    <!-- End: Express -->
                    
                    
                    
                    <!-- Other -->
                    <div class="row">
                        <div class="col-md-12" style="text-align:center;">
                            <h3>Other</h3>
                        </div>
                    </div>
                    
                    <div class="row">
                        
                        <div class="col-md-12">
                            
                            <div class="row" style="text-align:center;border-bottom:1px solid #f4f4f4;margin-bottom:10px;">
                                
                                <!-- 1 -->
                                <div class="col-sm-2 col-xs-6">
                                    <a href="/new/hospitality/refresher-oasis/">
                                        <div><img src="<?php bloginfo('stylesheet_directory'); ?>/images/quick-refresher-fs2.jpg"></div>
                                        <div><p class="lead" style="font-size:1.2em;">Oasis</p></div>
                                    </a>
                                </div>
                                
                                <!-- 2 -->
                                <div class="col-sm-2 col-xs-6">
                                    <a href="/new/utility/1600xd/">
                                        <div><img src="<?php bloginfo('stylesheet_directory'); ?>/images/quick-cushman-1600xd.jpg"></div>
                                        <div><p class="lead" style="font-size:1.2em;">1600XD</p></div>
                                    </a>
                                </div>
                                
                                <!-- 3 -->
                                <div class="col-sm-2 col-xs-6">
                                    <a href="/coming-soon/">
                                        <div><img src="<?php bloginfo('stylesheet_directory'); ?>/images/quick-custom.jpg"></div>
                                        <div><p class="lead" style="font-size:1.2em;">Custom</p></div>
                                    </a>
                                </div>
                                
                                <!-- 4 -->
                                <div class="col-sm-2 col-xs-6">
                                    <a href="/coming-soon/">
                                        <div><img src="<?php bloginfo('stylesheet_directory'); ?>/images/quick-road-legal.jpg"></div>
                                        <div><p class="lead" style="font-size:1.2em;">Road Legal</p></div>
                                    </a>
                                </div>
                                
                                <!-- 5 -->
                                <div class="col-sm-2 col-xs-6">
                                    
                                </div>
                                
                                <!-- 6 -->
                                <div class="col-sm-2 col-xs-6">
                                    
                                </div>
                                
                            </div>
                            
                        </div>
                        
                    </div>
                    <!-- End: Other -->
                    
                    
                    <!-- Services -->
                    <div class="row">
                        <div class="col-md-12" style="text-align:center;">
                            <h3>Services</h3>
                        </div>
                    </div>
                    
                    <div class="row">
                    
                        <div class="col-md-12">
                            
                            <div class="row" style="text-align:center;border-bottom:1px solid #f4f4f4;margin-bottom:10px;">
                                
                                <!-- 1 -->
                                <div class="col-sm-2 col-xs-6">
                                    <a href="/rental/">
                                        <div><img src="<?php bloginfo('stylesheet_directory'); ?>/images/quick-icon-rental.jpg" style="height:auto;max-width:75px;"></div>
                                        <div><p class="lead" style="font-size:1.2em;">Rental</p></div>
                                    </a>
                                </div>
                                
                                <!-- 2 -->
                                <div class="col-sm-2 col-xs-6">
                                    <a href="/servicing/">
                                        <div><img src="<?php bloginfo('stylesheet_directory'); ?>/images/quick-icon-service.jpg" style="height:auto;max-width:75px;"></div>
                                        <div><p class="lead" style="font-size:1.2em;">Servicing</p></div>
                                    </a>
                                </div>
                                
                                <!-- 3 -->
                                <div class="col-sm-2 col-xs-6">
                                    <a href="/finance/">
                                        <div><img src="<?php bloginfo('stylesheet_directory'); ?>/images/quick-icon-finance.jpg" style="height:auto;max-width:75px;"></div>
                                        <div><p class="lead" style="font-size:1.2em;">Finance</p></div>
                                    </a>
                                </div>
                                
                                <!-- 4 -->
                                <div class="col-sm-2 col-xs-6">
                                    <a href="/insurance/">
                                        <div><img src="<?php bloginfo('stylesheet_directory'); ?>/images/quick-icon-protect.jpg" style="height:auto;max-width:75px;"></div>
                                        <div><p class="lead" style="font-size:1.2em;">Protect</p></div>
                                    </a>
                                </div>
                                
                                <!-- 5 -->
                                <div class="col-sm-2 col-xs-6">
                                    
                                </div>
                                
                                <!-- 6 -->
                                <div class="col-sm-2 col-xs-6">
                                    
                                </div>
                                
                            </div>
                            
                        </div>
                    
                    </div>
                    <!-- End: Other -->
                    
                    
                    
                </div>
                <!-- End: Modal Row -->
                       </div>                     
                                    
                                    
                                        
                        </div>
                    </div>
                    <!-- End: Vehicles -->
                </div>
            </div>
        </div>
    </div>
</script>

<?php wp_footer(); ?>
</body>
</html>