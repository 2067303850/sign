<?php
    $server="localhost";//����
    $db_username="root";//������ݿ��û���
    $db_password="";//������ݿ�����
    $con = mysql_connect($server,$db_username,$db_password);//�������ݿ�
    if(!$con){
        die("can't connect".mysql_error());//�������ʧ���������
    }
    mysql_select_db('test',$con);//ѡ�����ݿ⣨�ҵ���test��
?>