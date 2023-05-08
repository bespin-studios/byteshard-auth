<?php
/**
 * @copyright  Copyright (c) 2009 Bespin Studios GmbH
 * @license    See LICENSE file that is distributed with this source code
 */

namespace byteShard\Authentication;

interface IdentityProviderInterface
{
    public function authenticate(): bool;

    public function getUserData(): UserDataInterface;

    public function logout();
}
