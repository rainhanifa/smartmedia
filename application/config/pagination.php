<?php
	$config["uri_segment"] = 3;
	$config["num_links"] = 2;
	$config["use_page_numbers"] = TRUE;
	$config["page_query_string"] = TRUE;
	$config["reuse_query_string"] = FALSE;
	$config["prefix"] = '';
	$config["suffix"] = '';
	$config["use_global_url_suffix"] = FALSE;
	// $config["full_tag_open"] = "<p>";
	// $config["full_tag_close"] = "</p>";
	// $config["first_link"] = "First";
	// $config["first_tag_open"] = "<div>";
	// $config["first_tag_close"] = "</div>";
	// $config["first_url"] = "";
	// $config["last_link"] = "Last";
	// $config["last_tag_open"] = "<div>";
	// $config["last_tag_close"] = "</div>";
	// $config["next_link"] = "&gt;";
	// $config["next_tag_open"] = "<div>";
	// $config["next_tag_close"] = "</div>";
	// $config["prev_link"] = "&lt;";
	// $config["prev_tag_open"] = "<div>";
	// $config["prev_tag_close"] = "</div>";
	// $config["cur_tag_open"] = "<b>";
	// $config["cur_tag_close"] = "</b>";
	$config['full_tag_open'] = '<ul class="pagination">';
    $config['full_tag_close'] = '</ul>';
    $config['first_link'] = '<i class="fa fa-angle-double-left"></i>';
    $config['first_tag_open'] = '<li class="prev page">';
    $config['first_tag_close'] = '</li>';

    $config['last_link'] = '<i class="fa fa-angle-double-right"></i>';
    $config['last_tag_open'] = '<li class="next page">';
    $config['last_tag_close'] = '</li>';

    $config['next_link'] = '<i class="fa fa-angle-right"></i>';
    $config['next_tag_open'] = '<li class="next page">';
    $config['next_tag_close'] = '</li>';

    $config['prev_link'] = '<i class="fa fa-angle-left"></i>';
    $config['prev_tag_open'] = '<li class="prev page">';
    $config['prev_tag_close'] = '</li>';

    $config['cur_tag_open'] = '<li class="active"><a href="">';
    $config['cur_tag_close'] = '</a></li>';

    $config['num_tag_open'] = '<li class="page">';
    $config['num_tag_close'] = '</li>';
?>