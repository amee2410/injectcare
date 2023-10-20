<!-- resources/views/emails/contactus.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <style>body {font-family: Helvetica,Arial,sans-serif; }.row{ background:#fff;}.row #col1 {padding:5px;} table tr td{background:#fff;max-width:806px;min-hieght:20px;;overflow:auto;font-size:12px;font-family: Helvetica,Arial,sans-serif; font-size: 14px; color: #333; line-height: 24px;padding-right:10px;}
    </style>
    </head>
    <body style="background:#fff">
    	<div style="background: #f3f3f3;width:806px;hieght:140px;border: 2px solid #f3f3f3;	border-top-left-radius: 5px;border-top-right-radius: 5px;padding:10px;">
    	    <div align="center">
    	        <span style="color:#333;text-align: left; font-family: Helvetica,Arial,sans-serif;font-size:25px;font-weight:bold;">
    	            You Have Received An Career Enquiry
    	            </span>
    	   </div>
    	 </div>
    	 <div style="background:#fff;width:806px;hieght:140px;padding:10px;border: 2px solid #f3f3f3;">
    	     <P style="text-align: left; font-family: Helvetica,Arial,sans-serif; font-size: 14px; font-weight: bold; color: #333; line-height: 24px;">
    	         
    	     </P>
    	     <div class="row">
    	         <div id="col1">
    	             <table><tr><td style="color:#333; font-weight: bold;">Name: {{ $input['name'] }}</td><td>
    	
                        	</td></tr>
                        	<tr><td style="color:#333; font-weight: bold;">Email: {{ $input['email'] }}</td><td>
    	
                        	</td></tr>
                        	<tr><td style="color:#333; font-weight: bold;">Phone Number: {{ $input['phone'] }}</td><td>
    	
                        	</td></tr>
                        	<tr><td style="color:#333; font-weight: bold;">Message: {{ $input['message'] }}</td><td>
    	
                        	</td></tr>
</body>
</html>
