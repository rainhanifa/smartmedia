<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

function getTotalTiketAktif(){
    $CI =& get_instance();

    $where  =   array("status_ticket <" => 3);
    $total  =   $CI->db->select("COUNT(id_ticket) AS active_ticket")->from("tickets")->where($where)->get()->row()->active_ticket;
    return $total;
}

function getTotalTiketReplied(){
    $CI =& get_instance();

    $where  =   array("status_ticket" => 0);
    $total  =   $CI->db->select("*")->from("tickets as t")
                ->join("ticket_details as d", "t.id_ticket = d.ticket_id")
                ->join("clients as c", "t.client_id = c.id_client")
                ->where("status_ticket = 2 OR status_ticket = 0")
                ->order_by("date_detail", "DESC")
                ->group_by("t.id_ticket")
                ->limit(3)
                ->get()->num_rows();
    return $total;
    exit;
}

function getLastTiketReplied(){
    $CI =& get_instance();

    $where  =   array("status_ticket" => 0);
    $tiket  =   $CI->db->select("*")->from("tickets as t")
                ->join("ticket_details as d", "t.id_ticket = d.ticket_id")
                ->join("clients as c", "t.client_id = c.id_client")
                ->where("status_ticket = 2 OR status_ticket = 0")
                ->order_by("date_detail", "DESC")
                ->group_by("t.id_ticket")
                ->limit(3)
                ->get()
                ->result_array();
    return $tiket;
}


function getTotalAwaiting(){ 
    $CI =& get_instance();
    // get invoice dari user yang selisih tanggalnya kurang dari 7 hari 
    $where  =   array("status_payment" => 1);
    $total  =   $CI->db->select("COUNT(id_transaction) AS invoice")->from("transactions")->where($where)->get()->row()->invoice;
    return $total;
}

function getLastUpdateTiket($id_tiket){
    $CI =& get_instance();
    $where  =   array("ticket_id" => $id_tiket);
    $total  =   $CI->db->select("MAX(date_detail) as last_update")->from("ticket_details")->where($where)->get()->row()->last_update;
    return $total;
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

function getStatusTiketLabel($status){
    switch($status){
        case 0  :   return "<span class='label label-large label-warning'>Open</span>";
                    break;
        case 1  :   return "<span class='label label-large label-info'>Answered</span>";
                    break;
        case 2  :   return "<span class='label label-large label-warning'>Customer Reply</span>";
                    break;
        case 3  :   return "<span class='label label-large label-success'>Closed</span>";
                    break;
        default  :   return "<span class='label label-large label-warning'>Open</span>";
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

function getPaymentName($method){
    switch($method){
        case 1  :   return 'Voucher Activati\on';
                    break;
        case 2  :   return 'Bank Transfer to BCA 0123456789';
                    break;
        case 2  :   return 'Veritrans Payment RefID 001234567890';
                    break;
        default  :   return "";
                    break;
    }
}

function getPaymentLabel($method){
    switch($method){
        case 1  :   return '<span class="badge badge-gray">Voucher</span>';
                    break;
        case 2  :   return '<span class="badge badge-blue">Bank Transfer</span>';
                    break;
        case 2  :   return '<span class="badge badge-green">Veritrans</span>';
                    break;
        default  :   return "";
                    break;
    }
}


function getPaymentStatusLabel($status){
    switch($status){
        case 0  : return '<span class="label label-large label-danger">Unpaid</span>';
                    break;
        case 1  : return '
                    <a href='.base_url('transaction/awaiting').' class="label label-large label-warning">
                    <i class="fa fa-check"></i> Payment Confirmation</a>';
                    break;
        case 2  : return '<span class="label label-large label-lime">Paid</span>';
                      break;
        default  : return '<span class="label label-large label-gray">Canceled</span>';
                    break;
    }
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

function get_status_pinjaman_by_id($id){
    $CI =& get_instance();
    $query_pinjaman     = "SELECT COUNT(dp.id_detail) AS total
                            FROM detail_peminjaman as dp
                            WHERE dp.id_peminjaman = $id AND dp.status_dokumen = 0";
    $jumlah             = $CI->db->query($query_pinjaman)->row()->total;
    if($jumlah > 0){
        $teks               = $jumlah." dokumen belum kembali";
        $query_jatuh_tempo  = "SELECT DATEDIFF(tanggal_jatuh_tempo, CURDATE()) AS selisih,
                                (SELECT CASE WHEN tanggal_jatuh_tempo>CURDATE() THEN 'false' ELSE 'true' END) AS lewat
                                FROM master_peminjaman WHERE id = $id";
        $selisih            = $CI->db->query($query_jatuh_tempo)->row()->selisih;
        $lewat              = $CI->db->query($query_jatuh_tempo)->row()->lewat;

        if($lewat=="true"){
            $label          = "<span class='label label-important'>".$teks."</span>";
        }
        else{
            if($selisih < 5){
                $label          = "<span class='label label-warning'>".$teks."</span>";
            }
        }
    }
    else{
        $label              = "<span class='label label-success'>OK</span>";
    }

    return $label;
}

function get_jumlah_dokumen_akan_jatuh_tempo(){
    $CI =& get_instance();
    $query_pinjaman     = "SELECT COUNT(dp.id_detail) AS total
                            FROM detail_peminjaman as dp, master_peminjaman as mp
                            WHERE dp.id_peminjaman = mp.id AND dp.status_dokumen = 0 
                                AND DATEDIFF(tanggal_jatuh_tempo, CURDATE()) < 5 
                                AND tanggal_jatuh_tempo > CURDATE()";
    $jumlah             = $CI->db->query($query_pinjaman)->row()->total;
    return $jumlah;
}

function get_jumlah_dokumen_jatuh_tempo(){
    $CI =& get_instance();
    $query_pinjaman     = "SELECT COUNT(dp.id_detail) AS total
                            FROM detail_peminjaman as dp, master_peminjaman as mp
                            WHERE dp.id_peminjaman = mp.id AND dp.status_dokumen = 0 
                                AND tanggal_jatuh_tempo <= CURDATE()";
    $jumlah             = $CI->db->query($query_pinjaman)->row()->total;
    return $jumlah;
}


function dokumen_lengkap_by_master($id)
{
    $CI =& get_instance();
    $query_lengkap = "SELECT dd.* FROM detail_data as dd
                        WHERE dd.id_master_data = $id AND dd.status = 1 ";
    $detail_dokumen = $CI->db->query($query_lengkap)->result_array() ;
    return $detail_dokumen;
}