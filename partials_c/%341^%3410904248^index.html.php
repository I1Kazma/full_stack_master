<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="apple-touch-icon"
      sizes="180x180"
      href="/images/favicon/apple-touch-icon.png"
    />
    <link
      rel="icon"
      type="image/png"
      sizes="32x32"
      href="/images/favicon/favicon-32x32.png"
    />
    <link
      rel="icon"
      type="image/png"
      sizes="16x16"
      href="/images/favicon/favicon-16x16.png"
    />
    <link
      rel="stylesheet"
      type="text/css"
      media="all"
      href="/css/fonts.css?1"
    />
    <link
      rel="stylesheet"
      type="text/css"
      media="all"
      href="/css/common.css?1"
    />
    <script type="text/javascript" src="/js/lib/common.js?1"></script>
    <script type="text/javascript" src="/js/common.js?1"></script>
    <!-- Global Vars -->
    <script type="text/javascript">
      var global = <?php echo '{'; ?>

          <?php if (self::$_tpl_vars['global']['path'] == 'plots' || self::$_tpl_vars['global']['path'] == 'users'): ?>
          offset: <?php echo self::$_tpl_vars['offset']; ?>

          <?php endif; ?>
      <?php echo '}'; ?>

    </script>
  </head>
  <body>
    <?php $_html_tpl_vars = self::$_tpl_vars;
self::include_file(['file'=>(self::$_tpl_vars['main_content']), 'vars'=>[]]);
self::$_tpl_vars = $_html_tpl_vars;
unset($_html_tpl_vars);
 ?>
  </body>
</html>