<script src=<?= base_url("assets/js/UI/NewUser.js")?>></script>
<div classs="users">
    <div class="new-user" style="height: fit-content;">
         <!-- <form  id="form_user_container" method="post"></form> -->
         <form  id="form_user_container"></form>
        <script>
            $('#form_user_container').dxForm({
                // formData: employee,
                colCount:1,
                items: [
                {
                    itemType: 'group',
                    cssClass: 'first-group he-card',
                    colCount: 7,
                    items: [{
                        template: "<div class='form-avatar'><span class='dx-form-group-caption'>New User</span></div>",
                    },{
                        colSpan:6,
                        cssClass: "form-button-group",
                        template: (data, element) => {

                            generalbutton_template(element);
                        }
                    }
                ]},
                {
                    itemType: 'group',
                    caption:"General Information",
                    cssClass:"first-group he-card",
                    colCount: 3,
                    items: [{
                        dataField: 'first_name',
                        validationRules: [
                            { type: "required",message: 'First Name Is Required', }
                        ]
                    }, 
                    {
                        dataField: 'father_name',
                    }, 
                    {
                        dataField: 'last_name',
                        validationRules: [
                            { type: "required",message: 'Last Name Is Required', }
                        ]
                    },
                    {
                        dataField: 'email',
                        editorType: 'dxTextBox',
                        editorOptions: {
                            mode:"email",
                            showClearButton:true,
                        },
                        validationRules: [
                            { type: "email",message: 'Invalid Email', }
                        ]
                    }, 
                    {
                        label:{
                            text:"Mobile Number"
                        },
                        dataField: 'mobile_number',
                        editorType: 'dxTextBox',
                        editorOptions: {
                            mode:"tel",
                            showClearButton:true,
                            mask: "(00) 000-000",
                            maskRules: { X: /[02-9]/ },
                            maskInvalidMessage:"Invalid Mobile Number",
                        }
                    }, 
                    {
                        dataField: 'gender',
                        editorType: 'dxSelectBox',
                        editorOptions: {
                            items: [{
                                text:"Male",
                                value:"1",
                            },{
                                text:"Female",
                                value:"2", 
                            }],
                            displayExpr:"text",
                            valueExpr: "value",
                            value: '1',
                        },
                    }, 
                    {
                        dataField: 'username',
                        validationRules: [
                            { type: "required",message: 'Username Is Required', }
                        ]
                    },
                    {
                        dataField: 'password',
                        validationRules: [
                            { type: "required",message: 'Password Is Required', }
                        ]
                    },
                    {
                        label:{
                            text:"Role"
                        },
                        dataField: 'role_id',
                        editorType: 'dxSelectBox',
                        editorOptions: {
                            items: [{
                                text:"Male",
                                value:"1",
                            },{
                                text:"Female",
                                value:"2", 
                            }],
                            displayExpr:"text",
                            valueExpr: "value",
                            value: '1',
                        },
                    }, 
                    {
                        label:{
                            text:"Is Active"
                        },
                        dataField: 'is_inactive',
                        editorType: 'dxCheckBox',
                        editorOptions: {
                            value: '1',
                        },
                       
                    }
                    ],
                }],
            });

            function generalbutton_template(element){
               
                 return $("<div class='form-button'>").append(
                        $("<div />").dxButton({
                            elementAttr: {
                                class: "group-button",
                            },
                            text: "Users",
                            icon: " bi-people-fill",
                            stylingMode: "contained",
                            type: "normal",
                            useSubmitBehavior: false,
                            onClick(){
                                btnAllUsers();
                            },
                        }),
                        $("<div />").dxButton({
                            elementAttr: {
                                class: "group-button",
                            },
                            text: "Reset Password",
                            icon: " bi-people-fill",
                            stylingMode: "contained",
                            type: "normal",
                            useSubmitBehavior: false,
                            onClick(){
                                btnResetUserPassword();
                            },
                        }),
                        $("<div />").dxButton({
                            elementAttr: {
                                class: "group-button",
                            },
                            text: "Update",
                            icon: "edit",
                            stylingMode: "contained",
                            type: "default",
                            useSubmitBehavior: false,
                            onClick(){
                                btnUpdateUser();
                            },
                        }),
                        $("<div />").dxButton({
                            elementAttr: {
                                class: "group-button",
                            },
                            text: "Delete",
                            icon: "remove",
                            stylingMode: "contained",
                            type: "danger",
                            useSubmitBehavior: false,
                            onClick(){
                                btnDeleteUser();
                            },
                        })
                ).appendTo(element);
                // <div class="form-button">
                //     @(Html.DevExtreme().Button()
                //         .Text("Users")
                //         .Type(ButtonType.Normal)
                //         .StylingMode(ButtonStylingMode.Contained)
                //         .UseSubmitBehavior(false)
                //         .Icon(" bi-people-fill")
                //         .OnClick("btnAllUsers")
                //     )
                //     @(Html.DevExtreme().Button()
                //         .Text("Save")
                //         .Type(ButtonType.Default)
                //         .StylingMode(ButtonStylingMode.Contained)
                //         .UseSubmitBehavior(false)
                //         .Icon("save")
                //         .OnClick("btnAddUser")
                //     )
                // </div>
            }
        </script>
          
         
    </div>
</div>

<!-- @using(Html.DevExtreme().NamedTemplate("generalbutton_template")) {
     
     @if(Model?.UserID != Guid.Empty){
        <div class="form-button">
            @(Html.DevExtreme().Button()
                .Text("Users")
                .Type(ButtonType.Normal)
                .StylingMode(ButtonStylingMode.Contained)
                .UseSubmitBehavior(false)
                .Icon(" bi-people-fill")
                .OnClick("btnAllUsers")
            )
            @(Html.DevExtreme().Button()
                .Text("Reset Password")
                .Type(ButtonType.Normal)
                .StylingMode(ButtonStylingMode.Contained)
                .UseSubmitBehavior(false)
                .Icon("save")
                .Width("165px")
                .OnClick("btnResetUserPassword")
            )
            @(Html.DevExtreme().Button()
                .Text("Update")
                .Type(ButtonType.Default)
                .StylingMode(ButtonStylingMode.Contained)
                .UseSubmitBehavior(false)
                .Icon("edit")
                .OnClick("btnUpdateUser")
            )
            @(Html.DevExtreme().Button()
                .Text("Delete")
                .Type(ButtonType.Danger)
                .StylingMode(ButtonStylingMode.Contained)
                .UseSubmitBehavior(false)
                .Icon("remove")
                .OnClick("btnDeleteUser")
            )
        </div>
     }else{
        <div class="form-button">
            @(Html.DevExtreme().Button()
                .Text("Users")
                .Type(ButtonType.Normal)
                .StylingMode(ButtonStylingMode.Contained)
                .UseSubmitBehavior(false)
                .Icon(" bi-people-fill")
                .OnClick("btnAllUsers")
            )
            @(Html.DevExtreme().Button()
                .Text("Save")
                .Type(ButtonType.Default)
                .StylingMode(ButtonStylingMode.Contained)
                .UseSubmitBehavior(false)
                .Icon("save")
                .OnClick("btnAddUser")
            )
        </div>
     }
} -->


