(function () {
    var url = "/hollanbo/poeditor";
    var bind = function () {
        $('#poeditor-translation-table')
            .on('change', 'input.poeditor-translation', saveTranslation);
    };

    var saveTranslation = function (e) {
        var data = {
            value: e.target.value,
            key: e.target.name
        };

        $.ajax({
            cache: false,
            type: 'Post',
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

    bind();
})();
