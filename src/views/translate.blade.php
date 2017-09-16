<table id="poeditor-translation-table">
    <tr>
        <td>{{ _("Source text") }}</td>
        <td>{{ _("Translation") }} - {{ $headers['Language'] }}</td>
    </tr>

    @foreach ($strings as $key => $string)
        <tr>
            <td>{{ implode("<br>", $string['original']) }}</td>
            <td>
                <input type="text" class="poeditor-translation" name="{{ $key }}" value="{{ implode(" ", $string['translation']) }}">
            </td>
        </tr>
    @endforeach
</table>
