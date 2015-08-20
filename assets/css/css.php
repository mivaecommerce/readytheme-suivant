<?php
	if (extension_loaded('zlib')) {
		ob_start('ob_gzhandler');
	}
	header ('content-type: text/css; charset: UTF-8');
	header ('cache-control: must-revalidate');
	$offset = 60 * 60 * 24 * 30; // Cache for 1 month
	$expire = 'expires: ' . gmdate ('D, d M Y H:i:s', time() + $offset) . ' GMT';
	header ($expire);
	ob_start('compress');

	function css_cleanup($css) {
		$replace = array(
			//"#/\*.*?\*/#s" => "",  // Strip C style comments.
			"#\s\s+#"      => " ", // Strip excess whitespace.
		);
		$search = array_keys($replace);
		$css = preg_replace($search, $replace, $css);
		
		$replace = array(
			": "	=>	":",
			"; "	=>	";",
			" {"	=>	"{",
			" }"	=>	"}",
			", "	=>	",",
			"{ "	=>	"{",
			";}"	=>	"}", // Strip optional semicolons.
			",\n"	=>	",", // Don't wrap multiple selectors.
			"\n}"	=>	"}", // Don't wrap closing braces.
			"} "	=>	"}\n", // Put each rule on it's own line.
			"*/" 	 =>	"*/\n",
			"*/\n\n"	=>	"*/\n",
			"*/\n\n/*"	=>	"*/\n/*"
		);
		$search = array_keys($replace);
		$css = str_replace($search, $replace, $css);
		return trim($css);
	}

	$files_to_cache = array(
		'normalize.css',
		'base.css',
		'scaffolding.css',
		'typography.css',
		'buttons.css',
		'fonts.css',
		'forms.css',
		'tables.css',
		'colors.css',
		'slider.css',
		'magnific-popup.css',
		'helpers.css',
		'structure.css',
		'pages.css',
		'print.css'
	);
	foreach ($files_to_cache as $css_file) {
		// Loop the css array and concatenate them
		$css_content = file_get_contents($css_file);
		// Run the cleanup function
		echo css_cleanup($css_content);
	}
	
	if (extension_loaded('zlib')) {
		ob_end_flush();
	}
?>
