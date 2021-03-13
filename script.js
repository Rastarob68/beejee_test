$(document).ready(function() {
    function getCookie(name) {
        var cookie = " " + document.cookie;
        var search = " " + name + "=";
        var setStr = null;
        var offset = 0;
        var end = 0;
        if (cookie.length > 0) {
            offset = cookie.indexOf(search);
            if (offset != -1) {
                offset += search.length;
                end = cookie.indexOf(";", offset)
                if (end == -1) {
                    end = cookie.length;
                }
                setStr = unescape(cookie.substring(offset, end));

            }
        }
        return (setStr);
        console.log(setStr);
    }
    user_id = getCookie("id");


    $("#auth").submit(function(login, password) {
        $.ajax({
            type: "POST",
            url: "login.php",
            data: $(this).serialize(),
            success: function(html) {}
        })
    });
    console.log(user_id);
    if (user_id !== null) {
        $(".logout").html('<form action="logout.php"> <input type="submit" name="submit" value="Выйти"></form>');
        $(".auth").css('display', 'none');
    } else {

    }
    // $(".edit").submit(function() {
    //     $.ajax({
    //         type: "POST",
    //         url: "edittask.php",
    //         data: $(this).serialize(),
    //         success: function(html) {
    //             console.log(data);
    //             return;
    //             // $.ajax({
    //             //     url: 'gettasks.php',
    //             //     method: 'get',
    //             //     dataType: 'html',
    //             //     success: function(html) {
    //             //         $(".content").append(html)

    //             //     }
    //             // });
    //         }
    //     })
    // });
    // var pageno =
    //     $.ajax({
    //         url: 'gettasks.php',
    //         method: 'POST',
    //         dataType: 'html',
    //         data: { pageno: pageno },
    //         success: function(html) {
    //             $(".tasks").append(html)

    //         }
    //     });
    // $("#create").submit(function() {
    //     $.ajax({
    //         type: "POST",
    //         url: "create_tesk.php",
    //         data: $(this).serialize(),
    //         success: function(html) {
    //             console.log(html);
    //         }
    //     })
    // });


});