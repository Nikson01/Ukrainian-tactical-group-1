<?php /* translators: On the Views admin screen. */ ?>
<th>
	<label for="view-content">
		<?php _e( 'Content', 'strong-testimonials' ); ?>
	</label>
</th>
<td colspan="2">

	<!-- Content type -->
	<div id="option-content" class="row">
		<div class="row-inner">

			<!-- select -->
			<div class="inline">
				<select id="view-content" class="if selectper min-width-1 label-not-adjacent" name="view[data][content]">
					<option value="entire" <?php selected( 'entire', $view['content'] ); ?>>
						<?php _ex( 'entire content', 'display setting', 'strong-testimonials' ); ?>
					</option>
					<option value="truncated" <?php selected( 'truncated', $view['content'] ); ?>>
						<?php _ex( 'automatic excerpt', 'display setting', 'strong-testimonials' ); ?>
					</option>
					<option value="excerpt" <?php selected( 'excerpt', $view['content'] ); ?>>
						<?php _ex( 'manual excerpt', 'display setting', 'strong-testimonials' ); ?>
					</option>
				</select>
			</div>

			<!-- info & screenshot -->
			<div class="inline then fast then_truncated then_not_entire then_not_excerpt" style="display: none;">
				<p class="description">
					<?php _e( 'This will strip tags like &lt;em&gt; and &lt;strong&gt;.', 'strong-testimonials' ); ?>
				</p>
			</div>
			<div class="inline then fast then_not_truncated then_not_entire then_excerpt" style="display: none;">
				<p class="description">
					<?php printf( __( 'To create manual excerpts, you may need to enable them in the post editor like in this <a href="%s" class="thickbox">screenshot</a>.', 'strong-testimonials' ), esc_url( '#TB_inline?width=&height=210&inlineId=screenshot-screen-options' ) ); ?>
					<span class="screenshot" id="screenshot-screen-options" style="display: none;">
						<img src="<?php echo WPMTST_ADMIN_URL; ?>img/screen-options.png" width="600">
					</span>
				</p>
			</div>

		</div>
	</div>

	<!-- Excerpt length -->
	<div id="option-content-length" class="row then then_not_entire then_excerpt then_truncated" style="display: none;">

		<div class="row-inner">

			<!-- info -->
			<div class="inline tight then then_excerpt then_not_truncated" style="display: none;">
				<span>
					<?php _e( 'If no manual excerpt, create an excerpt using', 'strong-testimonials' ); ?>
				</span>
			</div>

			<!-- default or custom? -->
			<div class="inline">
				<label>
					<select id="view-use_default_length" class="if selectgroup min-width-1" name="view[data][use_default_length]">
						<option value="1" <?php selected( $view['use_default_length'] ); ?>>
							<?php _ex( 'default length', 'display setting', 'strong-testimonials' ); ?>
						</option>
						<option value="0" <?php selected( ! $view['use_default_length'] ); ?>>
							<?php _ex( 'custom length', 'display setting', 'strong-testimonials' ); ?>
						</option>
					</select>
				</label>
			</div>

			<!-- 1st option: default -->
			<div class="inline then fast then_use_default_length then_1 then_not_0" style="display: none;">
				<label for="view-use_default_length" class="inline-middle"><?php // Because partner option has <label>, this prevents micro-bounce ?>
					<p class="description tall"><?php _e( 'The default length is 55 words but your theme may override that.', 'strong-testimonials' ); ?></p>
				</label>
			</div>

			<!-- 2nd option: length -->
			<div class="inline then fast then_use_default_length then_0 then_not_1" style="display: none;">
				<label class="inline-middle">
					<?php printf( _x( 'the first %s words', 'the excerpt length', 'strong-testimonials' ), '<input id="view-excerpt_length" class="input-incremental" type="number" min="1" max="999" name="view[data][excerpt_length]" value="' . $view['excerpt_length'] . '">' ); ?>
				</label>
			</div>

		</div>

	</div><!-- #option-content-length -->

	<!-- Read-more link -->
	<div id="option-content-read-more" class="row then then_not_entire then_excerpt then_truncated" style="display: none;">

		<div class="row-inner subgroup">

            <!-- action: full post or in place -->
            <div class="row-inner">
                <div class="inline">
                    <?php _e( 'Add a <strong>Read more</strong> link to', 'strong-testimonials' ); ?>
                </div>
                <div class="inline tight">
                    <label>
                        <select id="view-more_post_in_place"
                                class="if selectgroup"
                                name="view[data][more_post_in_place]">
                            <option value="0" <?php selected( ! $view['more_post_in_place'] ); ?>>
                                <?php // TODO Get label from Properties ?>
					            <?php _e( 'the full testimonial', 'strong-testimonials' ); ?>
                            </option>
                            <option value="1" <?php selected( $view['more_post_in_place'] ); ?>>
					            <?php _e( 'expand content in place', 'strong-testimonials' ); ?>
                            </option>
                        </select>
                    </label>
                </div>
            </div>

            <!-- ellipsis -->
            <div class="row-inner">
                <div class="then then_use_default_more then_0 then_not_1" style="display: none;">
					<div class="inline">
                        <label>
                            <select id="view-more_post_ellipsis"
                                    class="if selectgroup"
                                    name="view[data][more_post_ellipsis]">
                                <option value="1" <?php selected( $view['more_post_ellipsis'] ); ?>>
                                    <?php _e( 'with an ellipsis', 'strong-testimonials' ); ?>
                                </option>
                                <option value="0" <?php selected( ! $view['more_post_ellipsis'] ); ?>>
                                    <?php _e( 'without an ellipsis', 'strong-testimonials' ); ?>
                                </option>
                            </select>
                        </label>
					</div>
                    <div class="inline then then_excerpt then_not_truncated" style="display: none;">
                        <p class="description">
                            <?php _e( 'Automatic excerpt only.', 'strong-testimonials' ); ?>
                        </p>
                    </div>
                </div>
            </div>

            <!-- default or custom -->
			<div class="row-inner">
                <div class="inline tight then fast then_more_post_in_place then_1 then_not_0" style="display: none;">
                    <?php _e( 'with link text to read more', 'strong-testimonials' ); ?>
                </div>
				<div class="inline then fast then_more_post_in_place then_0 then_not_1" style="display: none;">
					<label>
						<select id="view-use_default_more"
                                class="if selectgroup min-width-1"
                                name="view[data][use_default_more]">
							<option value="1" <?php selected( $view['use_default_more'] ); ?>>
								<?php _ex( 'with default link text', 'display setting', 'strong-testimonials' ); ?>
							</option>
							<option value="0" <?php selected( ! $view['use_default_more'] ); ?>>
								<?php _ex( 'with custom link text', 'display setting', 'strong-testimonials' ); ?>
							</option>
						</select>
					</label>
                </div>
                <div class="inline then fast then_use_default_more then_1 then_not_0" style="display: none;">
                    <p class="description"><?php _e( 'If you only see [&hellip;] without a link then use the custom link text instead.', 'strong-testimonials' ); ?></p>
                </div>
                <!-- read more -->
                <div class="inline then fast then_use_default_more then_0 then_not_1" style="display: none;">
					<span id="option-link-text" class="inline-span">
						<label for="view-more_post_text">
							<input type="text" id="view-more_post_text" name="view[data][more_post_text]"
								   value="<?php echo $view['more_post_text']; ?>" size="22"
								   placeholder="<?php _e( 'enter a phrase', 'strong-testimonials' ); ?>">
						</label>
					</span>
                </div>
            </div>

            <!-- read less -->
            <div class="row-inner then fast then_more_post_in_place then_1 then_not_0" style="display: none;">
                <div class="inline tight">
                    <?php _e( 'and link text to read less', 'strong-testimonials' ); ?>
                </div>
                <div class="inline tight">
					<span id="option-link-text-less" class="inline-span">
						<label for="view-less_post_text">
							<input type="text" id="view-less_post_text" name="view[data][less_post_text]"
								   value="<?php echo $view['less_post_text']; ?>" size="22"
								   placeholder="<?php _e( 'enter a phrase', 'strong-testimonials' ); ?>">
						</label>
					</span>
                    <p class="inline description"><?php _e( 'Leave blank to leave content expanded without a link.', 'strong-testimonials' ); ?></p>
                </div>
            </div>

			<!-- automatic or both -->
			<div class="row-inner then then_excerpt then_not_truncated" style="display: none;">
				<div class="inline">
					<label>
						<select id="view-more_full_post" class="if selectgroup" name="view[data][more_full_post]">
							<option value="0" <?php selected( $view['more_full_post'], 0 ); ?>>
								<?php _ex( 'for automatic excerpt only', 'display setting', 'strong-testimonials' ); ?>
							</option>
							<option value="1" <?php selected( $view['more_full_post'], 1 ); ?>>
								<?php _ex( 'for both automatic and manual excerpts', 'display setting', 'strong-testimonials' ); ?>
							</option>
						</select>
					</label>
				</div>
			</div>
		</div>
	</div>

	<div class="row links then then_not_entire then_truncated then_excerpt" style="display: none;">
		<p class="description tall solo">
			<?php
			printf(
				esc_html__( '%s about WordPress excerpts', 'strong-testimonials' ),
				sprintf(
					'<a href="%s" target="_blank">%s</a>',
					esc_url( 'http://buildwpyourself.com/wordpress-manual-excerpts-more-tag/' ),
					esc_html__( 'Learn more', 'strong-testimonials' )
				)
			);
			?>
		</p>
	</div>

</td>
