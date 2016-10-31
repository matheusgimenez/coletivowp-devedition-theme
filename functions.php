<?php
/*
 Theme Name:	Coletivo WP DevEdition
 Theme URI:		http://matheusgimenez.com.br
 Description:	Coletivo WP DevEdition
 Author:		Matheus Gimenez
 Author URI:	http://matheusgimenez.com.br
 Template:		tema-coletivo
 Version:		0.1alpha
 License:		GNU General Public License v2 or later
 License URI:	http://www.gnu.org/licenses/gpl-2.0.html
 Text Domain:	coletivowp-devedition
*/
function custom_section_portfolio(){
    get_template_part( 'section/section-portfolio' );
}
add_action( 'onepress_after_section_featuredpage', 'custom_section_portfolio'  );
