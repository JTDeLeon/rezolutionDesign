<?php /**
 * Template Name: Homepage
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

<section class="section-00">
    
<?php include 'partials/header.php' ?>
    
        <div class="one-column">
            <p class="headline">Web Designs, <br>Ecommerce, <br>Maintenance & SEO</p>
            <p class="headline-descr">If your website isn't optimized for your unique business requirements, you're leaving money on the table.</p>
            <div class="button-container">
                <img class="work-button" src="http://rezolution.local/wp-content/themes/pixelGenesis/content/build/image-min/section-01-mobile-work-button.png">
            </div>
        </div>
</section>
                
<section class="section-01">
    <div class="one-column">
        <div class="circle-1">
            <img class="shopper" src="http://rezolution.local/wp-content/themes/pixelGenesis/content/build/image-min/section-01-mobile-circle-shopper.png">
        </div>
        <div class="wp-container">
            <img class="wordpress" src="http://rezolution.local/wp-content/themes/pixelGenesis/content/build/image-min/section-01-mobile-wordpress.png">
        </div>
        <div class="circle-2">
            <img class="merch" src="http://rezolution.local/wp-content/themes/pixelGenesis/content/build/image-min/section-01-mobile-circle-merch.png">
        </div>
        <div class="circle-3">
            <img class="three-circles" src="http://rezolution.local/wp-content/themes/pixelGenesis/content/build/image-min/section-01-mobile-three-dots.png">
        </div>
        <div class="s-container">
            <img class="shopify" src="http://rezolution.local/wp-content/themes/pixelGenesis/content/build/image-min/section-01-mobile-shopify.png">
        </div>
        <div class="woo-container">
            <img class="woo" src="http://rezolution.local/wp-content/themes/pixelGenesis/content/build/image-min/section-01-mobile-woo.png">
        </div>
        <div class="mag-container">
            <img class="magento" src="http://rezolution.local/wp-content/themes/pixelGenesis/content/build/image-min/section-01-mobile-magento.png">
        </div>
        <div class="circle-4">
            <img class="three-circles" src="http://rezolution.local/wp-content/themes/pixelGenesis/content/build/image-min/section-01-mobile-circle-iPad.png">
        </div>
    </div>
</section>
                
<section class="section-02">
    <div class="one-column">
        <p class="services">OUR SERVICES</p>
        
        <p class="service">Website Design</p>
        
        <div class="two-column">
            <div class="left-side">
                <img src="http://rezolution.local/wp-content/themes/pixelGenesis/content/build/image-min/section-02-mobile-web-logo.png" alt="Website Design" align="middle">
            </div>
            
            <div class="right-side">
                <p class="descr-text">The Digital front door of your business, our team is equipped to make it stand out professionally</p>
            </div>
        </div>
        
        <p class="service">Logo Design</p>
        <div class="two-column">
            <div class="left-side">
                <img src="http://rezolution.local/wp-content/themes/pixelGenesis/content/build/image-min/section-02-mobile-logo-logo.png" alt="Logo Design" align="middle">
            </div>
            <div class="right-side">
                <p class="descr-text">Rather if its starting from scratch or your business needs a rebrand, the logo is the face of your company</p>
            </div>
        </div>
        
        <p class="service">Maintenance</p>
        <div class="two-column">
            <div class="left-side">
                <img src="http://rezolution.local/wp-content/themes/pixelGenesis/content/build/image-min/section-02-mobile-maintenance-logo.png" alt="Maintenance" align="middle">
            </div>
            <div class="right-side">
                <p class="descr-text">Creating backups, finetune updates, add new products, update contents and banners, update pricing</p>
            </div>
        </div>
        
        <p class="service">Ecommerce Design</p>
        <div class="two-column">
            <div class="left-side">
                <img src="http://rezolution.local/wp-content/themes/pixelGenesis/content/build/image-min/section-02-mobile-ecom-logo.png" alt="Ecommerce Design" align="middle">
            </div>
            <div class="right-side">
                <p class="descr-text">Modern digital storefront with responsiveness for desktop and mobile, catered for conversions turning customers to buyers</p>
            </div>
        </div>
        
        <p class="service">Social Media Marketing</p>
        <div class="two-column">
            <div class="left-side">
                <img src="http://rezolution.local/wp-content/themes/pixelGenesis/content/build/image-min/section-02-mobile-social-logo.png" alt="Social Media Marketing" align="middle">
            </div>
            <div class="right-side">
                <p class="descr-text">Gain global exposure to produce brand awareness and lead traffic into your website</p>
            </div>
        </div>
        
        <p class="service">Search Engine Optimization</p>
        <div class="two-column">
            <div class="left-side">
                <img src="http://rezolution.local/wp-content/themes/pixelGenesis/content/build/image-min/section-02-mobile-seo-logo.png" alt="Search Engine Optimization" align="middle">
            </div>
            <div class="right-side">
                <p class="descr-text">Top searches are always on Google, we help people find your business faster with SEO services</p>
            </div>
        </div>
    </div>
</section>
                
<section class="section-03">
    <div class="one-column">
        <p class="why">WHY US</p>
        
        <p class="large-why">142</p>
        <p class="why-descr-text">Website launches currently active for 5+ Years</p>
        
        <p class="large-why">97<span><sup>%</sup></span></p>
        <p class="why-descr-text">Client Retention Rate</p>
        
        <p class="large-why">$200m</p>
        <p class="why-descr-text">Annual Client GMV</p>
        
        <p class="large-award">Award Winning<br>Designers<br>& Developers</p>
        <p class="why-descr-text">Our job is to make your business look fantastic. We deliver best practices, global brand exposure with high boost conversions that will change your business.  You're in Experts hands when working with Rezolutions Design.</p>
        
        <div class="button-container">
            <img class="work-button" src="http://rezolution.local/wp-content/themes/pixelGenesis/content/build/image-min/section-02-mobile-chat-button.png">
        </div>
    </div>
</section>
                
<section class="section-04">
    <div class="one-column">
        <p class="large-and">&</p>
        
        <p class="large-before">Before</p>
        
        <div class="two-column">
            <div class="left-side">
                <div class="image-container">
                    <img class="before-work" src="http://rezolution.local/wp-content/themes/pixelGenesis/content/build/image-min/section-03-mobile-before.png">
                </div>
            </div>
            
            <div class="right-side">
                <p class="large-after">After<br>Case Studies</p>
                <p class="before-descr-text">We help Reputable businesses with old websites and polish it into stunning presentations for desktop and mobile.</p>
                <div class="button-container">
                    <img class="work-button" src="http://rezolution.local/wp-content/themes/pixelGenesis/content/build/image-min/section-03-mobile-discuss-button.png">
                </div>
                <div class="image-container">
                    <img class="after-work" src="http://rezolution.local/wp-content/themes/pixelGenesis/content/build/image-min/section-03-mobile-after.png">
                </div>
            </div>
        </div>
    </div>
</section>
                
<section class="section-05">
    <div class="one-column">
        <p class="testimonial">TESTIMONIALS</p>
        
        <p class="large-quote">&</p>
        
        <p class="why-descr-text">Website launches currently active for 5+ Years</p>
        
        <p class="large-why">97<span><sup>%</sup></span></p>
        <p class="why-descr-text">Client Retention Rate</p>
        
        <p class="large-why">$200m</p>
        <p class="why-descr-text">Annual Client GMV</p>

    </div>
</section>
                
                
                


<?php include 'partials/footer.php' ?>
<!-- End of Page Build -->
                
            </div>
        </div>
    </div>
</body>
<?php 
//This must be here at the end of the document
wp_footer();
?>