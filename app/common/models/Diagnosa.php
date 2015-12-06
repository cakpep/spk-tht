<?php

namespace common\models;

use Yii;
use yii\helpers\ArrayHelper;
/**
 * This is the model class for table "diagnosa".
 *
 * @property integer $penyakit_id
 * @property integer $gejala_id
 * @property double $mb
 * @property double $md
 * @property integer $created_by
 * @property string $created_date
 * @property integer $updated_by
 * @property string $updated_date
 *
 * @property Penyakit $penyakit
 * @property PenyakitGejala $gejala
 */
class Diagnosa extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public $proses;

    public static function tableName()
    {
        return 'diagnosa';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['penyakit_id', 'gejala_id'], 'required'],
            [['penyakit_id', 'gejala_id', 'created_by', 'updated_by'], 'integer'],
            [['mb', 'md'], 'number'],
            [['proses','created_date', 'updated_date'], 'safe']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'penyakit_id' => 'Nama Penyakit',
            'gejala_id' => 'Nama Gejala',
            'mb' => 'Nilai MB',
            'md' => 'Nilai MD',
            'created_by' => 'Created By',
            'created_date' => 'Created Date',
            'updated_by' => 'Updated By',
            'updated_date' => 'Updated Date',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPenyakit()
    {
        return $this->hasOne(\app\models\Penyakit::className(), ['id' => 'penyakit_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGejala()
    {
        return $this->hasOne(\backend\models\PenyakitGejala::className(), ['id' => 'gejala_id']);
    }

    public function listPenyakit(){
        $data = ArrayHelper::map(\app\models\Penyakit::find()->where(['status'=>1])->all(),'id','nama_penyakit');    
        return $data;
    }

    public function listGejala(){
        $data = ArrayHelper::map(\backend\models\PenyakitGejala::find()->where('id in (select gejala_id from diagnosa)')->all(),'id','nama_gejala');    
        return $data;
    }

    public static function pengobatan($p){
        /*$data=\app\models\Penyakit::find()->where(['status'=>1])->all();
        return $data;*/
        $connection = \Yii::$app->db;
        $query="SELECT * FROM penyakit WHERE nama_penyakit='$p'";

       $model = $connection->createCommand($query);
       $data = $model->queryOne();

       return $data;

    }
    public static function diagnosaData($gejala=array()){
    
        $cari=implode(',',$gejala);

        $connection = \Yii::$app->db;
        $query="SELECT 
                p.`nama_penyakit`,
                #gejala_id,
                pg.`nama_gejala`,
                GROUP_CONCAT(mb) AS mb,
                GROUP_CONCAT(md) AS md
                #mb+mb*(mb-1) as mb,
                #md

                FROM `diagnosa` d 
                JOIN penyakit p ON d.`penyakit_id`=p.`id`
                JOIN penyakit_gejala pg ON d.`gejala_id`=pg.`id`
                WHERE gejala_id IN ($cari)  -- AND p.`penyakit_jenis_id`=1  -- AND penyakit_id=1
                GROUP BY d.`penyakit_id`
                ORDER BY d.`penyakit_id`,d.`gejala_id`;";

       $model = $connection->createCommand($query);
       $data = $model->queryAll();

       return $data;

    }


    public static function pilihanGejala($gejala=array()){
    
        $cari=implode(',',$gejala);

        $connection = \Yii::$app->db;
        $query="SELECT * from  penyakit_gejala WHERE id IN ($cari);";
        $model = $connection->createCommand($query);
        $data = $model->queryAll();
        return $data;
    }

    public static function mbHtgc($data){
        
        $x=array();
        $hs=array();
        $a=0;
        $d=2;
        $j=0;
        $aa=1;

        for ($i=0; $i <count($data) ; $i++) { 
            if($i<=1){
                $x[1]=$data[0]+$data[1]*(1-$data[0]);
                $hsl=$x[1];
            }else{   
                $x[] =$data[$i];        
            }
        }

        
        $k=$x[1];
        for ($i=0; $d <=count($x) ; $i++) { 
                 
            $hsl=$k+=$data[$d]*(1-$k);
            $j=$j+=$x[$aa];
            
            $d++;
            $aa++;
                
        }

        return $hsl;

    }
    public static function mbHtg($data){
        
        $k=0;

        for ($i=0; $i <count($data) ; $i++) {                  
            $k+=$data[$i]*(1-$k);            
        }

        return $k;

    } 

    public static function cfHtg($mb,$md){

        $cf=$mb-$md;
        return $cf;

    }


    public static function cfMax($cf,$val){
        
        $cfmax=max($cf);
        $key = array_keys($cf, max($cf));

            if($val=='key'){
                $retval=$key[0];
            }elseif($val=='max'){
                $retval=$cfmax;
            }else{
                $retval='';
            }
        
        return $retval;

    }

    public static function diagnosaRekam($diagnosake){
    
        $cari=$diagnosake;
        $userid=Yii::$app->user->id;

        $connection = \Yii::$app->db;
        
        /*
        $query="SELECT 
                du.`user_id`,
                du.`diagnosa_ke`,
                du.`gejala_id`,
                d.`penyakit_id`,
                p.`nama_penyakit`,
                pg.`nama_gejala`,
                GROUP_CONCAT(d.`mb`) mb,
                GROUP_CONCAT(d.`md`) md

                FROM `diagnosa_user` du JOIN diagnosa d ON du.`gejala_id`=d.`gejala_id`
                JOIN `penyakit` p ON p.`id`=d.`penyakit_id`
                JOIN penyakit_gejala pg ON pg.`id`=du.`gejala_id`
                WHERE du.`user_id`=$userid AND du.`diagnosa_ke`=$diagnosake
                GROUP BY d.`penyakit_id`,du.`diagnosa_ke`
                ORDER BY du.`diagnosa_ke`,du.`gejala_id`;";
        */

        $query="SELECT 
                du.`id`,
                du.`diagnosa_ke`,
                d.`penyakit_id`,
                d.`gejala_id`,
                p.`nama_penyakit`,
                GROUP_CONCAT(d.`mb`) mb,
                GROUP_CONCAT(d.`md`) md
                FROM diagnosa_user du JOIN diagnosa_user_detil dud ON du.`id`=dud.`diagnosa_user_id`
                JOIN diagnosa d  ON d.`gejala_id`=dud.`gejala_id`                
                JOIN `penyakit` p ON p.`id`=d.`penyakit_id`
                WHERE du.`user_id`=$userid AND du.`diagnosa_ke`=$diagnosake
                GROUP BY d.`penyakit_id`,du.`diagnosa_ke`
                ORDER BY du.`id`,du.`diagnosa_ke`;";

       $model = $connection->createCommand($query);
       $data = $model->queryAll();

       return $data;

    }



    public static function rekapDiagnosa($dd){

        $hasil=array();
        $cfmax=array('');
        $cfmaxp=array('');
        
        foreach ($dd as $key => $value) {

            $mbh=Diagnosa::mbHtg(explode(',', $value['mb']));
            $mdh=Diagnosa::mbHtg(explode(',', $value['md']));
            $cfh=Diagnosa::cfHtg($mbh,$mdh);                

            $cfmax[]=$cfh;                        
            $cfmaxp[]=$value['nama_penyakit'];

        }

            $hasil= [
                        'nilai'=>Diagnosa::cfMax($cfmax,'max'),
                        'nama_penyakit'=>$cfmaxp[Diagnosa::cfMax($cfmax,'key')],
                    ];


        return $hasil;

    }
        
        
}
