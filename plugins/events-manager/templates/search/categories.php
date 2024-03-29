<?php $args = !empty($args) ? $args : array(); /* @var $args array */ ?>
<!-- START Category Search -->
<div class="em-search-category em-search-field">
	<label>
		<span><?php echo esc_html($args['category_label']); ?></span>
		<?php
		EM_Object::ms_global_switch(); //in case in global tables mode of MultiSite, grabs main site categories, if not using MS Global, nothing happens
		wp_dropdown_categories(array(
			'hide_empty' => 0,
			'orderby' => 'name',
			'name' => 'category',
			'hierarchical' => true,
			'taxonomy' => EM_TAXONOMY_CATEGORY,
			'selected' => $args['category'],
			'show_option_none' => $args['categories_label'],
			'option_none_value' => 0,
			'class' => 'em-events-search-category',

			'depth' => 1,
			'show_if_empty' => false
		));
		EM_Object::ms_global_switch_back(); //if switched above, switch back
		?>
	</label>
</div>

<script>
	document.getElementById('category').onchange = function() {
		jQuery('.em-search-form').trigger('forcesubmit');
	}
</script>

<!-- END Category Search -->