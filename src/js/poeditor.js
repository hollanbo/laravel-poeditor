(function () {
    var url = "/hollanbo/poeditor";
    var bind = function () {
        $('#poeditor-translation-table')
            .on('change', 'input.poeditor-translation', saveTranslation)
            .on('click', 'button.poeditor-save-to-file-button', saveToFile)
            .on('click', 'button.poeditor-publish-translations', publish);
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
            url: url + '/save',
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
            url: url + '/save',
            timeout: 10000,
            dataType: 'json'
        }).done(function(rsp) {
            $('#poeditor-translation-table .poeditor-publish-translations').removeClass('hidden');
        }).always(function(rsp) {
        }).fail(function(rsp) {
        });
    };

    var publish = function (e) {
        $.ajax({
            cache: false,
            type: 'PUT',
            url: url + '/publish',
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
