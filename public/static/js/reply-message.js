$("#reply-message").on('submit',(function(e) {
    e.preventDefault();
    // App.showModal();
    var formData = new FormData(this)
    // alert('ok');

    $.ajax({
        url: "/submit_message/reply",
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
                // App.alerterWarning(error); 

                // function explode(){
                //     $("#success-msg").hide();
                // }
                // setTimeout(explode, 2000);
                
                

            }else if(data.success){
                var error = data.success.msg;
                // App.alerterSuccesss(error);
                var bla = $('#message1').val();
                alert(bla);
                // $("#reply-message")[0].reset();

                function explode(){
                    $("#txtModalClose").trigger("click");
                    $(".close").trigger("click");
                }
                setTimeout(explode, 3000);
                
                
            }	
        
        },
        error: function(e) {
    
        }          
    });
}))