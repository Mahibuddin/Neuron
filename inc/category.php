<?php
/**
 * Returns true if a blog has more than 1 category.
 *
 * @return bool
 */
function neuron_categorized_blog() {
	$category_count = get_transient( 'neuron_categories' );

	if ( false === $category_count ) {
		// Create an array of all the categories that are attached to posts.
		$categories = get_categories(
			array(
				'fields'     => 'ids',
				'hide_empty' => 1,
				// We only need to know if there is more than one category.
				'number'     => 2,
			)
		);

		// Count the number of categories that are attached to the posts.
		$category_count = count( $categories );

		set_transient( 'neuron_categories', $category_count );
	}

	// Allow viewing case of 0 or 1 categories in post preview.
	if ( is_preview() ) {
		return true;
	}

	return $category_count > 1;
}


if ( ! function_exists( 'neuron_entry_footer' ) ) :
	/**
	 * Prints HTML with meta information for the categories, tags and comments.
	 */
	function neuron_entry_footer() {

		/* translators: used between list items, there is a space after the comma */
		$separate_meta = __( ', ', 'neuron' );

		// Get Categories for posts.
		$categories_list = get_the_category_list( $separate_meta );


		// We don't want to output .entry-footer if it will be empty, so make sure its not.
		if ( ( ( neuron_categorized_blog() && $categories_list ) ) || get_edit_post_link() ) {

			echo '<footer class="entry-footer">';

			if ( 'post' === get_post_type() ) {
				if ( ( $categories_list && neuron_categorized_blog() ) ) {
					echo '<span class="cat-tags-links">';

						// Make sure there's more than one category before displaying.
					if ( $categories_list && neuron_categorized_blog() ) {
						echo '<span class="cat-links">' . $categories_list . '</span>';
					}

					echo '</span>';
				}
			}

			echo '</footer> <!-- .entry-footer -->';
		}
	}
endif;