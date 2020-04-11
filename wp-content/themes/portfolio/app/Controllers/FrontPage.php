<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class FrontPage extends Controller
{
	//protected $acf = true;

	public function getReas(){
		$args = array(
			'post_type' => 'portfolio_items',
			'tax_query' => array(
				array(
					'taxonomy' => 'item_type',
					'field' => 'slug',
					'terms' => '3d'
				),
			)
		);
		$reas_3d_query=get_posts($args);
		return $reas_3d_query;
	}

	public function getJeux(){
		$args = array(
			'post_type' => 'portfolio_items',
			'tax_query' => array(
				array(
					'taxonomy' => 'item_type',
					'field' => 'slug',
					'terms' => 'jeu_video'
				),
			)
		);
		$reas_jeux_query=get_posts($args);
		return $reas_jeux_query;
	}
}