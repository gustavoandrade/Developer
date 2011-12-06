<?php

/**
 * This is the model class for table "TBLUSUARIOS".
 *
 * The followings are the available columns in table 'TBLUSUARIOS':
 * @property double $IDUSUARIO
 * @property string $NOMBRE
 * @property string $APATERNO
 * @property string $AMATERNO
 * @property string $LOGIN
 * @property string $PASSWORD
 * @property string $CTRLCALIDAD
 * @property double $IDCALLCENTER
 * @property string $TURNO
 * @property string $ACTIVO
 * @property string $FECHAVENCIMIENTOPWD
 * @property double $IDSESSION
 * @property string $HISTORIAPASSWORD
 * @property string $EMAIL
 * @property string $VERIFICAIP
 * @property string $FECHAINGRESO
 * @property string $FECHAACTIVACION
 * @property string $FECHADESACTIVACION
 * @property string $FECHABAJA
 * @property double $CEDULA
 * @property double $IDOPERACION
 * @property double $IDTURNO
 * @property double $IDHORARIO
 * @property string $FECHAULTIMAENTRADA
 * @property string $TICKETMASTER
 * @property double $CELULAR
 * @property string $IDSESSIONCCXADV
 *
 * The followings are the available model relations:
 * @property DICMOVTOSEDOCTACC[] $dICMOVTOSEDOCTACCs
 * @property DICPERIODOSPAGO[] $dICPERIODOSPAGOs
 * @property DICTABULADORESPAGO[] $dICTABULADORESPAGOs
 * @property DICTIPOSGRABACION[] $dICTIPOSGRABACIONs
 * @property TBLCALLCENTERTABPAGO[] $tBLCALLCENTERTABPAGOs
 * @property TBLCFGCCMAYORISTA[] $tBLCFGCCMAYORISTAs
 * @property TBLPETICIONESPAGOSCC[] $tBLPETICIONESPAGOSCCs
 * @property TBLSMSCONTROL[] $tBLSMSCONTROLs
 * @property TBLTRANSACCIONESEDOCTACC[] $tBLTRANSACCIONESEDOCTACCs
 * @property DICCALLCENTERS $iDCALLCENTER
 * @property TBLUSUARIOSPERFILES[] $tBLUSUARIOSPERFILESs
 * @property TBLUSUARIOSPERMISOS[] $tBLUSUARIOSPERMISOSes
 * @property DICCFGCONTROLCALIDAD[] $dICCFGCONTROLCALIDADs
 * @property DICCFGCONTROLCALIDAD[] $dICCFGCONTROLCALIDADs1
 * @property TBLCALIFICACIONCTRLCALIDAD[] $tBLCALIFICACIONCTRLCALIDADs
 */
