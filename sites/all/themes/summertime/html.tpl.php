<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="<?php print $language->language; ?>" xml:lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>" id="html-main">

<head>
  <title><?php print $head_title; ?></title>
  <?php print $head; ?>
  <?php print $styles; ?>
  <?php print $scripts; ?>
  <script type="text/javascript"><?php /* Needed to avoid Flash of Unstyle Content in IE */ ?> </script>
  <!--[if lte IE 6]>
  <link rel="stylesheet" href="<?php print base_path() . path_to_theme(); ?>/ie6-fixes.css" type="text/css">
  <![endif]-->

  <!--[if lte IE 7]>
  <link rel="stylesheet" href="<?php print base_path() . path_to_theme(); ?>/ie7-fixes.css" type="text/css">
  <![endif]-->
</head>

<body class="<?php print $classes; ?> body-main" <?php print $attributes;?>>
  <?php print $page_top; ?>
  <?php print $page; ?>
  <?php print $page_bottom; ?>
</body>

</html>
