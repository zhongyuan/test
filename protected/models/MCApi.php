<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class MCApi {

    const training = 1;
    const developer = 2;
    const reference = 3;
    const tools = 4;

    public $id;
    public static $limit = 0;

    function __construct($id) {
        $this->id = $id;
    }

    public static function addApiItem($parent_id,$apis=array())
    {
        if(!$apis||count($apis)<=0){
            return 0;
        }
        $time = time();
        foreach ($apis as $api) {
            $value[] = "(null,'".$api['name']."',".$parent_id.",'".$api['path']."',1,0,".$time.','.$time.')';
        }
        $val = implode(',', $value);
        $sql = "insert into api values {$val}";
        $cmd = Yii::app()->db->createCommand($sql)->execute();

        return $cmd?$cmd:0;
    }

    //递推函数，插入数据库
    public static function addChildNote($target_level_array)
    {
        if($target_level_array){ //子一层
            $target_more_array = array();
            foreach ($target_level_array as $val) {
                $third_level = array();
                $target_third_level = array();


                $parent_id = self::getParIdByName($val['parent_name']);
                $target_third_level = $val['Sub_note'];

                if(array_key_exists('Name',$target_third_level)){
                    $third_level[] = array('name'=>$target_third_level['Name'],'path'=>$target_third_level['Path']);
                    if($target_third_level['Subnodes']){
                        $target_more_array[] = array('parent_name'=>$target_third_level['Name'],'Sub_note'=>$target_third_level['Subnodes']['Node']);
                    }
                }else{
                    foreach($target_third_level as $val2){
                        $third_level[] = array('name'=>$val2['Name'],'path'=>$val2['Path']);
                        if($val2['Subnodes']){
                            $target_more_array[] = array('parent_name'=>$val2['Name'],'Sub_note'=>$val2['Subnodes']['Node']);
                        }
                    }
                }

                $suc = self::addApiItem($parent_id,$third_level);
            }
                //调用嵌套
                if(count($target_more_array)>0){
                        $m = self::addChildNote($target_more_array);
                        echo $str .= $m;
                }
            return $str;
        }
        return 0;
    }

    //获取id
    public static function getParIdByName($name)
    {
//        if(self::$limit > 0){
//            $str = 'id > '.self::$limit .' and ';
//        }else{
//            $str = '';
//        }
        $sql = "select id from api where {$str} name = :name  limit 1"; //随时修改  id > 1151 and  大于1151保证不会跟到class list
        $cmd = Yii::app()->db->createCommand($sql)->queryScalar(array(
            ':name' => $name,
        ));
        return $cmd?$cmd:0;
    }

}

?>
