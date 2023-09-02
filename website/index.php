<!-- APIs using Ajax -->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>APIs using Ajax</title>
</head>
<body>
	<!-- <button onclick="get_data()" type = "button" id="load">Load API Data</button><br> -->
	<button onclick="get_data2()" type = "button" id="load">Load API Data</button><br>
	<div class="output">
		
	</div>
</body>
	<script>
		/*
		function get_data() 
		{
			const ajax = new XMLHttpRequest();
			//const url = 'https://jsonplaceholder.typicode.com/todos/1';
			const url = 'https://jsonplaceholder.typicode.com/posts/12/comments';
			var output = document.querySelector(".output");
			output.innerHTML = 'Loading ... ....';

			ajax.addEventListener('readystatechange', function(e) {
				if(ajax.readyState == 4)
				{
					if(ajax.status == 200) {
						output.innerHTML = "<pre>"+ajax.responseText+"</pre>";
					}
				}
			});
			ajax.open('get', url, true);
			ajax.send();
		} */

		// We can use fetch() to perform the above task

		function get_data2()
		{
			var output = document.querySelector('.output');
			output.innerHTML = "Loading...";

			const url = 'https://jsonplaceholder.typicode.com/posts/1/comments';
			fetch(url).then(function(response) {
				//console.log(response.text());
				return response.text();
			}).then(function(data){
				output.innerHTML = "<pre>"+data+"</pre>";
			}).catch(function(err){
				output.innerHTML = err;
			});
			//console.log(output);
		}

	</script>
</html>