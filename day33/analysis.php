<?php
/*
@Describe:Interprets xml
@Date:2014/10/25
*/
$xml = "<xml>
 <ToUserName><![CDATA[toUser]]></ToUserName>
 <FromUserName><![CDATA[fromUser]]></FromUserName> 
 <CreateTime>1348831860</CreateTime>
 <MsgType><![CDATA[text]]></MsgType>
 <Content><![CDATA[this is a test]]></Content>
 <MsgId>1234567890123456</MsgId>
 </xml>"

 $object = simplexml_load_string($xml, "Simplexml_load_string", LIBXML_NOCDATA);
 echo "<pre>";
 print_r($object);
 echo "</pre>";


?>