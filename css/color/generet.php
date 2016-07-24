<?php 
/*
 It is a former aide to automatically create other colors file
 This file is not related to the theme of your website
 thank you
 */
if(!function_exists('compress')){ 
function compress($buffer){
	$search = array(
		'/\n/',			// replace end of line by a space
		'/\>[^\S ]+/s',	// strip whitespaces after tags, except space
		'/[^\S ]+\</s',	// strip whitespaces before tags, except space
	 	'/(\s)+/s'		// shorten multiple whitespace sequences
	  );
 
	 $replace = array(
		' ',
		'>',
	 	'<',
	 	'\\1'
	  ); 
	  
	return preg_replace($search, $replace, $buffer);
	
	
}
}


if(!function_exists('hex2rgb')){
	function hex2rgb($hex) {
	   $hex = str_replace("#", "", $hex);
	   if(strlen($hex) == 3) {
		  $r = hexdec(substr($hex,0,1).substr($hex,0,1));
		  $g = hexdec(substr($hex,1,1).substr($hex,1,1));
		  $b = hexdec(substr($hex,2,1).substr($hex,2,1));
	   } else {
		  $r = hexdec(substr($hex,0,2));
		  $g = hexdec(substr($hex,2,2));
		  $b = hexdec(substr($hex,4,2));
	   }
	   $rgb = array($r, $g, $b);
	   return $rgb; // returns an array with the rgb values
	}
}

if(!function_exists('hex2rgba')){
	function hex2rgba($hex,$alpha = '0.8'){
		$rgb = hex2rgb($hex);
		return 'rgba('.$rgb[0].','.$rgb[1].','.$rgb[2].','.$alpha.')';
	}
}

if(!function_exists('mtc_replace_color')){
	function mtc_replace_color($color,$css){
		extract($color);
		return str_replace('#ff772f',$color1, # main color
					str_replace('#d84315',$color2, # color 2
						str_replace('#852514',$color3, # color 3
							str_replace('[color1-3]', hex2rgba($color1,'0.9') , $css) # rgba Color 1, 0.3
						) 
					)
				);
	}
}





$temp 	= file_get_contents( 'master-color.css');


$many_color['blue'] = array(
	'color1' => '#0071c5',
	'color2' => '#0269b5',
	'color3' => '#2775b0',
);
$many_color['garkdlategray'] = array(
	'color1' => '#226666',
	'color2' => '#0F5151',
	'color3' => '#033C3C',
);
$many_color['green'] = array(
	'color1' => '#78be20',
	'color2' => '#6daf1a',
	'color3' => '#5a9214',
);
$many_color['orange'] = array(
	'color1' => '#ff772f',
	'color2' => '#f26b23',
	'color3' => '#af460e',
);
$many_color['red'] = array(
	'color1' => '#dc2a36',
	'color2' => '#d02430',
	'color3' => '#be1520',
);
$many_color['yellow'] = array(
	'color1' => '#ffd41a',
	'color2' => '#f4c90f',
	'color3' => '#dfb707',
);
$many_color['pink'] = array(
	'color1' => '#f63180',
	'color2' => '#e92574',
	'color3' => '#c8155d',
);
$many_color['wisteria'] = array(
	'color1' => '#9b59b6',
	'color2' => '#8d4ca8',
	'color3' => '#501568',
);
$many_color['alizarin'] = array(
	'color1' => '#e74c3c',
	'color2' => '#db4334',
	'color3' => '#b0291b',
);
$many_color['peterriver'] = array(
	'color1' => '#3498db',
	'color2' => '#298bcd',
	'color3' => '#2370a4',
);
$many_color['emerland'] = array(
	'color1' => '#2ecc71',
	'color2' => '#24bd65',
	'color3' => '#1f9d55',
);

$many_color['coklat'] = array(
	'color1' => '#604702',
	'color2' => '#513c04',
	'color3' => '#312505',
);
		
foreach($many_color as $key =>$color){
	$out 		= mtc_replace_color($color,$temp); // replace color
	//$out 		= compress($out); // replace color
	$file_name 	= "color-" . $key.'.css';
	file_put_contents( $file_name , $out);
	
	
	echo $file_name. "<br />\n";
}	





