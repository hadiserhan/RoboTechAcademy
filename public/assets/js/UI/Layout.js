var selected_tab_id;
var selected_tab_title;
var open_screen;

$(document).ready(function() {
    SelectMenu();

    $(".panel-search-content").dxScrollView({
        scrollByContent: false,
        scrollByThumb: true,
        rtlEnabled: false,
        showScrollbar: "onScroll",
    });
    
    $(".show_hide_menu").on( "click",function() {
      if($("#SideNav").hasClass("menu-expanded")){
          $("#SideNav").removeClass("menu-expanded")
          $("#SideNav").addClass("menu-collapsed")
      }else{
          $("#SideNav").removeClass("menu-collapsed")
          $("#SideNav").addClass("menu-expanded")
      }
    });

  //Function Toggle Screen Menu
    $(".navigation li>a").on( "click",function() {
        if($(this).parent().hasClass("has-sub")){
            var myCollapse = $(this).parent().find("ul")[0];
            var col =  new bootstrap.Collapse(myCollapse);
            $(this).parent().toggleClass("open");
            $(this).parent().toggleClass("sidebar-group-active");

            if($(myCollapse).find("ul")[0]  != undefined ){
              var ulCollapse = $(myCollapse).find("ul")[0];
              var liChildMenu = $(myCollapse).find("li")[0];
              $(ulCollapse).collapse('hide');
              $(liChildMenu).removeClass("open");
              $(liChildMenu).removeClass("sidebar-group-active");
            }
        }else{

          var controller = $(this).data('con');
          var action = $(this).data('action');
          
          $(".navigation li.active").removeClass("active");
          $(this).parent().addClass("active");
          OpenScreen(controller,action,[]);
        }
    });
});

// function OpenScreen(controller,action,params){
//   var url = `/${controller}/${action}`;
//   if(Selected_Menu != url){
//     helper.showLoadPanel();
//     $(".content-wrapper").html("");
//     Selected_Menu = url;
//     helper.ajax_post(url, params, on_GetScreen_Success());
//   }
// }

function OpenScreen(controller,action,params){
  var url = `/${controller}/${action}`;
  var id = GetMenuID(controller,action);
  if(checkScreenIsOpened(controller,action,id) == false){
    helper.showLoadPanel();
    Selected_Menu = url;
    selected_tab_id = id;
    selected_tab_title = GetMenuName(controller,action);
    helper.ajax_post(url, params, on_GetScreen_Success());

    open_screen = {
      id : id,
      controller: controller,
      action:action
    }
    // Opened_Screen.push(open_screen);

  }else{
    SelectTab(id);
  }
}

function checkScreenIsOpened(controller,action,id){
  
  for (var i = 0 ; i < Opened_Screen.length ; i++){
    if (Opened_Screen[i].id == id){
        return true;
    }
  }
  return false;
}

function GetMenuID(controller,action){
  menus = $(".main-menu-content .navigation li>a");
  for(let imenu = 0; imenu<menus.length;imenu++){
      menu = menus[imenu];
      if($(menu).data("con") != undefined){
        if($(menu).data("con") == controller && $(menu).data("action") == action ) {
          return $(menu).data("id");
        }
      }
  }
}

function GetMenuName(controller,action){
  menus = $(".main-menu-content .navigation li>a");
  for(let imenu = 0; imenu<menus.length;imenu++){
      menu = menus[imenu];
      if($(menu).data("con") != undefined){
        if($(menu).data("con") == controller && $(menu).data("action") == action ) {
          return $(menu)[0].innerText;
        }
      }
  }
  return action;
};

// function on_GetScreen_Success() {
//   return function(response) {
//     //response = JSON.parse(response);
//     // if (response.Status == enums.ResponseResult.Success) {

//     // } else {
//     //     helper.ShowAlert("Error Load Data", "error");
//     // }
//     $(".content-wrapper").html(response);
    
//     helper.hideLoadPanel();
   
//   }.bind(this);
// };

