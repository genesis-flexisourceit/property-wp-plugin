<?php

class CustomRoles
{
	/**
	 * @var array
	 */
	protected $roles;

	/**
	 * CustomRoles constructor.
	 *
	 * @param array|null $roles
	 */
	public function __construct(array $roles = null)
	{
		$this->roles = $roles;
	}

	public function createRoles()
	{
		foreach($this->roles as $role => $data)
		{
			add_role($role, $data['name'], $data['access']);
		}
	}

	public function removeRoles()
	{
		foreach($this->roles as $role => $data)
		{
			remove_role($role);
		}
	}

}
