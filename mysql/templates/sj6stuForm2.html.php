<form action="" method="post">
  <fieldset id="form_fieldset">
    <legend>Please edit below</legend>
    <ul>
      <li><label for="id_no">Number</label>
          <input type="text" name="stu_no" id="id_no" value="<?=$row['stu_no']?>"> </li>
      <li><label for="stu_name">Name</label>
          <input type="text" name="stu_name" id="id_no" value="<?=$row['stu_name']?>"> </li>
      <li><label for="stu_addr">Address</label>
          <input type="text" name="stu_addr" id="id_no" value="<?=$row['stu_address']?>"> </li>
      <li><label for="stu_bday">Birthday</label>
          <input type="text" name="stu_bday" id="id_no" value="<?=$row['stu_birthday']?>"> </li>
          <input type="hidden" name="stu_id" value="<?=$row['stu_id']?>">
    </ul>
    <div class="form_class"> <input type="submit" value="Modify"></div>
  </fieldset>
</form>