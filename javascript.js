$(function () {
    getAll();
    glasanje();
    getAllTakmicari();
    deleteTakmicar();
    pretraga();
    sortiranje();
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



function deleteTakmicar() {

    $(document).on('click', '#delete-btn', function () {

        $.ajax(
            {
                url: 'deletetakmicar.php',
                method: 'post',
                data: { takmicarID: $(this).val() },

                success: function () {
                    {
                        window.location = "takmicari.php";
                    }
                }
            }
        )
    })

}



function pretraga() {

    $(document).on('click', '#p-btn', function () {

        $.ajax(
            {
                url: 'pretraga.php',
                method: 'post',
                data: { pretraga: $('#pretraga').val() },

                success: function (data) {
                    {
                        $('.takmicari').html(data);
                    }
                }
            }
        )
    })

}

function sortiranje() {

    $(document).on('click', '#s-btn', function () {

        var sortiranje = $(this).val();

        $.ajax(
            {
                url: 'sortiranje.php',
                method: 'post',
                data: { sortiranje: sortiranje },

                success: function (data) {
                    {
                        $('.takmicari').html(data);


                    }
                }
            }
        )

        if (sortiranje == 'asc')
            $('#s-btn').attr('value', 'desc');
        else
            $('#s-btn').attr('value', 'asc');

    })

}