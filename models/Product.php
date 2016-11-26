<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "product".
 *
 * @property integer $id
 * @property string $product_name
 * @property double $price
 * @property string $category
 * @property string $image_url
 */
class Product extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'product';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['product_name', 'price', 'category', 'image_url'], 'required'],
            [['price'], 'number'],
            [['product_name', 'image_url'], 'string', 'max' => 200],
            [['category'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'product_name' => 'Product Name',
            'price' => 'Price',
            'category' => 'Category',
            'image_url' => 'Image Url',
        ];
    }

    // public function search(params)
    // {
    //     return [
    //         'id' => 'ID',
    //         'product_name' => 'Product Name',
    //         'price' => 'Price',
    //         'category' => 'Category',
    //         'image_url' => 'Image Url',
    //     ];
    // }
}
