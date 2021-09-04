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

	
    
</head>
<body>
	

    <div class="myContainer">
        <div class="leftPanel">
            <div class="container">
                <h2>Write Your HTML Code</h2>
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
                  
                  	<button type="submit" class="btn btn-primary" onclick="RunHTML(this)">Run</button>
					
					
				
			</div>
        </div>

        <div class="rightPanel form-group"></div>

		
    </div>  

	<script type="text/javascript">
		$('#codeAreaID').colorfy("markdown");
	</script>

	<!-- <br />
	<textarea name="test" id="testId" cols="30" rows="10">Hello world</textarea>
	<br />
	<br />
	<code contenteditable="true">
		<span style="color: blue">var</span> 
		foo = <span style="color: green">"bar"</span>;
		&lt;h2&gt; hello world &lt;&sol;h2&gt;
	</code>

	<script type="text/javascript">

		
		function RunHTML(param)
		{
			let textAreaValue = $("#codeAreaID").val(); 

			$('.rightPanel').html(textAreaValue);
			console.log(textAreaValue);
		}

		function setTextToCurrentPos() 
		{
               
        }
		////=====================================================
		//// CUstom event for keydown to press "TAB" key
		////=====================================================

		function setCaretPosition(elemId, caretPos) 
		{
			var el = document.getElementById(elemId);

			el.value = el.value;
			// ^ this is used to not only get "focus", but
			// to make sure we don't have it everything -selected-
			// (it causes an issue in chrome, and having it doesn't hurt any other browser)

			if (el !== null) {

				if (el.createTextRange) {
					var range = el.createTextRange();
					range.move('character', caretPos);
					range.select();
					return true;
				}

				else {
					// (el.selectionStart === 0 added for Firefox bug)
					if (el.selectionStart || el.selectionStart === 0) {
						el.focus();
						el.setSelectionRange(caretPos, caretPos);
						return true;
					}

					else  { // fail city, fortunately this never happens (as far as I've tested) :)
						el.focus();
						return false;
					}
				}
			}
		}// end setCaretPosition()

		// $("#codeId").keydown(function(e) 
		$("#testId").keydown(function(e) 
		{
			if(e.keyCode === 9) // tab was pressed
			{ 
				//// Works 
				//// Ref: https://www.geeksforgeeks.org/how-to-insert-text-into-the-textarea-at-the-current-cursor-position/
				var curPos = document.getElementById("testId").selectionStart;
                console.log(curPos);
                let x = $("#testId").val();
                let text_to_insert = "\t";
                $("#testId").val(x.slice(0, curPos) + text_to_insert + x.slice(curPos));
				setCaretPosition('testId', curPos); 
				
				 //// get caret position/selection
				 //// Ref: https://jsfiddle.net/sdDVf/8/
				//  var start = this.selectionStart;
				// 	end = this.selectionEnd;

				// var $this = $(this);

				// // set textarea value to: text before caret + tab + text after caret
				// $this.val($this.val().substring(0, start)
				// 			+ "\t"
				// 			+ $this.val().substring(end));

				// // put caret at right position again
				// this.selectionStart = this.selectionEnd = start + 1;

				console.log(`Tab Key Pressed `);


				// prevent the focus lose
				return false;
			}
		});
		
		

    </script> -->
	
</body>
</html>