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

<section id="story">
		<h1 class="section-title">The Topical Roots Story</h1>

		<div class="story-box">
			<div class="story-cell">
				<p>Topical Roots was founded by a Maine medicinal cannabis patient in order to alleviate chronic pain symptoms without causing psychoactive effects. A passion for biochemistry and the healing powers of cannabis essential oil led this scientist, patient, and company on a journey to bring to market a highly-effective and versatile organic cannabis topical. Topical Root’s body oil is a non-psychoactive solution that targets pain at its source. With possibly no side effects, our topical body oil redefines cannabis as a powerful and irreplaceable herb in our modern apothecary.</p>
				<p>Topical Root’s body oil is scientifically formulated for daily use and/or widespread application. This includes massage! It’s as simple as rubbing the oil where it hurts. From bumps and bruises, to arthritis and joint pain, to traumatic injury and neuropathic pain, Topical Roots body oil could reduce or eliminate your symptoms. For those with skin conditions such as eczema, psoriasis, herpes simplex, acne, fungal and/or viral rashes, Topical Roots body oil could reduce or eliminate your condition.</p>
			</div><!-- story-cell -->
			<div class="story-cell">
				<p>At Topical Roots, our secret is using only the highest quality ingredients on the market. Organic, expeller-pressed, sesame, hempseed, almond, and jojoba oils comprise the base of our body oils. Your skin produces oils naturally, and readily absorbs our base blend with delight. Our organic proprietary essential oil blends enhance the absorption and effectiveness of arguably the most medicinally potent ingredient, the organic essential oil of cannabis sativa.</p>
				<a href="story" class="read-more">Read More <i class="fa fa-chevron-right"></i></a>
			</div><!-- story-cell -->
	</div><!-- story-box -->
</section>

<div class="main-wrapper">
	<section id="faq">
		<h1 class="section-title">FAQs</h1>
		<dl id="faqs">
			<dt>Do I need to be a registered patient to purchase TR pain oil?</dt>
		  	<dd>You must be a registered patient in ME or another state that has medicinal cannabis. ME has a reciprocity law that allows ME caregivers and dispensaries to honor out of state medicinal cannabis licenses. You must have your designation card if you are a ME patient. You must also have a valid license with you to validate your certification. One extra point! Out-of-state medical cannabis patients coming to Maine can go online to Maine DHHS Medical Marijuana Program and request the paperwork required for your doctor to complete before you are legally able make a medical cannabis purchase in Maine. For more information or to have questions answered, please contact us.</dd>
		 
		  	<dt>Does TR pain oil work well for those with sensitive skin?</dt>
		  	<dd>TR pain oil is formulated to be compatible with many skin types. That said, please apply a few drops before applying a larger amount. We also offer an unscented pain oil!</dd>
		 
		  	<dt>Can I enhance the effect of TR pain oil?</dt>
		  	<dd>If you would like to get the most out of your pain oil apply it where it hurts after you take a warm shower and/or before you go to bed. This allows for maximum absorption and therapeutic effects.</dd>
		
			<dt>Do the effects of TR pain oil diminish after using the product for a while?</dt>
			<dd>Your body will “learn” to use the cannabis essential oil as your body builds an increased number of CB2 receptors where you apply the pain oil. This happens at the cellular level! Most users have actually experienced results consistently. There are those who have experienced greater results over time. No users have experienced a decrease in effectiveness over time. </dd>

			<dt>How long does TR pain oil remain aromatic?</dt>
			<dd>Although pleasant, the high quality organic essential oils in TR cannabis pain oil dissipate over 10-20 minutes and are nearly gone from the surface of the skin within a half hour. This allows you to get the relief you need without having to stink up the office or nauseate your family at the dinner table.</dd>

			<dt>Can I have an allergic reaction to TR pain oil?</dt>
			<dd>While no negative skin reactions have occurred, those who are concerned about a possible allergic reaction should talk to their doctor before trying this product. Botanical oils in general, although highly diluted in this product, can cause allergic reactions in individuals. TR took this into careful consideration and even consulted leading botanical and skincare experts when formulating this product. We also offer an unscented pain oil!</dd>

			<dt>Who assures the quality of TR pain oil?</dt>
			<dd>All TR pain oil undergoes thorough independent testing by Proverde Labs, LLC out of Portland Maine. </dd>

			<dt>What strains are used in TR pain oil?</dt>
			<dd>TR only uses organic hybrid genetics to maintain the consistency of our product. Specific genetics can be arranged with prior notice. </dd>

			<dt>How does TR get the cannabis oil into the product?</dt>
			<dd>TRs uses an entirely organic proprietary process to extract our cannabis essential oils. This extract, or “absolute,” is then infused into the carrier oil base. These proprietary processes will enable our company to stay ahead of competitors that are sure to copycat our products in the future. </dd>

			<dt>Does TR make CBD products?</dt>
			<dd>Not currently, but this will be coming! TR is currently seeking an organic CBD partner that meets our high quality standards. Stay tuned. </dd>

			<dt>Does TR pain oil show up on a drug test?</dt>
			<dd>No positive reports have come to light, but I would consult your physician if you have a related concern. More literature will be posted soon to fully answer this question.</dd>
		</dl>
	</section><!-- faqs -->

</div><!-- main-wrapper (3) -->

</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>