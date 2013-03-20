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
          <?php if (!empty($username)): ?>
            <div class="user-details <?php print $pull_class; ?>">
              <div class="username"><?php print $username; ?></div>
            </div>
          <?php endif; ?>

          <div class="navigation-menu <?php print $pull_class; ?>">
            <?php print render($navigation_menu); ?>
          </div>

          <?php print render($secondary_nav); ?>

          <?php if(!empty($facebook_connect)): ?>
            <div class="facebook-connect <?php print $alter_pull_class; ?>">
              <?php print $facebook_connect; ?>
            </div>
          <?php endif; ?>
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
    <?php print render($page['header']); ?>
  </header>

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

      <div class="breadcrumbs">
        <?php print $breadcrumbs; ?>
      </div>

      <a id="main-content"></a>
      <?php print render($title_prefix); ?>

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

    <div class="<?php print $alter_pull_class; ?>">
      <?php print render($primary_nav); ?>
    </div>
  </div>
</footer>