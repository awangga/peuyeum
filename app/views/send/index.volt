<div class="page-header">
    <h1>Sending sms!</h1>
</div>

<form class="form-horizontal" role="form">
  <div class="form-group">
    <label class="control-label col-sm-2" for="email">Number(s) : </label>
    <div class="col-sm-10">
		{{ text_field('rcpt','class':'form-control','placeholder':'081100000,08880909121,089900000')}}
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Message:</label>
    <div class="col-sm-10"> 
		{{ text_area('msg','class':'form-control','rows':'5') }}
    </div>
  </div>
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
		{{ submit_button('Send','class':'btn btn-default') }}
    </div>
  </div>
</form>


<p>this is response : {{ response }}</p>

<em>This page is located at views/index/index.phtml</em>
