<?php

// 初始化随机数生成器种子
$seed = time();
// 获取随机数
$num = rand(1, 6);
// 拼接图片地址
$picpach = "https://cdn.jsdelivr.net/gh/IyaoiHarumi/Ichigo_cover/random_cover/".$num.".jpg";
// 重定位到图片
die(header("Location: $picpach"));

?>
