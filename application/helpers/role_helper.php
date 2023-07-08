<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

function check_admin_role()
{
    $ci = &get_instance();

    if (!$ci->session->userdata('email')) {
        redirect('login');
    }

    $user_role_id = $ci->session->userdata('role_id');

    if ($user_role_id !== '1') {
        redirect();
    }
}
