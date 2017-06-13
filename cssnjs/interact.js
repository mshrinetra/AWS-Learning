$(function(){
    $(".list-group-item").on("click",function(e){
        if($(this).attr("href") == "#")
        {
            alert("This action cannot be performed\n" + $(this).find("span").text());
            e.preventDefault();
        }
    });
});