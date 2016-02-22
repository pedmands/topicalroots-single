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
		<p>Click on a product name below to view its label.</p>

		<div class="tab-container">

			<ul class="tabs">
				<li class="cooling current" data-tab="tab-cooling">Cooling</li>
				<li class="warming" data-tab="tab-warming">Warming</li>
				<li class="unscented" data-tab="tab-unscented">Unscented</li>
				
			</ul>

			<div id="tab-cooling" class="tab-content current">
				<img src="<?php echo get_stylesheet_directory_uri() . '/images/cooling.png' ?>" alt="Cooling Label">
				<div id="cooling">
				<dt>Ingredient Information</dt>
				<dd>
				<?php 
					$query = new WP_query('pagename=cooling-ingredients');
					$post_id = $query->queried_object->ID;
					// The Loop
					if ( $query->have_posts() ) {
						while ( $query->have_posts() ) {
							$query->the_post();
							echo '<div class="ingredient-content">';
							the_content();
							echo '</div>';
						}// while
					} // if
					
					wp_reset_postdata();
					?>
					</dd>
					</div><!--ingredient info-->
			</div>
			<div id="tab-warming" class="tab-content">
				 <img src="<?php echo get_stylesheet_directory_uri() . '/images/warming.png' ?>" alt="Warming Label">
				 <div id="warming">
				<dt>Ingredient Information</dt>
				<dd>
				<?php 
					$query = new WP_query('pagename=warming-ingredients');
					$post_id = $query->queried_object->ID;
					// The Loop
					if ( $query->have_posts() ) {
						while ( $query->have_posts() ) {
							$query->the_post();
							echo '<div class="ingredient-content">';
							the_content();
							echo '</div>';
						}// while
					} // if
					
					wp_reset_postdata();
					?>
					</dd>
					</div><!--ingredient info-->
			</div>
			<div id="tab-unscented" class="tab-content">
				<img src="<?php echo get_stylesheet_directory_uri() . '/images/unscented.png' ?>" alt="Unscented Label">
				<div id="unscented">
				<dt>Ingredient Information</dt>
				<dd>
				<?php 
					$query = new WP_query('pagename=unscented-ingredients');
					$post_id = $query->queried_object->ID;
					// The Loop
					if ( $query->have_posts() ) {
						while ( $query->have_posts() ) {
							$query->the_post();
							echo '<div class="ingredient-content">';
							the_content();
							echo '</div>';
						}// while
					} // if
					
					wp_reset_postdata();
					?>
					</dd>
					</div><!--ingredient info-->
			</div>
		

		</div><!-- tab-container -->
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
	<h1 class="section-title">Topical Roots 100% Organic Body Oil</h1>
	<h4> Proudly Serving the Maine Medicinal Cannabis Industry Since 2015</h4>
	<br/>

	<table class="tg">
	<tr>
		<th colspan="2" class="tg-title"><h2>Cannabis-Infused Body Oils</h2></th>
	</tr>
	  <tr>
	    <th class="tg-heading">1 oz Dropper (120 mg*)</th>
	    <th class="tg-heading">1 oz Dropper (240 mg*)</th>
	  </tr>
	  <tr>
	    <td class="tg-cell">$20 each</td>
	    <td class="tg-cell">$24 each</td>
	  </tr>
	  <tr>
	  	<th colspan="2" class="tg-title">
	  	<p>*mg Phytocannabinoids (m/v)</p>
	  	<a class="buy-now">Buy Now</a>
	  	<p>Please Contact Us for wholesale pricing</p>
	  	</th>
	  </tr>
	</table>
	<br/><br/>
	<table class="tg">
	<tr>
		<th class="tg-title"><h2>Non-Cannabis Body Oils</h2></th>
	</tr>
	  <tr>
	    <th class="tg-heading2">1 oz Dropper</th>
	  </tr>
	  <tr>
	    <td class="tg-cell">$12 each</td>
	  </tr>
	  <tr>
	  	<th class="tg-title">
	  	<a class="buy-now2">Buy Now</a>
	  	<p>Please Contact Us for wholesale pricing</p>
	  	</th>
	  </tr>
	</table>
	<h2 class="section-title">Free Delivery!</h2>
	<h4>There is no charge for deliveries throughout southern Maine with a minimum purchase of $50. Deliveries are made Wednesdays and Sundays 8am-8pm.</h4>
	
</section><!-- pricing -->

