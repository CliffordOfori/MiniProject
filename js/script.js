var sideBarIsOpen = true;


ToggleBtn.addEventListener( 'click', (event) => {
    event.preventDefault();

    if(sideBarIsOpen) {
     DashboardSidebar.style.width = '10%';
     DashboardSidebar.style.transition = '1s all';
     DashboardContentContainer.style.width = '90%';
     DashboardLogo.style.fontSize = '60px';
     UserImage.style.width = '60px';
     MenuIcons = document.getElementsByClassName('MenuText');
     for(var i=0; i < MenuIcons.length;i++){
        MenuIcons[i].style.display = 'none'
     }
    document.getElementsByClassName('DashboardMenuList')[0].style.textAlign = 'center';
    sideBarIsOpen = false;
    } else{
        DashboardSidebar.style.width = '20%';
        DashboardContentContainer.style.width = '80%';
        DashboardLogo.style.fontSize = '80px';
        UserImage.style.width = '80px';
        MenuIcons = document.getElementsByClassName('MenuText');
        for(var i=0; i < MenuIcons.length;i++){
           MenuIcons[i].style.display = 'inline-block'
        }
       document.getElementsByClassName('DashboardMenuList')[0].style.textAlign = 'left';
       sideBarIsOpen = true;
    }
});



 
// submenu show/hide  function
document.addEventListener('click', function(e) {
    let clickedEl = e.target;
   
    if (clickedEl.classList.contains('showHideSubmenu')) {
        let subMenu = clickedEl.closest('li').querySelector('.subMenus');
         let mainMenuIcon = clickedEl.closest('li').querySelector('.mainMenuIconArrow');
         
         

        // close/open the submenus
        let subMenus = document.querySelectorAll('.subMenus');
        subMenus.forEach((sub) => {
            if (subMenu !== sub) sub.style.display = 'none';
        });

              //call   function to show/hide submenu
              showHideSubmenu(subMenu,mainMenuIcon);

    }
});  

   // fuction to show/hide submenu
    function showHideSubmenu(subMenu,mainMenuIcon){
   

      // check if there's a submenu
      if (subMenu != null) {

        if(subMenu.style.display ==='block') {
         subMenu.style.display = 'none';
           mainMenuIcon.classList.remove('fa-angle-down');
           mainMenuIcon.classList.add('fa-angle-left');
         } else { 
           subMenu.style.display = 'block';
           mainMenuIcon.classList.remove('fa-angle-left');
           mainMenuIcon.classList.add('fa-angle-down');

      }
      
     }
    
    }











    


 

 // add / hide active class to menu
  //get the current pageBreakAfter: 
 //use selector to get the current menu or submenu
 //add the active class 


  let pathArray = window.location.pathname.split('/');
  let curFile = pathArray[pathArray.length - 1];

   let curNav = document.querySelector ('a[href="./'+ curFile +'"]'); 
   curNav.classList.add('subMenuActive');


   let mainNav = curNav.closest('li.liMainMenu');
    // mainNav.style.background = '#763a49';
    // mainNav.style.color = '#fff';
    // mainNav.style.borderTop = '1px solid #fff';
    // mainNav.style.borderBottom = '1px solid #fff';
  //  mainNav.classList.add('subMenuActive2');

   

  let subMenu = curNav.closest('.subMenus');
   let mainMenuIcon =   mainNav.querySelector('i.mainMenuIconArrow');


    //call   function to show/hide submenu
    showHideSubmenu(subMenu,mainMenuIcon);


  
  


  
 
  




 
 





  