class User extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return User the static model class
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
		return 'TBLUSUARIOS';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('NOMBRE, APATERNO, LOGIN, PASSWORD, IDCALLCENTER', 'required'),
			array('IDCALLCENTER, IDSESSION, CEDULA, IDOPERACION, IDTURNO, IDHORARIO, CELULAR', 'numerical'),
			array('NOMBRE, APATERNO, AMATERNO', 'length', 'max'=>50),
			array('LOGIN, PASSWORD', 'length', 'max'=>20),
			array('CTRLCALIDAD, TURNO, ACTIVO, VERIFICAIP, TICKETMASTER', 'length', 'max'=>1),
			array('HISTORIAPASSWORD', 'length', 'max'=>32),
			array('EMAIL', 'length', 'max'=>100),
			array('IDSESSIONCCXADV', 'length', 'max'=>255),
			array('FECHAVENCIMIENTOPWD, FECHAINGRESO, FECHAACTIVACION, FECHADESACTIVACION, FECHABAJA, FECHAULTIMAENTRADA', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('IDUSUARIO, NOMBRE, APATERNO, AMATERNO, LOGIN, PASSWORD, CTRLCALIDAD, IDCALLCENTER, TURNO, ACTIVO, FECHAVENCIMIENTOPWD, IDSESSION, HISTORIAPASSWORD, EMAIL, VERIFICAIP, FECHAINGRESO, FECHAACTIVACION, FECHADESACTIVACION, FECHABAJA, CEDULA, IDOPERACION, IDTURNO, IDHORARIO, FECHAULTIMAENTRADA, TICKETMASTER, CELULAR, IDSESSIONCCXADV', 'safe', 'on'=>'search'),
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
			'dICMOVTOSEDOCTACCs' => array(self::HAS_MANY, 'DICMOVTOSEDOCTACC', 'IDUSUARIORESPONSABLE'),
			'dICPERIODOSPAGOs' => array(self::HAS_MANY, 'DICPERIODOSPAGO', 'IDUSUARIORESPONSABLE'),
			'dICTABULADORESPAGOs' => array(self::HAS_MANY, 'DICTABULADORESPAGO', 'IDUSUARIORESPONSABLE'),
			'dICTIPOSGRABACIONs' => array(self::HAS_MANY, 'DICTIPOSGRABACION', 'IDUSUARIORESPONSABLE'),
			'tBLCALLCENTERTABPAGOs' => array(self::HAS_MANY, 'TBLCALLCENTERTABPAGO', 'IDUSUARIORESPONSABLE'),
			'tBLCFGCCMAYORISTAs' => array(self::HAS_MANY, 'TBLCFGCCMAYORISTA', 'IDUSUARIORESPONSABLE'),
			'tBLPETICIONESPAGOSCCs' => array(self::HAS_MANY, 'TBLPETICIONESPAGOSCC', 'IDUSUARIORESPONSABLE'),
			'tBLSMSCONTROLs' => array(self::HAS_MANY, 'TBLSMSCONTROL', 'IDUSUARIORESPONSABLE'),
			'tBLTRANSACCIONESEDOCTACCs' => array(self::HAS_MANY, 'TBLTRANSACCIONESEDOCTACC', 'IDUSUARIORESPONSABLE'),
			'iDCALLCENTER' => array(self::BELONGS_TO, 'DICCALLCENTERS', 'IDCALLCENTER'),
			'tBLUSUARIOSPERFILESs' => array(self::HAS_MANY, 'TBLUSUARIOSPERFILES', 'IDUSUARIO'),
			'tBLUSUARIOSPERMISOSes' => array(self::HAS_MANY, 'TBLUSUARIOSPERMISOS', 'IDUSUARIO'),
			'dICCFGCONTROLCALIDADs' => array(self::HAS_MANY, 'DICCFGCONTROLCALIDAD', 'IDUSUARIOCREACION'),
			'dICCFGCONTROLCALIDADs1' => array(self::HAS_MANY, 'DICCFGCONTROLCALIDAD', 'IDUSUARIOACTUALIZACION'),
			'tBLCALIFICACIONCTRLCALIDADs' => array(self::HAS_MANY, 'TBLCALIFICACIONCTRLCALIDAD', 'IDUSUARIORESPONSABLE'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'IDUSUARIO' => 'Idusuario',
			'NOMBRE' => 'Nombre',
			'APATERNO' => 'Apaterno',
			'AMATERNO' => 'Amaterno',
			'LOGIN' => 'Login',
			'PASSWORD' => 'Password',
			'CTRLCALIDAD' => 'Ctrlcalidad',
			'IDCALLCENTER' => 'Idcallcenter',
			'TURNO' => 'Turno',
			'ACTIVO' => 'Activo',
			'FECHAVENCIMIENTOPWD' => 'Fechavencimientopwd',
			'IDSESSION' => 'Idsession',
			'HISTORIAPASSWORD' => 'Historiapassword',
			'EMAIL' => 'Email',
			'VERIFICAIP' => 'Verificaip',
			'FECHAINGRESO' => 'Fechaingreso',
			'FECHAACTIVACION' => 'Fechaactivacion',
			'FECHADESACTIVACION' => 'Fechadesactivacion',
			'FECHABAJA' => 'Fechabaja',
			'CEDULA' => 'Cedula',
			'IDOPERACION' => 'Idoperacion',
			'IDTURNO' => 'Idturno',
			'IDHORARIO' => 'Idhorario',
			'FECHAULTIMAENTRADA' => 'Fechaultimaentrada',
			'TICKETMASTER' => 'Ticketmaster',
			'CELULAR' => 'Celular',
			'IDSESSIONCCXADV' => 'Idsessionccxadv',
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

		$criteria->compare('IDUSUARIO',$this->IDUSUARIO);
		$criteria->compare('NOMBRE',$this->NOMBRE,true);
		$criteria->compare('APATERNO',$this->APATERNO,true);
		$criteria->compare('AMATERNO',$this->AMATERNO,true);
		$criteria->compare('LOGIN',$this->LOGIN,true);
		$criteria->compare('PASSWORD',$this->PASSWORD,true);
		$criteria->compare('CTRLCALIDAD',$this->CTRLCALIDAD,true);
		$criteria->compare('IDCALLCENTER',$this->IDCALLCENTER);
		$criteria->compare('TURNO',$this->TURNO,true);
		$criteria->compare('ACTIVO',$this->ACTIVO,true);
		$criteria->compare('FECHAVENCIMIENTOPWD',$this->FECHAVENCIMIENTOPWD,true);
		$criteria->compare('IDSESSION',$this->IDSESSION);
		$criteria->compare('HISTORIAPASSWORD',$this->HISTORIAPASSWORD,true);
		$criteria->compare('EMAIL',$this->EMAIL,true);
		$criteria->compare('VERIFICAIP',$this->VERIFICAIP,true);
		$criteria->compare('FECHAINGRESO',$this->FECHAINGRESO,true);
		$criteria->compare('FECHAACTIVACION',$this->FECHAACTIVACION,true);
		$criteria->compare('FECHADESACTIVACION',$this->FECHADESACTIVACION,true);
		$criteria->compare('FECHABAJA',$this->FECHABAJA,true);
		$criteria->compare('CEDULA',$this->CEDULA);
		$criteria->compare('IDOPERACION',$this->IDOPERACION);
		$criteria->compare('IDTURNO',$this->IDTURNO);
		$criteria->compare('IDHORARIO',$this->IDHORARIO);
		$criteria->compare('FECHAULTIMAENTRADA',$this->FECHAULTIMAENTRADA,true);
		$criteria->compare('TICKETMASTER',$this->TICKETMASTER,true);
		$criteria->compare('CELULAR',$this->CELULAR);
		$criteria->compare('IDSESSIONCCXADV',$this->IDSESSIONCCXADV,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}