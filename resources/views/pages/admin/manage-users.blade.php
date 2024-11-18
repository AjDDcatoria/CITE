@extends('pages.admin.index')

@section('content')
<main class="flex-1 flex flex-col gap-4  p-5">
    <div class="text-xl font-semibold">Manage Users</div>
    <livewire:admin.manage-users />
</main>
@endsection
