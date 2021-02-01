<tr>
  <td><a href="pages/examples/invoice.html"><?=$model->id?></a></td>
    <td><a><?=$model->nama?></a></td>
      <td><?=$model->deskripsi?></td>
      <td><span class="badge badge-info">Rp<?=Yii::$app->formatter->asDecimal($model->harga)?></span></td>
      <td>
      <div class="sparkbar" data-color="#00a65a" data-height="20"><?=$model->quantity?></div>
      <td>
      <div class="sparkbar" data-color="#00a65a" data-height="20"><?=$model->stock?></div>
    </td>
</tr> 