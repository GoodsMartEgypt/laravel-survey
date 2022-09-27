<?php

namespace MattDaneshvar\Survey\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use MattDaneshvar\Survey\Contracts\SurveyUser as SurveyUserContract;


class SurveyUser extends Model implements SurveyUserContract
{
    use SoftDeletes;
    /**
     * SurveyType constructor.
     *
     * @param  array  $attributes
     */
    public function __construct(array $attributes = [])
    {
        if (! isset($this->table)) {
            $this->setTable(config('survey.database.tables.survey_user'));
        }

        parent::__construct($attributes);
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['user_id','survey_id','deleted_at'];



}
