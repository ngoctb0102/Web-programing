<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Search</title>
    <script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
    <script>
        $(document).ready(function(){
            $("#search-box").keyup(function(){
                $.ajax({
                    type: "POST",
                    url: "product.php",
                    data:'keyword='+$(this).val(),
                    success: function(data){
                        $("suggesstion-box").show();
                        $("#suggesstion-box").html(data);
                    }                      
                });
            });
        });

        function selectProduct(val){
            $("#search-box").val(val);
            $("#suggesstion-box").hide();
        }
    </script>
</head>
<body>
    <div class="frmSearch">
        <input type="text" id="search-box" placeholder="Product Name" />
        <div id="suggesstion-box"></div>
    </div>
</body>
</html>