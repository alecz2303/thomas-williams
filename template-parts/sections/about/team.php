<?php
/**
 * About - Leadership team.
 * @package ThomasWilliams
 */
if (!defined('ABSPATH')) { exit; }

$team = new WP_Query([
    'post_type' => 'tw_team_member',
    'post_status' => 'publish',
    'posts_per_page' => -1,
    'orderby' => ['menu_order' => 'ASC', 'title' => 'ASC'],
    'order' => 'ASC',
]);

$fallback_team = [
    ['name' => 'Tom Williams', 'role' => 'CPA'],
    ['name' => 'Abraham Marcos', 'role' => 'Director of Strategic Relations & Consultant'],
    ['name' => 'Farid Marcos', 'role' => 'International Tax Manager'],
];
?>
<section class="tw-team">
<div class="tw-container">
<header class="tw-team__header" data-reveal>
<span><?php tw_e('Our Team', 'Nuestro Equipo'); ?></span>
<h2><?php tw_e('Experience with a personal perspective.', 'Experiencia con una perspectiva personal.'); ?></h2>
</header>
<div class="tw-team__grid">
<?php if ($team->have_posts()) : ?>
<?php while ($team->have_posts()) : $team->the_post(); $role = get_post_meta(get_the_ID(), '_tw_team_role', true); ?>
<article class="tw-team__member" data-reveal>
<div class="tw-team__photo"><?php if (has_post_thumbnail()) { the_post_thumbnail('large', ['loading'=>'lazy']); } else { ?><span aria-hidden="true"><?php echo esc_html(substr(get_the_title(), 0, 1)); ?></span><?php } ?></div>
<h3><?php the_title(); ?></h3>
<?php if ($role) : ?><p><?php echo esc_html($role); ?></p><?php endif; ?>
</article>
<?php endwhile; wp_reset_postdata(); ?>
<?php else : ?>
<?php foreach ($fallback_team as $member) : ?>
<article class="tw-team__member" data-reveal><div class="tw-team__photo"><span aria-hidden="true"><?php echo esc_html(substr($member['name'],0,1)); ?></span></div><h3><?php echo esc_html($member['name']); ?></h3><p><?php echo esc_html($member['role']); ?></p></article>
<?php endforeach; ?>
<?php endif; ?>
</div>
</div>
</section>
