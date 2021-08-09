<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected  $newsList = [

      [
        'id' => 1,
        'title' => 'News 1',
        'description' => 'News 1'
      ],
      [
        'id' => 2,
        'title' => 'News 2',
        'description' => 'News 2'
      ],
      [
        'id' => 3,
        'title' => 'News 3',
        'description' => 'News 3'
      ],

      [
        'id' => 4,
        'title' => 'News 4',
        'description' => 'News 4'
      ],
      [
        'id' => 5,
        'title' => 'News 5',
        'description' => 'News 5'
      ],
      [
        'id' => 6,
        'title' => 'News 6',
        'description' => 'News 6'
      ],
    ];


        protected  $newsList1 = [

          [
            'id' => 7,
            'title' => 'News 7',
            'description' => 'News 7'
          ],
          [
            'id' => 8,
            'title' => 'News 8',
            'description' => 'News 8'
          ],
          [
            'id' => 9,
            'title' => 'News 9',
            'description' => 'News 9'
          ],

          [
            'id' => 10,
            'title' => 'News 10',
            'description' => 'News 10'
          ],
          [
            'id' => 11,
            'title' => 'News 11',
            'description' => 'News 11'
          ],
          [
            'id' => 12,
            'title' => 'News 12',
            'description' => 'News 12'
          ],
        ];

        public function test()
        {
      //    $result = array_merge_recursive($newsList, $newsList1);
        //  $this->$result = $result;
        }

}
