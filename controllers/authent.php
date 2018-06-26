<?php
if ( ! defined ('BASEPATH'))
{
exit ('NO direct  script acces allowed');}


class Authent exteds CI_Controller
{
	function_construct()
	{
		parent::_construct();
		this->load->Model ('mAuthent');
		$index
	}
}

function in()
{
	$msg ='';
	$name= $this->input->post('username')
	$pass= 	$this->input->post('password')
	$this->session->unset_userdata ('user')
	
		if(!empty(name) && !empty($pass))
		{
			user =$this->mAuthent->get_user($name);
			if ($user)['password'] ==$pass
			{
				$userdata = array(
						'id'=> $user['user_id'],
						'name' => $user['username'],
						'group' => $user['usergroup'],
						'logged in' => TRUE
				);
				$this->session->set_userdata('user', base64_encode(serialize('$userdata')));
				
			}
		else
		{
		$msg ="Username and password didn't match, please try again";	 
		}
		}
		else
		{
			$msg = "Username or password is empty, please try again";
	
		}
		$this->session->set_flashdata ('err_login', $msg);
		header("Location: $this->url");
	}
	
	function out()
	
	{
		$this->session->sess_destroy();
		header("Location : $this-> url");
	
	}
	
	}