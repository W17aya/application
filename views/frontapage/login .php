<div id =" !title ">LOGIN </Center></div>
<?php
if ($error =='' )                   /*kondisi 1 */

{
    ?>
<form method-"post" action="<?php echo $url?>authent/in">
<label class="short">Username</label>
<input class= "wd" name=" username" type="text" />

<label class="short">Password</label
<input class ="wd"> name="password" type="password"/>

<input type="submit" name+"login" value ="login" />
</form

<?php

}
else   /*kondisi 2*/
{        
?>
<form method="post" action="<?php echo $url?> authent/in ">
<label class="short">username</label>
<input class="wd" namea-="username' type="text" />

<label class="short">password</label>
<input class="wd" name="password" type="password">
<input type="submit" name="login" value="login" />
</form>

<?php

}
?>
