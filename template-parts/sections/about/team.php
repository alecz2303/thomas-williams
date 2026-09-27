<?php
/**
 * About - Leadership team.
 * @package ThomasWilliams
 */
if (!defined('ABSPATH')) { exit; }
$team = [
    ['name' => 'Tom W.', 'role' => 'CPA', 'image' => ''],
    ['name' => 'Abraham Marcos', 'role' => 'Director of Strategic Relations & Consultant', 'image' => ''],
    ['name' => 'Farid Marcos', 'role' => 'International Tax Manager', 'image' => ''],
];
?>
<section class="tw-team">
<div class="tw-container">
<header class="tw-team__header" data-reveal>
<span><?php tw_e('Our Team', 'Nuestro Equipo'); ?></span>
<h2><?php tw_e('Experience with a personal perspective.', 'Experiencia con una perspectiva personal.'); ?></h2>
</header>
<div class="tw-team__grid">
<?php foreach ($team as $member) : ?>
<article class="tw-team__member" data-reveal>
<div class="tw-team__photo">
<?php if ($member['image']) : ?>
<img src="<?php echo esc_url($member['image']); ?>" alt="<?php echo esc_attr($member['name']); ?>" loading="lazy">
<?php else : ?>
<span aria-hidden="true"><?php echo esc_html(substr($member['name'], 0, 1)); ?></span>
<?php endif; ?>
</div>
<h3><?php echo esc_html($member['name']); ?></h3>
<p><?php echo esc_html($member['role']); ?></p>
</article>
<?php endforeach; ?>
</div>
</div>
</section>
