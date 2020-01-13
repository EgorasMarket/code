$(document).ready(function (){
    
    $.ajax({
        url: "/home_models/samsung",
        type: "POST",
        // data:  array_id,
        
        
        success: function(data) {
            var rs = JSON.parse(data);
            // console.log(rs.response.data);

            $.each(JSON.parse(rs.response.data), function(k, v) {
                var model = v.model;
                var clnmodel = model.replace(/ /g, "-");
                

                listItems = '<div class="col-md-3 reset-padding"><a href="/unique_model/' + clnmodel + '"><div class="product-item" style="height:100%;"><h4>Samsung ' + v.model + '</h4><img class="zoom-in" src="/public/static/modelsimg/' + v.img + '"></div></a></div>';
                $("#samsungmodels").append(listItems);
            });
            // $("#iphonemodels").html(listItems);

            if(data.error){
                var error = data.error.msg;
            }else if(data.success){
                var error = data.success.msg;
            }	
        
        },
        error: function(e) {
    
        }          
    });
});