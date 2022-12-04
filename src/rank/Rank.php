<?php

class Group
{

    private $displayName;
    private $permissions;

    public function __construct(string $displayName, int $permissions)
    {
        $this->displayName = $displayName;
        $this->permissions = $permissions;
    }

    public function getDisplayName(): string
    {
        return $this->displayName;
    }

    public function getPermissions(): int
    {
        return $this->permissions;
    }

}