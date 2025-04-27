<section class="reserva">
    <h2>Reservar um Livro</h2>
    <p>Preencha os detalhes abaixo para reservar seu livro favorito. Retire pessoalmente na biblioteca.</p>
    <div class="reserva-card">
        <form id="reservaForm" onsubmit="return confirmaReserva()">
            <div class="form-group">
                <label for="nome">Seu Nome:</label>
                <input type="text" name="nome" id="nome" required placeholder="Digite seu nome">
            </div>
            <div class="form-group">
                <label for="livro">Livro Desejado:</label>
                <select name="livro" id="livro" required>
                    <option value="" disabled selected>Selecione um livro</option>
                    <option value="Corações Entrelaçados">Corações Entrelaçados</option>
                    <option value="Horizontes Distantes">Horizontes Distantes</option>
                    <option value="Sombras do Passado">Sombras do Passado</option>
                    <option value="Justiça nas Sombras">Justiça nas Sombras</option>
                    <option value="Aventuras de Luna">Aventuras de Luna</option>
                </select>
            </div>
            <input type="submit" value="Reservar">
        </form>
    </div>
    <div id="reservaConfirmacao" class="confirmacao"></div>
</section>