<fieldset>
    <div class="form-group">
        <label for="f_name">ชื่อ *</label>
          <input type="text" name="f_name" value="<?php echo $edit ? $paststudent['name_th'] : ''; ?>" placeholder="First Name" class="form-control" required="required" id = "f_name" >
    </div> 

    <div class="form-group">
        <label for="l_name">นามสกุล Thai*</label>
        <input type="text" name="l_name" value="<?php echo $edit ? $paststudent['surname_th'] : ''; ?>" placeholder="Last Name" class="form-control" required="required" id="l_name">
    </div>

    <div class="form-group">
        <label for="f_name">ชื่อ Eng*</label>
          <input type="text" name="f_name" value="<?php echo $edit ? $paststudent['name_en'] : ''; ?>" placeholder="First Name" class="form-control" required="required" id = "f_name" >
    </div> 

    <div class="form-group">
        <label for="l_name">นามสกุล Eng*</label>
        <input type="text" name="l_name" value="<?php echo $edit ? $paststudent['surname_en'] : ''; ?>" placeholder="Last Name" class="form-control" required="required" id="l_name">
    </div> 

    <div class="form-group">
        <label>Gender * </label>
        <label class="radio-inline">
            <input type="radio" name="gender" value="male" <?php echo ($edit && $paststudent['gender'] =='male') ? "checked": "" ; ?> required="required"/> Male
        </label>
        <label class="radio-inline">
            <input type="radio" name="gender" value="female" <?php echo ($edit && $paststudent['gender'] =='female')? "checked": "" ; ?> required="required" id="female"/> Female
        </label>
    </div>

    <div class="form-group">
        <label for="address">ที่อยู่</label>
          <textarea name="address" placeholder="Address" class="form-control" id="address"><?php echo ($edit)? $paststudent['address'] : ''; ?></textarea>
    </div> 
    
    <div class="form-group">
        <label>จังหวัด</label>
           <textarea name="state" placeholder="State" class="form-control" id="state"><?php echo ($edit)? $paststudent['province'] : ''; ?></textarea>
    </div>  
    <div class="form-group">
        <label for="email">Email</label>
            <input  type="email" name="email" value="<?php echo $edit ? $paststudent['email'] : ''; ?>" placeholder="E-Mail Address" class="form-control" id="email">
    </div>

    <div class="form-group">
        <label for="phone">เบอร์โทรศัพท์</label>
            <input name="phone" value="<?php echo $edit ? $paststudent['phone'] : ''; ?>" placeholder="" class="form-control"  type="text" id="phone">
    </div> 

    <div class="form-group">
        <label>วันเกิด</label>
        <input name="date_of_birth" value="<?php echo $edit ? $paststudent['date_of_birth'] : ''; ?>"  placeholder="BirthDate" class="form-control"  type="date">
    </div>

    <div class="form-group text-center">
        <label></label>
        <button type="submit" class="btn btn-warning" >Save <span class="glyphicon glyphicon-send"></span></button>
    </div>            
</fieldset>