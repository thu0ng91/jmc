<?php
echo '<br />
<form name="frmregister" id="frmregister" action="'.$this->_tpl_vars['form_action'].'?do=submit" method="post">
<table class="grid" width="580" align="center">
<caption>���û�ע��</caption>
<tr>
  <td class="odd" width="25%">�û���<span class="hottext">(����)</span></td>
  <td class="even"><input type="text" class="text" name="username" id="username" size="25" maxlength="30" style="width:160px" value="" onBlur="Ajax.Update(\''.$this->_tpl_vars['check_url'].'?item=u&username=\'+this.value, {outid:\'usermsg\', tipid:\'usermsg\', onLoading:\'<img border=\\\'0\\\' height=\\\'16\\\' width=\\\'16\\\' src=\\\''.$this->_tpl_vars['jieqi_url'].'/images/loading.gif\\\' /> Loading...\'});" /> <span id="usermsg"></span></td>
</tr>
<tr>
  <td class="odd" width="25%">����<span class="hottext">(����)</span></td>
  <td class="even"><input type="password" class="text" name="password" id="password" size="25" maxlength="20" style="width:160px" value="" onBlur="Ajax.Update(\''.$this->_tpl_vars['check_url'].'?item=p&password=\'+this.value, {outid:\'passmsg\', tipid:\'passmsg\', onLoading:\'<img border=\\\'0\\\' height=\\\'16\\\' width=\\\'16\\\' src=\\\''.$this->_tpl_vars['jieqi_url'].'/images/loading.gif\\\' /> Loading...\'});" /> <span id="passmsg"></span></td>
</tr>
<tr>
  <td class="odd" width="25%">�ظ�����<span class="hottext">(����)</span></td>
  <td class="even"><input type="password" class="text" name="repassword" id="repassword" size="25" maxlength="20" style="width:160px" value=""  onBlur="Ajax.Update(\''.$this->_tpl_vars['check_url'].'?item=r&password=\'+password.value+\'&repassword=\'+this.value, {outid:\'repassmsg\', tipid:\'repassmsg\', onLoading:\'<img border=\\\'0\\\' height=\\\'16\\\' width=\\\'16\\\' src=\\\''.$this->_tpl_vars['jieqi_url'].'/images/loading.gif\\\' /> Loading...\'});" /> <span id="repassmsg"></span></td>
</tr>
<tr>
  <td class="odd" width="25%">Email<span class="hottext">(����)</span></td>
  <td class="even"><input type="text" class="text" name="email" id="email" size="25" maxlength="60" style="width:160px" value="" onBlur="Ajax.Update(\''.$this->_tpl_vars['check_url'].'?item=m&email=\'+this.value, {outid:\'mailmsg\', tipid:\'mailmsg\', onLoading:\'<img border=\\\'0\\\' height=\\\'16\\\' width=\\\'16\\\' src=\\\''.$this->_tpl_vars['jieqi_url'].'/images/loading.gif\\\' /> Loading...\'});" /> <span id="mailmsg"></span><input type="checkbox" class="checkbox" name="viewemail" value="1" />��������</td>
</tr>
<tr>
  <td class="odd" width="25%">�Ա�</td>
  <td class="even"><input type="radio" class="radio" name="sex" value="1" />��
<input type="radio" class="radio" name="sex" value="2" />Ů
<input type="radio" class="radio" name="sex" value="0" checked="checked" />����</td>
</tr>
<tr>
  <td class="odd" width="25%">QQ</td>
  <td class="even"><input type="text" class="text" name="qq" id="qq" size="25" maxlength="15" style="width:160px" value="" /></td>
</tr>
<tr>
  <td class="odd" width="25%">������վ</td>
  <td class="even"><input type="text" class="text" name="url" id="url" size="25" maxlength="100" style="width:160px" value="" /></td>
</tr>

';
if($this->_tpl_vars['show_checkcode'] == 1){
echo '
<tr>
  <td class="odd" width="25%">��������֤��</td>
  <td class="even"><input type="text" class="text" size="8" maxlength="8" name="checkcode">
&nbsp;<img src="'.$this->_tpl_vars['url_checkcode'].'" style="cursor:pointer;" onclick="this.src=\''.$this->_tpl_vars['url_checkcode'].'?rand=\'+Math.random();"></td>
</tr>
';
}
echo '
<tr>
  <td class="odd" width="25%">&nbsp;<input type="hidden" name="action" id="action" value="newuser" /></td>
  <td class="even"><input type="submit" class="button" name="submit"  id="submit" value="�� ��" /></td>
</tr>
</table>
</form>
<br />';
?>