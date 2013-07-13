<?php require_once 'bootload/instance.php'; ?>
<?php require_once 'include/global/o/head.php'; ?>
<body>
	<?php include_once 'include/global/o/header.php'; ?>
	<div class="_li">
			<div id="contentContainer">
				<div class="grid2colc">
					<div class="column first"><h4>Contact the Administration of Seaboard Virtual Airlines</h4></div>
				</div>
				<?php if(isset($_GET['s'])) {
				 echo "<div class='uiBoxYellow pam'>Thank you for your email. You should get a reply within 48 hours.</div>";
				} ?>
<form name="contactform" method="post" action="email_form.php">
<table width="450px">
<tr>
 <td valign="top">
  <label for="first_name">First Name *</label>
 </td>
 <td valign="top">
  <input  type="text" name="first_name" maxlength="50" size="30">
 </td>
</tr>
<tr>
 <td valign="top">
  <label for="last_name">Last Name *</label>
 </td>
 <td valign="top">
  <input  type="text" name="last_name" maxlength="50" size="30">
 </td>
</tr>
<tr>
 <td valign="top">
  <label for="email">Email Address *</label>
 </td>
 <td valign="top">
  <input  type="text" name="email" maxlength="80" size="30">
 </td>
</tr>
<tr>
 <td valign="top">
  <label for="telephone">Telephone Number</label>
 </td>
 <td valign="top">
  <input  type="text" name="telephone" maxlength="30" size="30">
 </td>
</tr>
<tr>
 <td valign="top">
  <label for="comments">Comments *</label>
 </td>
 <td valign="top">
  <textarea  name="comments" maxlength="1000" cols="25" rows="6"></textarea>
 </td>
</tr>
<tr>
 <td colspan="2" style="text-align:center">
  <input type="submit" value="Submit">
 </td>
</tr>
</table>
</form>
				<?php include_once 'include/global/o/footer.php'; ?>
		</div>
	</div>
	<div class="nx_bottom"></div>
</body>
</html>
