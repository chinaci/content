<?php
if ( !$this->is_users_rating_disabled() ):

	$score = isset( $this->users_data['overall'] ) ? $this->users_data['overall'] : 0;
	$count = isset( $this->users_data['count'] ) ? $this->users_data['count'] : 0;
	$theme = $this->template_field('template_theme', true);
    $maximum_score = $this->template_field('template_maximum_score', true);
?>

<div
    class="rwp-users-score <?php if ( $is_UR ) echo 'rwp-ur' ?>"

    <?php if ( $theme != 'rwp-theme-8' ): ?>
   	style="background: <?php $this->template_field('template_users_score_box_color') ?>; "
    <?php endif ?>
>

	<?php $bg = ( $theme == 'rwp-theme-8' ) ? 'style="background: '. $this->template_field('template_users_score_box_color', true) .'; "': ''; ?>


	<?php $count_label = ( $count == 1 ) ? __($this->template_field('template_users_count_label_s', true), 'reviewer') : __($this->template_field('template_users_count_label_p', true), 'reviewer');
	if ( ($has_img || $is_UR) && ( $theme != 'rwp-theme-8' && $theme != 'rwp-theme-4' ) ): ?>
	<span v-cloak class="rwp-users-score-value" <?php echo $bg; ?> > {{ reviewsOverall }} <i>/ <?php echo $maximum_score; ?></i></span>
    <span class="rwp-users-score-label"><?php _e($this->template_field('template_users_score_label', true), 'reviewer') ?></span>
    <span class="rwp-users-score-count">(<i v-text="reviewsCount"><?php echo $count ?></i> <?php echo $count_label ?>)</span>
	<?php elseif( $theme == 'rwp-theme-4' || $theme == 'rwp-theme-8' ): ?>
	<span class="rwp-users-score-label"><?php _e($this->template_field('template_users_score_label', true), 'reviewer') ?></span>
	<span class="rwp-users-score-count">(<i v-text="reviewsCount"><?php echo $count ?></i> <?php echo $count_label ?>)</span>
	<span v-cloak class="rwp-users-score-value" <?php echo $bg; ?> > {{ reviewsOverall }} <i>/ <?php echo $maximum_score; ?></i></span>
	<?php else: ?>
	<span v-cloak class="rwp-users-score-value" <?php echo $bg; ?> > {{ reviewsOverall }} <i>/ <?php echo $maximum_score; ?></i></span>
    <span class="rwp-users-score-count">(<i v-text="reviewsCount"><?php echo $count ?></i> <?php echo $count_label ?>)</span>
	<span class="rwp-users-score-label"><?php _e($this->template_field('template_users_score_label', true),'reviewer') ?></span>
	<?php endif ?>

</div><!--/users-score-->

<?php endif; ?>
