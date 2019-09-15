<?php
namespace app\mongodb\controller;
use think\Controller;
use  MongoDB\Client;

class Address extends Controller
{

    protected $client;

    public function __construct(){

        $this->client = new Client(config('mongodb')['url'] );

    }

    public function insertOne(){

        $collection = ($this->client)->mhq->mhhq;

        $result = $collection->insertOne(
            [
                'name'=>'马辉强12',
                'age'=>24,
                'gendor'=>'男',
                'intro'=>'帅哥',
                'Occupation'=>'ITdog'
            ]

        );

        
        dump( $result);
        dump( $result->isAcknowledged() ); //是否添加成功 true false
        dump( ((array)$result->getInsertedId())['oid'] ); //id
        dump( $result->getInsertedCount() );//数量
        exit;

    }

    public function insertMany(){

        $collection = ($this->client)->mhq->mhhq;

        $data = [
            [
                'name'=>'马辉强13',
                'age'=>24,
                'gendor'=>'男',
                'intro'=>'帅哥',
                'Occupation'=>'ITdog'
            ],
            [
                'name'=>'马辉强14',
                'age'=>24,
                'gendor'=>'男',
                'intro'=>'帅哥',
                'Occupation'=>'ITdog'
            ]
        ];

        $result = $collection->insertMany( $data );

        dump( $result);
        dump( $result->isAcknowledged() ); //是否添加成功 true false
        dump( (array)$result->getInsertedIds() ); //id_arr
        dump( $result->getInsertedCount() );//数量
        exit;

    }


    public function findOne(){

        $collection = ($this->client)->mhq->mhhq;
        // dump( $collection );exit;
        $mongo_id = new \MongoDB\BSON\ObjectId('5d7a417f169d5d2b8a72a5a5'); //根据id查有些特殊
        $condition = [ '_id'=>$mongo_id ];
        // $condition = ['name'=>'马辉强11'];

        $result = $collection->findOne( $condition );

        dump( $result );
        exit;

    }

    public function findMany(){

        $collection = ($this->client)->mhq->mhhq;
        // dump( $collection );exit;
        $condition = ['age'=>24];

        //限制输出的字段，排序，和数量
        $condition1 =[
            'projection'=>[
                'name'=>1,
                'age'=>1
            ],
            'sort'=>['name'=>-1],
            'limit'=>2
        ];

        $result = $collection->find( $condition , $condition1);

        foreach ($result as $v ) {
            dump( $v );
        }
        exit;

    }

}