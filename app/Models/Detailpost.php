<?php

namespace App\Models;

class Detailpost
{
    private static $destinasi = [
        [
            'judul' => 'Pahawang',
            'slug'=> 'pahawang',
            'lokasi'=> 'Pesawaran',
            'deskripsi'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis mollitia laudantium excepturi reiciendis voluptas minus soluta dignissimos perferendis expedita libero facere repellat eum blanditiis, totam quis dicta quas! Qui reprehenderit est dolores aliquam fuga sapiente, distinctio nam dolor unde nihil.'
        ],
        [
            'judul' => 'Tanjung Putus',
            'slug'=> 'tanjung-putus',
            'lokasi'=> 'Pesawaran',
            'deskripsi'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis mollitia laudantium excepturi reiciendis voluptas minus soluta dignissimos perferendis expedita libero facere repellat eum blanditiis, totam quis dicta quas! Qui reprehenderit est dolores aliquam fuga sapiente, distinctio nam dolor unde nihil.'
        ]
    ];

    public static function all()
    {
        return collect(self :: $destinasi);
    }

    public static function find($slug){
        $posts = static::all();
    return $posts -> firstWhere('slug','=', $slug);
    }

}
