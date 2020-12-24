<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Laravel')
<img src="https://gcr.com.mx/images/logoHeader.png" class="logo" alt="GCR Logo">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