<div class="main-wrapper">
	<section id="uses">
		<img src="<?php echo get_stylesheet_directory_uri() . '/images/uses_hands.png' ?>" alt="Hands">
		<h1 class="section-title">Therapeutic Uses</h1>
		<h2 class="body-conditions">Body Conditions</h2>
		<div class="condition-table">
			<div class="condition-cell">
				<ul class="body-list">
					<li>pre-workout stiffness</li>
					<li>post-workout soreness</li>
					<li>rheumatoid arthritis</li>
					<li>osteoarthritis</li>
					<li>tendonitis</li>
					<li>strains, sprains, & bruises</li>
					<li>pinched nerves</li>
					<li>athletic injury</li>
					<li>traumatic injury</li>
					<li>back pain</li>
					<li>joint pain</li>
					<li>scar tissue</li>
				</ul>
			</div><!-- condition-cell -->
			<div class="condition-cell">
				<ul class="body-list">
					<li>carpel tunnel syndrome</li>
					<li>movement disorders</li>
					<li>Lyme disease</li>
					<li>anxiety and stress </li>
					<li>fibromyalgia</li>
					<li>gout</li>
					<li>restless leg syndrome</li>
					<li>multiple sclerosis</li>
					<li>diabetic foot pain</li>
					<li>phantom limb symptoms</li>
					<li>hemorrhoids (unscented)</li>
					<li>tension headaches</li>
				</ul>
			</div><!-- condition-cell -->
		</div><!-- body-conditions -->
		<h2 class="skin-conditions">Skin Conditions</h2>
		<div class="condition-table">
			<div class="condition-cell">
				<ul class="skin-list">
					<li>psoriasis (unscented)</li>
					<li>eczema (unscented)</li>
					<li>sun spots</li>
					<li>acne (unscented)</li>
					<li>dry skin</li>
					<li>chapped lips</li>
					<li>chapped knuckles</li>
					<li>nail fungus</li>
					<li>razor burn (unscented/cooling)</li>
				</ul>
			</div>

			<div class="condition-cell">
				<ul class="skin-list">
					<li>tattoo aftercare(unscented)</li>
					<li>minor scrapes & scar tissue </li>
					<li>fungal & viral skin rashes</li>
					<li>first degree burns</li>
					<li>minor frostbite</li>
					<li>bug bites</li>
					<li>cold sores (unscented/cooling)</li>
					<li>detoxification (apply 20 minutes before showering for an enhanced detox effect)</li>
				</ul>
			</div>
		</div>
	</section><!-- uses -->
</div><!-- main-wrapper (2) -->

<section id="story">
	<?php 
					$query = new WP_query('pagename=the-topical-roots-story');
					$post_id = $query->queried_object->ID;
					// The Loop
					if ( $query->have_posts() ) {
						while ( $query->have_posts() ) {
							$query->the_post();
							echo '<h2 class="section-title">';
							the_title();
							echo '</h2>';
							echo '<div class="entry-content">';
							the_content('Read more <i class="fa fa-angle-double-right"></i>');
							echo '</div>';
						}// while
					} // if
					
					wp_reset_postdata();
					?>
</section>

