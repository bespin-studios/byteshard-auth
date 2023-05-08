<?php
/**
 * @copyright  Copyright (c) 2009 Bespin Studios GmbH
 * @license    See LICENSE file that is distributed with this source code
 */

namespace byteShard\Authentication;

class UserData implements UserDataInterface, ServiceAccountInterface
{
    private ?int   $userId;
    private string $userName;
    private bool   $serviceAccount;

    public function __construct(?int $userId = null, string $userName = '', bool $serviceAccount = false)
    {
        $this->userId         = $userId;
        $this->userName       = $userName;
        $this->serviceAccount = $serviceAccount;
    }

    /**
     * the user id is the internal database id
     * @return ?int
     */
    public function getUserId(): ?int
    {
        return $this->userId;
    }

    /**
     * the username is the name the user uses to log in
     * @return string
     */
    public function getUsername(): string
    {
        return $this->userName;
    }

    public function isServiceAccount(): bool
    {
        return $this->serviceAccount;
    }
}