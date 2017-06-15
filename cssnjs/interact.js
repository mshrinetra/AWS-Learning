$(function(){
    $(".list-group-item").on("click",function(e){
        if($(this).attr("href") == "#")
        {
            alert("This action cannot be performed\n" + $(this).find("span").text());
            e.preventDefault();
        }
    });

    $(".input-text").css("width","");
    $(".input-text").css("width","100%");
    $("#reTryBtn").on("click",function(){
        $(".input-text").removeAttr("disabled");
        $("#clearBtn").removeAttr("disabled");
        $(".btn-todo").removeAttr("disabled");
        $("#reTryBtn").attr("disabled","true");
    });

     $("#clearBtn").on("click",function(){
        $(".input-text").val("");
     });

    $(".btn-todo").on("click",function(){
        $("#todo").val($(this).attr("name"));
        $.ajax({
            type: "POST",
            url: $("#input-form").attr("action"),
            data: $("#input-form").serializeArray(),
            success: function (data) {
                $("#reTryBtn").removeAttr("disabled");
                $(".input-text").attr("disabled","true");
                $("#clearBtn").attr("disabled","true");
                $(".btn-todo").attr("disabled","true");
                if(data){
                    $("#action-result").html(data);
                }else{
                    alert("NO DATA!! EMPTY RESPONSE!!!");
                }
            },
            error:function(error){
                var r = jQuery.parseJSON(error.responseText);
                alert("ERROR!!!\nMessage: " + r.Message + "\nStackTrace: " + r.StackTrace + "\nExceptionType: " + r.ExceptionType);
            }
        });
            
    });

    $("#input-form").submit(function(){
        return false;
    });
});