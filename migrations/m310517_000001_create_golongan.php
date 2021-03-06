<?php
/**
 * Created by PhpStorm.
 * User: Moh Roufiq Azmy
 * Date: 5/31/2017
 * Time: 11:28 PM
 */
use yii\db\Schema;
use yii\db\Migration;

class m310517_000001_create_golongan extends Migration
{
    public function up()
    {
//        return parent::up(); // TODO: Change the autogenerated stub

        $tables = Yii::$app->db->schema->getTableNames();
        $dbType = $this->db->driverName;
        $tableOptions_mysql = "CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB";
        $tableOptions_mssql = "";
        $tableOptions_pgsql = "";
        $tableOptions_sqlite = "";
        /* MYSQL */
        if (!in_array('golongan', $tables))  {
            if ($dbType == "mysql") {
                $this->createTable('{{%golongan}}', [
                    'id' => 'INT(11) NOT NULL AUTO_INCREMENT',
                    0 => 'PRIMARY KEY (`id`)',
                    'kode_golongan' => 'VARCHAR(7) NOT NULL',
                    'nama_golongan' => 'VARCHAR(100) NOT NULL',
                ], $tableOptions_mysql);
            }
        }


        $this->execute('SET foreign_key_checks = 0');
        $this->insert('{{%golongan}}',['id'=>'1','kode_golongan'=>'I/a','nama_golongan'=>'Juru Muda']);
        $this->insert('{{%golongan}}',['id'=>'2','kode_golongan'=>'I/b','nama_golongan'=>'Juru Muda Tingkat I']);
        $this->insert('{{%golongan}}',['id'=>'3','kode_golongan'=>'I/c','nama_golongan'=>'Juru']);
        $this->insert('{{%golongan}}',['id'=>'4','kode_golongan'=>'I/d','nama_golongan'=>'Juru Tingkat I']);
        $this->insert('{{%golongan}}',['id'=>'5','kode_golongan'=>'II/a','nama_golongan'=>'Pengatur Muda']);
        $this->insert('{{%golongan}}',['id'=>'6','kode_golongan'=>'II/b','nama_golongan'=>'Pengatur Muda Tingkat I']);
        $this->insert('{{%golongan}}',['id'=>'7','kode_golongan'=>'II/c','nama_golongan'=>'Pengatur']);
        $this->insert('{{%golongan}}',['id'=>'8','kode_golongan'=>'II/d','nama_golongan'=>'Pengatur Tingkat I']);
        $this->insert('{{%golongan}}',['id'=>'9','kode_golongan'=>'III/a','nama_golongan'=>'Penata Muda']);
        $this->insert('{{%golongan}}',['id'=>'10','kode_golongan'=>'III/b','nama_golongan'=>'Penata Muda Tingkat I']);
        $this->insert('{{%golongan}}',['id'=>'11','kode_golongan'=>'III/c','nama_golongan'=>'Penata']);
        $this->insert('{{%golongan}}',['id'=>'12','kode_golongan'=>'III/d','nama_golongan'=>'Penata Tingkat I']);
        $this->insert('{{%golongan}}',['id'=>'13','kode_golongan'=>'IV/a','nama_golongan'=>'Pembina']);
        $this->insert('{{%golongan}}',['id'=>'14','kode_golongan'=>'IV/b','nama_golongan'=>'Pembina Tingkat I']);
        $this->insert('{{%golongan}}',['id'=>'15','kode_golongan'=>'IV/c','nama_golongan'=>'Pembina Utama Muda']);
        $this->insert('{{%golongan}}',['id'=>'16','kode_golongan'=>'IV/d','nama_golongan'=>'Pembina Utama Madya']);
        $this->insert('{{%golongan}}',['id'=>'17','kode_golongan'=>'IV/e','nama_golongan'=>'Pembina Utama']);
        $this->execute('SET foreign_key_checks = 1;');

    }

    public function down()
    {
//        return parent::down(); // TODO: Change the autogenerated stub
        $this->execute('SET foreign_key_checks = 0');
        $this->execute('DROP TABLE IF EXISTS `golongan`');
        $this->execute('SET foreign_key_checks = 1;');
    }
}