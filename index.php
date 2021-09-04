<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Try It Yourself</title>

    <link rel="stylesheet" href="./style.css" />
    <script src="./script.js"></script>
    <!-- Ref:  -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	
	<script type="text/javascript" src="jquery.colorfy.js"></script>
    <script type="text/javascript" src="jquery.colorfy.markdown.js"></script>

	<?php
		$getCode = empty($_POST["codeArea"]) ? null : $_POST["codeArea"]; 

		$rwFile = fopen("runScript.html", "w") or die("Unable to open file"); 

		fwrite($rwFile, $getCode); 

		fclose($rwFile); 

		
	?>
    
</head>
<body>
	

    <div class="myContainer">
        <div class="leftPanel">
            <div class="container">
                <h2>Write Your HTML Code</h2>
                <form method="POST">
                  	<div class="form-group">
						<label for="codeArea">Text Area:</label>
						<textarea id="codeAreaID"  name="codeArea" class="form-control" rows="20" placeholder="Write Your Code" auto>
						<?php 
							$myFile = fopen("runScript.html", "r") or die ("Unable to open file!"); 

							while (!feof($myFile))
							{
								echo fgets($myFile) ; 
							}// end while


							fclose($myFile);
						?>
						</textarea>
					</div>
                  
                  	<button type="submit" class="btn btn-primary">Submit</button>
                </form>

				<code contenteditable="true">
					<span style="color: blue">var</span> 
					foo = <span style="color: green">"bar"</span>;
					&lt;h2&gt; hello world &lt;&sol;h2&gt;
				</code>
			</div>
        </div>

        <div class="rightPanel">
            <iframe src="./runScript.html" title="Running" frameborder=0></iframe>
        </div>

		
    </div>  
	<script type="text/javascript">
     $('#codeAreaID').colorfy("markdown");
    </script>
	
</body>
</html>