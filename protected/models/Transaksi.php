<?php

/**
 * This is the model class for table "transaksi".
 *
 * The followings are the available columns in table 'transaksi':
 * @property integer $transaksiId
 * @property string $userId
 * @property string $status
 * @property string $tglOrder
 * @property string $kodeBayar
 * @property integer $totalTransaksi
 *
 * The followings are the available model relations:
 * @property DetailTransaksi[] $detailTransaksis
 * @property Pembayaran[] $pembayarans
 * @property User $user
 */
class Transaksi extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'transaksi';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('userId, status, tglOrder, kodeBayar, totalTransaksi', 'required'),
			array('totalTransaksi', 'numerical', 'integerOnly'=>true),
			array('userId, kodeBayar', 'length', 'max'=>100),
			array('status', 'length', 'max'=>20),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('transaksiId, userId, status, tglOrder, kodeBayar, totalTransaksi', 'safe', 'on'=>'search'),
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
			'detailTransaksis' => array(self::HAS_MANY, 'DetailTransaksi', 'transaksiId'),
			'pembayarans' => array(self::HAS_MANY, 'Pembayaran', 'transaksiId'),
			'user' => array(self::BELONGS_TO, 'User', 'userId'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'transaksiId' => 'Transaksi',
			'userId' => 'User',
			'status' => 'Status',
			'tglOrder' => 'Tgl Order',
			'kodeBayar' => 'Kode Bayar',
			'totalTransaksi' => 'Total Transaksi',
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

		$criteria->compare('transaksiId',$this->transaksiId);
		$criteria->compare('userId',$this->userId,true);
		$criteria->compare('status',$this->status,true);
		$criteria->compare('tglOrder',$this->tglOrder,true);
		$criteria->compare('kodeBayar',$this->kodeBayar,true);
		$criteria->compare('totalTransaksi',$this->totalTransaksi);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Transaksi the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
