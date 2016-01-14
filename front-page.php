<?php
/*
Front page
 */
get_header(); ?>
<meta name="viewport" content="width=device-width, initial-scale=1">
<div id="primary" class="content-area">
<main id="main" class="site-main" role="main">

<div class="main-wrapper">

	<section id="ingredients">
		<h1 class="section-title">Simple Organic Ingredients, Amazing Results.</h1>
		<p>Click on a product name below to learn more about its ingredients.</p>

		<div class="tab-container">

			<ul class="tabs">
				<li class="cooling current" data-tab="tab-cooling">Cooling</li>
				<li class="warming" data-tab="tab-warming">Warming</li>
				<li class="unscented" data-tab="tab-unscented">Unscented</li>
				<li class="non-cannabis" data-tab="tab-non-cannabis">Non-Cannabis</li>
			</ul>

			<div id="tab-cooling" class="tab-content current">
				<img src="<?php echo get_stylesheet_directory_uri() . '/images/cooling.png' ?>" alt="Cooling Label">
			</div>
			<div id="tab-warming" class="tab-content">
				 <img src="<?php echo get_stylesheet_directory_uri() . '/images/warming.png' ?>" alt="Warming Label">
			</div>
			<div id="tab-unscented" class="tab-content">
				<img src="<?php echo get_stylesheet_directory_uri() . '/images/unscented.png' ?>" alt="Unscented Label">
			</div>
			<div id="tab-non-cannabis" class="tab-content">
				Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
			</div>

		</div><!-- tab-container -->
		<a class="learn-more" href="blogpost">Learn more about our ingredients <i class="fa fa-chevron-right"></i></a>
	</section><!-- ingredients -->

	<section id="sample">
		<h1 class="section-title">Non-Cannabis Sample Pack</h1>
		<div class="sample-desc">
			<p>We have decided to offer a non-medicated variety pack to allow more patients the opportunity to try our product. This includes one 1/3oz Roll-On of the warming and one 1/3oz Roll-On of the cooling formulas. The unscented oil can be included for an additional $5. The unscented oil is also available by itself for $10.</p>
			<p>This will allow you to try our product without needing to invest any more time or money.  Just wait for your pain oils with anticipation and please fill out our patient survey once you have tried the product!</p>
		</div>
		<div class="sample-img">
			<img src="<?php echo get_stylesheet_directory_uri() . '/images/sample.png' ?>" alt="Sample Pack">
			<a class="purchase" href="paypal">Purchase A Pack!</a>
		</div>
	</section><!-- sample -->

</div><!-- main-wrapper -->

<section id="pricing">
	<h1 class="section-title">Cannabis-Infused Pricing</h1>
	<table class="tg">
	  <tr>
	    <th class="tg-heading">Units</th>
	    <th class="tg-heading">1/3 oz Roll-On</th>
	    <th class="tg-heading">1 oz</th>
	  </tr>
	  <tr>
	    <td class="tg-cell">1</td>
	    <td class="tg-cell">$20 each</td>
	    <td class="tg-cell">$40 each</td>
	  </tr>
	  <tr>
	    <td class="tg-cell">2+</td>
	    <td class="tg-cell">$17.50 each</td>
	    <td class="tg-cell">$35 each</td>
	  </tr>
	</table>
	<p>* Please Contact Us for wholesale pricing *</p>
</section><!-- pricing -->

<div class="main-wrapper">
	<section id="uses">
		<img src="<?php echo get_stylesheet_directory_uri() . '/images/uses_hands.png' ?>" alt="Hands">
		<h1 class="section-title">Therapeutic Uses</h1>
		<h2 class="pain-conditions">Pain Conditions</h2>
		<div class="condition-table">
			<div class="condition-cell">
				<ul class="pain-list">
					<li>Gout</li>
					<li>Scar tissue</li>
					<li>Anxiety & stress</li>
					<li>Pinched nerve</li>
					<li>Osteoarthritis</li>
					<li>Heumatoid arthritis</li>
					<li>MS</li>
					<li>Artificial/phantom limb</li>
					<li>Deep muscle pain</li>
					<li>Bruising</li>
					<li>Fibromyalgia</li>
					<li>Headaches</li>
				</ul>
			</div><!-- condition-cell -->
			<div class="condition-cell">
				<ul class="pain-list">
					<li>Restless Leg Syndrome</li>
					<li>Tendonitis</li>
					<li>Contusions</li>
					<li>Strains & sprains</li>
					<li>Movement disorders</li>
					<li>PMS</li>
					<li>Carpel Tunnel Syndrome</li>
					<li>Diabetic foot pain</li>
					<li>Traumatic injury pain</li>
					<li>Massage</li>
					<li>Pre-workout stiffness</li>
					<li>Post-workout soreness</li>
				</ul>
			</div><!-- condition-cell -->
		</div><!-- pain-conditions -->
		<h2 class="skin-conditions">Skin Conditions</h2>
		<div class="condition-table">
			<div class="condition-cell">
				<ul class="skin-list">
					<li>Psoriasis</li>
					<li>Eczema</li>
					<li>Nail fungus</li>
					<li>Trichoderma</li>
					<li>Bug Bites</li>
				</ul>
			</div>

			<div class="condition-cell">
				<ul class="skin-list">
					<li>Coldsores</li>
					<li>Sun spots</li>
					<li>Acne</li>
					<li>Tattoo aftercare (unscented)</li>
				</ul>
			</div>
		</div>
	</section><!-- uses -->
</div><!-- main-wrapper (2) -->

</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>