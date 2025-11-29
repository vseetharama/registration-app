$(document).ready(function() {

    $("#regForm").submit(function() {

        if ($("input[name='gender']:checked").length === 0) {
            alert("Please select gender");
            return false; // stop submit
        }

        return true; // allow submit
    });

});
