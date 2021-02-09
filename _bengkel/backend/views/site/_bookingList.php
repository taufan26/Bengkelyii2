<tr>
	<td><a href="pages/examples/invoice.html"><?=$model->id?></a></td>
    <td><a><?=$model->nama?></a></td>
    	<td><?=$model->email?></td>
    	<td><span class="badge badge-info"><?=$model->service_name?></span></td>
    	<td>
    	<div class="sparkbar" data-color="#00a65a" data-height="20"><?=Yii::$app->formatter->asDate($model->tanggal)?></div>
    	<td>
    	<div class="sparkbar" data-color="#00a65a" data-height="20"><?=Yii::$app->formatter->asTime($model->jam)?></div>
    </td>
</tr> 