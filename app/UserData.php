<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $user_id
 * @property integer $gender_id
 * @property integer $job_id
 * @property integer $education_id
 * @property integer $marital_id
 * @property integer $religion_id
 * @property string $nik
 * @property string $nkk
 * @property string $name
 * @property string $street
 * @property string $born
 * @property string $img
 * @property string $rt
 * @property string $rw
 * @property string $dusun
 * @property string $village
 * @property string $district
 * @property string $city
 * @property string $provincy
 * @property integer $status
 * @property string $created_at
 * @property string $updated_at
 * @property Education $education
 * @property Gender $gender
 * @property Job $job
 * @property MaritalStatus $maritalStatus
 * @property Religion $religion
 * @property User $user
 * @property MailData[] $mailDatas
 */
class UserData extends Model
{
    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['user_id', 'gender_id', 'job_id', 'education_id', 'marital_id', 'religion_id', 'nik', 'nkk', 'name', 'street', 'born','birthdate','img', 'rt', 'rw', 'dusun', 'village', 'district', 'city', 'provincy', 'status', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function education()
    {
        return $this->belongsTo('App\Education');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function gender()
    {
        return $this->belongsTo('App\Gender');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function job()
    {
        return $this->belongsTo('App\Job');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function maritalStatus()
    {
        return $this->belongsTo('App\MaritalStatus', 'marital_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function religion()
    {
        return $this->belongsTo('App\Religion');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function mailDatas()
    {
        return $this->hasMany('App\MailData');
    }
}
