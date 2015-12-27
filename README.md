# Basecamp Trix Widget for yii2

`Basecamp Trix Widget for yii2` is a wrapper for [trix text editor](https://github.com/basecamp/trix).

# Usage

Once the extension is installed, simply use it in your code:

## Like a widget without model

```php
echo \kotchuprik\trix\Widget::widget();
```

## Like a widget

```php
echo \kotchuprik\trix\Widget::widget([
    'model' => $model,
    'attribute' => 'attributeModel',
]);
```

## Like a ActiveForm widget

```php
use \kotchuprik\trix\Widget;

echo $form->field($model, 'attributeModel')->widget(Widget::className());
```
