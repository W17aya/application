<?php 
if (!defined ('BASEPATH'))
{exit ('No direct script access allowed');}

class mAuthent extends CI_Model

{
    function_construct()
    {
        parent::_construct();

    }
    function get_user($userid)
    {
      $sql  = " select * 
      from ss_user
      where
      user_id='userid   ' and status = 1";
      return fetchArray($sql, 'row ');

    }
}
/* End of file mAuthent.php */
/* Location: ./ application/models/mAuthent.php */