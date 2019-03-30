<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Game
 *
 * @package App
 * @property string $home_team
 * @property string $away_team
 * @property string $begins
 * @property integer $result1
 * @property integer $result2
*/
class Game extends Model
{
    use SoftDeletes;

    protected $fillable = ['begins', 'result1', 'result2', 'home_team_id', 'away_team_id'];
    protected $hidden = [];
    
    

    /**
     * Set to null if empty
     * @param $input
     */
    public function setHomeTeamIdAttribute($input)
    {
        $this->attributes['home_team_id'] = $input ? $input : null;
    }

    /**
     * Set to null if empty
     * @param $input
     */
    public function setAwayTeamIdAttribute($input)
    {
        $this->attributes['away_team_id'] = $input ? $input : null;
    }

    /**
     * Set attribute to date format
     * @param $input
     */
    public function setBeginsAttribute($input)
    {
        if ($input != null && $input != '') {
            $this->attributes['begins'] = Carbon::createFromFormat(config('app.date_format') . ' H:i:s', $input)->format('Y-m-d H:i:s');
        } else {
            $this->attributes['begins'] = null;
        }
    }

    /**
     * Get attribute from date format
     * @param $input
     *
     * @return string
     */
    public function getBeginsAttribute($input)
    {
        $zeroDate = str_replace(['Y', 'm', 'd'], ['0000', '00', '00'], config('app.date_format') . ' H:i:s');

        if ($input != $zeroDate && $input != null) {
            return Carbon::createFromFormat('Y-m-d H:i:s', $input)->format(config('app.date_format') . ' H:i:s');
        } else {
            return '';
        }
    }

    /**
     * Set attribute to money format
     * @param $input
     */
    public function setResult1Attribute($input)
    {
        $this->attributes['result1'] = $input ? $input : null;
    }

    /**
     * Set attribute to money format
     * @param $input
     */
    public function setResult2Attribute($input)
    {
        $this->attributes['result2'] = $input ? $input : null;
    }
    
    public function home_team()
    {
        return $this->belongsTo(Team::class, 'home_team_id')->withTrashed();
    }
    
    public function away_team()
    {
        return $this->belongsTo(Team::class, 'away_team_id')->withTrashed();
    }
    
}
