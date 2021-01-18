<?php
use yii\helpers\Html;
?>
<tr>
	<td><a href="pages/examples/invoice.html"><?=$model->id?></a></td>
    <td><a><?=$model->nama?></a></td>
    <td><?=$model->email?></td>
    <td><span class="badge badge-info"><?=$model->service_name?></span></td>
    <td>
    <div class="sparkbar" data-color="#00a65a" data-height="20"><?=$model->tanggal?></div>
    </td>
    <td>
    <div class="sparkbar" data-color="#00a65a" data-height="20"><?=$model->jam?></div>
    </td>
    <td><span class="badge badge-info"><?=$model->status?></span></td>
    <td>
    <div class="sparkbar" data-color="#00a65a" data-height="20"><?=$model->create_at?></div>
    </td>
    <td>
    	<p>
        <?= Html::a('Konfirmasi', ['ukonfirmasi', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
    	</p>
    </td>
</tr>  