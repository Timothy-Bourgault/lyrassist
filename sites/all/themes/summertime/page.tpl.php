    <div class="body-background">
      <div class="border-top">
        <!-- balloons-->
        <div id="circules">
          <!--make-it-center-->
          <div class="make-it-center">

            <img class="blick" src="<?php echo base_path() . path_to_theme() ?>/images/blick.gif"  alt="" />
            <div class="cap"></div>

            <!--main-content-->
            <div class="main-content">
              <div class="top clearfix">

                <!-- log-box-->
          			<div class="log-box <?php if ($_GET['q'] == 'user/register') echo 'inversed'; ?>">

                <?php if (!$user->uid): ?>
                  <!-- log-box-first -->
                  <div class="log-box-first">
                    <div class="left-side">
                      <div class="right-side">
                        <?php echo l(t("Log in"), "user");?>
                      </div>
                    </div>
                  </div><!-- /log-box-first -->

    				      <?php if ($registration_enabled): ?>
                  <!-- log-box-second -->
                  <div class="log-box-second">
                    <div class="left-side">
                      <div class="right-side">
            				    <?php echo l(t("Create new account"), "user/register");?>
                      </div>
                    </div>
                  </div><!-- /log-box-second -->
    				      <?php endif; ?>

                <?php else: ?>

          				<!-- log-box-first -->
          				<div class="log-box-first">
          				  <div class="left-side">
          				    <div class="right-side">
          				      <?php echo t("<strong>!user</strong>", array('!user' => l($user->name, "user"))); ?>&nbsp;|&nbsp;<?php echo l(t("Edit"), "user/" . $user->uid . "/edit");?>
          				    </div>
          				  </div>
          				</div><!-- /log-box-first -->

                  <!-- log-box-second -->
                    <div class="log-box-second">
                      <div class="left-side">
                        <div class="right-side">
                          <?php echo l(t("Log out"), "user/logout"); ?>
                        </div>
                      </div>
                  </div><!-- /log-box-second -->

                <?php endif; ?>
                </div><!-- /log-box-->

                <div class="rss-box">
                  <?php if ($feed_icons): ?>
                  <a href="<?php echo url("rss.xml"); ?>"><img src="<?php echo base_path() . path_to_theme() ?>/images/rss-bg.gif"  alt="RSS" /></a>
                  <?php endif; ?>
                  <a class="home" href="<?php print $base_path ?>" title="<?php print t('Home') ?>"></a>
                  <?php if (module_exists('contact')): ?>
                  <a class="mail" href="<?php echo url('contact'); ?>"></a>
                  <?php endif; ?>
                </div>

              </div><!-- /top-->

              <?php if ($page['top_menu']): ?>
              <div class="menu-background">
                <div class="main-menu clearfix">
                  <div class="menu-side-left">
                    <div class="menu-side-right clearfix">
                      <?php print render($page['top_menu']); ?>
    					      </div><!--menu-side-right-->
    					    </div> <!--menu-side-left-->
    					  </div>
              </div>
              <?php endif; ?>

              <div class="banner">
                <div class="banner-text clearfix">
                  <table>
                     <tr>
                      <?php if ($logo!=""):?>
                      <td class="logo">
                        <?php if(!drupal_is_front_page()):?>
                        <a href="<?php echo base_path();?>">
                        <?php endif;?>
                          <img src="<?php echo $logo;?>" alt=""/>
                        <?php if(!drupal_is_front_page()):?>
                        </a>
                        <?php endif;?>
                      </td>
                      <?php endif;?>
                      <td class="slogan">
                        <h2>
                          <?php if(!drupal_is_front_page()):?>
                          <a href="<?php echo $front_page; ?>" title="<?php echo t('Home') ?>">
                          <?php endif;?>
                            <?php echo $site_name ?>
                          <?php if(!drupal_is_front_page()):?>
                          </a>
                          <?php endif;?>
                        </h2>
                        <?php if ($site_slogan): ?>
              					<p><?php echo $site_slogan; ?></p>
      				          <?php endif; ?>
                      </td>
                    </tr>
                  </table>
                </div>
              </div><!-- /banner -->

              <?php if ($page['sidebar_first']): ?>
              <!--column-left-->
              <div class="column-left">
                <?php print render($page['sidebar_first']); ?>
              </div><!-- /column-left-->
              <?php endif; ?>


              <!-- column-2 -->
              <div class="column-2 <?php if (!$page['sidebar_second'] && !$page['sidebar_first']): ?>no-right-and-left-columns <?php elseif (!$page['sidebar_first']): ?>no-left-column <?php elseif (!$page['sidebar_second']): ?>no-right-column <?php endif; ?>">
                <div class="right-col-main clearfix">
                  <!--column-center-->
                  <div class="column-center clearfix">
                    <div class="col-cent-border">
                      <?php if ($page['content_top']): ?><div id="content-top" class="clearfix"><?php print render($page['content_top']); ?></div><?php endif; ?>

                      <?php if ($breadcrumb): print $breadcrumb; endif;?>
                      <?php print $messages; ?>

                      <?php if ($tabs): ?><div class="tabs"><?php print render($tabs); ?></div><?php endif; ?>
                      <?php print render($title_prefix); ?>
                      <?php if ($title): ?><h1 class="page-title"><?php print $title; ?></h1><?php endif; ?>
                      <?php print render($title_suffix); ?>

                      <?php print render($page['help']); ?>
                      <?php if ($action_links): ?>
                      <ul class="action-links"><?php print render($action_links); ?></ul>
                      <?php endif; ?>

                      <?php print render($page['content']); ?>

                      <?php if ($page['content_bottom']): ?><div id="content-bottom" class="clearfix"><?php print render($page['content_bottom']); ?></div><?php endif; ?>

                    </div><!-- /col-cent-border-->
                  </div><!-- /column-center-->

                  <?php if ($page['sidebar_second']): ?>
                    <!--column-right-->
                    <div class="column-right clearfix">
                      <?php print render($page['sidebar_second']); ?>
                    </div><!-- /column-right-->
                  <?php endif; ?>
                </div><!-- /column-right-main-->

                <!-- footer -->
                <div class="footer clearfix">
                  <?php print render($page['footer']) ?>
                </div><!-- /footer-->

              </div><!-- /column-2 -->
            </div><!-- /main-content-->
          </div><!-- /make-it-center-->
        </div><!-- /balloons-->
      </div><!-- /border-top -->
    </div><!-- body-background -->
