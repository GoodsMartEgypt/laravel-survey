<?php

namespace MattDaneshvar\Survey\Models;

use Illuminate\Database\Eloquent\Model;
use \MattDaneshvar\Survey\Contracts\SurveyUser as SurveyUserContract;


class SurveyUser extends Model implements SurveyUserContract
{
    /**
     * SurveyUser constructor.
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




}
