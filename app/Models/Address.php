<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use mysql_xdevapi\Table;

class Address extends Model
{
    use HasFactory;

    protected $table = "addresses";
    protected $primaryKey = "id";
    protected $keyType = "int";
    public $incrementing = true;
    public $timestamps = true;
    public function contact():BelongsTo{
        return $this->belongsTo(Contact::class,"contact_id","id");
    }
}
