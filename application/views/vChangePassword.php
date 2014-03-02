<div id="body">
    <?=form_open("change_pass/change_password") ?>
    <table class="table table-striped" cellspacing='3' cellpading='3'>
        <tr><td>
            Current Password <td> <?=form_password(array("name"=>"cur_pw"))?>
            <td><?= form_error("cur_pw") ?>
        </tr></td>
        <tr><td>
            New Password <td> <?=form_password(array("name"=>"new_pw"))?>
            <td><?= form_error("new_pw") ?>
        </tr></td>
        <tr><td>
            Repeat Password <td> <?=form_password(array("name"=>"conf_pw"))?>
            <td><?= form_error("conf_pw") ?>
        </tr></td>
            <tr><td colspan='3' align='right'>
            <input type='submit' name='sumit' value='Update Password'/>
        </tr></td>
    </table>
</div> 