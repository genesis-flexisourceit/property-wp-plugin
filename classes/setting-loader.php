<?php

require_once plugin_dir_path( __FILE__ ).'custom-roles.php';

class SettingLoader {
	protected $roles = [
		'gm_tenant'   => [
			'name'   => 'Tenant',
			'access' => [
				'read'         => true,
				'edit_posts'   => true,
				'upload_files' => true,
			]
		],
		'gm_landlord' => [
			'name'   => 'Landlord',
			'access' => [
				'read'         => true,
				'edit_posts'   => true,
				'upload_files' => true,
			]
		]
	];

	public function activate()
	{
		$roles = new CustomRoles($this->roles);

		$roles->createRoles();
	}

	public function deactivate()
	{
		$roles = new CustomRoles($this->roles);

		$roles->removeRoles();
	}
}
