<?PHP
    header("Content-Type: text/html; charset=utf8");
    if(!isset($_POST["submit"])){
        exit("����ִ��");
    }//����Ƿ���submit���� 

    include('connect.php');//�������ݿ�
    $name = $_POST['name'];//post����û�����ֵ
    $passowrd = $_POST['password'];//post����û����뵥ֵ

    if ($name && $passowrd){//����û��������붼��Ϊ��
             $sql = "select * from user where username = '$name' and password='$passowrd'";//������ݿ��Ƿ��ж�Ӧ��username��password��sql
             $result = mysql_query($sql);//ִ��sql
             $rows=mysql_num_rows($result);//����һ����ֵ
             if($rows){//0 false 1 true
                   header("refresh:0;url=welcome.html");//����ɹ���ת��welcome.htmlҳ��
                   exit;
             }else{
                echo "�û������������";
                echo "
                    <script>
                            setTimeout(function(){window.location.href='login.html';},1000);
                    </script>

                ";//�������ʹ��js 1�����ת����¼ҳ������;
             }
             

    }else{//����û����������п�
                echo "����д������";
                echo "
                      <script>
                            setTimeout(function(){window.location.href='login.html';},1000);
                      </script>";

                        //�������ʹ��js 1�����ת����¼ҳ������;
    }

    mysql_close();//�ر����ݿ�
?>