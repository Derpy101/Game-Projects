<!DOCTYPE html>
<html>
    <head>
    </head>
	<body>
      <p>
      <?php

	//prompt function
	function prompt($prompt_msg){
		echo("<script type='text/javascript'> var answer = prompt('".$prompt_msg."'); </script>");
		
		$answer = "<script type='text/javascript'> document.write(answer); </script>";
		return($answer);
	}

	//program
	$prompt_msg = "Please type your name.";
	$name = prompt($prompt_msg);
	
	$output_msg = "Hello there ".$name."!";
	echo($output_msg);

    if ($name == "stefan") {
        header("Location:login.php");
    }
	
       ?>
        </p>
    </body>
</html>