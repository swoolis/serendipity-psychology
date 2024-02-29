<?php

$context = Timber::context();
$context['post'] = new Timber\Post();

$testimonials = [
    'post_type' => 'testimonials',
    'posts_per_page' => 10,
];
$context['testimonials'] = new Timber\PostQuery($testimonials);

Timber::render( [ 'front-page.twig' ], $context );
