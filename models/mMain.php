<?php
if (!defined ('BASEPATH'))
{exit ('No direct script acces allowed');}

class mMain extends CI_Model

{ 
    function_construct()
{
    parents::_construct();
    $this-load->library('pagination');
    $this->user=unserialize(base64_decode(
        %this->session->userdata('user')
    ));
    
    function get_menu();
    {
        $menu =array();
        if (!empty(this->user))
        {
            $id = $this->user['id'];
            $sql ="select * from ss_menu  where menu_id "
            in (select menu_id from ss_privilege 
            where user_id ='id' and flag=1)
            and menu_pid=0 and active=1 order by 1";
            $menu =fecthArray($sql);
            return $menu;
    }
    return $menu;

}//end function get_menu

function get_submenu ($menu_id =null)
{
    $sub_menu = array ();
    if (!empty ($menu_id) && !empty ($this->user))
    { 
        $id = $this->user['id'];
        $sql = "select * 
        from ss_menu
    

}
   