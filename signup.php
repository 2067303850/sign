<?php 
    header("Content-Type: text/html; charset=utf8");

    if(!isset($_POST['submit'])){
        exit("����ִ��");
    }//�ж��Ƿ���submit����

    $name=$_POST['name'];//post��ȡ�����name
    $password=$_POST['password'];//post��ȡ�����password

    include('connect.php');//�������ݿ�
    $q="insert into user(id,username,password) values (null,'$name','$password')";//�����ݿ�����������ֵ��sql
    $reslut=mysql_query($q,$con);//ִ��sql
    
    if (!$reslut){
        die('Error: ' . mysql_error());//���sqlִ��ʧ���������
    }else{
        echo "ע��ɹ�";//�ɹ����ע��ɹ�
    }

    

    mysql_close($con);//�ر����ݿ�

?>