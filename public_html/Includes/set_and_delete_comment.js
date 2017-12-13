function post()
{
    var comment = $(".comment").val();

    $.ajax({
        url: '../Includes/set_comment.php',
        type: 'post',
        dataType: 'json',
        data:
                {
                    comment: comment
                },
        success: function (data)
        {
            loadComments(data);
        }
    });
}

function remove(commentid)
{
    $.ajax({
        url: '../Includes/delete_comment.php',
        type: 'post',
        dataType: 'json',
        data:
                {
                    commentid: commentid
                },
        success: function (data)
        {
            loadComments(data);
        }
    });
}

function loadComments(data)
{
    $('.comments').html(" ");
    for (var i = 0; i < data.length; i++)
    {
        var user = data[i].username;
        var message = data[i].comment;
        var commentid = data[i].commentid;
        var canDelete = data[i].canDelete;
        if (canDelete)
        {
            $('.comments').append("<p>" + user + ": " + message + "<button onclick=remove(" + commentid + ")>Delete</button></p>");
        } else
        {
            $('.comments').append("<p>" + user + ": " + message + "</p>");
        }
    }
}