<?php
  $this_root = "../";
  $this_page = "colors";
  include $this_root . 'include/header.php';
  include $this_root . 'include/functions.php';
  include 'include/list-color.php';
?>

    <div id="div-container"><?php
      foreach ($list_orange as $key_color => $value_description) { ?>
        <div class="div-container-color" style="background: <?php echo $key_color; ?>">
          <div class="div-color_descriptions">
            <p style="color: #fff;"><?php echo $key_color; ?></p>
            <p style="color: #1a1a1a;"><?php echo $key_color; ?></p>
          </div><?php
          foreach ($list_color as $key_color_font) { ?>
            <p style="color: <?php echo $key_color_font; ?>"><?php echo $key_color_font; ?></p><?php
          } ?>
        </div><?php
      } ?>
    </div>

 <div id="div-container"><?php
      foreach ($list_blue as $key_color => $value_description) { ?>
        <div class="div-container-color" style="background: <?php echo $key_color; ?>">
          <div class="div-color_descriptions">
            <p style="color: #fff;"><?php echo $key_color; ?></p>
            <p style="color: #1a1a1a;"><?php echo $key_color; ?></p>
          </div><?php
          foreach ($list_color as $key_color_font) { ?>
            <p style="color: <?php echo $key_color_font; ?>"><?php echo $key_color_font; ?></p><?php
          } ?>
        </div><?php
      } ?>
    </div>

    <div id="div-container"><?php
      foreach ($list_gray as $key_color => $value_description) { ?>
        <div class="div-container-color" style="background: <?php echo $key_color; ?>">
          <div class="div-color_descriptions">
            <p style="color: #fff;"><?php echo $key_color; ?></p>
            <p style="color: #1a1a1a;"><?php echo $key_color; ?></p>
          </div><?php
          foreach ($list_color as $key_color_font) { ?>
            <p style="color: <?php echo $key_color_font; ?>"><?php echo $key_color_font; ?></p><?php
          } ?>
        </div><?php
      } ?>
    </div>

  </body>
</html>
