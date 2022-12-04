<?php

class UserCache
{
    private $users;
    private $mysql;

    public function __construct(MySQL $mysql)
    {
        $this->users = [];
        $this->mysql = $mysql;
    }

    public function getUser(string $username): User
    {
        if (isset($this->users[$username])) {
            return $this->users[$username];
        }
        return $this->users[$username] = $this->loadUser($username);
    }

    public function addUser(User $user)
    {
        $this->users[$user->getUsername()] = $user;
    }

    public function removeUser(string $username)
    {
        unset($this->users[$username]);
    }

    public function loadUser(string $username)
    {
        $result = $this->mysql->fetchData("SELECT * FROM users WHERE username = '$username'");
        if (count($result) == 0) {
            return null;
        }
        $passwordHash = $result[0]["password"];
        $rank = $result[0]["rank"];

        $user = null;
        if ($rank == null || empty($rank)) {
            $user = new User($username, $passwordHash);
        } else {
            $user = new User($username, $passwordHash, $rank);
        }

        return $this->users[$username] = $user;
    }

}