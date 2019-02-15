	<?php
		if (isset($_POST['submit']))
		{
   			$money = $_POST["money"];
   			$DiscountPercent = $_POST["DiscountPercent"];
   			$ListPrice = $_POST["ListPrice"];
   			$DiscountAmount = $ListPrice * $DiscountPercent * 0.1;
   			$tiengiam = $DiscountPercent - $DiscountAmount ;
       	}
 		echo "<table>
 			<thead>
 				<tr>
 					<th>Tính tổng tiền đầuu tư</th>
 				</tr>
 			</thead>
 			<tbody>
 				<tr>
 					<td><span style='color:red'>Product Description: $money</span></td>
 				</tr>
 				<tr>
 					<td><span style='color:red'>Price:$DiscountPercent %</span></td>
 				</tr>
 				<tr>
 					<td><span style='color:red'>Discount Percent: $ListPrice</span></td>
 				</tr>
 				<tr>
 					<td><span style='color:red'>Discount Amount: $DiscountAmount</span></td>
 				</tr>
 				<tr>
 					<td><span style='color:red'>Discount Price: $tiengiam</span></td>
 				</tr>
 			</tbody>
 		</table>"
?>