<form action="sj43write.php" method="POST">
  <fieldset id = "form_fieldset">
    <legend>�Ʒ� ������ �Է��ϼ���!</legend>
    <ul>
      <li><label for="name">�̸�</label>
          <input type="text" name="user_name" id="name" value=""/></li>
      <li><label for="password">��й�ȣ</label>
          <input type="password" name="user_password" id="password" value=""/></li>
      <li><label for="email">e-mail</label>
          <input type="text" name="user_email" id="email" value=""/></li>
      <li><label for="comment">�� �� ��</label>
          <textarea name="user_comment" id="comment" rows="9" cols="50"> </textarea></li>
    </ul>
    <div class="form_class">
      <input type="submit" value="�� ��" />
      <input type="reset" value="�����" />
      <a href="sj43list2.php">���� ���� ȭ������</a>
    </div>
   </fieldset>
</form>
