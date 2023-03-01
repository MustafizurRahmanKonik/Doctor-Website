$('#btn').click(function()
{ var fstName=$('#first_name').val(); 
    var lstName= $('#last_name').val(); 
    var full= fstName + ' ' + lstName; 
    $('#fullName').val(full);
}
);