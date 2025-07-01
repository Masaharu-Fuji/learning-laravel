<x-app-layout>
  <x-slot name="header">
    @auth
    <p>{{ Auth::user()->name }}さん、こんにちは</p>
    @endauth
    <div>
        <h2>ユーザー一覧</h2>
        <div>
        @foreach ($users as $user)
            <p>{{ $user->name }}</p>
        @endforeach
        </div>
    </div>
  </x-slot>
  <p>
    @for ($i = 1; $i < 10; $i++)
        <span>{{ $i }}</span>
    @endfor
  </p>
</x-app-layout>
