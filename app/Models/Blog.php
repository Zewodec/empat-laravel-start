<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    public String $imageURL;
    public String $content;

    public function __construct(String $imageURL, String $content)
    {
        $this->imageURL = $imageURL;
        $this->content = $content;
    }

    public function toHashArray($options = 0)
    {
        return [
            'imageURL' => $this->imageURL,
            'content' => $this->content
        ];
    }

    protected $fillable = [
        'imageURL',
        'content'
    ];

}
