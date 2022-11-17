<?php

return array(

	// image
	'image'           => array(
		'news1'       => 'https://jegtheme.com/asset/jnews/demo/default/news1.jpg',
		'news2'       => 'https://jegtheme.com/asset/jnews/demo/default/news2.jpg',
		'news3'       => 'https://jegtheme.com/asset/jnews/demo/default/news3.jpg',
		'news4'       => 'https://jegtheme.com/asset/jnews/demo/default/news4.jpg',
		'news5'       => 'https://jegtheme.com/asset/jnews/demo/default/news5.jpg',
		'news6'       => 'https://jegtheme.com/asset/jnews/demo/default/news6.jpg',
		'news7'       => 'https://jegtheme.com/asset/jnews/demo/default/news7.jpg',
		'news8'       => 'https://jegtheme.com/asset/jnews/demo/default/news8.jpg',
		'news9'       => 'https://jegtheme.com/asset/jnews/demo/default/news9.jpg',
		'news10'      => 'https://jegtheme.com/asset/jnews/demo/default/news10.jpg',
		'news11'      => 'https://jegtheme.com/asset/jnews/demo/default/news11.jpg',
		'news12'      => 'https://jegtheme.com/asset/jnews/demo/default/news12.jpg',

		'favicon'     => 'https://jegtheme.com/asset/jnews/demo/default/favicon.png',
		'logo'        => 'https://jegtheme.com/asset/jnews/demo/newsplus/logo.png',
		'logo2x'      => 'https://jegtheme.com/asset/jnews/demo/newsplus/logo@2x.png',
		'logo_dark'   => 'https://jegtheme.com/asset/jnews/demo/newsplus/logo_dark.png',
		'logo_dark2x' => 'https://jegtheme.com/asset/jnews/demo/newsplus/logo_dark@2x.png',

		'ad_728x90'   => 'https://jegtheme.com/asset/jnews/demo/default/ad_728x90.png',
	),

	// create taxonomy
	'taxonomy'        => array(
		'category' => array(
			'business'  => array(
				'title' => 'Business',
			),
			'culture'   => array(
				'title' => 'Culture',
			),
			'economy'   => array(
				'title' => 'Economy',
			),
			'lifestyle' => array(
				'title' => 'Lifestyle',
			),
			'health'    => array(
				'title' => 'Health',
			),
			'travel'    => array(
				'title' => 'Travel',
			),
			'opinion'   => array(
				'title' => 'Opinion',
			),
			'politics'  => array(
				'title' => 'Politics',
			),
			'tech'      => array(
				'title' => 'Tech',
			),
			'world'     => array(
				'title' => 'World',
			),
		),
		'post_tag' => array(
			'shopie-turner' => array(
				'title' => 'Bill Gates',
			),
			'corona-virus'  => array(
				'title' => 'Corona Virus',
			),
			'covid-19'      => array(
				'title' => 'COVID-19',
			),
			'donald-trump'  => array(
				'title' => 'Donald Trump',
			),
			'epidemic'      => array(
				'title' => 'Epidemic',
			),
			'movie'         => array(
				'title' => 'Movie',
			),
			'music'         => array(
				'title' => 'Music',
			),
			'pandemic'      => array(
				'title' => 'Pandemic',
			),
			'tv-shows'      => array(
				'title' => 'TV Shows',
			),
		),
	),

	// post & page
	'post'            => array(
		'velicia-huston-on-growing-up-and-growing-older-in-hollywood' => array(
			'title'          => 'For Some Trump Voters, Coronavirus Was The Last Straw',
			'content'        => 'post2.txt',
			'post_type'      => 'post',
			'featured_image' => 'news1',
			'taxonomy'       => array(
				'category' => 'opinion,politics,world',
				'post_tag' => 'covid-19,donald-trump,epidemic,tv-shows',
			),
			'metabox'        => array(
				'jnews_primary_category' => array( 'id' => '{{category:economy:id}}' ),
				'post_subtitle'          => 'Trump is selling coronavirus coins and other claims fact-checked',
				'_format_video_embed'    => 'https://www.youtube.com/watch?v=YdJc7-ZEuT0',
			),
		),
		'coronavirus-warning-over-easing-lockdown-measures-too-quickly' => array(
			'title'          => 'Coronavirus: Warning over easing lockdown measures too quickly',
			'content'        => 'post1.txt',
			'post_type'      => 'post',
			'featured_image' => 'news2',
			'taxonomy'       => array(
				'category' => 'health,politics,world',
				'post_tag' => 'donald-trump,epidemic,pandemic,tv-shows',
			),
			'metabox'        => array(
				'jnews_primary_category' => array( 'id' => '{{category:world:id}}' ),
				'post_subtitle'          => 'When Will The Novel Coronavirus Pandemic Be Over?',
				'_format_video_embed'    => 'https://www.youtube.com/watch?v=YdJc7-ZEuT0',
			),
		),
		'top-10-tv-shows-to-binge-watch-during-lockdown'  => array(
			'title'          => 'Top 10 TV Shows to Binge Watch During Lockdown',
			'content'        => 'post2.txt',
			'post_type'      => 'post',
			'featured_image' => 'news3',
			'taxonomy'       => array(
				'category' => 'culture,lifestyle,opinion,travel',
				'post_tag' => 'corona-virus,donald-trump,movie,tv-shows',
			),
			'metabox'        => array(
				'jnews_primary_category' => array( 'id' => '{{category:economy:id}}' ),
				'post_subtitle'          => 'When Will The Coronavirus Pandemic Be Over?',
				'_format_video_embed'    => 'https://www.youtube.com/watch?v=YdJc7-ZEuT0',
			),
		),
		'working-from-home-is-the-new-normal-as-we-combat-the-covid-19' => array(
			'title'          => 'Working from home is the new normal as we combat the Covid-19',
			'content'        => 'post1.txt',
			'post_type'      => 'post',
			'featured_image' => 'news4',
			'taxonomy'       => array(
				'category' => 'economy,lifestyle,tech,world',
				'post_tag' => 'shopie-turner,corona-virus,movie,music',
			),
			'metabox'        => array(
				'jnews_primary_category' => array( 'id' => '{{category:health:id}}' ),
				'post_subtitle'          => 'When Will The Coronavirus Pandemic Be Over?',
				'_format_video_embed'    => 'https://www.youtube.com/watch?v=YdJc7-ZEuT0',
			),
		),
		'east-ventures-to-raise-funds-to-produce-covid-19-test-kits' => array(
			'title'          => 'East Ventures to raise funds to produce Covid-19 test kits',
			'content'        => 'post2.txt',
			'post_type'      => 'post',
			'featured_image' => 'news5',
			'taxonomy'       => array(
				'category' => 'health,opinion,tech',
				'post_tag' => 'shopie-turner,covid-19,epidemic,tv-shows',
			),
			'metabox'        => array(
				'jnews_primary_category' => array( 'id' => '{{category:opinion:id}}' ),
				'post_subtitle'          => 'When Will The Coronavirus Pandemic Be Over?',
				'_format_video_embed'    => 'https://www.youtube.com/watch?v=YdJc7-ZEuT0',
			),
		),
		'your-blonde-hair-needs-these-purple-shampoos-for-sure' => array(
			'title'          => 'Your Blonde Hair Needs These Purple Shampoos, For Sure',
			'content'        => 'post1.txt',
			'post_type'      => 'post',
			'featured_image' => 'news6',
			'taxonomy'       => array(
				'category' => 'health,lifestyle,opinion,world',
				'post_tag' => 'shopie-turner,corona-virus,covid-19,music',
			),
			'metabox'        => array(
				'jnews_primary_category' => array( 'id' => '{{category:opinion:id}}' ),
				'_format_video_embed'    => 'https://www.youtube.com/watch?v=YdJc7-ZEuT0',
			),
		),
		'indonesia-extends-covid-19-emergency-to-may-29-as-cases-rise' => array(
			'title'          => 'Indonesia Extends Covid-19 Emergency to May 29 as Cases Rise',
			'content'        => 'post2.txt',
			'post_type'      => 'post',
			'featured_image' => 'news7',
			'taxonomy'       => array(
				'category' => 'health,politics,travel,world',
				'post_tag' => 'shopie-turner,corona-virus,donald-trump,music',
			),
			'metabox'        => array(
				'jnews_primary_category' => array( 'id' => '{{category:world:id}}' ),
				'post_subtitle'          => 'The new cases were mostly found in Jakarta, followed by other cities.',
				'_format_video_embed'    => 'https://www.youtube.com/watch?v=YdJc7-ZEuT0',
			),
		),
		'trump-says-us-has-passed-the-peak-of-coronavirus-outbreak' => array(
			'title'          => "Trump Says US Has 'passed the peak' of Coronavirus Outbreak",
			'content'        => 'post1.txt',
			'post_type'      => 'post',
			'featured_image' => 'news8',
			'taxonomy'       => array(
				'category' => 'economy,opinion,politics,world',
				'post_tag' => 'corona-virus,movie,music,pandemic',
			),
			'metabox'        => array(
				'jnews_primary_category' => array( 'id' => '{{category:business:id}}' ),
				'post_subtitle'          => 'When Will The Coronavirus Pandemic Be Over?',
				'_format_video_embed'    => 'https://www.youtube.com/watch?v=YdJc7-ZEuT0',
			),
		),
		'these-things-you-should-know-before-getting-lip-injections' => array(
			'title'          => 'These Things You Should Know Before Getting Lip Injections',
			'content'        => 'post2.txt',
			'post_type'      => 'post',
			'featured_image' => 'news9',
			'taxonomy'       => array(
				'category' => 'health,politics',
				'post_tag' => 'shopie-turner,corona-virus,donald-trump,pandemic',
			),
			'metabox'        => array(
				'jnews_primary_category' => array( 'id' => '{{category::id}}' ),
				'_format_video_embed'    => 'https://www.youtube.com/watch?v=YdJc7-ZEuT0',
			),
		),
		'the-most-outrageous-kim-khasyian-outfits-of-all-time' => array(
			'title'          => 'The Most Outrageous Kim Khasyian Outfits of All Time',
			'content'        => 'post1.txt',
			'post_type'      => 'post',
			'featured_image' => 'news10',
			'taxonomy'       => array(
				'category' => 'culture,economy,lifestyle,travel',
				'post_tag' => 'shopie-turner,corona-virus,pandemic,tv-shows',
			),
			'metabox'        => array(
				'jnews_primary_category' => array( 'id' => '{{category:travel:id}}' ),
				'post_subtitle'          => 'OMG! this is just hilarious.',
				'_format_video_embed'    => 'https://www.youtube.com/watch?v=YdJc7-ZEuT0',
			),
		),
		'honesty-crucial-between-patients-health-workers-during-pandemic' => array(
			'title'          => 'Honesty Crucial Between Patients, Health Workers During Pandemic',
			'content'        => 'post2.txt',
			'post_type'      => 'post',
			'featured_image' => 'news11',
			'taxonomy'       => array(
				'category' => 'economy,opinion,tech,travel',
				'post_tag' => 'donald-trump,movie,pandemic,tv-shows',
			),
			'metabox'        => array(
				'jnews_primary_category' => array( 'id' => '{{category::id}}' ),
				'post_subtitle'          => 'When Will The Coronavirus Pandemic Be Over?',
				'_format_video_embed'    => 'https://www.youtube.com/watch?v=YdJc7-ZEuT0',
			),
		),
		'coffee-industry-must-find-new-ways-to-stay-afloat' => array(
			'title'          => 'Coffee Industry Must Find New Ways to Stay Afloat',
			'content'        => 'post1.txt',
			'post_type'      => 'post',
			'featured_image' => 'news12',
			'taxonomy'       => array(
				'category' => 'business,health,opinion,politics',
				'post_tag' => 'shopie-turner,donald-trump,music,pandemic',
			),
			'metabox'        => array(
				'jnews_primary_category' => array( 'id' => '{{category:lifestyle:id}}' ),
				'post_subtitle'          => 'Dalgona coffee can easily be made at home',
				'_format_video_embed'    => 'https://www.youtube.com/watch?v=YdJc7-ZEuT0',
			),
		),
		'u-s-supreme-court-meets-by-phone-due-to-coronavirus-pandemic' => array(
			'title'          => 'U.S. Supreme Court Meets by Phone Due to Coronavirus Pandemic',
			'content'        => 'post2.txt',
			'post_type'      => 'post',
			'featured_image' => 'news1',
			'taxonomy'       => array(
				'category' => 'economy,opinion,politics,world',
				'post_tag' => 'donald-trump,epidemic,movie,music',
			),
			'metabox'        => array(
				'jnews_primary_category' => array( 'id' => '{{category:business:id}}' ),
				'post_subtitle'          => 'When Will The Coronavirus Pandemic Be Over?',
				'_format_video_embed'    => 'https://www.youtube.com/watch?v=YdJc7-ZEuT0',
			),
		),
		'fun-things-you-should-do-for-yourself-during-self-quarantine' => array(
			'title'          => 'Fun Things You Should Do for Yourself During Self-Quarantine',
			'content'        => 'post1.txt',
			'post_type'      => 'post',
			'featured_image' => 'news2',
			'taxonomy'       => array(
				'category' => 'culture,economy,health,lifestyle,opinion',
				'post_tag' => 'donald-trump,epidemic,music,tv-shows',
			),
			'metabox'        => array(
				'jnews_primary_category' => array( 'id' => '{{category:travel:id}}' ),
				'post_subtitle'          => 'When Will The Coronavirus Pandemic Be Over?',
				'_format_video_embed'    => 'https://www.youtube.com/watch?v=YdJc7-ZEuT0',
			),
		),
		'how-do-you-find-love-when-youre-stuck-at-home'   => array(
			'title'          => "How Do You Find Love When You're Stuck at Home?",
			'content'        => 'post2.txt',
			'post_type'      => 'post',
			'featured_image' => 'news3',
			'taxonomy'       => array(
				'category' => 'business,culture,lifestyle,world',
				'post_tag' => 'shopie-turner,epidemic,movie,tv-shows',
			),
			'metabox'        => array(
				'jnews_primary_category' => array( 'id' => '{{category:economy:id}}' ),
				'post_subtitle'          => 'Love during lockdown: Singles in US reinvent dating',
				'_format_video_embed'    => 'https://www.youtube.com/watch?v=YdJc7-ZEuT0',
			),
		),
		'how-this-painters-artful-pants-caught-the-eye-of-bella-hadid' => array(
			'title'          => 'How This Painter’s Artful Pants Caught the Eye of Bella Hadid',
			'content'        => 'post1.txt',
			'post_type'      => 'post',
			'featured_image' => 'news4',
			'taxonomy'       => array(
				'category' => 'business,culture,economy,lifestyle',
				'post_tag' => 'shopie-turner,donald-trump,epidemic,movie',
			),
			'metabox'        => array(
				'jnews_primary_category' => array( 'id' => '{{category:travel:id}}' ),
				'post_subtitle'          => 'You can have anything you want in life if you dress for it',
				'_format_video_embed'    => 'https://www.youtube.com/watch?v=YdJc7-ZEuT0',
			),
		),
		'why-is-everyone-reading-the-decameron-right-now' => array(
			'title'          => 'Why Is Everyone Reading The Decameron Right Now?',
			'content'        => 'post2.txt',
			'post_type'      => 'post',
			'featured_image' => 'news5',
			'taxonomy'       => array(
				'category' => 'culture,health,lifestyle,opinion,tech,travel',
				'post_tag' => 'covid-19,donald-trump,epidemic,tv-shows',
			),
			'metabox'        => array(
				'jnews_primary_category' => array( 'id' => '{{category:economy:id}}' ),
				'_format_video_embed'    => 'https://www.youtube.com/watch?v=YdJc7-ZEuT0',
			),
		),
		'coronavirus-how-to-avoid-overeating-when-working-from-home' => array(
			'title'          => 'Coronavirus: How to avoid overeating when working from home',
			'content'        => 'post1.txt',
			'post_type'      => 'post',
			'featured_image' => 'news6',
			'taxonomy'       => array(
				'category' => 'health,lifestyle,politics,tech,travel',
				'post_tag' => 'shopie-turner,corona-virus,covid-19,pandemic',
			),
			'metabox'        => array(
				'jnews_primary_category' => array( 'id' => '{{category:opinion:id}}' ),
				'post_subtitle'          => 'When Will The Coronavirus Pandemic Be Over?',
				'_format_video_embed'    => 'https://www.youtube.com/watch?v=YdJc7-ZEuT0',
			),
		),
		'men-may-be-2-5-times-more-likely-to-die-from-covid-19-than-women' => array(
			'title'          => 'Men may be 2.5 times more likely to die from COVID-19 than women',
			'content'        => 'post2.txt',
			'post_type'      => 'post',
			'featured_image' => 'news7',
			'taxonomy'       => array(
				'category' => 'health,lifestyle,opinion,tech',
				'post_tag' => 'corona-virus,epidemic,pandemic,tv-shows',
			),
			'metabox'        => array(
				'jnews_primary_category' => array( 'id' => '{{category:opinion:id}}' ),
				'post_subtitle'          => 'You need to read this before booking your appointment',
				'_format_video_embed'    => 'https://www.youtube.com/watch?v=YdJc7-ZEuT0',
			),
		),
		'new-york-reports-15-child-cases-of-rare-disease-linked-to-covid-19' => array(
			'title'          => 'New York reports 15 child cases of rare disease linked to COVID-19',
			'content'        => 'post1.txt',
			'post_type'      => 'post',
			'featured_image' => 'news8',
			'taxonomy'       => array(
				'category' => 'economy,health,travel,world',
				'post_tag' => 'shopie-turner,corona-virus,donald-trump,pandemic',
			),
			'metabox'        => array(
				'jnews_primary_category' => array( 'id' => '{{category:world:id}}' ),
				'post_subtitle'          => 'When Will The Coronavirus Pandemic Be Over?',
				'_format_video_embed'    => 'https://www.youtube.com/watch?v=YdJc7-ZEuT0',
			),
		),
		'watches-are-yet-another-easy-way-rich-people-make-their-money-into-more-money' => array(
			'title'          => 'Watches Are Yet Another Easy Way Rich People Make Their Money Into More Money',
			'content'        => 'post2.txt',
			'post_type'      => 'post',
			'featured_image' => 'news9',
			'taxonomy'       => array(
				'category' => 'business,culture,economy,opinion,tech',
				'post_tag' => 'shopie-turner,covid-19,epidemic,movie',
			),
			'metabox'        => array(
				'jnews_primary_category' => array( 'id' => '{{category:lifestyle:id}}' ),
				'post_subtitle'          => 'The high-end watch market is a strong investment vehicle for wealthy people.',
				'_format_video_embed'    => 'https://www.youtube.com/watch?v=YdJc7-ZEuT0',
				'jnews_single_post'      => array(
					'override_template'   => '1',
					'override'            => array(
						array(
							'template'                 => '2',
							'single_blog_custom'       => '',
							'parallax'                 => '1',
							'fullscreen'               => '0',
							'layout'                   => 'right-sidebar',
							'sidebar'                  => 'default-sidebar',
							'second_sidebar'           => 'default-sidebar',
							'sticky_sidebar'           => '1',
							'share_position'           => 'float',
							'share_float_style'        => 'share-normal',
							'show_share_counter'       => '1',
							'show_view_counter'        => '1',
							'show_featured'            => '0',
							'show_post_meta'           => '1',
							'show_post_author'         => '0',
							'show_post_author_image'   => '0',
							'show_post_date'           => '1',
							'post_date_format'         => 'default',
							'post_date_format_custom'  => 'Y/m/d',
							'show_post_category'       => '0',
							'show_post_reading_time'   => '1',
							'post_reading_time_wpm'    => '300',
							'show_zoom_button'         => '0',
							'zoom_button_out_step'     => '1',
							'zoom_button_in_step'      => '1',
							'show_post_tag'            => '1',
							'show_prev_next_post'      => '0',
							'show_popup_post'          => '1',
							'number_popup_post'        => '1',
							'show_author_box'          => '1',
							'show_post_related'        => '0',
							'show_inline_post_related' => '1',
						),
					),
					'override_image_size' => '1',
					'image_override'      => array(
						array(
							'single_post_thumbnail_size' => 'no-crop',
							'single_post_gallery_size'   => 'crop-500',
						),
					),
				),
			),
		),
		'a-digital-media-startup-growing-up-with-millennial-women' => array(
			'title'          => 'A Digital Media Startup Growing Up With Millennial Women',
			'content'        => 'post1.txt',
			'post_type'      => 'post',
			'featured_image' => 'news10',
			'taxonomy'       => array(
				'category' => 'business,economy,opinion,tech',
				'post_tag' => 'shopie-turner,corona-virus,donald-trump,music',
			),
			'metabox'        => array(
				'jnews_primary_category' => array( 'id' => '{{category:culture:id}}' ),
				'post_subtitle'          => 'When Will The Coronavirus Pandemic Be Over?',
				'_format_video_embed'    => 'https://www.youtube.com/watch?v=YdJc7-ZEuT0',
			),
		),
		'10-ways-to-stay-productive-at-home-during-quarantine' => array(
			'title'          => '10 Ways To Stay Productive At Home During Quarantine',
			'content'        => 'post2.txt',
			'post_type'      => 'post',
			'featured_image' => 'news11',
			'taxonomy'       => array(
				'category' => 'business,culture,lifestyle,tech,travel',
				'post_tag' => 'corona-virus,movie,pandemic,tv-shows',
			),
			'metabox'        => array(
				'jnews_primary_category' => array( 'id' => '{{category:lifestyle:id}}' ),
				'post_subtitle'          => 'When Will The Coronavirus Pandemic Be Over?',
				'_format_video_embed'    => 'https://www.youtube.com/watch?v=YdJc7-ZEuT0',
			),
		),
		'bmw-may-have-canceled-its-hybrid-supercar-because-of-covid-19' => array(
			'title'          => 'BMW May Have Canceled Its Hybrid Supercar Because of Covid-19',
			'content'        => 'post1.txt',
			'post_type'      => 'post',
			'featured_image' => 'news12',
			'taxonomy'       => array(
				'category' => 'business,economy,tech',
				'post_tag' => 'donald-trump,epidemic,music,tv-shows',
			),
			'metabox'        => array(
				'jnews_primary_category' => array( 'id' => '{{category:culture:id}}' ),
				'post_subtitle'          => 'When Will The Coronavirus Pandemic Be Over?',
				'_format_video_embed'    => 'https://www.youtube.com/watch?v=YdJc7-ZEuT0',
			),
		),
		'10-immunity-boosting-foods-a-nutritionist-recommends' => array(
			'title'          => '10 Immunity-Boosting Foods a Nutritionist Recommends',
			'content'        => 'post2.txt',
			'post_type'      => 'post',
			'featured_image' => 'news1',
			'taxonomy'       => array(
				'category' => 'culture,health,lifestyle,opinion',
				'post_tag' => 'shopie-turner,epidemic,movie,pandemic',
			),
			'metabox'        => array(
				'jnews_primary_category' => array( 'id' => '{{category:opinion:id}}' ),
				'post_subtitle'          => 'These are the foods your body really needs to stay healthy.',
				'_format_video_embed'    => 'https://www.youtube.com/watch?v=YdJc7-ZEuT0',
			),
		),
		'the-important-things-you-learn-when-you-move-to-a-foreign-country' => array(
			'title'          => 'The Important Things You Learn When You Move to a Foreign Country',
			'content'        => 'post1.txt',
			'post_type'      => 'post',
			'featured_image' => 'news2',
			'taxonomy'       => array(
				'category' => 'culture,lifestyle,travel,world',
				'post_tag' => 'shopie-turner,donald-trump,movie,pandemic',
			),
			'metabox'        => array(
				'jnews_primary_category' => array( 'id' => '{{category:politics:id}}' ),
				'post_subtitle'          => 'What Is It Like to Move to Another Country?',
				'_format_video_embed'    => 'https://www.youtube.com/watch?v=YdJc7-ZEuT0',
			),
		),
		'tips-to-manage-your-mental-health-during-the-covid-19-outbreak' => array(
			'title'          => 'Tips to Manage Your Mental Health During the COVID-19 Outbreak',
			'content'        => 'post2.txt',
			'post_type'      => 'post',
			'featured_image' => 'news3',
			'taxonomy'       => array(
				'category' => 'health,lifestyle,opinion,politics',
				'post_tag' => 'shopie-turner,donald-trump,music,pandemic',
			),
			'metabox'        => array(
				'jnews_primary_category' => array( 'id' => '{{category:opinion:id}}' ),
				'post_subtitle'          => 'When Will The Coronavirus Pandemic Be Over?',
				'_format_video_embed'    => 'https://www.youtube.com/watch?v=YdJc7-ZEuT0',
			),
		),
		'fishermen-face-hard-times-but-the-public-can-help-by-buying-from-them-direct' => array(
			'title'          => 'Fishermen face hard times but the public can help by buying from them direct',
			'content'        => 'post1.txt',
			'post_type'      => 'post',
			'featured_image' => 'news4',
			'taxonomy'       => array(
				'category' => 'business,economy,travel,world',
				'post_tag' => 'shopie-turner,music,pandemic,tv-shows',
			),
			'metabox'        => array(
				'jnews_primary_category' => array( 'id' => '{{category:health:id}}' ),
				'post_subtitle'          => 'When Will The Coronavirus Pandemic Be Over?',
				'_format_video_embed'    => 'https://www.youtube.com/watch?v=YdJc7-ZEuT0',
			),
		),
		'trump-pivots-hard-away-from-fight-against-unvanquished-pandemic' => array(
			'title'          => 'Trump pivots hard away from fight against unvanquished pandemic',
			'content'        => 'post2.txt',
			'post_type'      => 'post',
			'featured_image' => 'news5',
			'taxonomy'       => array(
				'category' => 'culture,economy,politics',
				'post_tag' => 'shopie-turner,epidemic,music,pandemic',
			),
			'metabox'        => array(
				'jnews_primary_category' => array( 'id' => '{{category:business:id}}' ),
				'post_subtitle'          => 'When Will The Coronavirus Pandemic Be Over?',
				'_format_video_embed'    => 'https://www.youtube.com/watch?v=YdJc7-ZEuT0',
			),
		),
		'twitter-proves-adidas-superstars-still-dominate-fashionable-footwear' => array(
			'title'          => 'Twitter Proves Adidas Superstars Still Dominate Fashionable Footwear',
			'content'        => 'post1.txt',
			'post_type'      => 'post',
			'featured_image' => 'news6',
			'taxonomy'       => array(
				'category' => 'business,culture,economy,lifestyle',
				'post_tag' => 'shopie-turner,corona-virus,pandemic,tv-shows',
			),
			'metabox'        => array(
				'jnews_primary_category' => array( 'id' => '{{category:travel:id}}' ),
				'post_subtitle'          => 'Style is a way to say who you are without having to speak',
				'_format_video_embed'    => 'https://www.youtube.com/watch?v=YdJc7-ZEuT0',
			),
		),
		'california-fires-this-is-what-happens-when-you-breathe-in-smoke' => array(
			'title'          => 'California Fires: This Is What Happens When You Breathe In Smoke',
			'content'        => 'post2.txt',
			'post_type'      => 'post',
			'featured_image' => 'news7',
			'taxonomy'       => array(
				'category' => 'health,lifestyle,politics',
				'post_tag' => 'covid-19,epidemic,pandemic,tv-shows',
			),
			'metabox'        => array(
				'jnews_primary_category' => array( 'id' => '{{category::id}}' ),
				'_format_video_embed'    => 'https://www.youtube.com/watch?v=YdJc7-ZEuT0',
			),
		),
		'these-are-the-best-watches-from-around-the-web-this-week' => array(
			'title'          => 'These Are The Best Watches From Around The Web This Week',
			'content'        => 'post1.txt',
			'post_type'      => 'post',
			'featured_image' => 'news8',
			'taxonomy'       => array(
				'category' => 'business,culture,economy,tech',
				'post_tag' => 'shopie-turner,epidemic,pandemic,tv-shows',
			),
			'metabox'        => array(
				'jnews_primary_category' => array( 'id' => '{{category:economy:id}}' ),
				'post_subtitle'          => 'A budget tells us what we can\'t afford',
				'_format_video_embed'    => 'https://www.youtube.com/watch?v=YdJc7-ZEuT0',
			),
		),
		'kuta-offers-many-hotspots-for-people-with-alternative-lifestyles' => array(
			'title'          => 'Kuta Offers Many Hotspots for People with Alternative Lifestyles',
			'content'        => 'post2.txt',
			'post_type'      => 'post',
			'featured_image' => 'news9',
			'taxonomy'       => array(
				'category' => 'culture,lifestyle,opinion,travel,world',
				'post_tag' => 'corona-virus,donald-trump,epidemic,music',
			),
			'metabox'        => array(
				'jnews_primary_category' => array( 'id' => '{{category:politics:id}}' ),
				'post_subtitle'          => 'When Will The Coronavirus Pandemic Be Over?',
				'_format_video_embed'    => 'https://www.youtube.com/watch?v=YdJc7-ZEuT0',
			),
		),
		'covid-19-over-1000-test-positive-on-the-first-phase-of-rapid-testing' => array(
			'title'          => 'COVID-19: Over 1,000 test positive on the first phase of rapid testing',
			'content'        => 'post1.txt',
			'post_type'      => 'post',
			'featured_image' => 'news10',
			'taxonomy'       => array(
				'category' => 'opinion,politics,travel,world',
				'post_tag' => 'corona-virus,epidemic,movie,pandemic',
			),
			'metabox'        => array(
				'jnews_primary_category' => array( 'id' => '{{category:opinion:id}}' ),
				'post_subtitle'          => 'When Will The Coronavirus Pandemic Be Over?',
				'_format_video_embed'    => 'https://www.youtube.com/watch?v=YdJc7-ZEuT0',
			),
		),
		'instagram-is-testing-photo-albums-because-nothing-is-sacred-anymore' => array(
			'title'          => 'Instagram Is Testing Photo Albums, Because Nothing Is Sacred Anymore',
			'content'        => 'post2.txt',
			'post_type'      => 'post',
			'featured_image' => 'news11',
			'taxonomy'       => array(
				'category' => 'business,opinion,tech,travel',
				'post_tag' => 'corona-virus,donald-trump,movie,tv-shows',
			),
			'metabox'        => array(
				'jnews_primary_category' => array( 'id' => '{{category:culture:id}}' ),
				'post_subtitle'          => 'How influencers have pivoted in generation lockdown',
				'_format_video_embed'    => 'https://www.youtube.com/watch?v=YdJc7-ZEuT0',
			),
		),
		'photography-ideas-for-indoor-to-fight-boredom-during-isolation' => array(
			'title'          => 'Photography Ideas for Indoor to fight boredom during isolation',
			'content'        => 'post1.txt',
			'post_type'      => 'post',
			'featured_image' => 'news12',
			'taxonomy'       => array(
				'category' => 'business,economy,tech,travel',
				'post_tag' => 'corona-virus,covid-19,movie,pandemic',
			),
			'metabox'        => array(
				'jnews_primary_category' => array( 'id' => '{{category:culture:id}}' ),
				'post_subtitle'          => 'Improve your photography during isolation',
				'_format_video_embed'    => 'https://www.youtube.com/watch?v=YdJc7-ZEuT0',
			),
		),
		'exclusive-selena-gomez-reveals-why-she-reconnected-with-justin-bieber' => array(
			'title'          => 'Exclusive: Selena Gomez Reveals Why She Reconnected with Justin Bieber',
			'content'        => 'post2.txt',
			'post_type'      => 'post',
			'featured_image' => 'news1',
			'taxonomy'       => array(
				'category' => 'business,lifestyle,politics,tech',
				'post_tag' => 'shopie-turner,corona-virus,movie,tv-shows',
			),
			'metabox'        => array(
				'jnews_primary_category' => array( 'id' => '{{category:travel:id}}' ),
				'post_subtitle'          => 'Welcome to the New Normal?',
				'_format_video_embed'    => 'https://www.youtube.com/watch?v=YdJc7-ZEuT0',
			),
		),
		'elton-john-tells-noel-gallagher-what-he-thinks-about-his-new-album' => array(
			'title'          => 'Elton John Tells Noel Gallagher What He Thinks About His New Album',
			'content'        => 'post1.txt',
			'post_type'      => 'post',
			'featured_image' => 'news2',
			'taxonomy'       => array(
				'category' => 'business,culture,economy,opinion,tech',
				'post_tag' => 'covid-19,movie,music,tv-shows',
			),
			'metabox'        => array(
				'jnews_primary_category' => array( 'id' => '{{category::id}}' ),
				'post_subtitle'          => 'When Will The Coronavirus Pandemic Be Over?',
				'_format_video_embed'    => 'https://www.youtube.com/watch?v=YdJc7-ZEuT0',
			),
		),

		// page
		'home'                                            => array(
			'title'     => 'Home',
			'content'   => 'home1.txt',
			'post_type' => 'page',
			'metabox'   => array(
				'_wp_page_template'          => 'template-builder.php',
				'_wpb_shortcodes_custom_css' => '.vc_custom_1588914589946{background-color: #f9f9f9 !important;}.vc_custom_1588914577961{margin-bottom: 15px !important;padding-top: 15px !important;}',
				'_wpb_post_custom_css'       => '.jeg_content{padding-top:0}.vc_cta3-actions{margin-top:24px}.vc_general.vc_cta3{padding:30px}.vc_general.vc_cta3.vc_cta3-style-classic{border:0}@media only screen and (min-width:768px) and (max-width:991px){.vc_general.vc_cta3 h2{font-size:18px}.vc_btn3.vc_btn3-size-md{font-size:12px;padding-left:20px;padding-right:20px}}.jeg_postblock_27 .jeg_block_navigation{margin:0 0 30px}',
				'_elementor_data'            => 'home1.json',
				'_elementor_edit_mode'       => 'builder',
				'_elementor_page_settings'   => array(
					'custom_css' => '.vc_custom_1588914589946{background-color: #f9f9f9 !important;}.vc_custom_1588914577961{margin-bottom: 15px !important;padding-top: 15px !important;}.jeg_content{padding-top:0}.vc_cta3-actions{margin-top:24px}.vc_general.vc_cta3{padding:30px}.vc_general.vc_cta3.vc_cta3-style-classic{border:0}@media only screen and (min-width:768px) and (max-width:991px){.vc_general.vc_cta3 h2{font-size:18px}.vc_btn3.vc_btn3-size-md{font-size:12px;padding-left:20px;padding-right:20px}}.jeg_postblock_27 .jeg_block_navigation{margin:0 0 30px}',
				),
			),
		),
		'subscription'                                    => array(
			'title'     => 'Subscription',
			'content'   => 'subscription.txt',
			'post_type' => 'page',
			'metabox'   => array(
				'_wp_page_template'          => 'template-builder.php',
				'_wpb_shortcodes_custom_css' => '.vc_custom_1588920136898{margin-bottom: -300px !important;background-color: #f7f7f7 !important;}',
				'_wpb_post_custom_css'       => '.jeg_content{padding-top:0}',
				'_elementor_data'            => 'subscription.json',
				'_elementor_edit_mode'       => 'builder',
				'_elementor_page_settings'   => array(
					'custom_css' => '.jeg_content{padding-top:0}.vc_custom_1588920136898{margin-bottom: -300px !important;background-color: #f7f7f7 !important;}',
				),
			),
		),

	),

	// menu location
	'menu_location'   => array(
		'main-navigation'   => array(
			'title'    => 'Main Navigation',
			'location' => 'navigation',
		),
		'mobile-navigation' => array(
			'title'    => 'Mobile Navigation',
			'location' => 'mobile_navigation',
		),
	),

	// menu it self
	'menu'            => array(

		// main menu
		'home'             => array(
			'location'       => 'main-navigation',
			'menu-item-data' => array(
				'menu-item-title'     => 'Home',
				'menu-item-type'      => 'post_type',
				'menu-item-object'    => 'page',
				'menu-item-object-id' => '{{post:home:id}}',
				'menu-item-status'    => 'publish',
			),
		),

		'world'            => array(
			'location'       => 'main-navigation',
			'menu-item-data' => array(
				'menu-item-title'     => 'World',
				'menu-item-type'      => 'taxonomy',
				'menu-item-object'    => 'category',
				'menu-item-object-id' => '{{category:world:id}}',
				'menu-item-status'    => 'publish',
			),
		),

		'opinion'          => array(
			'location'       => 'main-navigation',
			'menu-item-data' => array(
				'menu-item-title'     => 'Opinion',
				'menu-item-type'      => 'taxonomy',
				'menu-item-object'    => 'category',
				'menu-item-object-id' => '{{category:opinion:id}}',
				'menu-item-status'    => 'publish',
			),
		),

		'economy'          => array(
			'location'       => 'main-navigation',
			'menu-item-data' => array(
				'menu-item-title'     => 'Economy',
				'menu-item-type'      => 'taxonomy',
				'menu-item-object'    => 'category',
				'menu-item-object-id' => '{{category:economy:id}}',
				'menu-item-status'    => 'publish',
			),
		),

		'business'         => array(
			'location'       => 'main-navigation',
			'menu-item-data' => array(
				'menu-item-title'     => 'Business',
				'menu-item-type'      => 'taxonomy',
				'menu-item-object'    => 'category',
				'menu-item-object-id' => '{{category:business:id}}',
				'menu-item-status'    => 'publish',
			),
		),
		'culture'          => array(
			'location'       => 'main-navigation',
			'menu-item-data' => array(
				'menu-item-title'     => 'Culture',
				'menu-item-type'      => 'taxonomy',
				'menu-item-object'    => 'category',
				'menu-item-object-id' => '{{category:culture:id}}',
				'menu-item-status'    => 'publish',
			),
		),
		'politics'         => array(
			'location'       => 'main-navigation',
			'menu-item-data' => array(
				'menu-item-title'     => 'Politics',
				'menu-item-type'      => 'taxonomy',
				'menu-item-object'    => 'category',
				'menu-item-object-id' => '{{category:politics:id}}',
				'menu-item-status'    => 'publish',
			),
		),
		'lifestyle'        => array(
			'location'       => 'main-navigation',
			'menu-item-data' => array(
				'menu-item-title'     => 'Lifestyle',
				'menu-item-type'      => 'taxonomy',
				'menu-item-object'    => 'category',
				'menu-item-object-id' => '{{category:lifestyle:id}}',
				'menu-item-status'    => 'publish',
			),
			'metabox'        => array(
				'menu_item_jnews_mega_menu' => array(
					'type'         => 'category_2',
					'category'     => '{{category:lifestyle:id}}',
					'number'       => '6',
					'trending_tag' => '{{taxonomy:post_tag:covid-19:id}},{{taxonomy:post_tag:donald-trump:id}},{{taxonomy:post_tag:pandemic:id}},{{taxonomy:post_tag:shopie-turner:id}},{{taxonomy:post_tag:corona-virus:id}}',
				),
			),
		),
		'tech'             => array(
			'location'       => 'main-navigation',
			'menu-item-data' => array(
				'menu-item-title'     => 'Tech',
				'menu-item-type'      => 'taxonomy',
				'menu-item-object'    => 'category',
				'menu-item-object-id' => '{{category:tech:id}}',
				'menu-item-status'    => 'publish',
			),
		),

		// Mobile Menu
		'home-mobile'      => array(
			'location'       => 'mobile-navigation',
			'menu-item-data' => array(
				'menu-item-title'     => 'Home',
				'menu-item-type'      => 'post_type',
				'menu-item-object'    => 'page',
				'menu-item-object-id' => '{{post:home:id}}',
				'menu-item-status'    => 'publish',
			),
		),
		'subscription'     => array(
			'location'       => 'mobile-navigation',
			'menu-item-data' => array(
				'menu-item-title'     => 'Subscription',
				'menu-item-type'      => 'post_type',
				'menu-item-object'    => 'page',
				'menu-item-object-id' => '{{post:subscription:id}}',
				'menu-item-status'    => 'publish',
			),
		),
		'category'         => array(
			'location'       => 'mobile-navigation',
			'menu-item-data' => array(
				'menu-item-title'  => 'Category',
				'menu-item-type'   => 'custom',
				'menu-item-url'    => '#',
				'menu-item-status' => 'publish',
			),
		),
		// in category
		'mobile-business'  => array(
			'location'       => 'mobile-navigation',
			'menu-item-data' => array(
				'menu-item-title'     => 'Business',
				'menu-item-type'      => 'taxonomy',
				'menu-item-object'    => 'category',
				'menu-item-object-id' => '{{category:business:id}}',
				'menu-item-status'    => 'publish',
				'menu-item-parent-id' => '{{menu:category:id}}',
			),
		),
		'mobile-culture'   => array(
			'location'       => 'mobile-navigation',
			'menu-item-data' => array(
				'menu-item-title'     => 'Culture',
				'menu-item-type'      => 'taxonomy',
				'menu-item-object'    => 'category',
				'menu-item-object-id' => '{{category:culture:id}}',
				'menu-item-status'    => 'publish',
				'menu-item-parent-id' => '{{menu:category:id}}',
			),
		),
		'mobile-economy'   => array(
			'location'       => 'mobile-navigation',
			'menu-item-data' => array(
				'menu-item-title'     => 'Economy',
				'menu-item-type'      => 'taxonomy',
				'menu-item-object'    => 'category',
				'menu-item-object-id' => '{{category:economy:id}}',
				'menu-item-status'    => 'publish',
				'menu-item-parent-id' => '{{menu:category:id}}',
			),
		),
		'mobile-lifestyle' => array(
			'location'       => 'mobile-navigation',
			'menu-item-data' => array(
				'menu-item-title'     => 'Lifestyle',
				'menu-item-type'      => 'taxonomy',
				'menu-item-object'    => 'category',
				'menu-item-object-id' => '{{category:lifestyle:id}}',
				'menu-item-status'    => 'publish',
				'menu-item-parent-id' => '{{menu:category:id}}',
			),
		),
		'mobile-health'    => array(
			'location'       => 'mobile-navigation',
			'menu-item-data' => array(
				'menu-item-title'     => 'Health',
				'menu-item-type'      => 'taxonomy',
				'menu-item-object'    => 'category',
				'menu-item-object-id' => '{{category:health:id}}',
				'menu-item-status'    => 'publish',
				'menu-item-parent-id' => '{{menu:category:id}}',
			),
		),
		'mobile-travel'    => array(
			'location'       => 'mobile-navigation',
			'menu-item-data' => array(
				'menu-item-title'     => 'Travel',
				'menu-item-type'      => 'taxonomy',
				'menu-item-object'    => 'category',
				'menu-item-object-id' => '{{category:travel:id}}',
				'menu-item-status'    => 'publish',
				'menu-item-parent-id' => '{{menu:category:id}}',
			),
		),
		'mobile-opinion'   => array(
			'location'       => 'mobile-navigation',
			'menu-item-data' => array(
				'menu-item-title'     => 'Opinion',
				'menu-item-type'      => 'taxonomy',
				'menu-item-object'    => 'category',
				'menu-item-object-id' => '{{category:opinion:id}}',
				'menu-item-status'    => 'publish',
				'menu-item-parent-id' => '{{menu:category:id}}',
			),
		),
		'mobile-politics'  => array(
			'location'       => 'mobile-navigation',
			'menu-item-data' => array(
				'menu-item-title'     => 'Politics',
				'menu-item-type'      => 'taxonomy',
				'menu-item-object'    => 'category',
				'menu-item-object-id' => '{{category:politics:id}}',
				'menu-item-status'    => 'publish',
				'menu-item-parent-id' => '{{menu:category:id}}',
			),
		),
		'mobile-tech'      => array(
			'location'       => 'mobile-navigation',
			'menu-item-data' => array(
				'menu-item-title'     => 'Tech',
				'menu-item-type'      => 'taxonomy',
				'menu-item-object'    => 'category',
				'menu-item-object-id' => '{{category:tech:id}}',
				'menu-item-status'    => 'publish',
				'menu-item-parent-id' => '{{menu:category:id}}',
			),
		),
		'mobile-world'     => array(
			'location'       => 'mobile-navigation',
			'menu-item-data' => array(
				'menu-item-title'     => 'World',
				'menu-item-type'      => 'taxonomy',
				'menu-item-object'    => 'category',
				'menu-item-object-id' => '{{category:world:id}}',
				'menu-item-status'    => 'publish',
				'menu-item-parent-id' => '{{menu:category:id}}',
			),
		),

		'landing'          => array(
			'location'       => 'mobile-navigation',
			'menu-item-data' => array(
				'menu-item-title'  => 'Landing Page',
				'menu-item-type'   => 'custom',
				'menu-item-url'    => 'https://jnews.io/landing/',
				'menu-item-status' => 'publish',
			),
		),
		'buy'              => array(
			'location'       => 'mobile-navigation',
			'menu-item-data' => array(
				'menu-item-title'  => 'Buy JNews',
				'menu-item-type'   => 'custom',
				'menu-item-url'    => 'https://themeforest.net/item/jnews-wordpress-blog-news-magazine-newspaper-theme/20566392?ref=jegtheme&license=regular&open_purchase_for_item_id=20566392',
				'menu-item-status' => 'publish',
			),
		),
		'support'          => array(
			'location'       => 'mobile-navigation',
			'menu-item-data' => array(
				'menu-item-title'  => 'Support Forum',
				'menu-item-type'   => 'custom',
				'menu-item-url'    => 'https://themeforest.net/item/jnews-wordpress-blog-news-magazine-newspaper-theme/20566392?ref=jegtheme&license=regular&open_purchase_for_item_id=20566392',
				'menu-item-status' => 'publish',
			),
		),
		'pre'              => array(
			'location'       => 'mobile-navigation',
			'menu-item-data' => array(
				'menu-item-title'  => 'Pre-sale Question',
				'menu-item-type'   => 'custom',
				'menu-item-url'    => 'https://themeforest.net/item/jnews-one-stop-solution-for-web-publishing/20566392/comments?ref=jegtheme',
				'menu-item-status' => 'publish',
			),
		),
		'contact'          => array(
			'location'       => 'mobile-navigation',
			'menu-item-data' => array(
				'menu-item-title'  => 'Contact Us',
				'menu-item-type'   => 'custom',
				'menu-item-url'    => 'https://themeforest.net/user/jegtheme?ref=jegtheme',
				'menu-item-status' => 'publish',
			),
		),
	),

	'widget_position' => array(),

	'widget'          => array(
		'widget.json',
	),

	'customizer'      => array(
		'style.json',
	),

	'plugin'          => array(
		'classic-editor',
		'jnews-breadcrumb',
		'jnews-essential',
		'jnews-front-translation',
		'jnews-jsonld',
		'jnews-paywall',
		'jnews-social-share',
		'jnews-view-counter',
		'woocommerce',
	),

);
