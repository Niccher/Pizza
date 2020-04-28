var price  ;
let total = 0;

function Getpizza( name,size, total ){
  this.name = name;
  this.size = size;
  this.total = total;
}

$(document).ready(function(){
  $("button.proceed").click(function(event){
   let pname = $(".name option:selected").val();
   let psize = $("#size option:selected").val();

   switch(psize){
    case "0":
      price =0;
    break;
    case "large":
       price = 1200;
       console.log(price);
     break;
     case "medium":
       price = 850;
       console.log("The price is "+price);
     break;
     case "small":
       price = 600;
       console.log(price);
     default:
       console.log("error"); 
   }


    if((psize == "0") ){
      console.log("nothing selected");
      $("button.proceed").show();
      $("#information").show();
      $("div.choise").hide();
      alert("Please select pizza size"); 
    }
    else{
      $("button.proceed").hide();
      $("#information").hide();
      $("div.choise").slideDown(1000);
    }

    total = price ;
    console.log(total);
    let checkoutTotal =0;
    checkoutTotal = checkoutTotal + total;

    $("#pizzaname").html($(".name option:selected").val());
    $("#pizzasize").html( $("#size option:selected").val());
    $("#totals").html(total);
    
// Add pizza button
    $("button.addPizza").click(function(){
      let pname = $(".name option:selected").val();
      let psize = $("#size option:selected").val();
      switch(psize){
        case "0":
          price =0;
        break;
        case "large":
           price = 1200;
           console.log(price);
         break;
         case "medium":
           price = 850;
           console.log("The price is "+price);
         break;
         case "small":
           price = 600;
           console.log(price);
         default:
           console.log("error"); 
       }
        total = price 
        console.log(total);

        checkoutTotal = checkoutTotal + total;
        console.log(checkoutTotal);

      var newOrder = new Getpizza(pname, psize,total);

      $("#ordersmade").append('<tr><td id="pizzaname">'+newOrder.name +'</td><td id="pizzasize">' + newOrder.size +'</td><td id="totals">'+newOrder.total+'</td></tr>');
      console.log(newOrder);

    });
    // Checkout button
    $("button#checkout").click(function(){ 
      $("button#checkout").hide();
      $("button.addPizza").hide();
      $("button.deliver").slideDown(1000);
      $("#addedprice").slideDown(1000);
      console.log("Your total bills is sh. "+checkoutTotal);
      $("#pizzatotal").append("Your bill is sh. "+checkoutTotal);
    });

    // home delivery button
    $("button.deliver").click(function(){
      $(".pizzatable").hide();
      $(".choise h2").hide();
      $(".delivery").slideDown(1000);
      $("#addedprice").hide();
      $("button.deliver").hide();
      $("#pizzatotal").hide();
      let deliceryamount= checkoutTotal+150;
      console.log("You will pay sh. "+deliceryamount+" on delivery");
      $("#totalbill").append("Your bill plus delivery fee is: "+deliceryamount);
    });

    // when one clicks place order button
    $("button#final-order").click(function(event){
      event.preventDefault();
      $("#pizzatotal").hide();
      $(".delivery").hide();
      $("button#final-order").hide();
      let deliceryamount= checkoutTotal+150;
      console.log("Final Bill is: "+deliceryamount);
      let person = $("input#name").val();
      let phone = $("input#phone").val();
      let location = $("input#location").val();

      if ($("input#name").val() && $("input#phone").val() && $("input#location").val()!=""){
  
        $("#finallmessage").append(person+", We have recieved your order and it will be delivered to you at "+location+ ". Prepare sh. "+deliceryamount);
        $("#totalbill").hide();
        $("#finallmessage").slideDown(1200);

          SendtoPhp("qq","ww","ee");
        
      }
      else {
        alert("Please fill in the details for delivery!");
        $(".delivery").show();
        $("button#final-order").show();
      }
    });

   event.preventDefault();
  });
});



function SendtoPhp( name,area, total ){
  console.log("Made men if "); 
}