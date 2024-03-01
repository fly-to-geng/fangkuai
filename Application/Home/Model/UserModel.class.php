<?php
namespace Home\Model;

use Think\Model\RelationModel;
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/10/23
 * Time: 21:04
 */
class UserModel extends RelationModel
{
    protected $_validate = array(
        array('verify','require','��֤����룡'), //Ĭ������������������֤
        array('telephone','','�ʺ������Ѿ����ڣ�',0,'unique',4), // �ڵ�½��ʱ����֤�ֻ����Ƿ������ݿ���
        array('password',array(1,2,3),'ֵ�ķ�Χ����ȷ��',2,'in'), // ��ֵ��Ϊ�յ�ʱ���ж��Ƿ���һ����Χ��
        array('repassword','password','ȷ�����벻��ȷ',0,'confirm'), // ��֤ȷ�������Ƿ������һ��
        array('password','checkPwd','�����ʽ����ȷ',0,'function'), // �Զ��庯����֤�����ʽ
    );
    protected $_link = array(
        //��Ʒ���Եĸֳ�����
        'factory_name' => array(
            'mapping_type' => self::BELONGS_TO,
            'class_name' => 'factory',
            'foreign_key' => 'product_factory_id',
            'as_fields' => 'factory_name,factory_city',
        ),
        'storehouse_name' => array(
            'mapping_type' => self::BELONGS_TO,
            'class_name' => 'storehouse',
            'foreign_key' => 'product_storehouse_id',
            'as_fields' => 'storehouse_name',
        ),
    );
}