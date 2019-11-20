<?
require_once('crest.php');
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12 col-xs-12 col-md-12 col-lg-12">
            <div class="well well-lg">Тестовый запуск приложения!</div>
			<script src="//api.bitrix24.com/api/v1/"></script>
			<script>
				// GET PRODUCT LIST EXAMPLE CALL FINCTION
				// let details = [];
				//
				// BX24.callMethod(
				// 	"crm.product.list",
				// 	{
				// 		order: { "NAME": "ASC" },
				// 		select: [ "ID", "NAME", "CURRENCY_ID", "PRICE" ]
				// 	},
				// 	function(result)
				// 	{
				// 		if(result.error())
				// 			console.error(result.error());
				// 		else {
				// 			console.dir(result.data());
				// 			details = result;
				// 		}
				// 	}
				// );


			</script>
        </div>
    </div>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>
