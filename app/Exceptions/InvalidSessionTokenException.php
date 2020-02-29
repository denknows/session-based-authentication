<?php

namespace App\Exceptions;

use App\Exceptions\Errors\ErrorCode;

class InvalidSessionTokenException extends BaseException
{
    /**
     * @inheritDoc
     */
    public function errorCode()
    {
        return ErrorCode::INVALID_SESSION_TOKEN;
    }

    /**
     * @inheritDoc
     */
    public function statusCode()
    {
        return 401;
    }
}
