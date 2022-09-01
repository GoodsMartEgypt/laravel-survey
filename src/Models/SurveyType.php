<?php

namespace MattDaneshvar\Survey\Models;

use Illuminate\Database\Eloquent\Model;
use MattDaneshvar\Survey\Contracts\SurveyType as SurveyTypeContract;
use MattDaneshvar\Survey\Contracts\Entry;
use MattDaneshvar\Survey\Contracts\Question;

class SurveyType extends Model implements SurveyTypeContract
{
    /**
     * SurveyType constructor.
     *
     * @param  array  $attributes
     */
    public function __construct(array $attributes = [])
    {
        if (! isset($this->table)) {
            $this->setTable(config('survey.database.tables.survey_types'));
        }

        parent::__construct($attributes);
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name'];

    /**
     * The entry the answer belongs to.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function survey()
    {
        return $this->belongsTo(get_class(app()->make(Survey::class)));
    }


}
