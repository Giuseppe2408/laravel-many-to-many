<?php 
    
    namespace App\Traits;
    use Illuminate\Support\Str;

    trait Slugger{
        public function getSlug($str_origin) {
            $slugOrigin = Str::slug($str_origin) . '';
            $slug = $slugOrigin;
            $i = 1;
            while (self::where('slug', $slug)->first()) {
                $slug = $slugOrigin . '-' . $i;
                $i++;
            } 
            return $slug;
        }
    };