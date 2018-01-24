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
</table>
<div class="poeditor-controls">
    <button class="poeditor-save-to-file-button">Save</button>
    <button class="poeditor-publish-translations hidden">Publish</button>
    <button class="poeditor-sync"><a href="/hollanbo/poeditor/sync/{{ $locale }}">Sync</a></button>
</div>
