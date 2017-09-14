<table>
    <tr>
        <td>{{ _("Source text") }}</td>
        <td>{{ _("Translation") }} - {{ $headers['Language'] }}</td>
    </tr>

    @foreach ($strings as $string)
        <tr>
            <td>{{ implode("<br>", $string['msgid']) }}</td>
            <td>{{ implode("<br>", $string['msgstr']) }}</td>
        </tr>
    @endforeach
</table>
