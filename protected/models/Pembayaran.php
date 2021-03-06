<?php

/**
 * This is the model class for table "pembayaran".
 *
 * The followings are the available columns in table 'pembayaran':
 * @property integer $bayarId
 * @property integer $transaksiId
 * @property string $kodeBayar
 * @property string $tglBayar
 * @property string $statusBayar
 * @property integer $totalBayar
 *
 * The followings are the available model relations:
 * @property Transaksi $transaksi
 */
class Pembayaran extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'pembayaran';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('transaksiId, kodeBayar, tglBayar, statusBayar, totalBayar', 'required'),
			array('transaksiId, totalBayar', 'numerical', 'integerOnly'=>true),
			array('kodeBayar', 'length', 'max'=>100),
			array('statusBayar', 'length', 'max'=>50),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('bayarId, transaksiId, kodeBayar, tglBayar, statusBayar, totalBayar', 'safe', 'on'=>'search'),
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
			'transaksi' => array(self::BELONGS_TO, 'Transaksi', 'transaksiId'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'bayarId' => 'Bayar',
			'transaksiId' => 'Transaksi',
			'kodeBayar' => 'Kode Bayar',
			'tglBayar' => 'Tgl Bayar',
			'statusBayar' => 'Status Bayar',
			'totalBayar' => 'Total Bayar',
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

		$criteria->compare('bayarId',$this->bayarId);
		$criteria->compare('transaksiId',$this->transaksiId);
		$criteria->compare('kodeBayar',$this->kodeBayar,true);
		$criteria->compare('tglBayar',$this->tglBayar,true);
		$criteria->compare('statusBayar',$this->statusBayar,true);
		$criteria->compare('totalBayar',$this->totalBayar);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Pembayaran the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
