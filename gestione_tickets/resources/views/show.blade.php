<x-layout_main>
    <x-card :name="$ticket['name']" :status="$ticket['status']" :email="$ticket['email']">
        <p>Il messaggio che ti ha inviato e':"{{ $ticket['description'] }}"</p>

    </x-card>
    <form action="{{ route('send.email') }}" method="post" style="margin-top:50px; padding-left:30px;">
        @csrf
        <input type="hidden" name="id" value="{{ $ticket['id'] }}">
        <textarea cols="110" rows="10" placeholder="Inserisci risposta" name="answer"></textarea>
        <div class="container-fluid align-items-center ">
            <button type="submit" class="btn btn-primary">Invia</button>
        </div>
    </form>

</x-layout_main>
