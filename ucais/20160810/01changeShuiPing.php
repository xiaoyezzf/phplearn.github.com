<?php
	header("Content-Type:text/html;charset=utf-8");

	
	echo  '时间限制: 1 Sec  内存限制: 128 MB
题目描述
有这样一道智力题：“某商店规定：三个空汽水瓶可以换一瓶汽水。小张手上有十个空汽水瓶，她最多可以换多少瓶汽水喝？”答案是5瓶，方法如下：先用9个空瓶子换3瓶汽水，喝掉3瓶满的，喝完以后4个空瓶子，用3个再换一瓶，喝掉这瓶满的，这时候剩2个空瓶子。然后你让老板先借给你一瓶汽水，喝掉这瓶满的，喝完以后用3个空瓶子换一瓶满的还给老板。如果小张手上有n个空汽水瓶，最多可以换多少瓶汽水喝？

 

输入
输入文件最多包含10组测试数据，每个数据占一行，仅包含一个正整数n（1<=n<=100），表示小张手上的空汽水瓶数。n=0表示输入结束，你的程序不应当处理这一行。

 

输出
对于每组测试数据，输出一行，表示最多可以喝的汽水瓶数。如果一瓶也喝不到，输出0。

提示
输入
输出
样例输入

3
10
81
0
样例输出

1
5
40
来源
湖南省第六届大学生计算机程序设计竞赛<br>';

echo '<hr>';



function changeNumber($number)
{
	$a = 0;
	$b = 0;
	if ($number == 1)
		return '小张不能换汽水<br>';
	elseif ($number == 2)
		return '小张能换1瓶汽水<br>';
	elseif ($number ==3)
		return '小张能换1瓶汽水<br>';
	else
	{
		$a = intval($number / 3);
		$b = $number % 3;
		$c = $a + $b;
		$d = $a;
		for ($c ; $c > 3 ;)
		{
			$a = intval($c / 3);
			$b = $c % 3;
			$c = $a + $b;
			$d += $a;
		}		
		if ($c == 2);
			$d +=1;
	}
	return $d;
}

echo changeNumber(81);

?>