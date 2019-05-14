
$(document).ready(function(){

	$('#searchproduct').keyup(function(){ //bắt sự kiện keyup khi người dùng gõ từ khóa tim kiếm
		var query = $(this).val(); //lấy gía trị ng dùng gõ
		if(query != '') //kiểm tra khác rỗng thì thực hiện đoạn lệnh bên dưới
		{
			var _token = $('input[name="_token"]').val(); // token để mã hóa dữ liệu
			$.ajax({
				url:"{{ route('search') }}", // đường dẫn khi gửi dữ liệu đi 'search' là tên route mình đặt bạn mở route lên xem là hiểu nó là cái j.
				method:"POST", // phương thức gửi dữ liệu.
				data:{query:query, _token:_token},
				success:function(data){ //dữ liệu nhận về
					$('#productList').fadeIn();  
					$('#productList').html(data); //nhận dữ liệu dạng html và gán vào cặp thẻ có id là productList
				}
			});
		}
	});
	$(document).on('click', 'li', function(){  
		$('#searchproduct').val($(this).text());  
		$('#productList').fadeOut();  
	});  

});