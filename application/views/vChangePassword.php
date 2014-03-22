<div style="float: left"class="body">
    <?=form_open("change_pass/change_password") ?>
    <table cellspacing='3' cellpading='3'>
        <tr>
            <th><br/>Current Password </th>
            <th></th>
            <td><br/><?=form_password(array("name"=>"cur_pw"), NULL, 'class="form-control input-sm"')?></td>
            <td><?= form_error("cur_pw") ?></td>
        </tr>
        <tr>
            <th><br/>New Password </th>
            <th></th>
            <td><br/><?=form_password(array("name"=>"new_pw"), NULL, 'class="form-control input-sm"')?></td>
            <td><?= form_error("new_pw") ?></td>
        </tr>
        <tr>
            <th><br/>Repeat Password </th>
            <th></th>
            <td><br/><?=form_password(array("name"=>"conf_pw"), NULL, 'class="form-control input-sm"')?></td> 
            <td><?= form_error("conf_pw") ?></td>
        </tr>
        <tr>
            <td colspan='3' align='right'>
                <br/><button type="submit" class="btn btn-default">Update Password</button>
            </td>
        </tr>
    </table>
    <br/>
</div> 