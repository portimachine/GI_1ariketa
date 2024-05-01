$(document).ready(function() {
    $('#taskForm').submit(function(e) {
        e.preventDefault();
        var task = $('#taskInput').val();
        $.ajax({
            type: "POST",
            url: "taskManager.php",
            data: { action: "add", task: task },
            success: function(response) {
                $('#taskList').append('<li>' + task + '</li>');
                $('#taskInput').val('');
            }
        });
    });
});
