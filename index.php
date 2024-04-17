<?php
  require_once 'head.php';
  require_once 'menu.php';
?>  

                    <ul class="nav-links">
                        <li><a href="#" class="pag-atual"> <span class="active"></span> Início </a></li>
                        <li><a href="./html/cursos.html">Cursos</a></li>
                        <li><a href="#nos">Sobre nós</a></li>
                        <li><a href="#footer">Contato</a></li>
                        <li class="user"><a href="./html/cadastro.html"><i class="bi bi-person-circle"></i></a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

<main>
        <section class="container-one">
            <div class="side-one">
                <div class="ball-one"></div>
                <h1 class="h1-c1">Upgrade Your
                    Skill Now!
                </h1>
                <p class="p1-c1">Conecte-se com oportunidades de aprendizado exclusivas e descubra uma variedade de cursos, workshops e eventos educacionais disponíveis na sua região.</p>
                <button class="b1-c1">Resgistre-se Agora</button>
                <div class="ball-two"></div>
            </div>
            <div class="side-two">
                <img src="./img/gif2-main-unscreen.gif" class="gif" alt="">
            </div>
            <div class="div-acess-bt"><button class="acess-bt"><i class="bi bi-universal-access-circle"></i></button></div>

            <!-- conteudo acessibilidade -->
            <div class="acess-window"><div class="window-point"></div><p>Janela de acessibilidade.</p>
                <div class="moreorless">
                    <button class="more" onclick="aumentarTexto()"><span class="material-symbols-outlined">
                        text_increase
                        </span>
                    </button>
                    <button class="less" onclick="diminuirTexto()">
                        <span class="material-symbols-outlined">
                            text_decrease
                            </span>
                    </button>
                </div>
                <div class="dk_mode">
                    <label class="tema-check" for="checkbox" id="themeswitch">
                        <input type="checkbox" class="input-dark-mode" id="checkbox">
                        <div class="slider round"></div>
                        <span class="name"></span>
                        <div class="back"></div>
                   </label>
                </div>
            </div>
        </section>
    
        <section class="hidden container-two">
            <div class="content-c2">
                <h2 class="h2-c2">
                    A <span class="text-h2">EDUCA VIZINHANÇA</span>  é uma iniciativa dedicada a promover a educação acessível e inclusiva dentro das comunidades locais<span class="text-h2">.</span>
                </h2>
                <p class="p-c2">
                    Conecte-se com oportunidades de aprendizado na sua região e descubra uma variedade ﻿de cursos, workshops e eventos educacionais disponíveis perto de você.
                </p>
            </div>
        </section>

        <section class="container-three">
            <div class="title-c3">
                <div class="star-one"><img src="./img/star.png" alt=""></div>
                <h1 class="h1-c3">CURSOS E INSTITUIÇÕES</h1>
                <div class="star-two"><img src="./img/star.png" alt=""></div>
            </div>
            <div class="cards-c3">
                <div class="hidden c3 card1">
                    <img src="./img/teste.png" alt="" class="cursos1">
                    <h3 class="txt-cursos">NOME INSTITUIÇÃO</h3>
                    <P class="p-cursos">Breve resumo</P>
                    <p class="local"><i class="bi bi-pin-angle-fill"></i>Localização</p>
                    <div class="avaliacao">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                    </div>
                    <button class="bt-acessar">Acessar</button>
                </div>

                <div class="hidden c3 card2">
                    <img src="./img/teste.png" alt="" class="cursos1">
                    <h3 class="txt-cursos">NOME INSTITUIÇÃO</h3>
                    <P class="p-cursos">Breve resumo</P>
                    <p class="local"><i class="bi bi-pin-angle-fill"></i>Localização</p>
                    <div class="avaliacao">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                    </div>
                    <button class="bt-acessar">Acessar</button>
                </div>

                <div class="hidden c3 card3">
                    <img src="./img/teste.png" alt="" class="cursos1">
                    <h3 class="txt-cursos">NOME INSTITUIÇÃO</h3>
                    <P class="p-cursos">Breve resumo</P>
                    <p class="local"><i class="bi bi-pin-angle-fill"></i>Localização</p>
                    <div class="avaliacao">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                    </div>
                    <button class="bt-acessar">Acessar</button>
                </div>

                <div class="hidden c3 card4">
                    <img src="./img/teste.png" alt="" class="cursos1">
                    <h3 class="txt-cursos">NOME INSTITUIÇÃO</h3>
                    <P class="p-cursos">Breve resumo</P>
                    <p class="local"><i class="bi bi-pin-angle-fill"></i>Localização</p>
                    <div class="avaliacao">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                    </div>
                    <button class="bt-acessar">Acessar</button>
                </div>
            </div>
        </section>

        <section class="hidden container-four" id="nos">
            <div class="sideone-c4">
                <h1 class="h1-c4">Nossa missão</h1>
                <p class="p-c4">Conectar estudantes a oportunidades de aprendizado significativas em seus próprios bairros, fortalecendo laços comunitários e estimulando o desenvolvimento pessoal e profissional.</p>
            </div>
            <div class="sidetwo-c4">
                <div class="ft1"><img src="./img/estrela.png" alt="" class="ft1"></div>
                <img src="./img/estudantes.png" alt="" class="students">
                <div class="ft2"><img src="./img/flecha.png" alt="" class="ft2"></div>
            </div>
        </section>

        <section class="hidden container-five">
            <div class="sideone-c5">
                <h1 class="h1-c5">Como funciona?</h1>
                <p class="p-c5">
                    Participar usar o <i>EDUCA VIZINHANÇA</i> é simples e fácil!

                    Basta navegar pela nossa lista de cursos disponíveis, selecionar o que mais lhe interessa e se inscrever diretamente através da plataforma.

                    Após a inscrição, você receberá todas as informações necessárias para começar seu curso e se conectar com outros estudantes da sua comunidade.
                </p>
            </div>
            <div class="sidetwo-c5">
                <img src="./img/cell.png" alt="">
            </div>
        </section>

        <section class="hidden container-six">
            <div class="title-c6">
                <h1 class="h1-c6">Veja o que estão dizendo sobre a experiência</h1>
            </div>
            <div class="cards-c6">
                <div class="c6 card1-c6">
                    <img src="./img/teste.png" alt="" class="cursos1-c6">
                    <h3 class="txt-cursos">NOME ALUNO</h3>
                    <div class="line1"></div>
                    <div class="line2"></div>
                    <div class="line3"></div>
                    <div class="avaliacao">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                    </div>
                    <button class="bt-acessar">Acessar</button>
                </div>
                <div class="c6 card1-c6">
                    <img src="./img/teste.png" alt="" class="cursos2-c6">
                    <h3 class="txt-cursos">NOME ALUNO</h3>
                    <div class="line1"></div>
                    <div class="line2"></div>
                    <div class="line3"></div>
                    <div class="avaliacao">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                    </div>
                    <button class="bt-acessar">Acessar</button>
                </div>
                <div class="c6 card3-c6">
                    <img src="./img/teste.png" alt="" class="cursos3-c6">
                    <h3 class="txt-cursos">NOME ALUNO</h3>
                    <div class="line1"></div>
                    <div class="line2"></div>
                    <div class="line3"></div>
                    <div class="avaliacao">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                    </div>
                    <button class="bt-acessar">Acessar</button>
                </div>
            </div>
    
        </section>

        <section class="hidden container-seven">
            <div class="title-c7">
                <h3 class="h3-c7">Perguntas Frequentes (FAQ):</h3>
            </div>
            <div class="faqs">
                <div class="faq faq1">
                    <div class="question">
                        <h2 class="h2-faq">Como me inscrever em um curso na plataforma?</h2>
                        <i class="bi bi-plus"></i>
                    </div>

                    <div class="answer">
                        <p class="faq1-answer answer">
                            Faça login e terá acesso as publicações, no qual terá todas as informações inclusive ao link que redicionará para o site em que poderá se inscrever.
                        </p>
                    </div>
                </div>
                <div class="faq faq2">
                    <h2 class="h2-faq2">Posso cancelar minha inscrição em um curso?</h2>
                    <i class="bi bi-plus"></i>

                    <p class="faq2-answer answer">
                        As inscrições e tudo relacionados a ela são de responsabilidade da instituição. Nós apenas temos uma plataforma que une todos os cursos para facilitar o acesso e procura dos alunos em uma só rede.
                    </p>
                </div>
                <div class="faq faq3">
                    <h2 class="h2-faq3">Como faço para entrar em contato com a Instituição?</h2>
                    <i class="bi bi-plus"></i>

                    <p class="faq3-answer answer">
                        Nós fornecemos as informações necessárias nas publicações dos respectivos cursos.
                    </p>
                </div>
                <div class="faq faq4">
                    <h2 class="h2-faq4">Os cursos oferecem certificados de conclusão?</h2>
                    <i class="bi bi-plus"></i>

                    <p class="faq4-answer answer">
                        Todas as informações, inclusive se possuem certificados, são disponibilizados na plataforma.
                    </p>
                </div>
            </div>
        </section>

        <section class="hidden container-eight">
            <div class="title-c8">
                <h1 class="h1-c8">Parcerias e Colaborações</h1>
            </div>
            <div class="p1-c8"> <p class="p1">Estamos sempre em busca de novas parcerias e colaborações para expandir a oferta de cursos e enriquecer a experiência na EDUCA VIZINHANÇA. 
            </p></div>
            <div class="p2-c8">
                <p class="p2">Se você é uma instituição educacional, empresa local ou organização sem fins lucrativos interessada em ser divulgado, entre em contato para discutirmos as oportunidades de colaboração.  </p>
            </div>
            <div class="div-bt-c8"><button class="bt-c8">Fale conosco</button></div>
        </section>
    </main>

    <footer id="footer">
        <div class="logo-footer"><img src="./img/home-ic.png" alt=""></div>
        <div class="sidetwo-footer">
            <h1 class="h1-footer">Fale Conosco</h1>
            <p class="p-footer">(12) 3456-7890
                Rua Qualquer, 123, Cidade Qualquer
                ola@grandesite.com.br</p>
            <h2 class="h2-footer">Links Rápidos</h2>
            <div class="links-ft">
                <a href="">Inicio</a>
                <a href="">Cursos</a>
                <a href="">Sobre nós</a>
                <a href="">Contato</a>
            </div>
        </div>
    </footer>
    <script src="./js/script.js"></script>




<?php
    require_once 'footer.php';
?>