$(document).ready(function () {
 var cus = getCookie('custodian');

    array_id = {
        "cus_id" : cus
    }

  $.ajax({
    url: "/custodian_products/",
    type: "POST",
      data:  array_id,



    success: function (response) {


      var rs = JSON.parse(response);

      //   let walletID = getCookie("walletId");
      console.log(rs.response.data);
      $.each(rs.response.data, function (k, v) {

        var rowbody = '<div class="col-md-2 col-sm-4"><div class="more-items-img"><img class="mr-2 img-fluid" src="/public/static/phones/'+ v.img +'" width="" alt="Generic placeholder image"><span class="font-weight-bold text-warning">-75%</span></div><div class="custodian-price pb-2"><p class="py-0 p-name">' + v.brand +' '+ v.model +' '+ v.screen_size + '</p><p class="font-weight-bold p-0">&#8358;' + v.price + '</p><p class="clash-price p-0">&#8358; 530,000</p></div></div>';

        console.log(v.brand);

        $("#custodianproducts").append(rowbody);
        // var date = v.date_created;
        // var neet = date.split(" ");
        // var main = neet[0];

        // if (walletID.toLowerCase() == v.lockBy.toLowerCase()) {

        // }



      });

      if (response.error) {
        //   console.log(data.error.msg);



      } else if (response.success) {
        console.log(data.success.msg);


      }

    },
    error: function (e) {
      // console.log(response);

    }
  });
});