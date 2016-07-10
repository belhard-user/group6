<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;

use App\Http\Requests;
use Session;

class NoticeController extends Controller
{
    /**
     * Показываем форму для создания объявления
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('notice.create');
    }

    /**
     * Сохраняем объявления в базу
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        /*\DB::table('orders')->insert(array_merge($request->except('_token'), [
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime()
        ]));*/
        Order::create($request->all());

        return redirect()->back();
    }

    public function view($id)
    {
        $order = Order::with('photo')->findOrFail($id);

        return view('notice.view', compact('order'));
    }



    public function addPhoto($id, Request $request)
    {
        $file = $request->file('file');
        $folderName = 'img/'.Session::getId();
        $fileName = microtime() . '_' . $file->getClientOriginalName();

        $photoData = [
            'order_id' => $id,
            'path' => '/' . $folderName . '/' .$fileName,
            'th_path' => '/th_' . $folderName . '/' .$fileName,
        ];

        \App\Photo::create($photoData);

        return $file->move($folderName, $fileName);
    }
}
