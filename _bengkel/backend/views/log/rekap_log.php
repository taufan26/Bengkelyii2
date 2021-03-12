<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\GroupUnitSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Rekap Log';
$this->params['breadcrumbs'][] = $this->title;

?>
<div class="group-unit-index">
    <h1><?= Html::encode($this->title) ?></h1>


	<?php
	$sql_logs = Yii::$app->db->createCommand("select distinct(prefix) as prefix ".
												"	from log ".
												"	where prefix != 'Purwo'".
												"	order by prefix ASC");
	$logs = $sql_logs->queryAll();
	
	

	foreach ($logs as $log) {
		//echo Yii::$app->formatter->asDate($log['prefix'], 'php:d F Y')."<br>";
		$sql_login_terakhir = Yii::$app->db->createCommand("select log_time as login ".
														"	from log ".
														"	where prefix = '$log[prefix]' ".
														"	and message like 'Login' ".
														"	order by log_time desc ");
		$login_terakhir = $sql_login_terakhir->queryOne();
		
		echo $log['prefix']." : ".Yii::$app->formatter->asDate($login_terakhir['login'])."<br>";
		
		$sql_login = Yii::$app->db->createCommand("select count(id) as login ".
													"	from log ".
													"	where prefix = '$log[prefix]' ".
													"	and message like 'Login' ");
		$login = $sql_login->queryOne();

		$sql_insert = Yii::$app->db->createCommand("select count(id) as tambah ".
													"	from log ".
													"	where prefix = '$log[prefix]' ".
													"	and message like '%Insert%' ");
		$insert = $sql_insert->queryOne();

		$sql_update = Yii::$app->db->createCommand("select count(id) as edit ".
													"	from log ".
													"	where prefix = '$log[prefix]' ".
													"	and message like '%Update%' ");
		$update = $sql_update->queryOne();

		$sql_hapus = Yii::$app->db->createCommand("select count(id) as hapus ".
													"	from log ".
													"	where prefix = '$log[prefix]' ".
													"	and message like '%Delete%' ");
		$hapus = $sql_hapus->queryOne();

		echo $log['prefix']." - Login : ".$login['login']."x - Tambah : ".$insert['tambah']."x - Edit : ".$update['edit']."x - Hapus : ".$hapus['hapus']."x <br><br>";
		
    }
	
	?>
</div>
