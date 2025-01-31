<?php
/**
 * Header Template
 *
 * @package Aquila
 */
?>
<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <!--[if IE]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <?php wp_head(); ?>

</head>

<?php
if (function_exists('wp_body_open')) {
    wp_body_open();
}
?>
<body id="page-top" data-spy="scroll" data-target=".navbar-custom">
<!-- Page width 'Boxed' of 'Full' -->
<div class="full">
    <?php get_template_part('template-parts/header/nav'); ?>