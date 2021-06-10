function ajaxBuy(value) {

    $.post('http://localhost/mongo/buy.php', { food: value }, function(data) {

        //  console.log(data);
        if (data == "unregistered") {

            $("#loginWarning").modal('show');
        } else {



            $('#shopcart').html(data);
        }

    });


}