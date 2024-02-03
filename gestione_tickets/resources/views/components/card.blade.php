<div class="card" style="margin-top: 20px">
    <div class="card-header">
        <h3>{{ $name }}</h3>
    </div>
    <div class="card-body">
        <h5 class="card-title text-success ">Status: {{ $status }}</h5>
        <p class="card-text">E-mail: {{ $email }}</p>
        {{$slot}}
    </div>
</div>