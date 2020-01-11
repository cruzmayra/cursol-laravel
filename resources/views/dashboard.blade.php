<div>
    @isset($name)
      Hello, {{ $name }}
    @else
      {{ 'No hay nada que mostrar' }}
    @endisset
</div>
