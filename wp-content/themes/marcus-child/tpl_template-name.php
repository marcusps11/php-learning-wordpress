<?php
// Template Name: Home Page Template
  get_header();

?>

<div class="hb-home">
  <div class="hb-home__hero-section">
    <div class="hb-home__hero-section-content">
        92% OF CUSTOMERS LOOKED VISIBLY THINNER* 94% Lost Weight At A Fast Rate* 92% Noticed Visible Results* 97% Experienced Increased
      Energy Levels* 92% Had An Improved Complexion Or Radiant Glow* 99% Said It Taste Amazing* 99% Said It Was Simple* Trusted
      By 250,000 Happy Dieters* START TODAY. WHAT ARE YOU WAITING FOR? VIEW ALL PRODUCTS *Disclaimer - Based on a survey of 705
      customers in August 2017 (here). Results may vary from person to person.
    </div>
    <div class="hb-home__hero-section-image">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/package.jpg" alt="" width="" height="" />
      <button class="hb-home__hero-section-button">Buy now</button>
    </div>
  </div>
  <div id="woo-commerce"></div>
</div>

<?php
					if ( storefront_is_woocommerce_activated() ) {

  echo storefront_do_shortcode( 'best_selling_products', array(
    'per_page' => 4,
    'columns'  => 4,
  ) );

echo '</section>';
}
?>
