<?php
/**
 * The default home page template.
 *
 * @author Freeshifter LLC
 * @since 1.0.0
 */

namespace Vanguard_Digital;

global $post;
$frontpage_id = get_option( 'page_on_front' );

$title = get_field('title_text', $frontpage_id);
$availability_text = get_field('availability_text', $frontpage_id);
$title_subhead = get_field('primary_subhead', $frontpage_id);

get_header(); ?>
	<div class="container mx-auto relative z-10 mb-16 lg:mb-32 flex flex-wrap items-start">
		<div class="availability-text flex items-center flex-row font-bold text-secondary_text text-sm">
			<div class="mr-2 dot flex relative">
				<span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-purple opacity-75"></span>
  				<span class="relative inline-flex rounded-full dot bg-purple"></span>
  			</div>
  			<?php echo $availability_text; ?>
  		</div>
		<div class="w-full lg:w-4/6 lg:pr-10 mb-8">
			
		</div>

	</div>
	<?php
get_footer();
