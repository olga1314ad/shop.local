<?php
/**
 * Created by PhpStorm.
 * User: Ольга
 * Date: 21.01.2019
 * Time: 18:20
 */

namespace Controllers;


class News extends Controller
{
    //Метод показа списка новостей
    public function index(){

        $model= new \Models\News;
        $list=$model->all();
        print_r($list);

    }

    //для просмотре новости
    public function show($id){

    }
    public function search(){

    }
}