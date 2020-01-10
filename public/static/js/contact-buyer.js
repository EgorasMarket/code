$("#submit_msg").on('click',(function(e) {
    e.preventDefault();
    var value = $("#form21").serialize();
    var form_content = value.replace(/%20/g, " ");
    var res = form_content.split("%26%26&");
    var buyer = res[0];
    var msg_content = res[1];
    // var formData = new FormData(this)
    var in_array = {
        buyer,
        msg_content,

    }
    console.log(in_array);


    $.ajax({
        url: "/submit_message/",
        type: "POST",
        data:  in_array,
        
        success: function(response) {
            
            console.log(response);

            var data = JSON.parse(response);

            if(data.error){
                // console.log(data.error.msg);
                // var error = '<div class="alert alert-warning" role="alert">'+ data.error.msg +'</div>';
                // $("#success-msg").html(error).fadeIn("slow");

                // function explode(){
                //     $("#success-msg").hide();
                // }
                // setTimeout(explode, 2000);
                
                

            }else if(data.success){
                // var error = data.success.msg;
                // var error = '<div class="alert alert-success" role="alert"> You have been added to our waitlist, you will be the FIRST to know when the Egoras marketplace goes online.</div>';
                // $("#success-msg").html(error).fadeIn("slow");
                // $("#listbody").slideUp()
                // $("#form")[0].reset();

                // function explode(){
                //     $(".close").trigger("click");
                //     $("#success-msg").hide();
                //     $("#listbody").show();
                // }
                // setTimeout(explode, 2500);
                
                
            }	
        
        },
        error: function(e) {
    
        }          
    });
}))