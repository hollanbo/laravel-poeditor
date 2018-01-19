<table id="poeditor-translation-table">
    <tr>
        <td>{{ _("Source text") }}</td>
        <td>{{ _("Translation") }} - {{ $headers['Language'] }}</td>
    </tr>

    @foreach ($strings as $key => $string)
        <tr>
            @if (isset($string['original_plural']))
                @include('hollanboLaravelPoeditor::plural')
            @else
                @include('hollanboLaravelPoeditor::singular')
            @endif
        </tr>
    @endforeach
    <tr>
        <td></td>

        <td>
            <button class="poeditor-save-to-file-button">Save</button>
            <button class="poeditor-publish-translations hidden">Publish</button>
        </td>
    </tr>
</table>
