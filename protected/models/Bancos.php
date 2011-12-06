<?php

/**
 * This is the model class for table "DICBANCOS".
 *
 * The followings are the available columns in table 'DICBANCOS':
 * @property double $IDBANCO
 * @property string $CLAVE
 * @property string $BANCO
 * @property string $CODIGOAIG
 * @property string $TERMINAL
 * @property string $COD_MAPFRE
 * @property double $IDPAIS
 *
 * The followings are the available model relations:
 * @property TBLCLIENTES[] $tBLCLIENTESs
 * @property DICCAUSASRECHAZOSOLICITUD[] $dICCAUSASRECHAZOSOLICITUDs
 * @property TBLTARJETASCLIENTES[] $tBLTARJETASCLIENTESs
 * @property TBLTARJETASASEGURADAS[] $tBLTARJETASASEGURADASes
 * @property TBLASEGBANCOSCTRLCALIDAD[] $tBLASEGBANCOSCTRLCALIDADs
 */
class Bancos extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Bancos the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'DICBANCOS';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('CLAVE, BANCO', 'required'),
			array('IDPAIS', 'numerical'),
			array('CLAVE', 'length', 'max'=>3),
			array('BANCO', 'length', 'max'=>100),
			array('CODIGOAIG', 'length', 'max'=>6),
			array('TERMINAL', 'length', 'max'=>1),
			array('COD_MAPFRE', 'length', 'max'=>4),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('IDBANCO, CLAVE, BANCO, CODIGOAIG, TERMINAL, COD_MAPFRE, IDPAIS', 'safe', 'on'=>'search'),
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
			'tBLCLIENTESs' => array(self::HAS_MANY, 'TBLCLIENTES', 'IDBANCOTC'),
			'dICCAUSASRECHAZOSOLICITUDs' => array(self::HAS_MANY, 'DICCAUSASRECHAZOSOLICITUD', 'IDBANCOTERMINAL'),
			'tBLTARJETASCLIENTESs' => array(self::HAS_MANY, 'TBLTARJETASCLIENTES', 'IDBANCOTC'),
			'tBLTARJETASASEGURADASes' => array(self::HAS_MANY, 'TBLTARJETASASEGURADAS', 'IDBANCO'),
			'tBLASEGBANCOSCTRLCALIDADs' => array(self::HAS_MANY, 'TBLASEGBANCOSCTRLCALIDAD', 'IDBANCO'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'IDBANCO' => 'Idbanco',
			'CLAVE' => 'Clave',
			'BANCO' => 'Banco',
			'CODIGOAIG' => 'Codigoaig',
			'TERMINAL' => 'Terminal',
			'COD_MAPFRE' => 'Cod Mapfre',
			'IDPAIS' => 'Idpais',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('IDBANCO',$this->IDBANCO);
		$criteria->compare('CLAVE',$this->CLAVE,true);
		$criteria->compare('BANCO',$this->BANCO,true);
		$criteria->compare('CODIGOAIG',$this->CODIGOAIG,true);
		$criteria->compare('TERMINAL',$this->TERMINAL,true);
		$criteria->compare('COD_MAPFRE',$this->COD_MAPFRE,true);
		$criteria->compare('IDPAIS',$this->IDPAIS);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}