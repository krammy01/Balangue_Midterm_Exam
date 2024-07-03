<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show() {
        return view('anime', [
            'image' => 'https://th.bing.com/th/id/OIP.4raLYeb_cJnniVIqwRV5fQHaKc?rs=1&pid=ImgDetMain',
            'title' => 'Moshuko Tensie',
            'rating' => 'My Rating: 9/10',
            'image1' => 'https://d28hgpri8am2if.cloudfront.net/book_images/onix/cvr9781974725984/kaiju-no-8-vol-1-9781974725984_xlg.jpg',
            'title1' => 'kaiju No 8',
            'rating1' => 'My Rating 8/10',
            'image2' => 'https://animenewsandfacts.com/wp-content/uploads/2021/07/Spirit-Chronicles-Episode-Release-Schedule-696x984.jpg',
            'title2' => 'Spirit Chronicles',
            'rating2' => 'Rating: 8/10',
        ]);
    }
}
