<header id="navbar" role="banner" class="navbar navbar-static-top">
  <div class="navbar-inner">
    <div class="container">
      <!-- .btn-navbar is used as the toggle for collapsed navbar content -->
      <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <?php if (!empty($user_picture)): ?>
        <div class="user-picture <?php print $pull_class; ?>">
          <?php print $user_picture; ?>
        </div>
      <?php endif; ?>

      <div class="nav-collapse collapse">
        <nav role="navigation">
          <div class="social-links <?php print $pull_class; ?>">
            <?php print render($social_links); ?>
          </div>

          <?php if (!empty($page['navigation'])): ?>
            <?php print render($page['navigation']); ?>
          <?php endif; ?>

          <div class="logo <?php print $alter_pull_class; ?>">
            <?php print $logo; ?>
          </div>

          <div class="space-menu <?php print $alter_pull_class; ?>">
            <?php print render($space_menu); ?>
          </div>

          <?php if (!empty($secondary_nav)): ?>
            <?php //print render($secondary_nav); ?>
          <?php endif; ?>
        </nav>
      </div>
    </div>
  </div>
</header>

<header id="navbar-second" role="banner" class="navbar navbar-static-top">
  <div class="navbar-inner">
    <div class="container">
      <div class="nav-collapse collapse">
        <nav role="navigation">
          <div class="user-details <?php print $pull_class; ?>">
          </div>

          <div class="navigation-menu <?php print $pull_class; ?>">
            <?php print render($navigation_menu); ?>
          </div>

          <?php print render($secondary_nav); ?>
        </nav>
      </div>
    </div>
  </div>
</header>

<nav id="main-menu">
  <?php print render($primary_nav); ?>
</nav>

<div class="main-container container">

  <header role="banner" id="page-header">
    <?php if (!empty($site_slogan)): ?>
      <p class="lead"><?php print $site_slogan; ?></p>
    <?php endif; ?>

    <?php print render($page['header']); ?>
  </header> <!-- /#header -->

  <div class="row">

    <?php if (!empty($page['sidebar_first'])): ?>
      <aside class="span3" role="complementary">
        <?php print render($page['sidebar_first']); ?>
      </aside>  <!-- /#sidebar-first -->
    <?php endif; ?>

    <section class="<?php print _bootstrap_content_span($columns); ?>">
      <?php if (!empty($page['highlighted'])): ?>
        <div class="highlighted hero-unit"><?php print render($page['highlighted']); ?></div>
      <?php endif; ?>
      <?php if (!empty($breadcrumb)): print $breadcrumb; endif;?>
      <a id="main-content"></a>
      <?php print render($title_prefix); ?>
      <?php if (!empty($title)): ?>
        <h1 class="page-header"><?php print $title; ?></h1>
      <?php endif; ?>
      <?php print render($title_suffix); ?>
      <?php print $messages; ?>
      <?php if (!empty($tabs)): ?>
        <?php print render($tabs); ?>
      <?php endif; ?>
      <?php if (!empty($page['help'])): ?>
        <div class="well"><?php print render($page['help']); ?></div>
      <?php endif; ?>
      <?php if (!empty($action_links)): ?>
        <ul class="action-links"><?php print render($action_links); ?></ul>
      <?php endif; ?>
      <?php print render($page['content']); ?>
    </section>

    <?php if (!empty($page['sidebar_second'])): ?>
      <aside class="span3" role="complementary">
        <?php print render($page['sidebar_second']); ?>
      </aside>  <!-- /#sidebar-second -->
    <?php endif; ?>

  </div>
</div>

<footer class="footer">
  <div class="container">
    <?php print $footer_logo; ?>
    <?php print render($page['footer']); ?>
    <?php print $footer_icons; ?>
  </div>
</footer>