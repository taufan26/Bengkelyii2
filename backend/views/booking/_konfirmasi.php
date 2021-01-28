<?php
use yii\helpers\Html;
?>
<tr>
	<td><a href="pages/examples/invoice.html"><?=$model->id?></a></td>
    <td><a><?=$model->nama?></a></td>
    <td><?=$model->email?></td>
    <td><span class="badge badge-primary"><?=$model->service_name?></span></td>
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
		echo "<span class=\"badge badge-success\">Di Konfirmasi</span>";
		break;
	  case "Di Tolak":
		echo "<span class=\"badge badge-danger\">Di Tolak</span>";
		break;
	  default:
		echo "<span class=\"badge badge-info\">Menunggu Konfirmasi</span>";
	}
	?>
    </td>
    <td>
    <div class="sparkbar" data-color="#00a65a" data-height="20"><?=Yii::$app->formatter->asDatetime($model->create_at)?></div>
    </td>
    <td>
    	<p>
        <?= Html::a('Konfirmasi', ['ukonfirmasi', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
    	</p>
    </td>
</tr>  