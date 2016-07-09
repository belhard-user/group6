<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

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
        \DB::table('orders')->insert(array_merge($request->except('_token'), [
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime()
        ]));

        return redirect()->back();
    }
}
