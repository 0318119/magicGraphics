<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US" prefix="og: http://ogp.me/ns#" data-layout-name="shot-on-iphone" style="overflow-x:hidden !important;">

<?php include 'includes/header-one.php'; 
$stitle = "Combo Packages | Affordable Logo Designing | USA SEO & SMM Company";
$sdesc  = "Magic Graphics Design is offering Branding, Logo Designing, Web Design, Website Development, SEO & SMM Solutions to your business in affordable and friendly packages in USA.";
$simg = "https://www.MagicGraphicsDesign.com/assets/images/logo_black.png";

?>

        <title><?=$stitle;?></title>
        <meta name="description" content="<?=$sdesc;?>">
        <!--<meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />-->
        <meta name="googlebot" content="noindex">
        <meta name="keywords" content="Logo Designing, SEO Company, SMM Company, Logo Design, Website Design, Website Development">

<?php include 'includes/header-two.php'; ?>
   
   <section class="slider-banner"  style="background-image: url(assets/images/banner.webp);">
         <div class="slider-carousel-1">
            <div class="item">
               <div class="container">
                  <div class="row justify-content-between no-gutters">
                     <div class="col-lg-6 col-md-12 col-sm-12" data-aos="fade-right" data-aos-duration="2000">
                        <div class="slider-text">
                            <h3><span>OUR PACKAGES</span></h3>
                           <!-- <h4>Our Highly  <br><span>Affordable Packages</span></h4> -->
                           <p>Whatever we do, we simply aim to take it above average.
                              Our portfolio displays some of our successful projects over the years.</p>
                           <a href="javascript:;" data-toggle="modal" data-target="#popup_form"
                                    class="slide-btn">GET STARTED<i class="fas fa-mouse-pointer"></i></a>
                        </div>
                     </div>
                     <div class="col-lg-6 slider-img">
                        <img src="assets/images/inner-banner/banner-right/pricing-right.webp" alt="" class="img-fluid">
                     </div>
                  </div>
               </div>
            </div>
         </div>
   </section>

<section class="main-design-portfolio">
    <!-- Tab panes -->
    <div class="tab-content container">
        <div class="row">
        <?php include 'includes/all-combo-pacakges.php'; ?>
        </div>
    </div>
</section>
   
<?php include 'includes/cta.php'; ?>
    
      <?php include 'includes/testimonials.php'; ?>
      <?php include 'includes/footer.php'; ?>
      <?php include 'includes/modal-popup-form.php'; ?>
</body>
</html> 