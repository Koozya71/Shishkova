<?php 

if(isset($_POST['submit'])){
    $to = "ilya-kuzznetsov@yandex.ru"; // Здесь нужно написать e-mail, куда будут приходить письма
    $from = "no-reply@epicblog.net"; // Здесь нужно написать e-mail, от кого будут приходить письма, например no-reply@epicblog.net
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];
    $subject = "Форма отправки сообщений с сайта";
    $subject2 = "Copy of your form submission";
    $message = "ФИО посетителя: ". $name . " | Адрес электронной почты: "  . $_POST['email'] . " | Комментарий: " . $_POST['message'] . " | Номер телефона: " . $_POST['phone'];
    $message2 = "Here is a copy of your message " . $name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
	
    mail($to,$subject,$message,$headers);
   // mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender - Отключено!
    echo "Сообщение отправлено. Спасибо Вам " . $name . ", мы скоро свяжемся с Вами.";
	echo "<br /><br /><a href='http://shiishkova.ru'>Вернуться на сайт.</a>";

}

?>
<!--Переадресация на главную страницу сайта, через 3 секунды-->
<script language="JavaScript" type="text/javascript">
function changeurl(){eval(self.location="http://shiishkova.ru");}
window.setTimeout("changeurl();",3000);
</script>