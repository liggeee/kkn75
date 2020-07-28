<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $mail_id
 * @property integer $user_data_id
 * @property integer $mail_number
 * @property string $add_data
 * @property int $status
 * @property string $created_at
 * @property string $updated_at
 * @property Mail $mail
 * @property UserDatum $userDatum
 */
class MailData extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'mail_data';

    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['mail_id', 'user_data_id', 'mail_number', 'add_data', 'status', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function mail()
    {
        return $this->belongsTo('App\Mail');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function userData()
    {
        return $this->belongsTo('App\UserData', 'user_data_id');
    }
}
