<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Тестовое задание №2");
?><div class="alert alert-success">
	 Предложите, пожалуйста, вариант сортировки служб доставки в оформлении заказа по возрастанию цены. Предполагается, что службы доставки будут добавлены еще менеджером в будущем.
</div>
<div class="alert alert-warning">
	 Кодовое слово вам встретится в процессе выполнения задания. Можно не реализовывать сортировку, если у вас мало времени, напишите вкратце словами как вы это планируете делать.
</div>
 <br>
 <br>
 Ответ.<br>
 Сортировку бы отдал на сторону js непосредственно перед выводом. В компоненте заказа sale.order.ajax в файле шаблона order_ajax.js в методе&nbsp;showDeliveryItemsPage (не уверен точно, но вроде там идет цикл по созданию карточки доставки. Сказал бы точнее если был бы доступ к FTP что б можно было проверить наверняка). собрал бы массив из из идентификаторов доставки и значений их цен. далее использовал callBack функцию к функции array.sort myarray=[25, 8, 7, 41]<br>
 myarray.sort(function(a,b){ <br>
 return a — b<br>
 }).Далее в цикле уже вывод на страницу. Это мои мысли, как фронта.<br>
 С точки зрения бэка можно использовать событие&nbsp;
<table>
<tbody>
<tr>
	<td>
 <code>onSaleDeliveryServiceCalculate</code>
	</td>
</tr>
</tbody>
</table>
 &nbsp;например. С этим событием не работал, но по логике&nbsp;<br>
 получить все доставки, отсортировать массив по цене и с этим сооветствием изменить у всех параметр SORT.&nbsp;Кодовое слово нашел в Init.php&nbsp;//codeWord 2 Narnia
<hr>
 <br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>