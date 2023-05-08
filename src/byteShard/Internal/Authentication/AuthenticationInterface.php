<?php
/**
 * @copyright  Copyright (c) 2009 Bespin Studios GmbH
 * @license    See LICENSE file that is distributed with this source code
 */

namespace byteShard\Internal\Authentication;

/**
 * Interface AuthenticationInterface
 * @package byteShard\Internal\Authentication
 */
interface AuthenticationInterface
{
    public function authenticate(Struct\Result $auth): void;

    public function changePassword(Struct\Result $auth): Struct\Result;

    public function getUserID(string $username): ?int;

    /**
     * @param string $username
     * @return bool
     */
    public function checkUsernamePattern(string $username): bool;
}
