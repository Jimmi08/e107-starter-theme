<?php

// Generated e107 Plugin Admin Area 

require_once('../../class2.php');
if (!getperms('P')) 
{
	e107::redirect('admin');
	exit;
}

// e107::lan('pwpwee',true);


class pwpwee_adminArea extends e_admin_dispatcher
{

	protected $modes = array(	
	
		'main'	=> array(
			'controller' 	=> 'pwpwee_ui',
			'path' 			=> null,
			'ui' 			=> 'pwpwee_form_ui',
			'uipath' 		=> null
		),
		

	);	
	
	
	protected $adminMenu = array(

		'main/prefs' 		=> array('caption'=> LAN_PREFS, 'perm' => 'P'),	
	);

	protected $adminMenuAliases = array(
		'main/edit'	=> 'main/list'				
	);	
	
	protected $menuTitle = 'phpwee-php-minifier';
}




				
class pwpwee_ui extends e_admin_ui
{
			
		protected $pluginTitle		= 'phpwee-php-minifier';
		protected $pluginName		= 'pwpwee';
	//	protected $eventName		= 'pwpwee-'; // remove comment to enable event triggers in admin. 		
		protected $table			= '';
		protected $pid				= '';
		protected $perPage			= 10; 
		protected $batchDelete		= true;
		protected $batchExport     = true;
		protected $batchCopy		= true;

	//	protected $sortField		= 'somefield_order';
	//	protected $sortParent      = 'somefield_parent';
	//	protected $treePrefix      = 'somefield_title';

	//	protected $tabs				= array('Tabl 1','Tab 2'); // Use 'tab'=>0  OR 'tab'=>1 in the $fields below to enable. 
		
	//	protected $listQry      	= "SELECT * FROM `#tableName` WHERE field != '' "; // Example Custom Query. LEFT JOINS allowed. Should be without any Order or Limit.
	
		protected $listOrder		= ' DESC';
	
		protected $fields 		= NULL;		
		
		protected $fieldpref = array();
		

	//	protected $preftabs        = array('General', 'Other' );
		protected $prefs = array(
			'active'		=> array('title'=> 'Active', 'tab'=>0, 'type'=>'bool', 'data' => 'int', 'help'=>''),
			'test'		=> array('title'=> 'Display results', 'tab'=>0, 'type'=>'bool', 'data' => 'int', 'help'=>''),

		); 
	
		public function init()
		{
			// Set drop-down values (if any). 
	
		}

		
		// ------- Customize Create --------
		
		public function beforeCreate($new_data,$old_data)
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
		
			
	/*	
		// optional - a custom page.  
		public function customPage()
		{
			$text = 'Hello World!';
			$otherField  = $this->getController()->getFieldVar('other_field_name');
			return $text;
			
		}
	*/
			
}
				


class pwpwee_form_ui extends e_admin_form_ui
{

}		
		
		
new pwpwee_adminArea();

require_once(e_ADMIN."auth.php");
e107::getAdminUI()->runPage();

require_once(e_ADMIN."footer.php");
exit;

?>