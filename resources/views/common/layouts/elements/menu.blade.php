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
            ?>
            <li id="<?php echo $menuElement->itemUrl;?>NestedListButton" onclick="toggleMenuNestedList(this)"><a id="<?php echo $menuElement->itemUrl;?>_a" href="<?php echo $menuElement->itemUrl;?>"><?php echo $menuElement->itemName;?></a>
              <script>
              window.addEventListener('DOMContentLoaded', function() {
                $(document).ready(function(){
                  $("#<?php echo $menuElement->itemUrl;?>_a").click(function(event){
                    event.stopPropagation();
                  });
                });
              });
              </script>
              <?php
              if(!empty($menuElement->children))
              {
                ?>
                <span id="glyphicon<?php echo $menuElement->itemUrl;?>" class="glyphicon glyphicon-chevron-down"></span>
                <?php
              }
              ?>
            </li>
            <?php
            if(!empty($menuElement->children))
            {
              ?>
              <ul id="<?php echo $menuElement->itemUrl;?>NestedList" class="mainMenuNested">
                <?php
                // print children li one by one
                foreach ($menuElement->children as $childElement)
                {
                  ?>
                  <li onclick="location.href='<?php echo $childElement->itemUrl;?>';"><a href="<?php echo $childElement->itemUrl;?>"><?php echo $childElement->itemName;?></a></li>
                  <?php
                }
                ?>
              </ul>
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
            <li id="StudentsNestedListButton" class="mainMenuSubFirstItem" onclick="toggleMenuNestedList(this)"><a href="#">Students</a><span id="glyphiconStudents" class="glyphicon glyphicon-chevron-down"></span></li>
            <ul id="StudentsNestedList" class="mainMenuSubNested">
              <li onclick="location.href='#';"><a href="#">Communities and Groups</a></li>
            </ul>
            <li onclick="location.href='#';"><a href="#">Faculty</a></li>
            <li onclick="location.href='#';"><a href="#">Alumni</a></li>
            <li onclick="location.href='#';"><a href="#">Employees</a></li>
            <li id="CommunityNestedListButton" onclick="toggleMenuNestedList(this)"><a href="#">Community</a><span id="glyphiconCommunity" class="glyphicon glyphicon-chevron-down"></span></li>
            <ul id="CommunityNestedList" class="mainMenuSubNested">
              <li onclick="location.href='#';"><a href="#">Neighbours and Nonprofits</a></li>
              <li onclick="location.href='#';"><a href="#">Parents</a></li>
              <li onclick="location.href='#';"><a href="#">Conference and Event Services</a></li>
              <!-- <li onclick="location.href='#';"><a href="#">Facilities</a></li> -->
              <!-- <li onclick="location.href='#';"><a href="#">Library</a></li> -->
              <!-- <li onclick="location.href='#';"><a href="#">Academic Resources</a></li> -->
            </ul>
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
