<?
  if (isset($_POST['name']) and isset($_POST['text'])) {
    $success = mail('savtym@gmail.com', 'International Rescue Services', "Email: {$_POST['name']} \n\nСообщение: {$_POST['text']}", "Content-type: text/plain; charset=utf-8");
    echo $success ? '<meta charset="utf-8"><meta http-equiv="refresh" content="3; url=index.html"><body style="text-align:center; margin: 0 auto; padding-top: 50px"><strong>Ваше сообщение отправлено!</strong></body>' : 'Сообщение не отправлено.';
  } else die('Сообщение не отправлено.');
?>