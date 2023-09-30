  var controllerName = "User";

  $(document).ready(function() {

    $('#form_user_container').on('submit', (e) => {
      e.preventDefault();
      helper.ajax_post("/"+controllerName+"/AddUser",$('#form_user').dxForm('instance').option("formData") , on_AddEditUser_Success(e));
    });
  
    // End Ready function
  });

  //Load Grid Ajax Call success
  function on_AddEditUser_Success(e) {
    return function(response) {
      e.preventDefault();
      // e.stopPropagation();
      console.log(response);
      getFormInstance().resetValues();
      helper.hideLoadPanel();
      helper.ShowAlert("New User Added", "success");
    }.bind(this);
  };

  //Get Form Instance
  function getFormInstance() {
    return $("#form_user_container").dxForm("instance");
  }

  //Add New User
  function btnAddUser(e){
    if(getFormInstance().validate().isValid == true){
      var result = DevExpress.ui.dialog.confirm("<i>Are you sure you want to Add this User?</i>", "Add User");
      result.done(function(dialogResult) {

          if(dialogResult == false){
              return;
          }
        
          helper.showLoadPanel();
          $("#form_user_container").submit();
      });
    }else{
        console.log("NotValid");
    }
  }

  //update Edit User
  function btnUpdateUser(e){
      if(getFormInstance().validate().isValid == true){
        var result = DevExpress.ui.dialog.confirm("<i>Are you sure you want to Update this User?</i>", "Edit User");
        result.done(function(dialogResult) {
    
            if(dialogResult == false){
                return;
            }
          
            helper.showLoadPanel();
            $("#form_user_container").submit();
        });
      }else{
          console.log("false");
      }
  }

  // Delete User
  function btnDeleteUser(e){
      console.log("btnDeleteUser");
      let UserID = getFormInstance().option("formData").UserID;
      var result = DevExpress.ui.dialog.confirm("<i>Are you sure you want to Delete this User?</i>", "Delete User");
      result.done(function(dialogResult) {

          if(dialogResult == false){
              return;
          }
        
          helper.showLoadPanel();
          helper.ajax_post("/"+controllerName+"/DeleteUser", UserID, on_DeleteUser_Success()); 
      });
    }

  // On Delete Record Success
  function on_DeleteUser_Success() {
    return function(response) {
        //response = JSON.parse(response);
        // if (response.Status == enums.ResponseResult.Success) {

        // } else {
        //     helper.ShowAlert("Error Load Data", "error");
        // }
        helper.hideLoadPanel();
    }.bind(this);
  };

  function btnResetUserPassword(){
    console.log("btnResetUserPassword");
    let UserID = getFormInstance().option("formData").UserID;
    var result = DevExpress.ui.dialog.confirm("<i>Are you sure you want to Reset Password For this User?</i>", "Reset User Password");
    result.done(function(dialogResult) {

        if(dialogResult == false){
            return;
        }
      
        helper.showLoadPanel();
        helper.ajax_post("/"+controllerName+"/ResetPassword", UserID, on_ResetPassword_Success()); 
    });
  }

    // On Delete Record Success
    function on_ResetPassword_Success() {
      return function(response) {
          //response = JSON.parse(response);
          // if (response.Status == enums.ResponseResult.Success) {
  
          // } else {
          //     helper.ShowAlert("Error Load Data", "error");
          // }
          helper.hideLoadPanel();
      }.bind(this);
    };


  // open All Users
  function btnAllUsers(){
    OpenScreen("User","Users",[]);
    SelectMenu("User","Users");
  }