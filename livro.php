.grid-livros {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
    gap: 20px;
    padding: 20px;
    justify-items: center;
    background-color: #fdfdfd;
}

.livro {
    width: 100%;
    max-width: 180px;
    height: auto;
    border-radius: 12px;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    object-fit: cover;
}

.livro:hover {
    transform: scale(1.05);
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.25);
}