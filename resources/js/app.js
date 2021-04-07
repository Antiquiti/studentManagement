require('./bootstrap');

$(document).ready(function() {
    searchPerson("#search2A", "#table2A tbody tr");
    searchPerson("#search2B", "#table2B tbody tr");
    searchPerson("#search2C", "#table2C tbody tr");
    searchPerson("#search2D", "#table2D tbody tr");
});

function searchPerson(input, table)
{
    $(input).on("keyup", function(){
        let value = $(this).val().toLowerCase();
        $(table).each(function()
        {
            let name = $(this).find("#name").text();
            let lastname = $(this).find("#lastname").text();
            if (name.toLowerCase().indexOf(value.toLowerCase()) < 0 && lastname.toLowerCase().indexOf(value.toLowerCase()) < 0) 
            {
                $(this).hide();
            }
            else 
            {
                $(this).show();                
            } 
        });
    });
}