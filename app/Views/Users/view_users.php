
<div class="section_users">
    <div class="he-card">
        <div id="users_toolbar" class="users-toolbar"></div>
    </div>
    <div class="he-card grid-containner">
        <div id="grid_users"></div>
    </div>

</div>

<script>
    var gridDataSource = <?= json_encode($Allusers) ?>;

    function checktStatusTemplate(element,info){
        console.log(info)

        if(info.text == "0"){
                element.append(
                $("<div>").append(
                    $("<span>")
                        .text("Active")
                        .css("margin-left","4px")
                        .addClass("dx-button-text badge badge-success")
                    ));
        }else{
            element.append(
                $("<div>")
                .append(
                    $("<span>")
                        .text("InActive")
                        .css("margin-left","4px")
                        .addClass("dx-button-text badge badge-danger")
                    ));
        }
    }
</script>
<script src=<?= base_url("assets/js/UI/view_users.js")?>></script>