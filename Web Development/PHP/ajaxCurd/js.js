
//ajax by using jquery
$(document).ready(function()
{
    function loadtable()
    {
        $.ajax({  //ajax work start here
            url:"ajax-read.php",
            type:"post",
            success:function(data)  //ajax-read.php send the load the data and store this data into sucess variable funciton data
            {
                $('#mytable').html(data);
        
            }  
    });
}
loadtable();

//insert work start here

//insert work end here
$('#send').on('click', function (e) {
    e.preventDefault(); // Prevent default form submission

    // Collect the input data
    var firstName = $('#firstn').val();
    var lastName = $('#lastn').val();

    // Perform AJAX request
    $.ajax({
        url: 'insert.php',
        type: 'post',
        data: {
            firstnamee: firstName,
            lastnamee: lastName
        },
        success: function (data) {
            console.log(data);
            
            if (data == 1) {
                loadtable();
                alert("Data inserted successfully.");
            } else {
                alert("Data insertion failed.");
            }
        },
        error: function () {
            alert("An error occurred.");
        }
    });
});


});  //jquery statment end here
   

