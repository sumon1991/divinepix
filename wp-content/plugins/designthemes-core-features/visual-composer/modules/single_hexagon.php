<?php add_action( 'vc_before_init', 'dt_sc_single_hexagon_vc_map' );
function dt_sc_single_hexagon_vc_map() {

	vc_map( array(
		"name" => esc_html__( "Single Hexagon", 'dtthemes-core' ),
		"base" => "dt_sc_single_hexagon",
		"icon" => "dt_sc_single_hexagon",
		"category" => DT_VC_CATEGORY,
		"show_settings_on_create" => true,
		"params" => array(

			// Title
			array(
				'type' => 'textfield',
				'heading' => esc_html__( 'Text', 'dtthemes-core' ),
				'param_name' => 'title',
				'description' => esc_html__( 'Text below hexagon', 'dtthemes-core' ),
			),

			// Icon Type
      		array(
      			'type' => 'dropdown',
      			'heading' => esc_html__('Icon Type','dtthemes-core'),
      			'param_name' => 'icon_type',
      			'value' => array(
      				esc_html__('Font Awesome', 'dtthemes-core' ) => 'fontawesome' ,
      				esc_html__('Class','dtthemes-core') => 'css_class'
      			),
      			'std' => 'fontawesome'
      		),

      		// Font Awesome
			array(
				'type' => 'iconpicker',
				'heading' => esc_html__( 'Font Awesome', 'dtthemes-core' ),
				'param_name' => 'iconclass',
				'value' => 'fa fa-home',
				'settings' => array( 'emptyIcon' => false, 'iconsPerPage' => 4000 ),
				'dependency' => array( 'element' => 'icon_type', 'value' => 'fontawesome' ),
				'description' => esc_html__( 'Select icon from library', 'dtthemes-core' ),
			),

			// Custom Class
            array(
            	'type' => 'textfield',
            	'heading' => esc_html__( 'Custom icon class', 'dtthemes-core' ),
            	'param_name' => 'icon_css_class',
            	'dependency' => array( 'element' => 'icon_type', 'value' => 'css_class' )
            ),      					

          	// Extra class name
          	array(
          		'type' => 'textfield',
          		'heading' => esc_html__( 'Extra class name', 'dtthemes-core' ),
          		'param_name' => 'class',
          		'description' => esc_html__( 'Style particular content element differently - add a class name and refer to it in custom CSS', 'dtthemes-core' )
          	)						
		)
	));
}?>