<div class ="menubar">

<?php
if ($user) /* if user == true */
{?>
<a href ="<?php echo $url."main/page/0/Home"?>"
class="easyui-linkbutton
<?php if ( $cmenu== 'home ') echo 'hover ';?>
"
plain="true"
iconCls="icon-home"
title="Home"
onclick="">Home
</a>
<?php
} /* endif use ==  true */
?>
<?php
if ($menu) /* if tmenu == true */
{
    foreach ($tmenu as $R => $m)
    {
        ?>
        <a href ="<?php echo 
        $url."main/page/".$m['Menu_id']."/".
        str_replace('','_',$m['Title']);
        ?>"
        class="easyui-linkbutton
        <?php if ($cmenu ==$m['Title']) echo 'hover';?>"
        plain="true"
        iconCls="<?php echo $m['icon'];?>"
        title ="<?php echo $m ['menu'];?>
    </a>
    
    <?php
     
    } /* end foreach */
} /* end if tmenu == true */
?>
<?php
if ($user) /* if user == true */
{
    ?>
    <a href ="<?php echo $url;?>authent/out"
    class="easyui-linkbutton mright"
    plain == "true"
    iconCls="icon-logout"
    title="Logout">
    Logout
    </a>
    <?php

} /* end if user ==  true */
?>

</div>>