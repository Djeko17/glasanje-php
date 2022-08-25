$(function () {
    getAll();
    glasanje();
    getAllTakmicari();
});

function getAll() {

    $.ajax(
        {
            url: 'getall.php',

            success: function (data) {
                {
                    $('.takmicari').html(data);
                }
            }

        }
    )

}

function glasanje() {

    $(document).on('click', '#glasanje', function () {

        var ime = $(this).attr('ime');

        $.ajax(
            {
                url: 'glasanje.php',
                method: 'post',
                data: { takmicarID: $(this).val() },

                success: function () {
                    {
                        window.location = "thank-you.php?ime=" + ime;
                    }
                }
            }
        )
    })

}


function getAllTakmicari() {

    $.ajax(
        {
            url: 'getallTakmicari.php',

            success: function (data) {
                {
                    $('.takmicari-div').html(data);
                }
            }

        }
    )

}