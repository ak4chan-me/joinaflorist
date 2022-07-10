<?php

/**
 * This is the model class for table "detail_transaksi".
 *
 * The followings are the available columns in table 'detail_transaksi':
 * @property integer $detailId
 * @property integer $produkId
 * @property integer $transaksiId
 * @property integer $jumlah
 * @property integer $harga
 * @property integer $total
 * @property string $ucapan
 * @property string $alamat
 *
 * The followings are the available model relations:
 * @property Produk $produk
 * @property Transaksi $transaksi
 */
class DetailTransaksi extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'detail_transaksi';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('produkId, transaksiId, jumlah, harga, total, ucapan, alamat', 'required'),
			array('produkId, transaksiId, jumlah, harga, total', 'numerical', 'integerOnly'=>true),
			array('ucapan, alamat', 'length', 'max'=>200),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('detailId, produkId, transaksiId, jumlah, harga, total, ucapan, alamat', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'produk' => array(self::BELONGS_TO, 'Produk', 'produkId'),
			'transaksi' => array(self::BELONGS_TO, 'Transaksi', 'transaksiId'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'detailId' => 'Detail',
			'produkId' => 'Produk',
			'transaksiId' => 'Transaksi',
			'jumlah' => 'Jumlah',
			'harga' => 'Harga',
			'total' => 'Total',
			'ucapan' => 'Ucapan',
			'alamat' => 'Alamat',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('detailId',$this->detailId);
		$criteria->compare('produkId',$this->produkId);
		$criteria->compare('transaksiId',$this->transaksiId);
		$criteria->compare('jumlah',$this->jumlah);
		$criteria->compare('harga',$this->harga);
		$criteria->compare('total',$this->total);
		$criteria->compare('ucapan',$this->ucapan,true);
		$criteria->compare('alamat',$this->alamat,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return DetailTransaksi the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
