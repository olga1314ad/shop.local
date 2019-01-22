<?php
/**
 * Created by PhpStorm.
 * User: Ольга
 * Date: 22.01.2019
 * Time: 12:11
 */

namespace Models;


class News extends Model
{
    public function all(){
        return [
            ['title'=> "Первая новость", 'content'=>'Текст первой новости']
        ];
    }
}