<div class="main-wrapper">
	<section id="faq">
		<h1 class="section-title">FAQs</h1>
		<dl id="faqs">
			<dt>Do I need to be a certified Maine cannabis patient to purchase Topical Roots body oil?</dt>
		  	<dd>Yes. If you are not a certified medicinal cannabis patient in Maine, we do offer non-cannabis body oil you are able to purchase. To purchase our cannabis-infused body oil you must be a certified Maine patient or a certified patient in another state that has medicinal cannabis. You must also have a valid license with you to validate your certification. One extra point! Out-of-state medical cannabis patients coming to Maine can go online to Maine DHHS Medical Marijuana Program and request the paperwork required for your doctor to complete before you are legally able make a medical cannabis purchase in Maine. For more information or to have questions answered, please Contact Us.</dd>
		 
		  	<dt>How does Topical Roots get the cannabis into the body oil?</dt>
		  	<dd>Topical Roots uses an organic proprietary process to extract our cannabis essential oils. This extract, or “absolute”, is then lab tested before being infused into our body oil.</dd>
		 
		  	<dt>What strains are used in Topical Roots body oil?</dt>
			<dd>Topical Roots uses organic hybrid genetics to maintain the consistency of our products. Specific genetics can be arranged with notice. Commission batches are available, please Contact Us for more information.</dd>

			<dt>Does Topical Roots make CBD products?</dt>
			<dd>Not currently, but this will be coming soon! We are currently seeking an organic CBD partner that meets our high quality standards. Stay tuned. </dd>

			<dt>How long does it take for Topical Roots body oil to work?</dt>
			<dd>It takes 5-10 minutes to begin feeling effects. Some individuals maintain this effect for as long as the remainder of the day. Others need to reapply the product hourly as symptoms persists. </dd>

			<dt>Can I enhance the effects of Topical Roots body oil?</dt>
			<dd>If you would like to get the most out of your body oil, apply it where it hurts after you take a warm shower and/or before you go to bed. This allows for maximum absorption and therapeutic effects. Another way to enhance effects anytime is to spend 30-60 seconds rubbing the oil into where it hurts. This manual pressure helps to increase absorption. Stay tuned to our Blog for additional tips and tricks!</dd>

			<dt>Do the effects of Topical Roots body oil diminish after using the product for a prolonged period?</dt>
			<dd>You will actually “learn” to use the cannabis essential oil as your body builds an increased number of CB2 receptors where you apply the oil. This happens at the cellular level! Most users have experienced results consistently. Other users actually experienced greater results over time. No users have experienced a decrease in effectiveness over time. </dd>

			<dt>How do I avoid getting excess oil on my hands?</dt>
			<dd>To avoid getting excess oil on your hands, apply our body oil where you want it. This avoids getting too much oil on your hands. If you are trying to apply our oil to your hands, you may wish to apply it directly to the back of one of your hands. From there, rub the backs of your hands together before finally rubbing the oil in with your palms. If you have excess oil on your hands, rub it on your neck! Or another area that could use some love…your neck is just typically exposed and in need of as much help as it can get. </dd>

			<dt>How long does Topical Roots scented body oils remain aromatic?</dt>
			<dd>Although pleasant, the high quality organic essential oils in Topical Roots scented cannabis body oils dissipate over 10-20 minutes and are nearly gone from the surface of the skin within a half hour. This allows you to get the relief you need without having to stink up the office or nauseate your family at the dinner table.</dd>

			<dt>Do Topical Roots body oils work well for those with sensitive skin?</dt>
			<dd>Topical Roots body oils are formulated to be compatible with many skin types. That said, please apply a few drops before applying a larger amount. If you are concerned you may be sensitive to the cooling and/or warming formulas, please consult our team and your physician before beginning use…We also offer unscented body oil!</dd>

			<dt>Do the Cooling and Warming formulas work better than the Unscented formula?</dt>
			<dd>Not necessarily. Those with sensitive skin conditions often benefit most from our unscented formula. For those who are able to use essential oils on their skin, the cooling and warming formulas do enhance the penetration and effect of the cannabis essential oil. These formulas each offer unique therapeutic properties characteristic of their %100 organic essential oil blend. Please see our Ingredients and our Blog to learn more. </dd>

			<dt>Are the Cooling and Warming formulas intended to be combined?</dt>
			<dd>Our cooling and warming formulas are intended to be used separately. When you combine these formulas, the aromatics are no longer optimized. If you do wish to combine the two formulas, we recommend doing so in equal parts. If you are interested in weakening the aromatics of our body oils, we do recommend combining our unscented formula with either our warming or cooling formulas. This is not necessary or desired by most users, but we want this to be comprehensive.</dd>

			<dt>Do I need to worry about staining my clothes?</dt>
			<dd>When used as directed you don’t need to worry about staining your clothes!!! Just try not to tip over the bottle over onto your favorite sweater or pants.</dd>

			<dt>Who assures the quality of Topical Roots body oil?</dt>
			<dd>The cannabis essential oil in Topical Roots cannabis-infused body oil undergoes independent purity testing by Proverde Labs in Portland, Maine. The non-cannabis plant oils and essential oils are purity tested and guaranteed certified organic by Mountain Rose Herbs in Eugene, Oregon. Documentation of all quality standards are kept on file.  </dd>

			<dt>Does Topical Roots body oil show up on a drug test?</dt>
			<dd>Topical Roots body oil acts at the level of your peripheral nervous system. The phytocannabinoids in our products do not enter into your central nervous system, and therefore will not put a user at risk for testing positive for cannabis. More literature will be posted soon to fully answer this question. </dd>
		</dl>
	</section><!-- faqs -->

</div><!-- main-wrapper (3) -->

</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>