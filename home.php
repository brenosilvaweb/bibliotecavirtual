<section class="livros">
    <h2>Livros em Destaque</h2>
    <div class="filtros">
        <label for="filtroCategoria">Filtrar por categoria:</label>
        <select id="filtroCategoria" onchange="filtrarLivros()">
            <option value="todos">Todos</option>
            <option value="romance">Romance</option>
            <option value="ficcao">Ficção</option>
            <option value="suspense">Suspense</option>
            <option value="policial">Policial</option>
            <option value="infantil">Infantil</option>
        </select>
    </div>
    <div class="grid-livros" id="listaLivros">
        <div class="livro" data-categoria="romance" onclick="verResumo('livro1')">
            <img src="https://th.bing.com/th/id/OIP.CyAz4wfpvWAJMZ9iMj5SrwHaHa?w=169&h=180&c=7&r=0&o=5&pid=1.7" alt="Corações Entrelaçados">
            <h3>Corações Entrelaçados</h3>
            <p>Autor: Ana Ribeiro</p>
            <button onclick="escolherLivro('Corações Entrelaçados')">Escolher</button>
        </div>
        <div class="livro" data-categoria="ficcao" onclick="verResumo('livro2')">
            <img src="https://th.bing.com/th/id/OIP.6FcyyPsVdiyhsAn0EfJLPwHaKM?w=110&h=180&c=7&r=0&o=5&pid=1.7" alt="Horizontes Distantes">
            <h3>Horizontes Distantes</h3>
            <p>Autor: Carlos Mendes</p>
            <button onclick="escolherLivro('Horizontes Distantes')">Escolher</button>
        </div>
        <div class="livro" data-categoria="suspense" onclick="verResumo('livro3')">
            <img src="https://th.bing.com/th/id/OIP.BLCKZdFjxa1Mfm2nFXt2VgHaLa?w=115&h=180&c=7&r=0&o=5&pid=1.7" alt="Sombras do Passado">
            <h3>Sombras do Passado</h3>
            <p>Autor: Laura Silva</p>
            <button onclick="escolherLivro('Sombras do Passado')">Escolher</button>
        </div>
        <div class="livro" data-categoria="policial" onclick="verResumo('livro4')">
            <img src="https://i0.wp.com/hubmissionario.com.br/wp-content/uploads/2023/05/A-missao-de-Deus-para-o-policial.jpg?fit=1080%2C1080&ssl=1" alt="Justiça nas Sombras">
            <h3>Justiça nas Sombras</h3>
            <p>Autor: Marcos Lima</p>
            <button onclick="escolherLivro('Justiça nas Sombras')">Escolher</button>
        </div>
        <div class="livro" data-categoria="infantil" onclick="verResumo('livro5')">
            <img src="https://th.bing.com/th/id/OIP.EROHYDfMBZ4QoYo7GVa_JAAAAA?w=142&h=181&c=7&r=0&o=5&pid=1.7" alt="Aventuras de Luna">
            <h3>Aventuras de Luna</h3>
            <p>Autor: Sofia Costa</p>
            <button onclick="escolherLivro('Aventuras de Luna')">Escolher</button>
        </div>
    </div>
</section>
<div id="resumoLivro" class="resumo"></div>
<section class="chosen-books">
    <h2>Livros Escolhidos</h2>
    <ul id="chosenBooksList"></ul>
    <button onclick="clearChosenBooks()">Limpar Lista</button>
</section>