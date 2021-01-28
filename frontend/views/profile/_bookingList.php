<tr>
    <td><a><?=$model->nama?></a></td>
	<td><?=$model->email?></td>
	<td><?=$model->service_name?></td>
	<td>
	<div class="sparkbar" data-color="#00a65a" data-height="20"><?=Yii::$app->formatter->asDate($model->tanggal)?></div>
	</td>
	<td>
	<div class="sparkbar" data-color="#00a65a" data-height="20"><?=Yii::$app->formatter->asTime($model->jam)?></div>
	</td>
    <td>
	<?php
	switch ($model->status) {
	  case "Terkonfirmasi":
		echo "<span class=\"label label-success\">Di Konfirmasi</span>";
		break;
	  case "Di Tolak":
		echo "<span class=\"label label-danger\">Di Tolak</span>";
		break;
	  default:
		echo "<span class=\"label label-info\">Menunggu Konfirmasi</span>";
	}
	?>
	</td>
	<td>
	<div class="sparkbar" data-color="#00a65a" data-height="20"><?=Yii::$app->formatter->asDatetime($model->create_at)?></div>
	</td>
</tr>