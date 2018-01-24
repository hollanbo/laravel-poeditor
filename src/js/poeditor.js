(function () {
    var url = "/hollanbo/poeditor";
    var locale;
    var bind = function () {
        console.log('ok');
        $('#poeditor-translation-table')
            .on('change', 'input.poeditor-translation', saveTranslation);

        $('.poeditor-controls')
            .on('click', 'button.poeditor-save-to-file-button', saveToFile)
            .on('click', 'button.poeditor-publish-translations', publish);


        locale = $('html').attr('lang');
    };

    var saveTranslation = function (e) {
        var data = {
            value: e.target.value,
            key: e.target.name,
            plural: e.target.dataset.plural || null
        };

        $.ajax({
            cache: false,
            type: 'POST',
            url: url + '/save/' + locale,
            timeout: 10000,
            dataType: 'json',
            data: data
        }).done(function(rsp) {
            console.log(rsp);
        }).always(function(rsp) {
        }).fail(function(rsp) {
        });
    };

    var saveToFile = function (e) {
        $.ajax({
            cache: false,
            type: 'PUT',
            url: url + '/save/' + locale,
            timeout: 10000,
            dataType: 'json'
        }).done(function(rsp) {
            $('#poeditor-translation-table .poeditor-publish-translations').removeClass('hidden');
        }).always(function(rsp) {
        }).fail(function(rsp) {
        });
    };

    var publish = function (e) {
        console.log('okasdfasdf');
        $.ajax({
            cache: false,
            type: 'PUT',
            url: url + '/publish/' + locale,
            timeout: 10000,
            dataType: 'json'
        }).done(function(rsp) {
            console.log(rsp);
        }).always(function(rsp) {
        }).fail(function(rsp) {
        });
    };

    bind();
})();
