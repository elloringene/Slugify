<?php
namespace Elloringene\Slugify;

class Slugify {
    protected $model, $title;

    public function __construct($model, $title)
    {
        $this->model = $model;
        $this->title = $title;
    }

    public function make(){
        $slug = $this->slugify($this->title,'-');
        $existFlag = true;
        $index = 1;
        $temp_slug = $slug;

        while($existFlag==true){
            $existFlag=false;
            $check = $this->model->where('slug' , $temp_slug)->count();

            if($check) {
                $existFlag = true;
                $temp_slug = $slug."-".$index;
            }

            $index++;
        }
        return $temp_slug;
    }

    public static function slugify($text, string $divider = '-')
    {
    // replace non letter or digits by divider
    $text = preg_replace('~[^\pL\d]+~u', $divider, $text);

    // transliterate
    $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);

    // remove unwanted characters
    $text = preg_replace('~[^-\w]+~', '', $text);

    // trim
    $text = trim($text, $divider);

    // remove duplicate divider
    $text = preg_replace('~-+~', $divider, $text);

    // lowercase
    $text = strtolower($text);

    if (empty($text)) {
        return 'n-a';
    }

    return $text;
    }
}