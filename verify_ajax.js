function post(){
    // declare variable
    var userName = $('#userName').val();

    // post to php
    $.post('info.php',{postname:userName},
    function(data)
    {
        if(data =="1"){
            //display in label 
            $('#result').html('Verified');
            //change label color to green 
            $('#result').css('color','green');
        }
        if(data =="2"){
            //display in label
            $('#result').html('Key in username and click submit');
            //change label color to green
            $('#result').css('color','green');
        }
        if(data =="3"){
            //display in label
            $('#result').html('Error');
            //change label color to red
            $('#result').css('color','red');
        }
    });

   
  }
   
