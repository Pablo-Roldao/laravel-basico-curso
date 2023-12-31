<x-layout title="Registro">
    <form action="{{ route('users.store') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="name" class="form-label">Nome:</label>
            <input type="text" name="name" id="name" class="form-control">
        </div>
        
        <div class="form-group">
            <label for="email" class="form-label">Email:</label>
            <input type="email" name="email" id="email" class="form-control">
        </div>

        <div class="form-group">
            <label for="password" class="form-label">Senha:</label>
            <input type="password" name="password" id="password" class="form-control">
        </div>

        <button class="btn btn-dark m-2">Registrar</button>


        <a href="{{ route('login') }}" class="btn btn-dark m-2">
            Entrar
        </a>

    </form>
</x-layout>
