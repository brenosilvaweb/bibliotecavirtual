function verResumo(livroId) {
    const resumo = {
        livro1: "Corações Entrelaçados é uma história apaixonante sobre dois jovens que se encontram por acaso em uma pequena cidade costeira. Entre segredos do passado e promessas de um futuro juntos, eles precisam superar desafios emocionais e familiares para encontrar o verdadeiro amor.",
        livro2: "Horizontes Distantes leva os leitores a uma jornada épica em um universo onde a humanidade colonizou estrelas distantes. Um cientista brilhante descobre um segredo que pode salvar ou destruir sua civilização, enfrentando escolhas morais em um mundo de tecnologia avançada e intrigas políticas.",
        livro3: "Sombras do Passado é um thriller psicológico que mantém os leitores à beira do assento. Quando uma jornalista investiga um crime não resolvido, ela descobre conexões com seu próprio passado, desenterrando verdades perturbadoras que ameaçam sua vida e sanidade.",
        livro4: "Justiça nas Sombras mergulha no mundo de um detetive veterano que enfrenta um caso de corrupção que abala sua cidade. Com sua fé e princípios testados, ele descobre que a verdadeira justiça exige sacrifícios pessoais e confrontos com inimigos poderosos.",
        livro5: "Aventuras de Luna é um livro infantil encantador que segue Luna, uma coelhinha curiosa, em suas explorações por uma floresta mágica. Com ilustrações vibrantes e lições sobre amizade e coragem, é perfeito para crianças que amam histórias divertidas e educativas."
    };
    const resumoDiv = document.getElementById('resumoLivro');
    resumoDiv.innerHTML = resumo[livroId];
    resumoDiv.style.display = 'block';
}

function escolherLivro(titulo) {
    let chosenBooks = JSON.parse(localStorage.getItem('chosenBooks')) || [];
    if (!chosenBooks.includes(titulo)) {
        chosenBooks.push(titulo);
        localStorage.setItem('chosenBooks', JSON.stringify(chosenBooks));
        updateChosenBooksList();
    }
    alert('Você escolheu o livro: ' + titulo + '. Retire na biblioteca pessoalmente');
}

function updateChosenBooksList() {
    const chosenBooks = JSON.parse(localStorage.getItem('chosenBooks')) || [];
    const listElement = document.getElementById('chosenBooksList');
    listElement.innerHTML = '';
    chosenBooks.forEach(book => {
        const li = document.createElement('li');
        li.textContent = book;
        listElement.appendChild(li);
    });
}

function clearChosenBooks() {
    localStorage.removeItem('chosenBooks');
    updateChosenBooksList();
}

function confirmaReserva() {
    const nome = document.getElementById('nome').value;
    const livro = document.getElementById('livro').value;
    alert(`Reserva confirmada para ${nome} - Livro: ${livro}. Retirar pessoalmente na biblioteca.`);
    return false;
}

function filtrarLivros() {
    const categoria = document.getElementById('filtroCategoria').value;
    const livros = document.querySelectorAll('.livro');
    livros.forEach(livro => {
        const livroCategoria = livro.getAttribute('data-categoria');
        if (categoria === 'todos' || livroCategoria === categoria) {
            livro.style.display = 'block';
        } else {
            livro.style.display = 'none';
        }
    });
}

// Initialize chosen books list on page load
document.addEventListener('DOMContentLoaded', updateChosenBooksList);