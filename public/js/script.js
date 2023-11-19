$(document).ready(function () {
    $("#submitFormProduto").click(function () {     
        var formData = $("#produtoForm").serialize();
        $.ajax({
            type: "POST",
            url: "/produtos", 
            data: formData,
            success: function (response) {
                console.log(response.status);
                if(response.status==1){
                $("#mensagem").html('<div class="alert-success">' + response.message + '</div>');
                }else{
                $("#mensagem").html('<div class="alert-danger">' + response.message + '</div>');
                }
            }
        });
    });
});

