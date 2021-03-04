<tr>
    <td><a><?=$model->nama?></a></td>
    <td>
    <div class="sparkbar" data-color="#00a65a" data-height="20"><?=Yii::$app->formatter->asDate($model->tanggal)?></div>
    </td>
    <td>
    <div class="sparkbar" data-color="#00a65a" data-height="20"><?=Yii::$app->formatter->asTime($model->jam)?></div>
    </td>
</tr> 