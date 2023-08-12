<!DOCTYPE html>
<html>


<head>
<title>Price Range of Phone </title>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="http://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</head>
<body>

  <table>
    <tr>
      <td>
   <a href="http://localhost/project_411/"><button name="simple_button" type="button" style="color: #9E4244;">Home</button>
   </tr>
   </td>
   </table>

<div class="container">
    <div class="row">
    <br />
    <h2 align="center">Phone Collections</h2>
    <br />
        <div class="col-md-3">
            <div class="list-group">
                <h3>Price Range</h3>
                <input type="hidden" id="hidden_minimum_price" value="500" />
                <input type="hidden" id="hidden_maximum_price" value="200000" />
                <p id="price_show">500- 200000</p>
                <div id="price_range"></div>
            </div>
        </div>
        <div class="col-md-9">
            <br />
           <div class="row filter_data">
        </div>
    </div>
    </div>
</div>
<style>
#loading{text-align:center; background: url('images/loading.gif') no-repeat center; height: 150px;}
</style>
<script>
$(document).ready(function(){
    filter_data();
    function filter_data()
    {
        $('.filter_data').html('<div id="loading" style="" ></div>');
        var action = 'fetch_phone.php';
        var minimum_price = $('#hidden_minimum_price').val();
        var maximum_price = $('#hidden_maximum_price').val();
        $.ajax({
            url:"fetch_phone.php",
            method:"POST",
            data:{action:action, minimum_price:minimum_price, maximum_price:maximum_price},
            success:function(data){
                $('.filter_data').html(data);
            }
        });
    }
    $('#price_range').slider({
        range:true,
        min:500,
        max:200000,
        values:[500, 200000],
        step:50,
        stop:function(event, ui)
        {
            $('#price_show').html(ui.values[0] + ' - ' + ui.values[1]);
            $('#hidden_minimum_price').val(ui.values[0]);
            $('#hidden_maximum_price').val(ui.values[1]);
            filter_data();
        }
    });
});
</script>
</body>
<style>
body
{
    margin: 0;
    padding: 0;
    background-color:#D5B895;
    font-family: 'Arial';
    text-align: center;
}
h2{
  color: #9E4244;
}
h3{
  color: grey;
}
</style>

</html>
