<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Config;

class MainController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function getCosmetics(Request $request)
    {

        $cosmetics = Config::get('beauty.cosmetics');

        return view('cosmetics', compact('cosmetics'));

//        return view('cosmetics', ['cosmetics' => $cosmetics]);
    }


    public function product(string $slug, Request $request)
    {
        $sourceData = explode('_', $slug);

        $categoryIdentifier = $sourceData[0];
        $productIdentifier = $sourceData[1];

        $targetData = Config::get('beauty.categories.' . $categoryIdentifier . '.products');
        $productData = $targetData[$productIdentifier];
//      dd($productData);

        return view('product', compact('productData'));
    }

    public function getCategory(string $slug)
    {
        foreach (Config::get('beauty.categories') as $cat) {
            echo 'Category: ' . $cat['name'] . '<br><br>';
            foreach ($cat['products'] as $prod) {
                echo '     Product: ' . $prod['title'] . $prod['description'] . '<br><br>';
            }
        }
        dd('');
        $category = Config::get('beauty.categories.' . $slug);
        dd($category);
    }

}
