<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
    </head>
    <body>
        <h1>Add Member</h1>
        <?php echo form_open("member/edit/".$rs['id']); ?>
        <table border="1">
            <tr>
                <td>Member Name</td>
                <td><input type="text" name="member_name" value="<?php echo $rs['member_name']; ?>"/></td>
            </tr>
            <tr>
                <td>Member Tel</td>
                <td><input type="text" name="member_tel" value="<?php echo $rs['member_tel']; ?>"/></td>
            </tr>
            <tr>
                <td>Member Address</td>
                <td><textarea name="addr" rows="5" cols="60"><?php echo $rs['member_address']; ?></textarea></td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td><input type="submit" name="btnsave" value="Save"/>&nbsp;<?php echo anchor("member","Cancel") ?></td>
            </tr>
        </table>

        <?php echo form_close(); ?>
    </body>
</html>