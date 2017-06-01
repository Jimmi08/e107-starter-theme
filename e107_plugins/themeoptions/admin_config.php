<?php

// Generated e107 Plugin Admin Area 

require_once('../../class2.php');
if (!getperms('P')) 
{
	e107::redirect('admin');
	exit;
}

e107::lan('themeoptions',true);
e107::coreLan('prefs', true);


class themeoptions_adminArea extends e_admin_dispatcher
{

	protected $modes = array(	
	
		'main'	=> array(
			'controller' 	=> 'themeoptions_ui',
			'path' 			=> null,
			'ui' 			=> 'themeoptions_form_ui',
			'uipath' 		=> null
		),
		

	);	
	
	
	protected $adminMenu = array(
			
		'main/prefs' 		=> array('caption'=> LAN_PREFS, 'perm' => 'P'),	

		// 'main/custom'		=> array('caption'=> 'Custom Page', 'perm' => 'P')
	);

	protected $adminMenuAliases = array(
		'main/edit'	=> 'main/list'				
	);	
	
	protected $menuTitle = 'themeoptions';
}




				
class themeoptions_ui extends e_admin_ui
{
			
		protected $pluginTitle		= 'themeoptions';
		protected $pluginName		= 'themeoptions';
	//	protected $eventName		= 'themeoptions-'; // remove comment to enable event triggers in admin. 		
		protected $table			= '';
		protected $pid				= '';
		protected $perPage			= 10; 
		protected $batchDelete		= true;
	//	protected $batchCopy		= true;		
	//	protected $sortField		= 'somefield_order';
	//	protected $orderStep		= 10;
	//	protected $tabs				= array('Tabl 1','Tab 2'); // Use 'tab'=>0  OR 'tab'=>1 in the $fields below to enable. 
		
	//	protected $listQry      	= "SELECT * FROM `#tableName` WHERE field != '' "; // Example Custom Query. LEFT JOINS allowed. Should be without any Order or Limit.
	
		protected $listOrder		= ' DESC';
	
		protected $fields 		= NULL;		
		
		protected $fieldpref = array();
		

	 	protected $preftabs        = array('General', 'Special' );
		protected $prefs = array(
         
			'site_tag'		=> array('title'=> PRFLAN_5, 'tab'=>0, 'type'=>'text', 'data' => 'str', 'help'=>'',   'multilan'=>true, 
			'writeParms' => array(
         'size'=>'block-level
         ')
       ),
			'site_description'		=> array('title'=> PRFLAN_6, 'tab'=>0, 'type'=>'textarea', 'data' => 'str', 'help'=>'',   'multilan'=>true, 
			'writeParms' => array(
         'size'=>'block-level
         ')
       ),       
			'site_disclaimer'		=> array(
         'title'=> PRFLAN_9, 
         'tab'=>0, 
         'type'=>'textarea', 
         'data' => 'str',
         'multilan'=> true,
         'writeParms' => array( 'size'=>'block-level'),
         'help'=>LAN_TO_SITEDISCLAIMER_HELP),  
        
			'site_slogan'		=> array('title'=> 'Site Slogan', 'tab'=>0, 'type'=>'textarea', 'data' => 'str', 'help'=>'', 'multilan'=>true,
				'writeParms' => array( 'size'=>'block-level'),
				), 
 
		 'colorpicker_enabled' => array(
				'title' => 'Enabled Bootstrap Colorpicker?',
				'type' => 'boolean',
				'data' => 'str',
				
				'tab'=>1,
				'help' => 'Enable to load the required files to utlize the colorpicker form element.'
			),      
		); 

	
		public function init()
		{
			// Set drop-down values (if any). 
	
		}

		
		// ------- Customize Create --------
		
		public function beforeCreate($new_data)
		{
			return $new_data;
		}
	
		public function afterCreate($new_data, $old_data, $id)
		{
			// do something
		}

		public function onCreateError($new_data, $old_data)
		{
			// do something		
		}		
		
		
		// ------- Customize Update --------
		
		public function beforeUpdate($new_data, $old_data, $id)
		{
			return $new_data;
		}

		public function afterUpdate($new_data, $old_data, $id)
		{
			// do something	
		}
		
		public function onUpdateError($new_data, $old_data, $id)
		{
			// do something		
		}		
		
 
}
				


class themeoptions_form_ui extends e_admin_form_ui
{

}		
		
		
new themeoptions_adminArea();

require_once(e_ADMIN."auth.php");
e107::getAdminUI()->runPage();

require_once(e_ADMIN."footer.php");
exit;

?>