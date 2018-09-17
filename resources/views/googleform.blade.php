<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="css/word.css">
<link rel="stylesheet" href="css/fullpage.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>What are you Expecting?? </title>
</head>
<body>
        
    	<div class="section stage-9" id="section3">
                <img src="form-bg.png">
                <p> <a href="{{ route('/')}}"> Back to Home </a></p>
				<div class="container" style="max-height: 1400px;">
					<div class="message">
						<div class="slideTitle">
							Hey <span id="userName"></span><br />
							Thanks for showing interest, an account manager will be in touch shortly.
						</div>
                    </div>
                    
					<form id="test-form" class="form" style="padding-bottom: 80px;">
                        <div class="slideTitle">Fill out the form below, and an account manager will be in touch shortly.</div>
						<div class="input">
							<div class="label">Brand  Name </div>
							<input type="text" id="iBrand" name="brand_name" tabindex="1">
						</div>
						<div class="input">
							<div class="label">Campaign Name</div>
							<input type="text" id="iCampaign" name="campaign_name" tabindex="2">
						</div>

						<div class="input">
							<div class="label">Campaign Objective</div>
							<input type="text" id="iObjective" name="campaign_objective" tabindex="3">
						</div>

						<div class="input">
							<div class="label">Target Markets</div>
							<input type="text" id="iMarkets" name="target_markets" tabindex="4">
						</div>

						<div class="input">
							<div class="label">Target Audience</div>
							<input type="text" id="iAudience" name="target_audience" tabindex="5">
						</div>

						<div class="input">
							<div class="label">Content Type</div>
							<input type="text" id="iContent" name="content_type" tabindex="6">
						</div>
						<div class="input">
							<div class="label">Budget</div>
							<input type="text" id="iBudget" name="budget" tabindex="7">
						</div>

						<div class="input">
							<div class="label">Duration</div>
							<input type="text" id="iDuration" name="duration" tabindex="8">
						</div>

						<div class="input inputAlt">
							<div class="label">Platforms</div>
							<ul>
								<li><input type="checkbox" id="iFacebook" name="platforms" value="Facebook" tabindex="9">Facebook</li>
								<li><input type="checkbox" id="iInstagram" name="platforms" value="Instagram" tabindex="10">Instagram</li>
								<li><input type="checkbox" id="iTwitter" name="platforms" value="Twitter" tabindex="11">Twitter</li>
								<li><input type="checkbox" id="iSnapchat" name="platforms" value="Snapchat" tabindex="12">Snapchat</li>
								<li><input type="checkbox" id="iYoutube" name="platforms" value="Youtube" tabindex="13">Youtube</li>
							</ul>
						</div>

						<div class="input inputAlt">
							<div class="label">Brand Creative Assets</div>
							<ul>
								<li><input type="radio" id="iYes" name="brand_assets" checked="checked" value="Yes">Yes</li>
								<li><input type="radio" id="iNo" name="brand_assets" value="No">No</li>
							</ul>
						</div>

						<div class="input inputAlt">
							<div class="label">Tentative Launch</div>
							<input type="date" id="iTentative" name="launch_date" tabindex="14">
						</div>
						

						<div class="input">
							<div class="label">Name</div>
							<input type="email" id="iName" name="name" tabindex="15">
						</div>


						<div class="input">
							<div class="label">Email address</div>
							<input type="email" id="iEmail" name="email" tabindex="16">
						</div>

						<div class="input">
							<div class="label">Phone Number</div>
							<input type="tel" id="iNumber" name="phone" tabindex="17">
						</div>

						

                    <button  id="submit-form"  class="btn submit" tabindex="18" onclick="location.href = 'thanks';" >Submit</button>

                    </form>
					
					
				</div>
			</div>
	

    </div> <!-- end main div -->
    

    <script>
                  

            $.fn.serializeObject = function()
            {
            var o = {};
            var a = this.serializeArray();
            $.each(a, function() {
            if (o[this.name]) {
            if (!o[this.name].push) {
            o[this.name] = [o[this.name]];
            }
            o[this.name].push(this.value || '');
            } else {
            o[this.name] = this.value || '';
            }
            });
            return o;
            };

        var $form = $('form#test-form'),
          url = 'https://script.google.com/macros/s/AKfycbyMm4aYs3-g-BWM85yFsSt7rcGbAz378I6fXnFWissN3vYpN_k/exec'

                $('#submit-form').on('click', function(e) {
                e.preventDefault();
               // console.log(e);
                console.log('form submitted');
                var jqxhr = $.ajax({
                    url: url,
                    type: "GET",
                    dataType: "json",
                    data: $form.serializeObject()
                })

                })
                            
          
          </script>


    
</body>
</html>