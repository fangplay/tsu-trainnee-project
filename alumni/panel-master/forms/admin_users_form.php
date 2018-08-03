<fieldset>
    <!-- Form Name -->
    <legend>Add User</legend>
    <!-- Text input-->
    <div class="form-group">
        <label class="col-md-4 control-label">Username</label>
        <div class="col-md-4 inputGroupContainer">
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                <input  type="text" name="user_name" placeholder="user name" class="form-control" value="<?php echo ($edit) ? $user['username'] : ''; ?>" autocomplete="off">
            </div>
        </div>
    </div>
    <!-- Text input-->
    <div class="form-group">
        <label class="col-md-4 control-label" >Password</label>
        <div class="col-md-4 inputGroupContainer">
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                <input type="password" name="password" placeholder="Password " class="form-control" required="" autocomplete="off">
            </div>
        </div>
    </div>
	<div class="form-group">
        <label class="col-md-4 control-label">Name</label>
        <div class="col-md-4 inputGroupContainer">
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                <input  type="text" name="username" placeholder="Username" class="form-control" value="<?php echo ($edit) ? $user['username'] : ''; ?>" autocomplete="off">
            </div>
        </div>
    </div>
    <!-- radio checks -->
    <div class="form-group">
        <label class="col-md-4 control-label">User type</label>
        <div class="col-md-4">
            <div class="radio">
                <label>
                    <?php //echo $admin_account['admin_type'] ?>
                    <input type="radio" name="user_type" value="admin" required="" <?php echo ($edit && $user['user_status'] =='admin') ? "checked": "" ; ?>/> Admin
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="user_type" value="user" required="" <?php echo ($edit && $user['user_status'] =='user') ? "checked": "" ; ?>/> User
                </label>
            </div>
        </div>
    </div>
    <!-- Button -->
    <div class="form-group">
        <label class="col-md-4 control-label"></label>
        <div class="col-md-4">
            <button type="submit" class="btn btn-warning" >Save <span class="glyphicon glyphicon-send"></span></button>
        </div>
    </div>
</fieldset>