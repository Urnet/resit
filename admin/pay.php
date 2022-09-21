<?php require_once "include_files/header.php";?>


<div class="page-content">
    	<div class="row">


<?php require_once "include_files/sidebar.php";?>







<div class="col-md-10">
						<div class="content-box-large">
		  				<div class="panel-heading">
							<div class="panel-title">
                            <h1><B>SELECT NUMBER OF COURSE TO REGISTER</B></h1>
                            </div>
							
							<div class="panel-options">
								<!-- <a href="#" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
								<a href="#" data-rel="reload"><i class="glyphicon glyphicon-cog"></i></a> -->
							</div>
						</div>
		  				<div class="panel-body">
		  					<div id="rootwizard">
								<div class="navbar">
								  <div class="navbar-inner">
								    <div class="container">
								<ul class="nav nav-pills">
								  	<li class="active"><a href="#tab1" data-toggle="tab">ONE</a></li>
									<li><a href="#tab2" data-toggle="tab">TWO</a></li>
									<li><a href="#tab3" data-toggle="tab">THREE</a></li>
								</ul>
								 </div>
								  </div>
								</div>
	<div class="tab-content">


<div class="tab-pane active" id="tab1">
  <form id="paymentForm">
 <div class="container">
    <table style="width: 100%;">
        <tr> <td>       <label for="email">Email Address</label>
    <input type="email" style="width: 30%;" id="email-address" class="form-control" value="student@mail.com" required  hidden/>
   </td>   <input type="tel" id="amount" value="1000" required hidden/>
   </tr></table><br/> 
   <p>make sure to enter your mail above to get payment reciept of<b> NGN 1000</b></p>
 </div> 
  <div class="form-submit">
  <button type="submit" class="btn btn-primary" onclick="payWithPaystack()"> Pay </button>
  </div>
 </form>
</div>


<!-- tab 2 -->


<div class="tab-pane" id="tab2">
								      
 <form id="paymentFor">
    <div class="container">
    <table style="width: 100%;">
        <tr> <td>  
     <label for="email">Email Address</label>
    <input type="email" style="width: 30%;" id="email-address" class="form-control" value="student@mail.com" required  hidden/>
   </td>   <input type="tel" id="amount" value="2000" required hidden/>
    </tr></table><br/> 
    <p>make sure to enter your mail above to get payment reciept of <b>NGN 2000</b></p>

</div> 
  
  <div class="form-submit">
    <button type="submit" class="btn btn-primary" onclick="payWithPaystac()"> Pay </button>
  </div>
</form>
									    </div>

<div class="tab-pane" id="tab3">
      <form id="paymentFo">
 <div class="container">
    <table style="width: 100%;">
        <tr> <td>  
     <label for="email">Email Address</label>
    <input type="email" style="width: 30%;" id="email-address" class="form-control" value="student@mail.com" required  hidden/>
   </td>  <input type="tel" id="amount" value="2000" required hidden/>
  </tr></table><br/> 
  <p>make sure to enter your mail above to get payment reciept of <b>NGN 3000</b></p>

</div> 
  <div class="form-submit">
    <button type="submit" class="btn btn-primary" onclick="payWithPaysta()"> Pay </button>
  </div>
</form>
								    </div>

								</div>	
							</div>
		  				</div>
		  			</div>

				


 


<!-- </div> -->

</div>

 

</div>
</div>


 
    <!-- /#wrapper -->

  
    
<script src="https://js.paystack.co/v1/inline.js"></script>



<script>
    const paymentForm = document.getElementById('paymentForm');
    const paymentFor = document.getElementById('paymentFor');
    const paymentFo = document.getElementById('paymentFo');
    paymentForm.addEventListener("submit", payWithPaystack, false);
    paymentFor.addEventListener("submit", payWithPaystac, false);
    paymentFo.addEventListener("submit", payWithPaysta, false);
function payWithPaystack(e) {
  e.preventDefault();

  let handler = PaystackPop.setup({
    key: 'pk_test_62dd594956fce60a3a9b4ec3e172d93b72b92c0c', // Replace with your public key
    email: document.getElementById("email-address").value,
    // amount: document.getElementById("amount").value * 100,
    amount: 1000 * 100,
    // currency: "USD",
    // ref: 'Ur'+Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
    ref: 'Ur'+Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
    // label: "Optional string that replaces customer email"
    onClose: function(){
        window.location = "http://localhost/www/re_sit/admin/pay.php";
      alert('Transaction Cancelled.');
      
    },
    callback: function(response){
      let message = 'Payment complete! Reference: ' + response.reference;
      alert(message);
      window.location = "http://localhost/www/re_sit/admin//verify_transaction.php?reference=" + response.reference;

    }
  });

  handler.openIframe();
}



function payWithPaystac(e) {
  e.preventDefault();

  let handler = PaystackPop.setup({
    key: 'pk_test_62dd594956fce60a3a9b4ec3e172d93b72b92c0c', // Replace with your public key
    email: document.getElementById("email-address").value,
    // amount: document.getElementById("amount").value * 100,
    amount: 2000 * 100,
    // currency: "USD",
    ref: 'Ur'+Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
    // label: "Optional string that replaces customer email"
    onClose: function(){
        window.location = "http://localhost/www/re_sit/admin/pay.php";
      alert('Transaction Cancelled.');
      
    },
    callback: function(response){
      let message = 'Payment complete! Reference: ' + response.reference;
      alert(message);
      window.location = "http://localhost/www/re_sit/admin//verify_transaction.php?reference=" + response.reference;

    }
  });

  handler.openIframe();
}


function payWithPaysta(e) {
  e.preventDefault();

  let handler = PaystackPop.setup({
    key: 'pk_test_62dd594956fce60a3a9b4ec3e172d93b72b92c0c', // Replace with your public key
    email: document.getElementById("email-address").value,
    amount: 3000 * 100,
    // currency: "USD",
    ref: 'Ur'+Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
    // label: "Optional string that replaces customer email"
    onClose: function(){
        window.location = "http://localhost/www/re_sit/admin/pay.php";
      alert('Transaction Cancelled.');
      
    },
    callback: function(response){
      let message = 'Payment complete! Reference: ' + response.reference;
      alert(message);
      window.location = "http://localhost/www/re_sit/admin//verify_transaction.php?reference=" + response.reference;

    }
  });

  handler.openIframe();
}

</script>










 
    <?php include_once "include_files/footer.php";?>
