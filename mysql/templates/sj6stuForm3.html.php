<form action="" method="post">
  <fieldset id="form_fieldset">
    <legend>Please edit below <?=$title2?> do it.</legend>
    <ul>
      <li><label for="id_no">Number</label>
          <input type="text" name="stu_no" id="id_no" value="<?php if(isset($row)){echo $row['stu_no'];}?>"> </li>
      <li><label for="id_name">Name</label>
          <input type="text" name="stu_name" id="id_name" value="<?php if(isset($row)){echo $row['stu_name'];}?>"> </li>
      <li><label for="id_addr">Address</label>
          <input type="text" name="stu_address" id="id_addr" value="<?php if(isset($row)){echo $row['stu_address'];}?>"> </li>
      <li><label for="id_bday">Birthday</label>
          <input type="text" name="stu_birthday" id="id_bday" value="<?php if(isset($row)){echo $row['stu_birthday'];}?>"> </li>
          <input type="hidden" name="stu_id" value="<?php if(isset($row)){echo $row['stu_id'];}?>">
    </ul>
    <div class="form_class"> <input type="submit" value="<?=$title2?>"></div>
  </fieldset>
</form>