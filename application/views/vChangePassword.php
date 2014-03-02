<div id="body">
    <?=form_open("change_pass/change_password") ?>
<<<<<<< HEAD
    <table class="table table-striped" cellspacing='3' cellpading='3'>
=======
<<<<<<< HEAD
    <table class="table table-striped" cellspacing='3' cellpading='3'>
=======
<<<<<<< HEAD
    <table class="table table-striped" cellspacing='3' cellpading='3'>
=======
<<<<<<< HEAD
    <table class="table table-striped" cellspacing='3' cellpading='3'>
=======
<<<<<<< HEAD
    <table class="table table-striped" cellspacing='3' cellpading='3'>
=======
    <table cellspacing='3' cellpading='3'>
>>>>>>> c1ceab07b081aa1b9fe45213ce1b6e8bf6fb4522
>>>>>>> 078f31a9c4edffbef67abb317fef9273c4ec5f9d
>>>>>>> 9462ffa67a47d9011ee6ef3d4385daa94ed203af
>>>>>>> ba5b9afaec87e811f68c0ebe8b603d0c0f18019c
>>>>>>> c4c3dbad091656ed4066a2a15858eb9ad2e27d52
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