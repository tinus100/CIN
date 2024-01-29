<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Kledingbank-Zeeland')
<img src="{{ $url }}/img/logo-removebg.png" class="logo" alt="Kledingbank Logo" style="width: 180px;">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
