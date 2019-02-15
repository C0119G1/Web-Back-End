	<?php
		if (isset($_POST['submit']))
		{
   			$giatrihientai = $_POST["giatrihientai"];
   			$laisuat = $_POST["laisuat"];
   			$sonam = $_POST["sonam"];
   			$giatrituonglai = $giatrihientai + ($giatrihientai * $laisuat * 0.01);
       	}
 		echo "<table>
 			<thead>
 				<tr>
 					<th>Lãi suất đầu tư</th>
 				</tr>
 			</thead>
 			<tbody>
 				<tr>
 					<td><span style='color:blue'>Số tiền đầu tư: $$giatrihientai</span></td>
 				</tr>
 				<tr>
 					<td><span style='color:blue'>Lãi suất hằng năm: $laisuat %</span></td>
 				</tr>
 				<tr>
 					<td><span style='color:blue'>Số năm: $sonam</span></td>
 				</tr>
 				<tr>
 					<td><span style='color:blue'>Giá trị tương lai: $$giatrituonglai</span></td>
 				</tr>
 			</tbody>
 		</table>"
?>