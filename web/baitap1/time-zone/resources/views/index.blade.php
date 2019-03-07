
<div class="main-content">
	<h1>Ứng dụng xem giờ hiện tại của các thành phố trên thế giới</h1>
	<label for="select-city"></label>
	<select id="select-city">
		<option> Chọn thành phố</option>
		<option value ="America-Chihuahua">Chihuahua,Mexico</option>
		<option value="America-Costa_Rica"> Costa Rica</option>
		<option value="America-Havana">La Habana, Cuba</option>
		<option value="Asia-Hong_Kong">Hồng Kong</option>
		<option value="vietnam/hanoi">Hà nội, Việt Nam</option>
	</select>
	</div>

	<script type="text/javascript">
	document.getElementById("select-city").onchange = function(){
		ChooseCity()
	};
	function ChooseCity(){
		var time_zone=document.getElementById("select-city");
		window.location.href = time_zone.value;
	};
</script>