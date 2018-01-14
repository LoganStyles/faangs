 <?php ob_start();
 session_start();
 require_once("incl/payheader.php");
 ?>
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script src="https://js.paystack.co/v1/paystack.js"></script>
<script src="js/main.js"></script>
<style type="text/css">
    input{
        display:block;
    }
</style>


<!--try something--->
<TABLE CLASS="table">
						<thead><th>Transaction detail</th></thead>
						<Tr class="success">
							
							<td>TOTAL CREDIT</td>
							<td><?php 
								
								echo $_SESSION['credit'];
								
								
							?></td>
						</Tr>
						<Tr class="info">
							<td>COST</td>
							<td><?php  
												echo $_SESSION['cost'];
											
							
							?></td>
						</Tr>
						
					</TABLE>

<!---something--->

<form id="checkout-form">
    <div id="checkout-error"></div>
    <?php $amo=$_SESSION['cost'];?>
    <input type="email" id="email" placeholder="email" value="<?php echo $_SESSION['email']; ?>"required="required">
    <input type="text" id="amount" placeholder="amount" value="<?php echo $amo;?> "required="required">
    <button type="submit" data-paystack="submit">Checkout</button>
</form>

<div id="processing" style="display:none">
    Please wait...
</div>

<div id="failed" style="display:none">
    <div id="failed-message"></div>
</div>

<form id="card-form" style="display:none">
    <div id="error"><div id="error-message"></div><div id="error-errors"></div></div>
    <input type="text" id="number" data-paystack="number" placeholder="number">
    <input type="text" id="cvv" data-paystack="cvv" placeholder="cvv">
    <input type="text" id="expiryMonth" data-paystack="expiryMonth" placeholder="expiryMonth">
    <input type="text" id="expiryYear" data-paystack="expiryYear" placeholder="expiryYear">
    <button type="submit" data-paystack="submit">Pay</button>
</form>

<form id="pin-form" style="display:none">
    <div>To confirm you're the owner of this card, please enter your card pin</div>
    <input type="password" id="pin" data-paystack="pin" placeholder="pin">
    <button type="submit" data-paystack="submit">Continue</button>
</form>

<form id="otp-form" style="display:none">
    <div id="otp-message"></div>
    <input type="text" id="otp" data-paystack="otp" placeholder="otp">
    <button type="submit" data-paystack="submit">Continue</button>
</form>

<form id="3ds-form" style="display:none">
    <div id="3ds-message"></div>
    <button type="submit" data-paystack="submit">Continue</button>
</form>

<form id="phone-form" style="display:none">
    <div id="phone-message"></div>
    <input type="text" id="phone" data-paystack="phone" placeholder="phone">
    <button type="submit" data-paystack="submit">Continue</button>
</form>

<div id="timeout" style="display:none">
    <div id="timeout-message"></div>
</div>

<div id="success" style="display:none">
    <div id="success-message"></div>
    <div id="success-reference"></div>
    <div id="success-gateway-response"></div>
    <div id="verify-error"></div>
</div>

<script src="js/app.js"></script>
<?php ob_end_flush();?>