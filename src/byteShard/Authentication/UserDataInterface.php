<?php
/**
 * @copyright  Copyright (c) 2009 Bespin Studios GmbH
 * @license    See LICENSE file that is distributed with this source code
 */

namespace byteShard\Authentication;

interface UserDataInterface
{
    /**
     * the user id is the internal database id
     * @return ?int
     */
    public function getUserId(): ?int;

    /**
     * the username is the name the user uses to log in
     * @return string
     */
    public function getUsername(): string;

    public function isServiceAccount(): bool;
}
