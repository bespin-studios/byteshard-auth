<?php
/**
 * @copyright  Copyright (c) 2009 Bespin Studios GmbH
 * @license    See LICENSE file that is distributed with this source code
 */

namespace byteShard\Internal\Authentication\Struct;

use byteShard\Authentication\Enum\Action;
use byteShard\Authentication\Enum\Target;
use byteShard\Enum\LogLevel;
use JsonSerializable;

class Result implements JsonSerializable
{
    public ?string $username           = null;
    public ?string $password           = null;
    public ?string $newPassword        = null;
    public ?int    $user_ID            = null;
    public bool    $serviceAccount     = false;
    public ?Target $authTarget         = null;
    public ?int    $action             = null;
    public ?string $domain             = null;
    public bool    $success            = false;
    public string  $password_algorithm = PASSWORD_DEFAULT;
    public int     $password_cost      = 12;
    public ?string $password_salt      = null;
    public string  $failed_text        = '';
    private string $error              = '';

    public function getPassword(): string
    {
        return $this->password ?? '';
    }

    public function getUsername(): string
    {
        return $this->username ?? '';
    }

    public function getUserId(): ?int
    {
        return $this->user_ID;
    }

    public function getDomain(): ?string
    {
        return $this->domain;
    }

    public function setError(string $error): self
    {
        $this->error = $error;
        return $this;
    }


    public function setSuccess(bool $success = true): self
    {
        $this->success = $success;
        return $this;
    }

    public function getSuccess(): bool
    {
        return $this->success;
    }

    public function setAction(int $action): self
    {
        if (Action::is_enum($action)) {
            $this->action = $action;
        }
        return $this;
    }

    /**
     * @return array<string, mixed>
     */
    public function __debugInfo(): array
    {
        if (defined('DISCLOSE_CREDENTIALS') && DISCLOSE_CREDENTIALS === true && defined('LOGLEVEL') && LOGLEVEL === LogLevel::DEBUG) {
            return get_object_vars($this);
        }
        $debug_info                = get_object_vars($this);
        $debug_info['password']    = $this->password === null ? '' : 'CONFIDENTIAL';
        $debug_info['newPassword'] = $this->newPassword === null ? '' : 'CONFIDENTIAL';
        return $debug_info;
    }

    /**
     * @return array<string, mixed>
     */
    public function jsonSerialize(): array
    {
        return $this->__debugInfo();
    }
}