<div class="DashboardSidebar" id="DashboardSidebar">
    <h2 class="DashboardLogo" id="DashboardLogo">IMS</h2>
    <div class="DashboardSidebarUser">
        <img src="" alt="UserImage" id="UserImage" />
        <span><?= $user['first_name'] . ' ' . $user['last_name'] ?></span>
    </div>
    <div class="DashboardSidebarMenu">
        <ul class="DashboardMenuList">
            <li class="liMainMenu">
                <a href="./dashboard.php"><i class="fa-solid fa-gauge"></i></i><span class="MenuText">Dashboard</span></a>
            </li>
            <li class="liMainMenu">
            <a href="javascript:void(0);" class="showHideSubmenu"   > 
                    <i class="fa-solid fa-cart-shopping   showHideSubmenu"  ></i>
                    <span class= "MenuText  showHideSubmenu" >Product Management</span>
                    <i class="fa-solid fa-angle-left mainMenuIconArrow  showHideSubmenu"  ></i>
                </a>
                       <ul class="subMenus" id="user">
                          <li><a class="subMenuLink" href="#"><i class="fa-regular fa-circle"></i> View Product</a></li> 
                          <li><a class="subMenuLink" href="#"><i class="fa-regular fa-circle"></i>Add Product</a></li>  
                       </ul> 
            </li>
            <li class="liMainMenu" >
                <a href="javascript:void(0);" class="showHideSubmenu"   > 
                    <i class="fa-solid fa-truck   showHideSubmenu"  ></i>
                    <span class= "MenuText  showHideSubmenu"  >Manage Supplies</span>
                    <i class="fa-solid fa-angle-left mainMenuIconArrow  showHideSubmenu"  ></i>
                </a>
                       <ul class="subMenus" id="user">
                          <li><a class="subMenuLink" href="#"><i class="fa-regular fa-circle"></i> View Supplier</a></li> 
                          <li><a class="subMenuLink" href="#"><i class="fa-regular fa-circle"></i>Add Supplier</a></li>  
                       </ul>   
                           
            </li>
            <li class="liMainMenu  showHideSubmenu" >
                <a href="javascript:void(0);" class="showHideSubmenu" > 
                    <i class="fa-solid fa-user-plus  showHideSubmenu"  ></i>
                    <span class= "MenuText  showHideSubmenu" >User Management</span>
                    <i class="fa-solid fa-angle-left mainMenuIconArrow  showHideSubmenu"  ></i>
                </a>


                       <ul class="subMenus" id="user">
                          <li><a class="subMenuLink" href="./users-add.php"><i class="fa-regular fa-circle"></i>Add User</a></li> 
                          <li><a class="subMenuLink" href="#"><i class="fa-regular fa-circle"></i>View Users</a></li>  
                       </ul>   
                           
                       
            </li>
        </ul> 
    </div>
</div>   