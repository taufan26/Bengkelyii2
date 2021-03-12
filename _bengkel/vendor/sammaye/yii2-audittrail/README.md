# yii2-audittrail

Yii2 edition of the [audittrail extension](https://github.com/Sammaye/audittrail).

## How to use

To use this extension you can simply add it to the model's behaviours:

	use yii\db\ActiveRecord;
	
	class Model extends ActiveRecord
	{
		public function behaviors()
		{
			return [
				'sammaye\audittrail\LoggableBehavior'
			];
		}
	}

You can convert the entered behaviour into a key - value structure to define options for the extension for that model:

	class Model extends ActiveRecord
	{
		public function behaviors()
		{
			return [
				'LoggableBehavior' => [
					'class' => 'sammaye\audittrail\LoggableBehavior',
					'ignored' => ['some_field'], // This ignores fields from a selection of all fields, not needed with allowed
					'allowed' => ['another_field'] // optional, not needed if you use ignore
				]
			];
		}
	}

And that is basically how to setup this extension.

## Changes

There are a couple of changes.

One of them is how to define global parameters for this extension.

An example of global parameters would be setting you own table name or defining the location of the user model.

To define your own table you can add a parameter to your `params.php` file called `audittrail.table` which would take something like `{{%audit}}`.

To define your own user model location you can add `audittrail.model` using a value like `common\models\User`.

The only other change is really to do with the best way to query the audit trail.

The below example is the one from the previous documentation rewritten for Yii2:

    <?php
    use yii\data\ActiveDataProvider;
    use sammaye\audittrail\AuditTrail;
    use common\models\Title;
    use common\models\Product;

    $model_ids = array(array($model->id, Title::className()));
    foreach($model->products as $id => $product){
        $model_ids[] = array($product->id, Product::className());
    }

    $criteria = AuditTrail::find();
    $param_id = 0;
    
    // $model_ids is the one you built in your original code
    foreach( $model_ids as $id_pair ) {
        $criteria->orWhere('model_id = :id' . $param_id . ' AND model = :model' . $param_id);
        $criteria->addParams([
            ':id' . $param_id => $id_pair[0], 
            ':model' . $param_id => $id_pair[1]
        ]);
        $param_id++;
    }
    $criteria->orderBy(['stamp' => SORT_DESC]);

    echo yii\grid\GridView::widget([
        'dataProvider' => new ActiveDataProvider([
            'query' => $criteria,
            'pagination' => [
                'pageSize' => 100,
            ]
        ]),
        'columns' => [
            [
                'label' => 'Author',
                'value' => function($model, $index, $widget){
                    return $model->user ? $model->user->email : "";
                }
            ],
            [
                'attribute' => 'model',
                'value' => function($model, $index, $widget){
                    $p = explode('\\', $model->model);
                    return end($p);
                }
            ],
            'model_id',
            'action',
            [
                'label' => 'field',
                'value' => function($model, $index, $widget){
                    return $model->getParent()->getAttributeLabel($model->field);
                }
            ],
            'old_value',
            'new_value',
            [
                'label' => 'Date Changed',
                'value' => function($model, $index, $widget){
                    return date("d-m-Y H:i:s", strtotime($model->stamp));
                }
            ]
        ]
    ]); ?>

Notice the:
    
    [
        'attribute' => 'model',
        'value' => function($model, $index, $widget){
            $p = explode('\\', $model->model);
            return end($p);
        }
    ],
    
This allows us to get the name of the model without the namespace part on it.

Currently in this extension I store the fully qualified name of the class to:

- Take advantage of namespacing to create uniqueness
- To make it easier to query using the `className()` function in Objects.

## Migration

There are two ways of doing this:

- Copy the migration file (within the `migrations` folder) to your `console/migrations` folder
- Use `--migrationPath` option of the `migrate` command to 
[point to the migrations folder in this repo](http://www.yiiframework.com/doc-2.0/guide-db-migrations.html#migrating-multiple-databases)

## Resources

- [Packagist](https://packagist.org/packages/sammaye/yii2-audittrail)
- [Issue Tracker](https://github.com/Sammaye/yii2-auditrail/issues)
