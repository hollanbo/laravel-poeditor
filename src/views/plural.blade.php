<td>
    {{ $string['original'] }}
    <br>
    {{ $string['original_plural'] }}
</td>
<td>
    @for ($ii = 0; $ii < count($forms['forms']); $ii++)
        <input
            type="text"
            class="poeditor-translation"
            name="{{ $key }}"
            data-plural="{{ $ii }}"
            value="{{ $string['msgstr[' . $ii . ']'] }}">
        <span>
            {{ sprintf(_("n =>  %s, ..."), implode(", ", $forms['forms'][$ii])) }}
        </span>
    @endfor
</td>
