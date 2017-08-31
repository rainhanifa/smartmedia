<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

function getTotalTiketAktif(){
    $CI =& get_instance();
    $user_id    =   $CI->session->userdata("is_active_cid");

    $where  =   array("client_id" => $user_id,
                    "status_ticket <" => "3");
    $total  =   $CI->db->select("COUNT(id_ticket) AS my_ticket")->from("tickets")->where($where)->get()->row()->my_ticket;
    return $total;
}

function getTotalTiketReplied(){
    $CI =& get_instance();
    $user_id    =   $CI->session->userdata("is_active_cid");
    $user       =   $CI->session->userdata("is_active_id");

    $where  =   array("status_ticket" => 1, "client_id" => $user_id, "user_id <>" => $user);
    $total  =   $CI->db->select("*")->from("tickets as t")
                ->join("ticket_details as d", "t.id_ticket = d.ticket_id")
                ->join("app_users as u", "d.user_id = u.id_users")
                ->where($where)
                ->order_by("date_detail", "DESC")
                ->limit(3)
                ->get()->num_rows();
    return $total;
    exit;
}

function getLastTiketReplied(){
    $CI =& get_instance();
    $user_id    =   $CI->session->userdata("is_active_cid");

    $where  =   array("status_ticket" => 1, "client_id" => $user_id);
    $tiket  =   $CI->db->select("*")->from("tickets as t")
                ->join("ticket_details as d", "t.id_ticket = d.ticket_id")
                ->join("app_users as u", "d.user_id = u.id_users")
                ->where($where)
                ->order_by("id_ticket", "DESC")
                ->order_by("date_detail", "DESC")
                ->group_by("t.id_ticket")
                ->limit(3)
                ->get()
                ->result_array();
    return $tiket;
}

function getStatusPackage(){
    
    $CI =& get_instance();
    $user_id    =   $CI->session->userdata("is_active_cid");
    $where      =   array("client_id" => $user_id);
    $end_date   =   $CI->db->select("end_date")->from("clients_package")
                ->where($where)
                ->get()->row()->end_date;

    $expired    =   new DateTime($end_date);
    $today      = new DateTime(date("Y-m-d"));

    // jika masa aktif habis (R = minus)
    if($today->diff($expired)->format("%R") == "-"){
        return false;
    }
    elseif($today->diff($expired)->format("%a") < 7){
        return false;
    }
    else{
        return true;
    }
}

function getRemainingActivePackage($date){
    $expired    =   new DateTime($date);
    $today      = new DateTime(date("Y-m-d"));

    // jika masa aktif habis (R = minus)
    if($today->diff($expired)->format("%R") == "-"){
        return "Expired";
    }else{
        return $today->diff($expired)->format("%a")." hari";
    }

}
function getTotalInvoiceDue(){
    $CI =& get_instance();
    $user_id    =   $CI->session->userdata("is_active_cid");
    // get invoice dari user yang selisih tanggalnya kurang dari 7 hari 
    $where  =   array("client_id" => $user_id,
                    "status_payment" => 0);
    $total  =   $CI->db->select("COUNT(id_transaction) AS invoice")->from("transactions")->where($where)->get()->row()->invoice;
    return $total;
}

function getTotalActiveDue(){
    $CI =& get_instance();
    $user_id    =   $CI->session->userdata("is_active_cid");
    $where      =   array("client_id" => $user_id);
    $end_date   =   $CI->db->select("end_date")->from("clients_package")
                ->where($where)
                ->get()->row()->end_date;

    $expired    =   new DateTime($end_date);
    $today      = new DateTime(date("Y-m-d"));

    // jika masa aktif habis (R = minus)
    if($today->diff($expired)->format("%R") == "-"){
        return 1;
    }
    elseif($today->diff($expired)->format("%a") < 7){
        return 1;
    }
    else{
        return 0;
    }
}

function getLastUpdateTiket($id_tiket){
    $CI =& get_instance();
    $where  =   array("ticket_id" => $id_tiket);
    $date   =   $CI->db->select("MAX(date_detail) as last_update")->from("ticket_details")->where($where)->get()->row()->last_update;
    return $date;
}

function getPriorityName($priority){
    switch($priority){
        case 0  :   return "Low";
                    break;
        case 1  :   return "Medium";
                    break;
        case 2  :   return "High";
                    break;
        default  :   return "Medium";
                    break;
    }
}

function getStatusTiketName($status){
    switch($status){
        case 0  :   return "Open";
                    break;
        case 1  :   return "Answered";
                    break;
        case 2  :   return "Customer Reply";
                    break;
        case 3  :   return "Closed";
                    break;
        default  :   return "Open";
                    break;
    }
}

function getStatusPaymentLabel($status){
    switch($status){
        case 0  : return '<span class="label label-large label-warning">Unpaid</span></span>';
                    break;
        case 1  : return '<span class="label label-large label-warning">Awaiting Confirmation</span></span>';
                    break;
        case 2  : return '<span class="label label-large label-lime">Paid</span>';
                      break;
        default  : return '<span class="label label-large label-gray">Canceled</span>';
                    break;
    }
}

function getPriviligeName($type){
    switch($type){
        case 1  :   return '<span class="badge badge-gray">ADMINISTRATOR</span>';
                    break;
        case 2  :   return '<span class="badge badge-gray">STAFF</span>';
                    break;
        default  :   return "";
                    break;
    }
}

function updateTotalViews($id_article){
    $CI =& get_instance(); 

    $CI->db->where('id_articles', $id_article);
    $CI->db->set('views_articles', 'views_articles+1', FALSE);
    $CI->db->update('articles');
}

function getField($tables,$field,$pk,$value)
    {
        $CI =& get_instance();
        $data=$CI->db->query("select $field from $tables where $pk='$value'");
        if($data->num_rows()>0)
        {
            $data=$data->row_array();
            return $data[$field];
        }
        else
        {
            return '';
        }
    }
