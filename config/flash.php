<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
| -------------------------------------------------------------------
|  Flash Session Name
| -------------------------------------------------------------------
| 
| The name of the flash session to store all messages into.
|
*/

$config['flash']['session_name'] = 'flash';


/*
| -------------------------------------------------------------------
|  Default Flash Styling 
| -------------------------------------------------------------------
| 
| The default styling (before/after) surrounding each flash message displayed.
|
*/

$config['flash']['default_style'] = array('<div class="alert">', '</div>');


/*
| -------------------------------------------------------------------
|  Custom Flash Styles 
| -------------------------------------------------------------------
| 
| Custom styling used for specific flash message types.
|
*/

$config['flash']['styles'] = array(
	'success' => array('<div class="alert alert-success">', '</div>'),
	'error'   => array('<div class="alert alert-error">',   '</div>'),
	'form'    => array('<div class="alert alert-error">',   '</div>')
);


/*
| -------------------------------------------------------------------
|  Split Messages by Default
| -------------------------------------------------------------------
| 
| Option to split flash messages into their own seperate alerts by default.
|
*/

$config['flash']['split_default'] = FALSE;


/*
| -------------------------------------------------------------------
|  Merge Form and Error Messages
| -------------------------------------------------------------------
| 
| Option to merge both form validation errors and custom error messages.
|
*/

$config['flash']['merge_form_errors'] = TRUE;


/* End of file flash.php */
/* Location: ./sparks/flash/1.0.0/config/flash.php */