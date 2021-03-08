<tr>
    <td><a><?=$model->nama?></a></td>
    <td>
    <div class="sparkbar" data-color="#00a65a" data-height="20"><?=Yii::$app->formatter->asDate($model->tanggal)?></div>
    </td>
    <td>
    <div class="sparkbar" data-color="#00a65a" data-height="20"><?=$model->jam?></div>
    </td>
    <td>
	<?php
	switch ($model->status) {
	  case "Terkonfirmasi":
		echo "<span class=\"label label-success\">Konfirmasi</span>";
		break;
	  case "Di Tolak":
		echo "<span class=\"label label-danger\">Tolak</span>";
		break;
	  default:
		echo "<span class=\"label label-info\">Menunggu</span>";
	}
	?>
	</td>
</tr> 