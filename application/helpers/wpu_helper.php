<?php

function user_level()
{
    $ci = get_instance();
    if (!$ci->session->userdata('email')) {
        redirect('auth');
    } else {
        $role_id = $ci->session->userdata('role_id');
        $menu = $ci->uri->segment(1);
        $queryMenu = $ci->db->get_where('user_sub_menu', ['level' => $menu])->row_array();

        // var_dump($role_id);
        // var_dump($queryMenu['menu_id']);
        // die;
        $menu_id = $queryMenu['menu_id'];

        $userAccess = $ci->db->get_where('user_access_menu', [
            'role_id' => $role_id,
            'menu_id' => $menu_id
        ])->row_array();
        // var_dump($userAccess);
        // die;

        if (empty($userAccess)) {
            redirect('auth/blocked');
        }
    }
}
// function is_logged_in()
// {
//     $ci = get_instance();
//     if(!$ci->session->userdata('email')) {
//         redirect('auth');
//     } else {
//         $role_id = $ci->session->userdata('role_id'); //ambil role id dari session

//         $menu = $ci->uri->segment(1);
//         $queryMenu = $ci->db->get_where('user_menu', ['menu' => $menu])->row_array();
//         $menu_id = $queryMenu['id'];

//         $userAccess = $ci->db->get_where('user_access_menu', [
//             'role_id' => $role_id,
//             'menu_id' => $menu_id
//         ]); 

//         if ($userAccess->num_rows() < 1) { // kalo userAccess nya kosong
//             redirect('auth/blocked');
//         }
//     }
// }


function check_access($role_id, $menu_id)
{
    $ci = get_instance();

    $ci->db->where('role_id', $role_id);
    $ci->db->where('menu_id', $menu_id);
    $result = $ci->db->get('user_access_menu');

    if ($result->num_rows() > 0){
        return "checked='checked'";
    }
}

?>