<?php
/*
Template Name: Portfolio
*/
?>

<?php get_header(); ?>

<?php get_template_part('icon-social'); ?>

			<main role="main" class="main main--full">

				<div class="portfolio__header">
					<div class="portfolio__intro">
						<p>Hi, my name is Jayhan Sim, I am a designer from Kuala Lumpur, Malaysia with focus on website and mobile UI/UX designs. Besides designing, I also code designs to HTML, CSS and Javascript. Need to be dynamic? I can implement static codes to Wordpress. Currently I am working in a startup call <a href="http://www.imoney.my">iMoney</a>, but I also do freelances as well with focus on mobile designs.</p>
						<p><a href="http://www.jay-han.com/resume.pdf" class="btn">Download my CV</a></p>
					</div>
					<ul class="social social--portfolio">
						<li>
							<a href="https://dribbble.com/jayhan">
								<svg class="svg-icon__social icon-dribbble">
  								<use xlink:href="#icon-dribbble" />
								</svg>
								Dribbble
							</a>
						</li>
						<li>
							<a href="https://www.facebook.com/Jayhan.Loves.Design.and.Japan">
								<svg class="svg-icon__social icon-facebook">
  								<use xlink:href="#icon-facebook" />
								</svg>
								Facebook
							</a>
						</li>
						<li>
							<a href="https://twitter.com/jayhan">
								<svg class="svg-icon__social icon-twitter">
  								<use xlink:href="#icon-twitter" />
								</svg>
								Twitter
							</a>
						</li>
						<li>
							<a href="https://www.linkedin.com/profile/public-profile-settings?trk=prof-edit-edit-public_profile">
								<svg class="svg-icon__social icon-linkedin">
  								<use xlink:href="#icon-linkedin" />
								</svg>
								LinkedIn
							</a>
						</li>
					</ul>
				</div>

				<div class="portfolio__loading">
					Loading...
				</div>

				<section class="portfolio portfolio__dribbble" id="dribbble">

				</section>

<?php get_footer(); ?>