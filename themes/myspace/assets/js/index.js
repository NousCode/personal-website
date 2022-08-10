let flagsElement = 	document.querySelector('.lang-item');

console.log(flagsElement.children[0].getAttribute('lang'));


let espInfo = {
	contactInfo: {
		hero: "Acerca de mi!",
		small: "Escribeme!",
		title: "Información de Contacto",
		download: "Descarga mi"
},
	socialMedia: {
		small: "Encuentrame ahí",
		social: "Redes Sociales"
	},
	footer: {
		made: "Hecho por 🛠️ Juan",
		start: "Proyectos Destacados"
	},
	portfolio: {
		small: "He desarrollado con",
		table: "Tecnologías como",
		small2: "Todos los",
		title: "Proyectos"
	},
	socialMenu: {
		small: "Mis",
		title: "Redes"
	},
	blog: {
		small: "Escribo en estas",
		categories: "Categorias",
		small2: "Mira estos",
		title: "Artículos"
	},
	home: {
		small: "Mira algunos de",
		projects: "Mis Proyectos",
		small2: "Te gusta leer?",
		title: "Ultimos blogs"
	},
	category: {
		title: "Mente (Noûs)",
		description: "Donde escribo cosas sobre filosofia, reflexiones, desarrollo personal y meditaciones. La resiliencia ante la adversidad.",
		title2: "Cuerpo (Naós)",
		description2: "Escribo cosas sobre alimentación, rutinas, deportes y salud. Desarrolla tu salud y estado físco.",
		title3: "Pasión (Pathos)",
		description3: "Donde muestro mis gustos, pasatiempos, cocina, metas y logros. Lo que me limita y expande mi ser.",
		title4: "Vocación (Crethe)",
		description4: "Lee interesantes articulos sobre programación, finanzas personales, inversiones y otros tutoriales. Aprende un poco de como hasido mi proceso y conocimiento."
	}
};
let enpInfo = {
	contactInfo: {
		hero: "About me!",
		small: "Write me!",
		title: "Contact Information",
		download: "Download my"
},
	socialMedia: {
		small: "Find me there",
		social: "Social Media"
	},
	footer: {
		made: "Made by 🛠️ Juan",
		start: "Outstanding projects"
	},
	portfolio: {
		small: "I have developed with",
		table: "Technologies such as",
		small2: "All the",
		title: "Projects"
	},
	socialMenu: {
		small: "My",
		title: "Media"
	},
	blog: {
		small: "I write in these",
		categories: "Categories",
		small2: "Look at these",
		title: "Articles"
	},
	home: {
		small: "Check it out",
		projects: "Some of my Projects",
		small2: "Do you like read?",
		title: "Last blogs"
	},
	category: {
		title: "Mind (Noûs)",
		description: "Where I write things about philosophy, reflections, personal development and meditations.",
		title2: "Body (Naós)",
		description2: "I wirte things about feeding, rutines, sports, and health.",
		title3: "Passion (Pathos)",
		description3: "Where I show my likes, hobbies, cooking, goals and achievements.",
		title4: "Vocation (Crethe)",
		description4: "Read interestings articles about programming, personal finance, investments y other tutorials."
	}
};

const textsToChange = document.querySelectorAll('[data-section]');
const changeLanguage = (langInfo) => {
	for (const textToChange of textsToChange) {
		const section = textToChange.dataset.section;
		const value = textToChange.dataset.value;

		textToChange.innerHTML= langInfo[section][value];
	}
}

if (flagsElement.children[0].getAttribute('lang') === 'es-CO') {
	changeLanguage(enpInfo);
} else {
	changeLanguage(espInfo);
}

(function($){
	$(document).ready(function(){
			$.ajax({
					url: pg.apiurl+"blogs/8",
					method: "GET",
					beforeSend: function() {
							$("#resultado-blogs").html("Cargando...");
					},
					success: function(data) {
						let html = "";
						data.forEach(item => {
							html += `<div class="col-12 my-3 col-sm-6 col-md-4 col-lg-3 container-blogs__cards" >
							<div class="card shadow rounded-4 blogs__cards mx-2">
							<figure class="card-img-top">${item.image}</figure>
							<div class="card-body blogs__cards--body">
							<h3 class="card-title">${item.title}</h3>
							<p class="card-text">${item.description}</p>
							<p><strong>Fecha: </strong>${item.date}</p>
							<div class="text-center blogs__cards--btn" >
							<a href="${item.link}" class="btn btn-outline-success rounded-3">Leer más</a>
							</div>
							</div>
							</div>
							</div>`
						});
							$("#resultado-blogs").html(html);
					},
					error: function(error) {
							console.log(error);
					}
			})
	})

	$(document).ready(function(){
		$.ajax({
				url: pg.apiurl+"blogs",
				method: "GET",
				beforeSend: function() {
						$("#all-blogs").html("Cargando...");
				},
				success: function(data) {
						let html = "";
						data.forEach(item => {
								html += `
								<div class="col-12 col-md-6 col-lg-6">
									<div class="card shadow mb-3 rounded-5 blog__card">
										<div class="row g-0">
											<div class="col-md-5">
												<figure class="blog__card--image">${item.image}</figure>
											</div>
											<div class="col-md-7">
												<div class="card-body blog__card--body p-0 pt-lg-5 ps-lg-4">
													<h3 class="card-title">${item.title}</h3>
													<p class="card-text">${item.description}</p>
													<p><strong>Fecha: </strong>${item.date}</p>
													<div class="text-center blog__card--btn" >
														<a href="${item.link}" class="btn btn-outline-success rounded-3">Leer más</a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
									`
						});
						$("#all-blogs").html(html);
				},
				error: function(error) {
						console.log(error);
				}
		})

	})
})(jQuery);

const toggleMenuElement = document.getElementById('toggle-menu');
const mainMenuElement = document.getElementById('menu-main-menu');

toggleMenuElement.addEventListener('click', ()=>{
	setTimeout(mainMenuElement.classList.toggle('main-menu--show'), 0.5);
})

