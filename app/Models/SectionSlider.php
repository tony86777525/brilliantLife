<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\EloquentSortable\Sortable;
use Spatie\EloquentSortable\SortableTrait;

class SectionSlider extends Model implements Sortable
{
    use SortableTrait;

    public $sortable = [
        'order_column_name' => 'order',
        'sort_when_creating' => true,
    ];
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'section_sliders';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = true;

    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = true;

    /**
     * The storage format of the model's date columns.
     *
     * @var string
     */
    protected $dateFormat = 'U';

    /*
     * created_at
     * updated_at
     * */
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    const DISPLAY_ON = 1;
    const DISPLAY_OFF = 0;

    // database name
    protected $connection = 'bl';

    // default value
    protected $attributes = [];

    public function getShowImageAttribute()
    {
        $imgSrc = '/uploads/' . $this->image;

        return "<img src='$imgSrc'>";
    }

    public function getCreatedAtAttribute($value)
    {
        $d = new \DateTime();
        $d->setTime(0,0, 0, strtotime($value));
        return $d->format('Y-m-d H:i:s');
    }

    public function getUpdatedAtAttribute($value)
    {
        $d = new \DateTime();
        $d->setTime(0,0, 0, strtotime($value));
        return $d->format('Y-m-d H:i:s');
    }

    public function section()
    {
        return $this->belongsTo(Section::class, 'section_id');
    }
}
