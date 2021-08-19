
<?php
include "connection.php"; //here we are making the php and mysql connection

?>
<tr>
    <td height="30" align="center" valign="middle"> <a href="index.html">Home</a>|<a href="view_all.php">View all</a>|<a href="forgotpass.php">Forgot pass</a>|<a href="profile.php">Profile</a>|<a href="delete.php?del=<?php echo $_SESSION['email']; ?>">delete</a>|<a href="logout.php">Logout</a></td>
  </tr>
  <tr>
    <td height="30" align="center" valign="middle"><table width="100%" border="0">
  <tr>
  <form name="f2" method="post" action="search_result.php">
    <td width="28%">Email:<marquee><?php echo $_SESSION['email']; ?> </marquee> </td>
    <td width="27%" align="right" valign="middle">Search Profile:      </td>
    <td width="14%" align="center" valign="middle">
    <input name="search" type="search"  placeholder="enter criteria" required/>
    </td>
    <td width="31%" align="left" valign="middle"><label>
      <input type="submit" name="submit" id="button" value="Submit" />
    </label></td>
    </form>
  </tr>
</table>
</td>
  </tr>