<form action="" method="POST">
  <fieldset id = "form_fieldset">
    <legend>Please edit below</legend>
    <ul>
      <li><label for="id_no">NO</label>
          <input type="text" name="sc_no" id="id_no" value="<?=$row['sc_no']?>"></li>
      <li><label for="id_cpp">cpp </label>
          <input type="text" name="sc_cpp" id="id_cpp" value="<?=$row['sc_cpp']?>"></li>
      <li><label for="id_java">java</label>
          <input type="text" name="sc_java" id="id_java" value="<?=$row['sc_java']?>"></li>
          <input type="hidden" name="sc_id" value="<?=$row['sc_id']?>">
    </ul>
    <div class="form_class">
      <input type="submit" value="Modify">
    </div>
  </fieldset>
</form>