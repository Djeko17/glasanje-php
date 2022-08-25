$(function () {
    getAll();
    glasanje();
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

        $.ajax(
            {
                url: 'glasanje.php',
                method: 'post',
                data: { takmicarID: $(this).val() },

                success: function () {
                    {
                    }
                }
            }
        )
    })

}