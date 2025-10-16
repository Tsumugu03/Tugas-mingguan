<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
       private static $data_berita = [
        [
        "judul" => "Farhat",
        "slug" => "Farhat",
        "penulis" => "jamhealth",
        "konten" => "mantap djiwa."
        ],
        
        [
        "judul" => "Harry kane cetak hattrick",
        "slug" => "harry-kane-cetak-hattrick",
        "penulis" => "munchen news",
        "konten" => "ambalabu ."
        ]
    ];

    public static function ambildata()
    {
        return Self:: $data_berita;
    }

    public static function caridata ($slug)
    {
        $data_beritas = Self:: $data_berita;

            $new_berita = [];
    foreach($data_beritas as $berita)
    {
        if ($berita["slug"] === $slug)
        {
            $new_berita = $berita;
        }
    }

    return $new_berita;

    }
}