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
          foreach ($menuData[0]->data as $menuElement)
          {
            if(!empty($menuElement->children))
            {
              // children present
              ?>
              <li id="<?php echo $menuElement->item_url;?>NestedListButton" onclick="toggleMenuNestedList(this)"><a id="<?php echo $menuElement->item_url;?>_a" href="<?php echo url('/').'/'.$menuElement->item_url;?>"><?php echo $menuElement->item_name;?></a>
                <script>
                window.addEventListener('DOMContentLoaded', function() {
                  $(document).ready(function(){
                    $("#<?php echo str_replace("/","\\\\/", $menuElement->item_url);?>_a").click(function(event){
                      event.stopPropagation();
                    });
                  });
                });
                </script>
                <span id="glyphicon<?php echo $menuElement->item_url;?>" class="glyphicon glyphicon-chevron-down"></span>
              </li>
              <ul id="<?php echo $menuElement->item_url;?>NestedList" class="mainMenuNested">
                <?php
                // print children li one by one
                foreach ($menuElement->children as $childElement)
                {
                  ?>
                  <li onclick="location.href='<?php echo url('/').'/'.$childElement->item_url;?>';"><a href="<?php echo url('/').'/'.$childElement->item_url;?>"><?php echo $childElement->item_name;?></a></li>
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
              <li onclick="location.href='<?php echo url('/').'/'.$menuElement->item_url;?>';"><a href="<?php echo url('/').'/'.$menuElement->item_url;?>"><?php echo $menuElement->item_name;?></a></li>
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
          <span id="mainMenuSubTitle"><?php echo $menuData[1]->title; ?></span>
          <ul>
            <?php
            $count = 0;
            foreach ($menuData[1]->data as $menuElement)
            {
              $count++;
              if(!empty($menuElement->children))
              {
                // children present
                if($count == 1)
                {
                  // first li
                  ?>
                  <li id="<?php echo $menuElement->item_url; ?>NestedListButton" class="mainMenuSubFirstItem" onclick="toggleMenuNestedList(this)"><a id="<?php echo $menuElement->item_url;?>_a" href="<?php echo url('/').'/'.$menuElement->item_url; ?>"><?php echo $menuElement->item_name; ?></a><span id="glyphicon<?php echo $menuElement->item_url; ?>" class="glyphicon glyphicon-chevron-down"></span></li>
                  <?php
                }
                else
                {
                  // not first li
                  ?>
                  <li id="<?php echo $menuElement->item_url; ?>NestedListButton" onclick="toggleMenuNestedList(this)"><a id="<?php echo $menuElement->item_url;?>_a" href="<?php echo url('/').'/'.$menuElement->item_url; ?>"><?php echo $menuElement->item_name; ?></a><span id="glyphicon<?php echo $menuElement->item_url; ?>" class="glyphicon glyphicon-chevron-down"></span></li>
                  <?php
                }
                ?>
                <script>
                window.addEventListener('DOMContentLoaded', function() {
                  $(document).ready(function(){
                    $("#<?php echo str_replace("/","\\\\/", $menuElement->item_url);?>_a").click(function(event){
                      event.stopPropagation();
                    });
                  });
                });
                </script>
                <ul id="<?php echo $menuElement->item_url; ?>NestedList" class="mainMenuSubNested">
                  <?php
                  foreach ($menuElement->children as $childElement)
                  {
                    ?>
                    <li onclick="location.href='<?php echo url('/').'/'.$childElement->item_url; ?>';"><a href="<?php echo url('/').'/'.$childElement->item_url; ?>"><?php echo $childElement->item_name; ?></a></li>
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
                  <li onclick="location.href='<?php echo url('/').'/'.$menuElement->item_url; ?>';" class="mainMenuSubFirstItem"><a href="<?php echo url('/').'/'.$menuElement->item_url; ?>"><?php echo $menuElement->item_name; ?></a></li>
                  <?php
                }
                else
                {
                  // not first li
                  ?>
                  <li onclick="location.href='<?php echo url('/').'/'.$menuElement->item_url; ?>';"><a href="<?php echo url('/').'/'.$menuElement->item_url; ?>"><?php echo $menuElement->item_name; ?></a></li>
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
