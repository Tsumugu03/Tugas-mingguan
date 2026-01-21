<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    private static $data_berita = [
        [
            "judul" => "Harga RAM Melonjak di Tahun 2026",
            "slug" => "harga-ram-melonjak-2026",
            "penulis" => "Techno Kompas",
            "konten" => "Harga RAM komputer dan laptop naik drastis hingga 80% di awal tahun 2026 akibat kelangkaan chip global dan permintaan AI yang tinggi. Banyak pengguna dan pelaku industri mengeluhkan lonjakan harga ini."
        ],
        [
            "judul" => "Banjir Besar Landa Sumatra Awal 2026",
            "slug" => "banjir-besar-sumatra-2026",
            "penulis" => "Sumatra News",
            "konten" => "Banjir bandang melanda beberapa wilayah di Sumatra pada Januari 2026. Ribuan rumah terendam, akses jalan terputus, dan warga dievakuasi ke tempat aman. Pemerintah daerah dan relawan terus berupaya menyalurkan bantuan."
        ],
        [
            "judul" => "Tren AI Generatif Semakin Populer di Indonesia",
            "slug" => "tren-ai-generatif-2026",
            "penulis" => "AI Today",
            "konten" => "Tahun 2026 menjadi saksi perkembangan pesat AI generatif di Indonesia. Mulai dari pendidikan, bisnis, hingga hiburan, teknologi ini semakin banyak diadopsi dan memudahkan kehidupan masyarakat."
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