//Load Grid Ajax Call success
function on_GetScreen_Success() {
  return function(response) {
      var tabPanelItems = tabPanel.option("items");
      var newTab = {
        id:selected_tab_id,
        title:selected_tab_title,
        html:response
      } 
      helper.hideLoadPanel();
      tabPanelItems.push(newTab);
      tabPanel.option("items", tabPanelItems);
      tabPanel.option("selectedItem", newTab);
      
      Opened_Screen.push(open_screen);

      //if (tabPanelItems.length <= 2) tabPanel.repaint();
      //updateButtonsState(tabPanelItems);

   //$(".content-wrapper").html(response);
  }.bind(this);
};

function RemoveScreenIsOpened(id){
  for (var i = 0 ; i < Opened_Screen.length ; i++){
    if (Opened_Screen[i].id == id){
      let closed_screen = Opened_Screen[i];
      var index = Opened_Screen.indexOf(closed_screen);
      Opened_Screen.splice(index, 1);
    }
  }
};

// Tabs Region
var tabPanel;
  function onTabInitialized(e) {
        tabPanel = e.component;
  }

  function titleTemplate(itemData, itemIndex, itemElement) {
    itemElement.append(
        $("<span>")
            .text(`${itemData.title}`)
    );
    if (tabPanel.option("items").length !== 0) {
        itemElement.append(
            $("<i>")
                .addClass("tab-close-icon")
                .addClass("dx-icon")
                .addClass("dx-icon-close")
                .click(function () { closeButtonHandler(itemData); })
        );
    }
  }

  function closeButtonHandler(itemData) {
      var tabPanelItems = tabPanel.option("items").slice();
      var index = tabPanelItems.indexOf(itemData);
    
      tabPanelItems.splice(index, 1);
      // if (index >= tabPanelItems.length && index > 0) tabPanel.option("selectedIndex", index - 1);
      tabPanel.option("items", tabPanelItems);
      
      RemoveScreenIsOpened(itemData.id);

      if(tabPanel.option("selectedItem") != null){
        var id = tabPanel.option("selectedItem").id;
        SelectMenuByID(id);
      }else{
        $(".navigation li.active").removeClass("active");
      }
      //updateButtonsState(tabPanelItems);
  }

  function onTabClicked(e) {
    var clicked_tab = e.itemData;
    SelectMenuByID(clicked_tab.id);
  };

  function SelectTab(id){
    var tabPanelItems = tabPanel.option("items").slice();
    
    for (var i = 0 ; i < tabPanelItems.length ; i++){
      if (tabPanelItems[i].id == id){
        
          let itemData = tabPanelItems[i];
          var index = tabPanelItems.indexOf(itemData);
          tabPanel.option("selectedIndex", index);
      }
    }
  };

  function closeTab(id){

    var tabPanelItems = tabPanel.option("items").slice();
  
    for (var i = 0 ; i < tabPanelItems.length ; i++){
      if (tabPanelItems[i].id == id){
        
          let itemData = tabPanelItems[i];
          var index = tabPanelItems.indexOf(itemData);
          tabPanelItems.splice(index, 1);
  
          tabPanel.option("items", tabPanelItems);
          RemoveScreenIsOpened(itemData.id);
    
      }
    }
  };

  // function SelectMenu(controller,action){
  //   menus = $(".main-menu-content .navigation li>a");
  //   for(let imenu = 0; imenu<menus.length;imenu++){
  //       menu = menus[imenu];
  //       if($(menu).data("con") != undefined){
  //         if($(menu).data("con") == controller && $(menu).data("action") == action ) {
  //           $(".navigation li.active").removeClass("active");
  //           $(menu).parent().addClass("active");
  //           break;
  //         }
  //       }
  //   }
  // }
  
  function SelectMenu(){
    $(".nav-item .active").parent().parent().addClass("open sidebar-group-active");
    $(".nav-item .active").parent().addClass("show");
  }

  function SelectMenuByID(id){
    menus = $(".main-menu-content .navigation li>a");
    for(let imenu = 0; imenu<menus.length;imenu++){
        menu = menus[imenu];
        if($(menu).data("con") != undefined){
          if($(menu).data("id") == id) {
            $(".navigation li.active").removeClass("active");
            $(menu).parent().addClass("active");
            break;
          }
        }
    }
  }