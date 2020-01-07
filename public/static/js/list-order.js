$("#form").on('submit',(function(e) {
    e.preventDefault();
    var formData = new FormData(this)
    // var value = $("#form").serialize();
    // console.log(formData);
    $.ajax({
        url: "/submit_list/",
        type: "POST",
        data:  formData,
        contentType: false,
            cache: false,
        processData:false,
        
        success: function(response) {
            
            console.log(response);

            var data = JSON.parse(response);

            if(data.error){
                var error = data.error.msg;
                
                

            }else if(data.success){
                var error = data.success.msg;
                $("#form")[0].reset();
                
                
            }	
        
        },
        error: function(e) {
    
        }          
    });
}))