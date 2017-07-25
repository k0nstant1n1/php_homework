<?php
/* Написать функцию, которая в качестве аргумента принимает строку,
 и форматирует ее таким образом, что каждое новое предложение начиняется с большой буквы.
 */

function bigLetter($str){
   $arr = explode('.', $str);

   foreach($arr as &$sentence){
       $sentence = trim($sentence);
   }

   function mb_ucfirst($strin, $encoding){
       $strinlen = mb_strlen($strin, $encoding);
       $firstchar = mb_substr($strin,0,1, $encoding);
       $then = mb_substr($strin, 1, $strinlen - 1, $encoding);
       return mb_strtoupper($firstchar, $encoding) . $then;
   }

   foreach($arr as &$item){
       $item = mb_ucfirst($item, "UTF-8");
   }

   return implode('. ',$arr);

}

echo bigLetter("а васька слушает да ест. hello world. а вы друзья как ни садитесь, все в музыканты не годитесь.
                    а король-то — голый. а ларчик просто открывался.а там хоть трава не расти.");