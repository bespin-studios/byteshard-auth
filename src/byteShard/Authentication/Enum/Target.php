<?php
/**
 * @copyright  Copyright (c) 2009 Bespin Studios GmbH
 * @license    See LICENSE file that is distributed with this source code
 */

namespace byteShard\Authentication\Enum;

/**
 * Class Target
 * @package byteShard\Authentication\Enum
 */
enum Target: string
{
    case AUTH_TARGET_DEFINED_ON_DB = 'dbdef'; // authentication target defined on a per-user basis on the DB (as of writing this comment this must be 'db' or 'ldap')
    case AUTH_TARGET_DB = 'db';    // passwords are stored on DB and authentication is handled in BSAuthenticate
    case AUTH_TARGET_LDAP = 'ldap';  // logins are authenticated against ldap
}
