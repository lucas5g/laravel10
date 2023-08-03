<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RequestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return [
            [
                'name' => 'lucas',
                'age' => 30
            ],
            [
                'name' => 'marcos',
                'age' => 28
            ]
        ];
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request;
https://adclick.g.doubleclick.net/pcs/click%253Fxai%253DAKAOjsuu2-5h0L295CC-pjn4CtwAYmvh8giMn17E1Emm0LE-u2RNFnlHue1dyM24OzIESLej7LmKpgolT1fZxGjAO1dMwn0VaZIBAv0IeZAiJC2VACumYanfEZxkZvZoGrHZeNj5FaIkEsdUh9m4u8VbsZK-Hd0uNsoKiUpOMxKjd-tUYTYWrXOhs2qSyhOYmGLGPLoWoZtqEufteX9umH7afTBOdCSEhNvX6pH4qRUSvVHsyma1JL9u-6sG2PRPqFeWRiaQwKXlXPwIYwb46PvbYXmPUwJ5j8Oe6Sh8oxAKzMs-sziLUnf_5RcEPhnYGjT5wjoteeHHl9jbnecvxQg-f3rU8KBtXy7t20oEje0jja7QDw1XR_gjV4m04pkZgx6SKg%2526sai%253DAMfl-YTuChIqG-M2Og08QKNYitGA045LJheHXQAfifTVKKtKQfl5InHFMawwsZyES58-3_i4jtcpIFuvLHBmQx4%2526sig%253DCg0ArKJSzEFoqwcvZFRlEAE%2526fbs_aeid%253D%255Bgw_fbsaeid%255D%2526urlfix%253D1%2526adurl%253Dhttps://www.magazineluiza.com.br/selecao/0108minfonotebooksapartir1259/?&banner_id=promoh1ld1minfonotebooksapartir1259
        return $data;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
