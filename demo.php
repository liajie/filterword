<?php 

require('TrieTree.php');

	  //干扰因子集合
    $disturbList = ['&', '*','#'];

    //敏感词汇集合
    $data = ['狗操的', '狗日的'];
    
    //实例化类
    $wordObj = new TrieTree($disturbList);

    //添加敏感词汇
    $wordObj->addWords($data);

    // //要检测的文字
    $txt = "你是狗日的";

    // //查找对应敏感词
    $words = $wordObj->search($txt);
    // print_r($words);
    
    //替换过后的文字显示
    $txt = $wordObj->filter($txt);
    echo $txt, "\n";


 ?>