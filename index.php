<?php
$username = "BettyHacker";
$password = "SuperGutesPasswort";



if(@$_POST['login'] == $username && @$_POST['password'] == $password)
{
    if(isset($_FILES['file']['tmp_name']))
    {
        $uploadfile = 'upload/main.rxe';
        move_uploaded_file($_FILES['file']['tmp_name'], $uploadfile);
        $content = file_get_contents($uploadfile);
    }

    //system('echo Executing NeXTTool to upload main.rxe...', $outputArray);
    //print_r($outputArray);
    system('C://cygwin//nexttool//NeXTTool.exe //COM=usb -stop', $outputArray);
    //print_r($outputArray);
    system('C://cygwin//nexttool//NeXTTool.exe //COM=usb -download=upload/main.rxe', $outputArray);
    //print_r($outputArray);
    system('C://cygwin//nexttool//NeXTTool.exe //COM=usb -listfiles=main.rxe', $outputArray);
    //print_r($outputArray);
    system('C://cygwin//nexttool//NeXTTool.exe //COM=usb -stop', $outputArray);
    //print_r($outputArray);
    system('C://cygwin//nexttool//NeXTTool.exe //COM=usb -run=main.rxe', $outputArray);
    //print_r($outputArray);
    //system('echo NeXTTool is terminated.', $outputArray);
    //print_r($outputArray);
}
?>