<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "user" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'home/index';

$route['404_override'] 					= 'home/index';
$route['translate_uri_dashes']  		= FALSE;


//for loading more Ads 
$route['allclassified/load_more_ajax'] 	= 'Adlisting/allclassified/load_more_ajax';
$route['maincategory/load_more_ajax/(:any)'] 	= 'Adlisting/maincategory/load_more_ajax/$1';
$route['subcategory/load_more_ajax/(:any)'] 	= 'Adlisting/subcategory/load_more_ajax/$1';



//for min max
$route['allclassified/minmax'] 	= 'Adlisting/allclassified/minmax';
$route['maincategory/minmax/(:any)'] 	= 'Adlisting/maincategory/minmax/$1';
$route['subcategory/minmax/(:any)'] 	= 'Adlisting/subcategory/minmax/$1';



//For routing the all Ads in maincategory
$route['AllAds'] 						= 'Adlisting/allclassified';
$route['Mobiles/(:any)']				= 'Adlisting/maincategory/index/$1';
$route['Eletronics-Appliances/(:any)']  = 'Adlisting/maincategory/index/$1';
$route['Stationary/(:any)'] 		    = 'Adlisting/maincategory/index/$1';
$route['Transportation/(:any)'] 	 	= 'Adlisting/maincategory/index/$1';
$route['Furnitures/(:any)']		        = 'Adlisting/maincategory/index/$1';
$route['Books-Hobby-Sports/(:any)'] 	= 'Adlisting/maincategory/index/$1';

//for routing the detail page
$route['Ads/all_Ads/(:any)']            = 'Adlisting/maincategory/index/$1';


//For routing the Ads in subcategory
$route['Mobile-Accessories/(:any)']		= 'Adlisting/subcategory/index/$1';
$route['Mobiles-Phones/(:any)']		= 'Adlisting/subcategory/index/$1';
$route['Tablets/(:any)']		= 'Adlisting/subcategory/index/$1';
$route['Computers-Accessories/(:any)']		= 'Adlisting/subcategory/index/$1';
$route['Tv-Video-Audio/(:any)']		= 'Adlisting/subcategory/index/$1';
$route['Cameras-Accessories/(:any)']		= 'Adlisting/subcategory/index/$1';
$route['Games-Entertainment/(:any)']		= 'Adlisting/subcategory/index/$1';
$route['Fridge-AC-Washing Machine/(:any)']		= 'Adlisting/subcategory/index/$1';
$route['Kitchen-other-Appliances/(:any)']		= 'Adlisting/subcategory/index/$1';
$route['Drafter-Sheet-Holder/(:any)']		= 'Adlisting/subcategory/index/$1';
$route['Calculator/(:any)']		= 'Adlisting/subcategory/index/$1';
$route['Lab-Coat/(:any)']		= 'Adlisting/subcategory/index/$1';
$route['Notes/(:any)']		= 'Adlisting/subcategory/index/$1';
$route['MotorCycles/(:any)']		= 'Adlisting/subcategory/index/$1';
$route['Scooters/(:any)']		= 'Adlisting/subcategory/index/$1';
$route['Bicycles/(:any)']		= 'Adlisting/subcategory/index/$1';
$route['Cars/(:any)']		= 'Adlisting/subcategory/index/$1';
$route['Spare-Parts/(:any)']		= 'Adlisting/subcategory/index/$1';
$route['Sofa-Dining/(:any)']		= 'Adlisting/subcategory/index/$1';
$route['Beds-Wardrobes/(:any)']		= 'Adlisting/subcategory/index/$1';
$route['Home_Decor-Garden/(:any)']		= 'Adlisting/subcategory/index/$1';
$route['Other_Household_item/(:any)']		= 'Adlisting/subcategory/index/$1';
$route['Books-Magazines/(:any)']		= 'Adlisting/subcategory/index/$1';
$route['Sports_Equipment/(:any)']		= 'Adlisting/subcategory/index/$1';
$route['Gym-Fitness/(:any)']		= 'Adlisting/subcategory/index/$1';
$route['Musical_Instrument/(:any)']		= 'Adlisting/subcategory/index/$1';
$route['Other-Hobbies/(:any)']		= 'Adlisting/subcategory/index/$1';


//for detail page

$route['Ads/details/(:any)'] 	= 'Adlisting/details/index/$1';

$route['contact']      =  'Contact/contact';
$route['contact/upload']      =  'Contact/contact/upload';



