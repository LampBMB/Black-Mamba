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
        	$temp['picname']='/upload/14869794804653.jpg';
        	$temp['descr']='<p><img src="/upload/baidu/1486979474670564.jpg" title="1486979474670564.jpg"/></p><p><img src="/upload/baidu/1486922430402045.jpg" title="1486922430402045.jpg"/></p>';
        	$temp['num']=rand(1,1000);
        	$temp['created_at']=date('Y-m-d H:i:s');
        	$temp['updated_at']=date('Y-m-d H:i:s');
            $temp['szie']=rand(0,2);
        	$temp['state']=1;
            $data[]=$temp;
        }
        \DB::table('goods')->insert($data);
    }
}
