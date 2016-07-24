<?php 

define('PART','part');


function get_file($files=false,$file_name='',$file_php){
	ob_start();
	if(false != $files){
		if(is_array($files)){
			foreach($files as $file){
				include PART."/".$file.".php";
			}
		}else{
			include PART."/".$files.".php";
		}
	}
	/* echo "\n<!-- 
		Last Render ". time() . " 
		By : Mastrayasa
		". $file_php ."  \n-->"; */
	$out = ob_get_clean();
	//$out = compress($out);
	
	
	
	if($file_name){
		
		echo $out;
		
		file_put_contents($file_name.'.html',$out);
		
		
	}else{
		echo 'file_name belum diset coy';
	}
}


function menu_active($script = ''){
	$current = $_SERVER["SCRIPT_NAME"];
	if($current == '/wp-project/CangCard/'.$script.'.php'){
		echo ' active';
	}
}


function the_title(){
	$current = $_SERVER["SCRIPT_NAME"];
	
	$title = 'Home';
	switch($current){
		case '/wp-project/CangCard/portfolio.php':
			$title = 'Portfolio';
		break;
		case '/wp-project/CangCard/profile.php':
			$title = 'Profile';
		break;
		case '/wp-project/CangCard/resume.php':
			$title = 'Resume';
		break;
		case '/wp-project/CangCard/contact.php':
			$title = 'Contact';
		break;
		case '/wp-project/CangCard/blog.php':
			$title = 'Blog';
		break;
		case '/wp-project/CangCard/services.php':
			$title = 'Services';
		break;
		case '/wp-project/CangCard/gallery.php':
			$title = 'Gallery';
		break;
	}
	return $title;
}

function compress($buffer){
	
	$search = array(
		'/\n/',			// replace end of line by a space
		'/\>[^\S ]+/s',		// strip whitespaces after tags, except space
		'/[^\S ]+\</s',		// strip whitespaces before tags, except space
	 	'/(\s)+/s'		// shorten multiple whitespace sequences
	  );
 
	 $replace = array(
		' ',
		'>',
	 	'<',
	 	'\\1'
	  ); 

	$out = preg_replace($search, $replace, $buffer);
	
	return $out;
}