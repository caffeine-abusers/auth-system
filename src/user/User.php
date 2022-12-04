<?php

/**
 * This class represents a user of our website. It stores information
 * about their account.
 */
class User
{

    private string $username;
    private string $passwordHash;
    private string $rank;

    /**
     * Creates a new user with the given username and password.
     * 
     * @param string $username The username of the user.
     * @param string $password The password of the user.
     * @param string $rank The rank of the user. (Optional)
     * @see Rank
     */
    public function __construct(string $username, string $passwordHash, string $rank = "guest")
    {
        $this->username = $username;
        $this->passwordHash = $passwordHash;
        $this->rank = $rank;
    }

    /**
     * Saves this user into the database.
     */
    public function save(): void
    {

    }

    /**
     * Gets the username of the user.
     * 
     * @return string The username of the user.
     */
    public function getUsername(): string
    {
        return $this->username;
    }

    /**
     * Gets the password hash of the user.
     * 
     * @return string The password hash of the user.
     */
    public function getPasswordHash(): string
    {
        return $this->passwordHash;
    }

    /**
     * Gets the rank of the user.
     * 
     * @return string The rank of the user.
     */
    public function getRank(): string
    {
        return $this->rank;
    }

    /**
     * Sets the rank of the user.
     * 
     * @param string $rank The new rank of the user.
     */
    public function setRank(string $rank): void
    {
        $this->rank = $rank;
    }

}