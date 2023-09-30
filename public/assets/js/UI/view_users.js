var controllerName = "User";

    $("#users_toolbar").dxToolbar({
        items: [
            {
                widget: 'dxButton',
                location:"before",
                options: {
                    icon: "remove",
                    text:"Delete",
                    stylingMode: "contained",
                    type: "danger",
                    onClick(){
                        btnDeleteUsers();
                    },
                }
            },
            {
                widget: 'dxButton',
                location:"before",
                options: {
                    icon: "edit",
                    text:"Edit",
                    stylingMode: "contained",
                    type: "normal",
                    onClick(){
                        btnEditUser();
                    },
                }
            },
            {
                widget: 'dxButton',
                location:"before",
                options: {
                    elementAttr: {
                        id: "btn_activate",
                    },
                    icon: "check",
                    text:"Activate",
                    stylingMode: "contained",
                    type: "success",
                    visible:false,
                    onClick(){
                        btnActivateUser();
                    },
                }
            },
            {
                widget: 'dxButton',
                location:"before",
                options: {
                    elementAttr: {
                        id: "btn_deactivate",
                    },
                    icon: "clear",
                    text:"DeActivate",
                    stylingMode: "contained",
                    type: "danger",
                    visible:false,
                    onClick(){
                        btnDeActivateUser();
                    },
                }
            },
            {
                widget: 'dxButton',
                location:"after",
                locateInMenu:"never",
                options: {
                    icon: " bi-person-plus",
                    text:"New",
                    stylingMode: "contained",
                    type: "default",
                    onClick(){
                        btnAddNewUser();
                    },
                }
            },
            {   
                location: 'center',
                locateInMenu:"never",
                template: '<div class="toolbar-label dx-form-group-caption">All Users</div>'
            },
        ]
    });

    $("#grid_users").dxDataGrid({
        dataSource: gridDataSource,
        keyExpr: "id",
        showBorders:true,
        rtlEnabled:false,
        height:"100%",
        width:"100%",
        showRowLines:true,
        rowAlternationEnabled:false,
        hoverStateEnabled:true,
        showColumnLines:true,
        allowColumnResizing:true,
        columnResizingMode:"widget",
        allowColumnReordering:true,
        columnAutoWidth:true,
        dateSerializationFormat:"yyyy-MM-dd",
        columnChooser: {
            // emptyPanelText:"Drag a column here to hide it",
            enabled:true,
            // height:260,
            mode:"dragAndDrop",
            // position:undefined,
            // search: {},
            // selection: {},
            // sortOrder:undefined,
            title:"Column Chooser",
            width:250
        },
        headerFilter: {
            visible:true,
        },
        searchPanel: {
            visible:false,
        },
        filterPanel: {
            visible:false
        },
        filterRow: {
            visible:true
        },
        groupPanel: {
            emptyPanelText:"Drag a column header here to group by that column",
            visible:true
        },
        selection: {
            allowSelectAll:true,
            deferred:false,
            mode:"multiple",
            selectAllMode:"allPages",
            showCheckBoxesMode:"onClick"
        },
        onSelectionChanged(e) {grid_row_selection_changed(e)},
        columns: [{
            dataField: "id", 
            caption: "ID",
            visible: false,
        },{
            dataField: "first_name", 
            caption: "Name",
            allowHeaderFiltering:false,
        },{
            dataField: "last_name", 
            caption: "last_name",
            allowHeaderFiltering:true,
            allowFiltering: true,
        },{
            dataField: "phone", 
            caption: "phone",
            allowHeaderFiltering:false,
        },{
            dataField: "is_inactive", 
            caption: "Status",
            alignment:"center",
            cellTemplate(element,info){ checktStatusTemplate(element,info);},
        }]
    });
// Get Grid Instance
function getDataGridInstance() {
    return $("#grid_users").dxDataGrid("instance");
}

//get toolbar instance
function getToolbarInstance() {
    return $("#users_toolbar").dxToolbar("instance");
}

