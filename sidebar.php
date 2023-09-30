    <aside class="aside col-lg-3 col-md-4 p-3 mb-4">
      <?php
      if (!is_active_sidebar('sidebar_widget')) {
        return;
      }
      dynamic_sidebar('sidebar_widget')
      ?>
    </aside><!--fin-aside-->

