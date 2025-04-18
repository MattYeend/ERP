<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Log extends Model
{
    public const ACTION_LOGIN = 1;
    public const ACTION_LOGOUT = 2;
    public const ACTION_CREATE_USER = 3;
    public const ACTION_UPDATE_USER = 4;
    public const ACTION_DELETE_USER = 5;
    public const ACTION_SHOW_USER = 6;
    public const ACTION_WELCOME_EMAIL_SENT = 7;
    public const ACTION_CONFIRM_PASSWORD = 8;
    public const ACTION_FORGOT_PASSWORD = 9;
    public const ACTION_REGISTER_USER = 10;
    public const ACTION_LOGIN_FAILED = 11;
    public const ACTION_LOGIN_PASSWORD_FAILED = 12;
    public const ACTION_LOGIN_EMAIL_FAILED = 13;
    public const ACTION_LOGIN_USERNAME_FAILED = 14;
    public const ACTION_LOGIN_SUCCESS = 15;
    public const ACTION_RESET_PASSWORD = 16;
    public const ACTION_RESET_EMAIL = 17;
    public const ACTION_RESET_USERNAME = 18;
    public const ACTION_VERIFY_USER = 19;
    public const ACTION_PASSWORD_CHANGED = 20;
    public const ACTION_MFA_ENABLED = 21;
    public const ACTION_MFA_DISABLED = 22;
    public const ACTION_PROFILE_UPDATED = 23;
    public const ACTION_EMAIL_UPDATED = 24;
    public const ACTION_ROLE_ASSIGNED = 25;
    public const ACTION_PERMISSION_GRANTED = 26;
    public const ACTION_PERMISSION_REVOKED = 27;
    public const ACTION_GENERAL_ERROR = 28;
    public const ACTION_FOUR_HUNDRED_ERROR = 29;
    public const ACTION_FIVE_HUNDRED_ERRORS = 30;
    public const ACTION_CLEAR_CACHE = 31;

    protected $table = 'logs';

    protected $fillable = [
        'action_id',
        'data',
        'logged_in_user_id',
        'related_to_user_id',
    ];

    protected $casts = [
        'data' => 'array',
    ];

    public function loggedInUser()
    {
        return $this->belongsTo(User::class, 'logged_in_user_id');
    }

    public function relatedToUser()
    {
        return $this->belongsTo(User::class, 'related_to_user_id');
    }

    public static function log(
        $action = 0,
        $data = null,
        $logged_in_user_id = null,
        $related_to_user_id = null
    ) {
        if (isset($action)) {
            $logged_in_user_id = $logged_in_user_id ?? Auth::id();

            if (is_array($data)) {
                $data = json_encode($data);
            } elseif (!is_null($data)) {
                throw new \InvalidArgumentException(
                    'Data must be an array or null.'
                );
            }

            $log = new self();
            $log->logged_in_user_id = $logged_in_user_id;
            $log->action_id = $action;
            $log->related_to_user_id = $related_to_user_id;
            $log->data = $data;
            $log->save();
        }
    }
}
