<div class="menuButtonContainer" id="mainMenuButton" onclick="menuToggle(this);">
  <div class="bar1"></div>
  <div class="bar2"></div>
  <div class="bar3"></div>
</div>
<?php
if(!empty($menuData) && !empty($menuData[0]))
{
  ?>
  <div id="mainMenu" class="transparent">
    <div id="menuTitleContainer">
      <h4 id="menuTitle">Menu</h4>
    </div>
    <div id="menuItemsContainer">
      <?php
      if(!empty($menuData[0]))
      {
        ?>
        <ul>
          <?php
          foreach ($menuData[0] as $menuElement)
          {
            if(!empty($menuElement->children))
            {
              // children present
              ?>
              <li id="<?php echo $menuElement->itemUrl;?>NestedListButton" onclick="toggleMenuNestedList(this)"><a id="<?php echo url('/').'/'.$menuElement->itemUrl;?>_a" href="<?php echo url('/').'/'.$menuElement->itemUrl;?>"><?php echo $menuElement->itemName;?></a>
                <script>
                window.addEventListener('DOMContentLoaded', function() {
                  $(document).ready(function(){
                    $("#<?php echo $menuElement->itemUrl;?>_a").click(function(event){
                      event.stopPropagation();
                    });
                  });
                });
                </script>
                <span id="glyphicon<?php echo $menuElement->itemUrl;?>" class="glyphicon glyphicon-chevron-down"></span>
              </li>
              <ul id="<?php echo $menuElement->itemUrl;?>NestedList" class="mainMenuNested">
                <?php
                // print children li one by one
                foreach ($menuElement->children as $childElement)
                {
                  ?>
                  <li onclick="location.href='<?php echo url('/').'/'.$childElement->itemUrl;?>';"><a href="<?php echo url('/').'/'.$childElement->itemUrl;?>"><?php echo $childElement->itemName;?></a></li>
                  <?php
                }
                ?>
              </ul>
              <?php
            }
            else
            {
              // children not present
              ?>
              <li onclick="location.href='<?php echo url('/').'/'.$menuElement->itemUrl;?>';"><a href="<?php echo url('/').'/'.$menuElement->itemUrl;?>"><?php echo $menuElement->itemName;?></a></li>
              <?php
            }
          }
          ?>
        </ul>
        <?php
      }
      if(!empty($menuData[1]))
      {
        ?>
        <div id="mainMenuDivider">
        </div>
        <div id="mainMenuSub">
          <span id="mainMenuSubTitle">Information for:</span>
          <ul>
            <?php
            $count = 0;
            foreach ($menuData[1] as $menuElement)
            {
              $count++;
              if(!empty($menuElement->children))
              {
                // children present
                if($count == 1)
                {
                  // first li
                  ?>
                  <li id="<?php echo $menuElement->itemUrl; ?>NestedListButton" class="mainMenuSubFirstItem" onclick="toggleMenuNestedList(this)"><a href="<?php echo url('/').'/'.$menuElement->itemUrl; ?>"><?php echo $menuElement->itemName; ?></a><span id="glyphicon<?php echo $menuElement->itemUrl; ?>" class="glyphicon glyphicon-chevron-down"></span></li>
                  <?php
                }
                else
                {
                  // not first li
                  ?>
                  <li id="<?php echo $menuElement->itemUrl; ?>NestedListButton" onclick="toggleMenuNestedList(this)"><a href="<?php echo url('/').'/'.$menuElement->itemUrl; ?>"><?php echo $menuElement->itemName; ?></a><span id="glyphicon<?php echo $menuElement->itemUrl; ?>" class="glyphicon glyphicon-chevron-down"></span></li>
                  <?php
                }
                ?>
                <ul id="<?php echo $menuElement->itemUrl; ?>NestedList" class="mainMenuSubNested">
                  <?php
                  foreach ($menuElement->children as $childElement)
                  {
                    ?>
                    <li onclick="location.href='<?php echo url('/').'/'.$childElement->itemUrl; ?>';"><a href="<?php echo url('/').'/'.$childElement->itemUrl; ?>"><?php echo $childElement->itemName; ?></a></li>
                    <?php
                  }
                  ?>
                </ul>
                <?php
              }
              else
              {
                // no children
                if($count == 1)
                {
                  // first li
                  ?>
                  <li onclick="location.href='<?php echo url('/').'/'.$menuElement->itemUrl; ?>';" class="mainMenuSubFirstItem"><a href="<?php echo url('/').'/'.$menuElement->itemUrl; ?>"><?php echo $menuElement->itemName; ?></a></li>
                  <?php
                }
                else
                {
                  // not first li
                  ?>
                  <li onclick="location.href='<?php echo url('/').'/'.$menuElement->itemUrl; ?>';"><a href="<?php echo url('/').'/'.$menuElement->itemUrl; ?>"><?php echo $menuElement->itemName; ?></a></li>
                  <?php
                }
                ?>
                <?php
              }
            }
            ?>
          </ul>
        </div>
        <?php
      }
      ?>
    </div>
  </div>
  <?php
}
?>
