<x-layout>
    <div class="main-container">
        <div class="login-container">
            <h2>Contattaci</h2>
            <form action="{{route('save-contact')}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="email">Inserisci la tua e-mail:</label>
                    <input type="email" id="email" name="email" placeholder="La tua mail" required>
                </div>
                <div class="form-group">
                    <label for="name">Inserisci il tuo nome:</label>
                    <input type="text" id="name" name="name" placeholder="Nome" required>
                </div>
                <div class="form-group">
                    <label for="surname">Inserisci il tuo cognome:</label>
                    <input type="text" id="surname" name="surname" placeholder="Cognome" required>
                </div>
                <button type="submit">Submit</button>
            </form>
        </div>
    </div>
    
</x-layout>