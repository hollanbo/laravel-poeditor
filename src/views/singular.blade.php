<td>
    <div>{{ isset($string['context']) ? sprintf(_("Context: [ %s ]"), $string['context']) : '' }}</div>
    <div>{{ $string['original'] }}</div>
</td>
<td>
    <input type="text" class="poeditor-translation" name="{{ $key }}" value="{{ $string['translation'] }}">
</td>
