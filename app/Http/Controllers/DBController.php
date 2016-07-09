<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

use App\Http\Requests;

class DBController extends Controller
{
    public function select()
    {
        /*$all = DB::table('tests')
            ->where('id', '<>', 2)
            ->where('name', '>', 4, 'or')
            ->get();*/

        $all = DB::table('tests')->sum('id');

        \Debugbar::info($all);
        return view('db.show', compact('all'));
    }

    public function insert()
    {
        $matrix = [
            [
                'name' => 'Neo2',
                'email' => 'neo2@neo.com',
                'created_at' => new \DateTime,
                'updated_at' => new \DateTime,
            ],
            [
                'name' => 'Neo3',
                'email' => 'neo3@neo.com',
                'created_at' => new \DateTime,
                'updated_at' => new \DateTime,
            ],
            [
                'name' => 'Neo4',
                'email' => 'neo2@neo.com',
                'created_at' => new \DateTime,
                'updated_at' => new \DateTime,
            ],
            [
                'name' => 'Neo5',
                'email' => 'neo6@neo.com',
                'created_at' => new \DateTime,
                'updated_at' => new \DateTime,
            ],
        ];
        \Debugbar::info(
            DB::table('tests')->insert($matrix)
        );
        return view('db.show', compact('all'));
    }

    public function delete()
    {
        // DB::table('tests')->delete();
        DB::table('tests')->truncate();

        return view('db.show', compact('all'));
    }

    public function update()
    {
        /*DB::table('tests')
            ->whereId(3)
            ->update([
            'email' => 'tank@gmail.com'
        ]);*/
        DB::table('tests')->whereId(1)->increment('age', 1, ['email' => 'change@neo.com']);

        return view('db.show', compact('all'));
    }
}
