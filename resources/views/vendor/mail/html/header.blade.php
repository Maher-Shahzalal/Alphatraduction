<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Laravel')
<img src="{{ url('assets/images/icon/log.png') }}" class="logo" alt="">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