//On Grid Row Selection Changed
function grid_row_selection_changed(selectedItems) {
    console.log("selection_changed")
  var data = selectedItems.selectedRowsData[0];
  
  if(selectedItems.selectedRowsData.length == 1){
      if(data != undefined && data.is_inactive == "0") {
          $("#btn_activate").dxButton("instance").option("visible",false);
          $("#btn_deactivate").dxButton("instance").option("visible",true);
      }else if(data != undefined && data.is_inactive == "1"){
          $("#btn_deactivate").dxButton("instance").option("visible",false);
          $("#btn_activate").dxButton("instance").option("visible",true);
      }
  }else{
      $("#btn_deactivate").dxButton("instance").option("visible",false);
          $("#btn_activate").dxButton("instance").option("visible",false);
  }
}

// Add New User (open New User Screen)
function btnAddNewUser(){
    OpenScreen(controllerName,"NewUser",[]);
    SelectMenu(controllerName,"NewUser");
}

// DeActivate User
function btnDeActivateUser(active){
    console.log("btnDeActivateUser");
    var selected_Users = getDataGridInstance().getSelectedRowsData()[0];
    if (selected_Users.length == 0) 
    {
        helper.ShowAlert("Please Select a Record", "info");
        return;
    }

    helper.showLoadPanel();
    helper.ajax_post("/"+controllerName+"/DeActivateUser", selected_Users.id, on_ActiveUser_Success());
}

// Activate User
function btnActivateUser(active){
    console.log("btnActivateUser");
    var selected_Users = getDataGridInstance().getSelectedRowsData()[0];
    if (selected_Users.length == 0) 
    {
        helper.ShowAlert("Please Select a Record", "info");
        return;
    }

    helper.showLoadPanel();
    helper.ajax_post("/"+controllerName+"/ActivateUser", selected_Users.id, on_ActiveUser_Success());
}

// On Active Users Success
function on_ActiveUser_Success() {
    return function(response) {
        //response = JSON.parse(response);
        // if (response.Status == enums.ResponseResult.Success) {

        // } else {
        //     helper.ShowAlert("Error Load Data", "error");
        // }
        //getDataGridInstance().refrech;
        Selected_Menu = "";
        OpenScreen(controllerName,"Users",[]);
        helper.hideLoadPanel();
    }.bind(this);
};

//Edit Existing User (open Edit User)
function btnEditUser(){
    var selected_row = getDataGridInstance().getSelectedRowsData();
     if (selected_row.length == 0) 
     {
        helper.ShowAlert("Please Select a Record", "info");
        return;
    } else if (selected_row.length > 1) {
        helper.ShowAlert("Please Select Only One Record", "info");
        return;
    }
    var params ={
        UserID:selected_row[0].id.toString()
    }

    OpenScreen(controllerName,"NewUser",selected_row[0].id.toString());
    SelectMenu(controllerName,"NewUser");
}

// Delete User or multi Users
function btnDeleteUsers(){

    console.log("btnDeleteUsers");
    let selected_Users = getDataGridInstance().getSelectedRowsData();
    if (selected_Users.length == 0) 
    {
        helper.ShowAlert("Please Select a Record", "info");
        return;
    }

    var result = DevExpress.ui.dialog.confirm("<i>Are you sure you want to Delete Users?</i>", "Delete User");
    result.done(function(dialogResult) {

        if(dialogResult == false){
            return;
        }
    
        var RecordIDs = [];
        for (let record_count = 0; record_count < selected_Users.length; record_count++) {
            RecordIDs.push(selected_Users[record_count].id)
        }

        helper.showLoadPanel();
        helper.ajax_post("/"+controllerName+"/DeleteUsers", RecordIDs, on_DeleteUsers_Success()); 
    });
}

// On Delete Users Success
function on_DeleteUsers_Success() {
    return function(response) {
        //response = JSON.parse(response);
        // if (response.Status == enums.ResponseResult.Success) {

        // } else {
        //     helper.ShowAlert("Error Load Data", "error");
        // }
        let selected_Users = getDataGridInstance().getSelectedRowsData();
        for (let record_count = 0; record_count < selected_Users.length; record_count++) 
        {
            let row_index = getDataGridInstance().getRowIndexByKey(selected_Users[record_count].id);
            getDataGridInstance().deleteRow(row_index);
            getDataGridInstance().refresh();
        }
        helper.hideLoadPanel();
    }.bind(this);
};