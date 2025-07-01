<x-app-layout>
  <x-slot name="header">
    @auth
    <p>{{ Auth::user()->name }}さん、こんにちは</p>
    @endauth
  </x-slot>
  <p>
    @for ($i = 1; $i < 10; $i++)
        <span>{{ $i }}</span>
    @endfor
  </p>
</x-app-layout>
