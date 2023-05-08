<?php
/**
 * @copyright  Copyright (c) 2009 Bespin Studios GmbH
 * @license    See LICENSE file that is distributed with this source code
 */

namespace byteShard\Authentication\Enum;

use byteShard\Enum;

/**
 * Class Action
 * @package byteShard\Authentication\Enum
 */
final class Action extends Enum\Enum
{
    const CHANGE_PASSWORD                   = 1;//'changePassword'; //changepass
    const OLD_PASSWORD_WRONG                = 2; //'wrongOldPassword'; //wrongoldpass
    const NEW_PASSWORD_REPEAT_FAILED        = 3; //'newPasswordsDontMatch'; //newpassdontmatch
    const NEW_PASSWORD_DOESNT_MATCH_POLICY  = 4; //'noPolicyMatch'; ////invalid new pass
    const NEW_PASSWORD_USED_IN_PAST         = 5; //'newPassUsed'; //passalreadyused
    const DISPLAY_TOO_MANY_FAILED_ATTEMPS   = 6;
    const PASSWORD_EXPIRED                  = 7;
    const AUTHENTICATION_TARGET_UNREACHABLE = 8;
    const INVALID_CREDENTIALS               = 9;
}
