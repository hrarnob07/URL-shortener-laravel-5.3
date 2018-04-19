<!DOCTYPE html>
<html>
<head>
	<title>URL Shortner.</title>
	<style type="text/css">
		.containt{text-align: center;
		  margin-right:auto;
		 margin-left: auto;
		 margin-top: auto;
		 }

         h1{color:green;}
	</style>
</head>

<body>
    <div class="containt">
        <h1>Shorten a URL... </h1>
           
           <form action="{{action('UrlstoreController@store')}}" method="post" >
             {{csrf_field()}}
          	 
            <input type="url" name="url" placeholder="Enter a URL ..">

              <input type="submit" value="submit">

           </form>

    </div>

</body>
</html>