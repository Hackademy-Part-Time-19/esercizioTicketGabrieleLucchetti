<x-layout_main>
    <div class="container">
        @foreach ($tickets as $id => $ticket)
            <x-card :name="$ticket['name']" :status="$ticket['status']" :email="$ticket['email']">
                <a href="{{ route('ticket.show', ['id' => $id]) }}" class="btn btn-primary">Vai al ticket</a>
            </x-card>
        @endforeach
    </div>
</x-layout_main>
