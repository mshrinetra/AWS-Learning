$(function(){
    $(".list-group-item").on("click",function(e){
        if($(this).attr("href") == "#")
        {
            alert("This action cannot be performed\n" + $(this).find("span").text());
            e.preventDefault();
        }
    });

    $("#reTryBtn").on("click",function(){
        $("#input-data").removeAttr("disabled");
        $("#clearBtn").removeAttr("disabled");
        $("#submit").removeAttr("disabled");
        $("#reTryBtn").attr("disabled","true");
    });

     $("#clearBtn").on("click",function(){
        $("#input-data").val("");
     });

    $("#submit").on("click",function(){
        $.ajax({
            type: "POST",
            url: $("#input-form").attr("action"),
            data: $("#input-form").serialize(),
            success: function (data) {
                $("#reTryBtn").removeAttr("disabled");
                $("#input-data").attr("disabled","true");
                $("#clearBtn").attr("disabled","true");
                $("#submit").attr("disabled","true");
                if(data){
                    $("#action-result").html(data);
                }else{
                    alert("NO DATA!! EMPTY RESPONSE!!!");
                }
                
                
            },
            error:function (data){
                alert("ERRR !!!\nSERVER RESPOSE:\ndata");
            }
        });
            
    });

    $("#input-form").submit(function(){
        return false;
    });
});