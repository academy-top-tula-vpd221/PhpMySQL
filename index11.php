<?php

interface IMessage
{
    function send();
}

interface ITextMessage extends IMessage
{

}

trait PrintHtml
{
    public function PrintParagraph($text)
    {
        echo "<p>$text</p>";
    }

    public function PrintHeader($text)
    {
        echo "<h1>$text</h1>";
    }
}


class EmailMessage implements IMessage
{
    use PrintHtml;

    public $text;
    function send()
    {
        return "email message!";
    }
}

class SmsMessage implements IMessage
{
    public $text;
    function send()
    {
        return "Sms message!";
    }
}

class Document
{
    public $text;
}



$email = new EmailMessage();
echo $email->send() . "<br>";
$email->text = "Hello world";
$email->PrintHeader($email->text);
$email->PrintParagraph("Lorem ipsum");

$email2 = clone $email;

interface IMovable
{
    function move();
}

interface IStandable
{
    function stand();
}

class Person implements IMovable, IStandable
{
    function move()
    {
        echo "Move!<br>";
    }

    function stand()
    {
        echo "Stand!<br>";
    }
}

$person = new Person();
$person->move();
$person->stand();