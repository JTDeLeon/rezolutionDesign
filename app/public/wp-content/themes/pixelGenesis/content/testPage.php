<?php /**
 * Template Name: Test Page
 * 
 * Pixel&Papers
 * 
 *
 * @author     Jonathan Deleon <Jondeleon856@gmail.com> & Clay Skougard <>
 */

 ?>

<?php 
function customEnqueue() {
  $build_dir = '/content/build';
  wp_enqueue_style( 'customWideStyles', get_stylesheet_directory_uri() . $build_dir . '/css/style.min.css', array(), '20190402' );
  wp_enqueue_script('pixelApp', get_stylesheet_directory_uri() . $build_dir . '/js/scripts.min.js', [], '20190626', true);
}
add_action( 'wp_enqueue_scripts', 'customEnqueue' );
?>

 <?php 
 //Genesis Template Styles
    wp_enqueue_style( 'custom-css', get_template_directory_uri() . '/style.css', null, null, 'all');

wp_head();
 ?>
 
<body class="home" >
    <div id="page" class="hfeed site">
        <div id="content" class="site-content" tabindex="-1">
            <?php include 'partials/mobile-overlay.php' ?>
            <div class="col-full">

<!-- Begin Page Build Below -->
    
<?php //include 'partials/header.php' ?>
    
                
<section class="section-02-mobile">
    <div class="one-column">
        <p class="services">OUR SERVICES</p>
        
        <p class="service">Website Design</p>
        
        <div class="two-column">
            <div class="left-side">
                <img src="wp-content/themes/pixelGenesis/content/build/image-min/section-02-mobile-web-logo.png" alt="Website Design" align="middle">
            </div>
            
            <div class="right-side">
                <p class="descr-text">The Digital front door of your business, our team is equipped to make it stand out professionally</p>
            </div>
        </div>
        
    </div>
</section>
                
<section class="section-02">
    <div class="one-column">
        
        <div class="two-column">
            <div class="left-side">
                <div class="phone">
                    <img src="wp-content/themes/pixelGenesis/content/build/image-min/section-02-dsktp-phone.png" alt="Maintenance" align="middle">
                </div>
            
            </div>
            
            <div class="right-side">
                <p class="services">OUR SERVICES</p>
        
                <div class="two-column">
                    <div class="two-column-a">
                        <div class="left-side-a">
                            <img src="wp-content/themes/pixelGenesis/content/build/image-min/section-02-mobile-web-logo.png" alt="Website Design" align="middle">
                        </div>

                        <div class="right-side-a">
                            <p class="service">Website Design</p>
                            <p class="descr-text">The Digital front door of your business, our team is equipped to make it stand out professionally</p>
                        </div>                        
                    </div>
        </div> 
                    
        
    </div>
</section>
    
                
                


<?php //include 'partials/footer.php' ?>
<!-- End of Page Build -->
                
            </div>
        </div>
    </div>
</body>
<?php 
//This must be here at the end of the document
wp_footer();
?>