@if (session('resent') || session('status') || session('success') || $errors->any())
<script type="text/javascript">
  @if (session('resent')) toast("Novi link je poslat na Vašu email adresu", 'success'); @endif
  @if (session('status')) toast("{{ str_replace('"', '\"', session('status')) }}", 'success'); @endif
  @if (session('success')) toast("{{ str_replace('"', '\"', session('success')) }}", 'success'); @endif
  @if ($errors->any()) 
  @php
    $message = '';
    foreach ($errors->all() as $error) $message .= '-' . $error . '<br>';
  @endphp
  toast("{!! str_replace('"', '\"', $message) !!}", 'error');
  @endif
</script>
@endif