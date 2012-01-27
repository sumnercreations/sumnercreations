<?php
/* Functions file for development of websites on my local machine */

/* Function that will scan a directory for all the files according to the type that they are looking for. 
   If extension is not found it will be left blank.
   Function will return an array of files 
   */
function scanForFiles ($dir, $extension) {
	// VARIABLES
	$dir = $dir;
	$extension = $extension;
	$path = str_ireplace($_SERVER['SCRIPT_NAME'], "", $_SERVER['REQUEST_URI']);
	$file_structure = getcwd() . $path;
	$web_directory = substr($_SERVER['SCRIPT_NAME'], 0, strripos($_SERVER['SCRIPT_NAME'], "/")) . "index.php" . $path;
	$web_directory_static = substr($_SERVER['SCRIPT_NAME'], 0, strripos($_SERVER['SCRIPT_NAME'], "/")) . $path;
	
	// 1. Scan directory
	if(is_dir($dir))
	{
		echo "dir: " . $dir . "<br />";
		$filenames = scandir($dir);
		echo count($filenames) . "<br />";
		for($i=0; $i < count($filenames); $i++)
		{
			echo "filenames[" . $i . "] " . $filenames[$i] . "<br />";
		}
	}
	
	foreach ($filenames as $file) {
	// 2. If the current object in $filenames is a directory, then skip over it.
		if ( is_dir($file) || $file == "." || $file == "..") {
			//echo "File: " . $file . "<br />";
		}			 
	
	// 3. Determine that the current object is a file
			else if ( is_file($file) ) {
			echo "file: " . $file . "<br />";
	
	// 4. Determine that the file matches the extension
			$file_ext = pathinfo( $file, PATHINFO_EXTENSION ); // find the file extension
			echo "file_ext: " . $file_ext . "<br />";
			if($file_ext == $extension) {
	
	// 5. Add the directory to the array of files
				$files[] = $files;
			}
		}
	}
	// 6. Return the array of matched files if any exist, otherwise return an error.
	if(empty($files)) {
		return "No Files with extension " . $extension . " were found";
	} else {
		return $files;	
	}
}

function scanForFolders ($dir) {
	// VARIABLES
	$dir = $dir;
	$path =str_ireplace($_SERVER['SCRIPT_NAME'], "", $_SERVER['REQUEST_URI']);
	$file_structure = getcwd() . $path;
	$web_directory = substr($_SERVER['SCRIPT_NAME'], 0, strripos($_SERVER['SCRIPT_NAME'], "/")) . "index.php" . $path;
	$web_directory_static = substr($_SERVER['SCRIPT_NAME'], 0, strripos($_SERVER['SCRIPT_NAME'], "/")) . $path;
	
	// 1. If the $dir variable is a directory scan it for other folders
	if (is_dir($dir))
	{
		$directories = scandir($dir);
	}
	// 2. Determine that the current object is a directory
	foreach ($directories as $directory) {
		if(is_dir($directory) && $directory != "." && $directory != ".." ) { // we don't want to display the "." or ".." directories
			
	// 3. Add the directory to the array of folders
			$folders[] = $directory;
		}
	}
	// 4. Return the array of directories if any exist, otherwise return an error.
	if(empty($folders)) {
		return "Empty Directory";
	} else {
		return $folders;	
	}
}

?>