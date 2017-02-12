<?php

use Illuminate\Database\Seeder;

class InsertGoods extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=[];
        for($i=0;$i<100;$i++){
        	$temp['typeid']=rand(1,11);
        	$temp['goods']=str_random(10);
        	$temp['price']=rand(1,10000);
        	$temp['picname']='/upload/14866469401185.jpg';
        	$temp['descr']='<p><img src="/ueditor/php/upload/image20170209/1486648234793721.jpg" title="1486648234793721.jpg"/></p><p><img src="/ueditor/php/upload/image20170209/1486648241129796.jpg" title="1486648241129796.jpg"/></p>';
        	$temp['num']=rand(1,1000);
        	$temp['created_at']=date('Y-m-d H:i:s');
        	$temp['updated_at']=date('Y-m-d H:i:s');
        	$temp['state']=1;
            $data[]=$temp;
        }
        \DB::table('goods')->insert($data);
    }
}
